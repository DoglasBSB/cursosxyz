
<?php

#Executei o seguinte teste para confirmar as velocidades que cada um demora a correr (função "timeFunc";

function timeFunc($function, $runs)
{
  $times = array();

  for ($i = 0; $i < $runs; $i++)
  {
    $time = microtime();
    call_user_func($function);
    $times[$i] = microtime() - $time;
  }

  return array_sum($times) / $runs;
}

function Method1()
{
  $foo = 'uma pessoa';
  for ($i = 0; $i < 10000; $i++)
    $t = "Eu sou " . $foo . "!"; //1
}

function Method2()
{
  $foo = 'uma pessoa';
  for ($i = 0; $i < 10000; $i++)
    $t = 'Eu sou ' . $foo . '!'; //2
}

function Method3()
 {
  $foo = 'uma pessoa';
  for ($i = 0; $i < 10000; $i++)
    $t = "Eu sou $foo!"; //3
}

function Method4()
 {
  $foo = 'uma pessoa';
  for ($i = 0; $i < 10000; $i++)
    $t = "Eu sou {$foo}!"; //4
}

echo timeFunc('Method1', 10) . "n"; // =&gt; 0.0020885
echo "<br>";
echo timeFunc('Method2', 10) . "n";; // =&gt; 0.0021168
echo "<br>";
echo timeFunc('Method3', 10) . "n";; // =&gt; 0.0021132
echo "<br>";
echo timeFunc('Method4', 10) . "n";; // =&gt; 0.0023884

?>