<?php

  session_start();

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
      $contato['nascimento'] = $_GET['nascimento'];
    } else {
      $contato['nascimento'] = '';
    }

    $contato['favorito'] = $_GET['favorito'];

    $_SESSION['lista_contatos'][] = $contato;
  }

  $lista_contatos = array();

  if (isset($_SESSION['lista_contatos'])) {
    $lista_contatos = $_SESSION['lista_contatos'];
  }

  include "template.php";
?>
