<?php
  $bdServidor = '127.0.0.1';
  $bdUsuario = 'sistemaContatos';
  $bdSenha = 'sistema';
  $bdBanco = 'contatos';

  $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

  if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();
  }

  function getAll($conexao)
  {
    $sqlBusca = "SELECT * FROM contatos";
    $resultado = mysqli_query($conexao, $sqlBusca);

    $contatos = array();

    while ($contato = mysqli_fetch_assoc($resultado)) {
      $contatos[] = $contato;
    }

    return $contatos;
  }

  function add($conexao, $tarefa)
  {
      $sqlGravar = "
        INSERT INTO contatos
        (nome, telefone, email, descricao, nascimento, favorito)
        VALUES
        (
            '{$tarefa['nome']}',
            '{$tarefa['telefone']}',
            '{$tarefa['email']}',
            '{$tarefa['descricao']}',
            '{$tarefa['nascimento']}',
            '{$tarefa['favorito']}'
        )
      ";

      mysqli_query($conexao, $sqlGravar);
  }
?>
