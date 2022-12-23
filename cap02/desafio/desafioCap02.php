<?php
  $month_portuguese = array(
    'Jan' => 'Janeiro',
    'Feb' => 'Fevereiro',
    'Mar' => 'Março',
    'Apr' => 'Abril',
    'May' => 'Maio',
    'Jun' => 'Junho',
    'Jul' => 'Julho',
    'Aug' => 'Agosto',
    'Sep' => 'Setembro',
    'Nov' => 'Novembro',
    'Out' => 'Outubro',
    'Dec' => 'Dezembro'
  );

  $week_portuguese = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terça-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado'
  );

  $satuday = (date('w') - 6) * -1;
  $satuday_phrase = $satuday == 0 ? "hoje é sábado" : "faltam " . $satuday . " dia(s) para sábado.";

  echo "Estamos em " . $month_portuguese[date('M')] . ", hoje é dia " . date("d/m/y") . ", " . $week_portuguese[date('D')] . ", e agora são " . date("H:i:s a") . ", " . $satuday_phrase
?>
