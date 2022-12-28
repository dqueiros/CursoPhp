<html>
  <head>
    <title>Gerenciador de Contato com SESSION</title>
  </head>
  <body>
    <h1>Gereciador de Contato com SESSION</h1>
    <form>
      <fieldset>
        <legend>Novo contato</legend>
        <label>
          Nome:
          <input type="text" name="nome" />
        </label>
        <label>
          Telefone:
          <input type="text" name="telefone" />
        </label>
        <label>
          E-mail:
          <input type="text" name="email" />
        </label>
        <label>
          Descrição (Opcional):
          <textarea name="descricao"></textarea>
        </label>
        <label>
          Data de Nascimento (Opcional):
          <input type="text" name="nascimento" />
        </label>
        <label>
          Favorito (Opcional):
          <input type="checkbox" name="favorito" value="1" />
        </label>
        <input type="submit" value="Cadastrar" />
      </fieldset>
    </form>
    <table>
      <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Descrição</th>
        <th>Data de Nascimento</th>
        <th>Favorito</th>
      </tr>
      <?php foreach ($lista_contatos as $contato) : ?>
        <tr>
          <td><?php echo utf8_encode($contato['nome']); ?></td>
          <td><?php echo $contato['telefone']; ?></td>
          <td><?php echo $contato['email']; ?></td>
          <td><?php echo utf8_encode($contato['descricao']); ?></td>
          <td><?php echo traduz_data_para_exibir($contato['nascimento']); ?></td>
          <td><?php echo traduz_favorito($contato['favorito']); ?></td>
        <tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
