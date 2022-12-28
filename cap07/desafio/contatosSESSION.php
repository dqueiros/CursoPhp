<?php

  session_start();

  include "banco.php";
  include "ajudantes.php";

  if (isset($_GET['nome']) && $_GET['nome'] != '' &&
      isset($_GET['telefone']) && $_GET['telefone'] != '' &&
      isset($_GET['email']) && $_GET['email'] != '') {

    $contato = array();

    $contato['nome'] = $_GET['nome'];
    $contato['telefone'] = $_GET['telefone'];
    $contato['email'] = $_GET['email'];

    if (isset($_GET['descricao'])) {
      $contato['descricao'] = $_GET['descricao'];
    } else {
      $contato['descricao'] = '';
    }

    if (isset($_GET['nascimento'])) {
      $contato['nascimento'] = traduz_data_para_banco($_GET['nascimento']);
    } else {
      $contato['nascimento'] = '';
    }

    if (isset($_GET['favorito'])) {
      $contato['favorito'] = 1;
    } else {
      $contato['favorito'] = 0;
    }

    add($conexao, $contato);
  }

  $lista_contatos = array();

  $lista_contatos = getAll($conexao);

  include "template.php";
?>
