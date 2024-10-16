<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>

    <!-- Link do CSS do Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Link do Css Personalizado-->
    @vite('resources/css/style.css')
</head>

<body>
    <!---Navbar com botões-->
    <nav class="navbar border-body custom-navbar" data-bs-theme="dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Controle de Tarefas</span>
            <div class="d-flex ms-auto">
                <a href="{{ route('tarefas.create') }}" class="btn btn-success me-2">Criar Tarefa</a>
                <a href="{{ route('tarefas.index') }}" class="btn btn-success">Lista de Tarefa</a>
            </div>
        </div>
    </nav>
    <!---Finalização da Navbar com botões-->

    <!--Ínicio Container de Lista de Tarefas--->
    <div class="container mt-5">
        <h1 class="text-center">Lista de Tarefas</h1>
        <br>

        <!---Tabela com as tarefas, categorias e responsáveis-->
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Responsável</th>
                    <th>Categoria</th>
                    <th>Nome da Tarefa</th>
                    <th>Descrição</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->responsavel->nome }} ({{ $tarefa->responsavel->email }})</td>
                    <td>{{ $tarefa->categoria->nome }}</td>
                    <td>{{ $tarefa->nome }}</td>
                    <td>{{ $tarefa->descricao }}</td>
                    <td>{{ ucfirst($tarefa->status) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!---Finalização da Tabela com as tarefas, categorias e responsáveis-->
    </div>
    <!--Finalização do Container de Lista de Tarefas--->

    <!-- Script do Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>