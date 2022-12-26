<?php session_start(); ?>
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
        <input type="submit" value="Cadastrar" />
      </fieldset>
    </form>
    <?php
        if (isset($_GET['nome']) && isset($_GET['telefone']) && isset($_GET['email'])) {
          $_SESSION['lista_contatos'][] = $_GET['nome'] . ' ' . $_GET['telefone'] . ' ' . $_GET['email'];
        }

        $lista_contatos = array();

        if (isset($_SESSION['lista_contatos'])) {
          $lista_contatos = $_SESSION['lista_contatos'];
        }
    ?>
    <table>
      <tr>
        <th>Contatos</th>
      </tr>
      <?php foreach ($lista_contatos as $contato) : ?>
        <tr>
          <td><?php echo $contato; ?></td>
        <tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
