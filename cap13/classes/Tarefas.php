<?php

// Arquivo: classes/Tarefas.php

class Tarefas
{
  public $conexao;
  public $tarefas = array();
  public $tarefa;
  public $mysqli;

  public function __construct($novo_mysqli)
  {
    $this -> mysqli = $novo_mysqli;
  }

  public function buscar_tarefas($conexao)
  {
    $sqlBusca = "SELECT * FROM tarefas";
    $resultado = mysqli_query($sqlBusca);

    $this -> tarefas = array();

    while ($tarefa = mysqli_fetch_assoc($resultado)) {
      $this -> $tarefas[] = $tarefa;
    }

    return $tarefas;
  }

  function buscar_tarefa($id)
  {
      $sqlBusca = "SELECT * FROM tarefas WHERE id=" . $id;
      $resultado = $this -> mysqli -> query($sqlBusca);

      $this -> tarefa = mysqli_fetch_assoc($resultado);
  }

  function gravar_tarefa($tarefa)
  {
      $sqlGravar = "
        INSERT INTO tarefas
        (nome, descricao, prioridade, prazo, concluida)
        VALUES
        (
            '{$tarefa['nome']}',
            '{$tarefa['descricao']}',
            '{$tarefa['prioridade']}',
            '{$tarefa['prazo']}',
            '{$tarefa['concluida']}'
        )
      ";

      mysqli_query($this -> conexao, $sqlGravar);
  }

  function editar_tarefa($tarefa)
  {
      $sqlEditar = "
        UPDATE tarefas SET
          nome = '{$tarefa['nome']}',
          descricao = '{$tarefa['descricao']}',
          prioridade = '{$tarefa['prioridade']}',
          prazo = '{$tarefa['prazo']}',
          concluida = '{$tarefa['concluida']}'
        WHERE id = {$tarefa['id']}
      ";

      mysqli_query($this -> conexao, $sqlEditar);

      header('Location: tarefas.php');
      die();
  }
}

?>
