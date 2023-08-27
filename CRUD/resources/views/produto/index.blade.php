<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #667eea, #764ba2);
            color: #fff;
        }
        .container {
            margin-top: 50px;
        }
        .table {
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Produtos</h1>
        <a href="/" class="btn btn-secondary">Home</a>
        <a href="{{ route('produto.create') }}" class="btn btn-primary">Cadastrar</a>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Tamanho</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->produto }}</td>
                    <td>{{ $produto->marca }}</td>
                    <td>{{ $produto->modelo }}</td>
                    <td>{{ $produto->tamanho }}</td>
                    <td>
                        <a href="{{ route('produto.edit', ['id_do_produto' => $produto->id]) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('produto.destroy', ['id_do_produto' => $produto->id]) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
