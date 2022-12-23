<?php
  function linha($semana)
  {
    echo "<tr>";
      for ($i=0; $i <= 6; $i++) {
        if (isset($semana[$i])) {
          if($i == 0){
            echo "<td><span style='color: red;'>{$semana[$i]}</span></td>";
          } elseif($i ==  6){
            echo "<td><strong>{$semana[$i]}</strong></td>";
          } else {
            echo "<td>{$semana[$i]}</td>";  
          }
        } else {
          echo "<td></td>";
        }
      }

    echo "</tr>";
  }

  function calendario()
  {
      $dia = 1;
      $today = date('d');
      $semana = array();
      while ($dia <= 31) {

        if($dia == $today){
          array_push($semana, '<b>' . $dia . '</b>');
        } else {
          array_push($semana, $dia);
        }

        if (count($semana) == 7) {
          linha($semana);
          $semana = array();
        }

        $dia++;

      }
      linha($semana);
  }

  function dayPeriod(){
    $hour = date('H');

    if($hour >= 0 && $hour <= 6){
      echo "Boa noite";
    } elseif($hour >= 7 && $hour <= 12){
      echo "Bom dia";
    } elseif($hour >= 13 && $hour <= 18) {
      echo "Boa tarde";
    } else{
      echo "Boa noite";
    }
  }
?>

<table border="1">
  <tr>
    <th>Dom</th>
    <th>Seg</th>
    <th>Ter</th>
    <th>Qua</th>
    <th>Qui</th>
    <th>Sex</th>
    <th>Sab</th>
  </tr>
  <?php calendario(); ?>
</table>

<?php dayPeriod(); ?>
