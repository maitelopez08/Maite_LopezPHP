<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas</title>
</head>
<body>
    <h1> Gerenciador de Tarefas</h1>
    <form>
        <fieldset>
            <legend>Nova tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" />
            </label>

            <label>
                Descrição (Opcional):
                <textarea name="descricao"></textarea>
            </label>

            <label>
                Prazo (Opcional):
                <input type="text" name="prazo" />
            </label>
       

        <fieldset>
        <legend>Pioridade:</legend>
            <label>
                <input type="radio" name="prioridade" value="baixa" checked/>
                    Baixa
                <input type="radio" name="prioridade" value="media"/>
                    Média
                <input type="radio" name="prioridade" value="alta"/>
                    Alta
            </label>
            </fieldset>
            <lable>
                Tarefa Concluída:
                <input type="checkbox" name="concluida" value="sim"/>
            </lable>
                <input type="submit" value="cadastrar"/>
        </fieldset>
    </form>

    <table>
        <tr>
            <th>Tarefas</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluída</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefa): ?>
            <tr>
                <td><?php echo $tarefa['nome']; ?> </td>
                <td><?php echo $tarefa['descricao']; ?> </td>
                <td><?php echo $tarefa['prazo']; ?> </td>
                <td><?php echo $tarefa['prioridade']; ?> </td>
                <td><?php echo $tarefa['concluida']; ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br><br><br>
    <address>
        <center>
                Maite López / Estudante / Técnico em Desenvolvimento de Sistemas
        </center>
    </address>
</body>
</html>