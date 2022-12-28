<html lang="pt-br">
  <head>
    <meta http_equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8" />
    <title>Gerenciador de Tarefas</title>
  </head>
  <body>
    <h1>Gereciador de Tarefas</h1>
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
          <legend>Prioridade:</legend>
          <label>
            <input type="radio" name="prioridade" value="1" checked />
            baixa
            <input type="radio" name="prioridade" value="2" />
            Média
            <input type="radio" name="prioridade" value="3" />
            Alta
          </label>
        </fieldset>
        <label>
          Tarefa concluída:
          <input type="checkbox" name="concluida" value="1" />
        </label>
        <input type="submit" value="Cadastrar" />
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
      <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
          <td><?php echo utf8_encode($tarefa['nome']); ?></td>
          <td><?php echo utf8_encode($tarefa['descricao']); ?></td>
          <td><?php echo traduz_data_para_exibir($tarefa['prazo']); ?></td>
          <td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td>
          <td><?php echo traduz_concluida($tarefa['concluida']); ?></td>
        <tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
