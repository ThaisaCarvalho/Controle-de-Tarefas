<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefas</title>
    <!-- Link do CSS do Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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


    <!--Ínicio Container de Cadastro de Tarefas--->
    <div class="container mt-5">
        <h1 class="text-center">Cadastro de Tarefas</h1>
        <br>
        <!--Verificação de Validação de Erros-->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!--Finalização Verificação de Validação de Erros-->
        <!--Ínicio do forms de Cadastro de Tarefa-->
        <form action="{{ route('tarefas.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nome_responsavel" class="form-label">Nome do Responsável:</label>
                <input type="text" class="form-control" id="nome_responsavel" name="nome_responsavel" required>
            </div>

            <div class="mb-3">
                <label for="email_responsavel" class="form-label">Email do Responsável:</label>
                <input type="email" class="form-control" id="email_responsavel" name="email_responsavel" required>
            </div>

            <div class="mb-3">
                <label for="nome_categoria" class="form-label">Categoria:</label>
                <input type="text" class="form-control" id="nome_categoria" name="nome_categoria" required>
            </div>

            <div class="mb-3">
                <label for="nome_tarefa" class="form-label">Nome da Tarefa:</label>
                <input type="text" class="form-control" id="nome_tarefa" name="nome_tarefa" required>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" required></textarea>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="pendente">Pendente</option>
                    <option value="em_andamento">Em Andamento</option>
                    <option value="concluida">Concluída</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar Tarefa</button>
            <br>
        </form>
        <!--Finalização do forms de Cadastro de Tarefa-->
    </div>
    <!--Finalização do Container de Cadastro de Tarefas--->
    <!-- Script do Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>