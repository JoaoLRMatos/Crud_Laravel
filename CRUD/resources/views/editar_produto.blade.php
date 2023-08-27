<!DOCTYPE html>
<html>
<head>
    <title>Editar Produto</title>
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
        <h1>Editar Produto</h1>

        <form method="POST" action="{{ route('produto.update', ['id_do_produto' => $produto->id]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="produto">Produto:</label>
                <input type="text" class="form-control" name="produto" id="produto" value="{{ $produto->produto }}" required>
            </div>

            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca" id="marca" value="{{ $produto->marca }}" required>
            </div>

            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" name="modelo" id="modelo" value="{{ $produto->modelo }}" required>
            </div>

            <div class="form-group">
                <label for="tamanho">Tamanho:</label>
                <input type="text" class="form-control" name="tamanho" id="tamanho" value="{{ $produto->tamanho }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('produto.index') }}" class="btn btn-secondary">Cancelar</a>
            
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
