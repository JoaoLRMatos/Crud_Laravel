<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Produto</title>
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
        .form-control {
            background-color: rgba(255, 255, 255, 0.8);
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastrar Produto</h1>
        <a href="/" class="btn btn-secondary">Home</a>
            <a href="{{ route('produto.index') }}" class="btn btn-secondary">Lista</a>

        <form method="POST" action="{{ route('produto.store') }}">
            @csrf

            <div class="form-group">
                <label for="produto">Produto:</label>
                <input type="text" class="form-control" name="produto" id="produto" required>
            </div>

            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca" id="marca" required>
            </div>

            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" name="modelo" id="modelo" required>
            </div>

            <div class="form-group">
                <label for="tamanho">Tamanho:</label>
                <input type="text" class="form-control" name="tamanho" id="tamanho" required>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
