<?php 
for($cont=0; $cont<10; $cont++)
{
 echo "A variável \$cont vale $cont";
 echo "<br>";
}


//Contagem regressiva
echo "<br> Agora estou fazendo uma contagem regressiva: <br>";
for ($i=15; $i>=0; $i--)
{
    echo $i.", ";
}
echo "...FIM!<br>";
echo "<br>";



$vetor [0][0]= "elemento00";
$vetor [0][1]= "elemento01";
$vetor [1][0]= "elemento10";
$vetor [1][1]= "elemento11";

for ($a=0; $a<2; $a++)
{
    for ($b=0; $b<2; $b++)
    {
        echo "O elemento da posição $a,$b é ";
        echo $vetor [$a][$b]."<br>";
    }
}
echo "<br>";


//Mais de uma variável no parâmetro de inicialização.
for ($c=0, $d=10; $c<10; $c++, $d--)
{
    echo "\$c vale $c e \$d vale $d";
    if ($c==$d)
    {
        echo " (os valores são iguais!)";
    } echo "<br>";
}
?>