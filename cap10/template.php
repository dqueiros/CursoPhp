<html lang="pt-br">
  <head>
    <meta http_equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8" />
    <title>Gerenciador de Tarefas</title>
  </head>
  <body>
    <h1>Gereciador de Tarefas</h1>

    <?php include('formulario.php'); ?>

    <?php if ($exibir_tabela) : ?>
      <?php include('tabela.php'); ?>
    <?php endif; ?>
  </body>
</html>
