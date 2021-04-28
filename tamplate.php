<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Cadastre-se Agora!!!</h1>
        
        <form>
            <fieldset>
                <legend>Usuário</legend>
                <label for="nome">Nome:</label>
                <input name="nome" id="nome" class="nome">
                <label for="senha">Senha:</label>
                <input  type="password"name="senha" class="nome" id="senha">
                <label for="concluida">Usuário Administrador</label>
                <input type="checkbox" name="adm" value="sim" id="adm">
<br>
                <button class="cadastro"type="submit">Cadastrar</button>
            </fieldset>
        </form>
        <br>
        <table class="table">
            <thead>
                <tr>    
                    <th>Usuário</th>
                    <th>Administrador</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sqlBusca = "SELECT * FROM tb_user";
                $resultado = mysqli_query($conexao , $sqlBusca);
                $listaTarefas = [];
            
                while($tarefa = mysqli_fetch_assoc($resultado)){
                    $listaTarefas[] = $tarefa;
                }

                foreach($listaTarefas as $tarefa): ?>
                    <tr>
                        <td><?php echo $tarefa['nome']; ?></td>
                        <td><?php echo $tarefa['adm']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    
    <script src="bootstrap-5/bootstrap.bundle.min.js"></script>
</body>
</html>