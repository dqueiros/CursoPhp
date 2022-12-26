<html>
  <head>
    <title>Gerenciador de Contato com COOKIE</title>
  </head>
  <body>
    <h1>Gereciador de Contato com COOKIE</h1>
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
        <input type="submit" value="Cadastrar" />
      </fieldset>
    </form>
    <?php
        if (isset($_GET['nome']) && isset($_GET['telefone']) && isset($_GET['email'])) {
          setcookie('lista_contatos', serialize(array(['nome' => $_GET['nome'], 'telefone' => $_GET['telefone'], 'email' => $_GET['email']])));
        }

        $lista_contatos = array();

        if (isset($_COOKIE['lista_contatos'])) {
          $lista_contatos = $_COOKIE['lista_contatos'];
        }
    ?>
    <table>
      <tr>
        <th>Contatos</th>
      </tr>
      <?php foreach ($lista_contatos as $contato) : ?>
        <tr>
          <td><?php echo $contato.nome; ?></td>
        <tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
