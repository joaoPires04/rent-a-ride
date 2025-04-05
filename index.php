<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent-a-Ride - Alugue o Carro dos Seus Sonhos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #2C3E50;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .car-list {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .car-card {
            background-color: #fff;
            border-radius: 10px;
            width: 30%;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .car-card img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .car-card h3 {
            padding: 10px;
            background-color: #2C3E50;
            color: white;
            margin: 0;
            text-align: center;
        }
        .car-card p {
            padding: 15px;
            text-align: center;
        }
        footer {
            background-color: #2C3E50;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <h1>Bem-vindo ao Rent-a-Ride</h1>
    <p>Alugue o carro dos seus sonhos com apenas alguns cliques!</p>
</header>

<div class="container">
    <h2>Carros Disponíveis para Aluguel</h2>
    <div class="car-list">
        <!-- Carro 1 -->
        <div class="car-card">
            <img src="https://via.placeholder.com/400x300" alt="Carro 1">
            <h3>Ferrari 488</h3>
            <p>A partir de 150€/dia</p>
            <p><button>Alugar Agora</button></p>
        </div>

        <!-- Carro 2 -->
        <div class="car-card">
            <img src="https://via.placeholder.com/400x300" alt="Carro 2">
            <h3>BMW X5</h3>
            <p>A partir de 120€/dia</p>
            <p><button>Alugar Agora</button></p>
        </div>

        <!-- Carro 3 -->
        <div class="car-card">
            <img src="https://via.placeholder.com/400x300" alt="Carro 3">
            <h3>Audi A6</h3>
            <p>A partir de 90€/dia</p>
            <p><button>Alugar Agora</button></p>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2025 Rent-a-Ride - Todos os direitos reservados</p>
</footer>

</body>
</html>
