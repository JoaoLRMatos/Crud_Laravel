<!DOCTYPE html>
<html>
<head>
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #667eea, #764ba2);
            color: #fff;
        }
        .container {
            margin-top: 200px;
            text-align: center;
        }
        .btn {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo!</h1>
        
        <a href="{{ route('produto.create') }}" class="btn btn-primary">Cadastrar</a>
        <a href="{{ route('produto.index') }}" class="btn btn-secondary">Lista</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
