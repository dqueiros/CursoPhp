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
            $contato = array();

            $contato['nome'] = $_GET['nome'];
            $contato['telefone'] = $_GET['telefone'];
            $contato['email'] = $_GET['email'];

            setcookie('nome', $contato['nome']);
            setcookie('telefone', $contato['telefone']);
            setcookie('email', $contato['email']);
        }

        $lista_contatos = array();

        if (isset($_COOKIE['nome'])) {
          array_push($lista_contatos, array( 'nome' => $_COOKIE['nome'], 'telefone' => $_COOKIE['telefone'], 'email' => $_COOKIE['email']));
        }
    ?>
    <table>
      <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
      </tr>
      <?php foreach ($lista_contatos as $contact) : ?>
        <tr>
          <td><?php echo $contact['nome']; ?></td>
          <td><?php echo $contact['telefone']; ?></td>
          <td><?php echo $contact['email']; ?></td>
        <tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
