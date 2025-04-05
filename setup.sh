#!/bin/bash

# VARIÁVEIS
RESOURCE_GROUP="resource-group-rent-a-ride"
LOCATION="uksouth"
APP_NAME="rent-a-ride-app"
PLAN_NAME="plan-rent-a-ride"
COSMOS_ACCOUNT="cosmosdbrentaride"
COSMOS_DB="rent-a-ride"
STORAGE_ACCOUNT="storagerentaride$RANDOM"
CONTAINER_NAME="blob-rent-a-ride"
ACR_NAME="acrentaride"  # Nome para o Azure Container Registry
DOCKER_IMAGE="rent-a-ride-image"  # Nome da imagem Docker

# Cria o Resource Group
az group create --name $RESOURCE_GROUP --location $LOCATION

# Cria o App Service Plan (grátis, Linux)
az appservice plan create \
  --name $PLAN_NAME \
  --resource-group $RESOURCE_GROUP \
  --sku F1 \
  --is-linux

# Cria a Azure Container Registry (ACR)
az acr create \
  --resource-group $RESOURCE_GROUP \
  --name $ACR_NAME \
  --sku Basic \
  --location $LOCATION \
  --admin-enabled true

# Login na ACR
az acr login --name $ACR_NAME

# Construa e envie a imagem Docker para o Azure Container Registry
# Aqui estamos a supor que tens um Dockerfile na pasta local
docker build -t $ACR_NAME.azurecr.io/$DOCKER_IMAGE:latest .

# Enviar a imagem para o ACR
docker push $ACR_NAME.azurecr.io/$DOCKER_IMAGE:latest

# Cria a Web App no Docker (usar a imagem do ACR)
az webapp create \
  --resource-group $RESOURCE_GROUP \
  --plan $PLAN_NAME \
  --name $APP_NAME \
  --deployment-container-image-name $ACR_NAME.azurecr.io/$DOCKER_IMAGE:latest

# Cria a conta CosmosDB (serverless, MongoDB API)
az cosmosdb create \
  --name $COSMOS_ACCOUNT \
  --resource-group $RESOURCE_GROUP \
  --locations regionName=$LOCATION failoverPriority=0 \
  --kind MongoDB \
  --default-consistency-level Eventual

# Cria base de dados MongoDB
az cosmosdb mongodb database create \
  --account-name $COSMOS_ACCOUNT \
  --name $COSMOS_DB \
  --resource-group $RESOURCE_GROUP

# Cria Storage Account (tem de ser única globalmente)
az storage account create \
  --name $STORAGE_ACCOUNT \
  --resource-group $RESOURCE_GROUP \
  --location $LOCATION \
  --sku Standard_LRS

# Cria container Blob
az storage container create \
  --account-name $STORAGE_ACCOUNT \
  --name $CONTAINER_NAME \
  --public-access off

# Resultado final
echo "Setup concluído com sucesso!"
echo "Web App: https://$APP_NAME.azurewebsites.net"
