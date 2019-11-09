<?php

// Uma variável com um número inteiro
$nInt = 20;
// Uma variável com um número decimal
$nFloat = 25.50;
// Uma variável com um caractere, usando aspas simples.
$charSimple = 'Y';
// Uma variável com um caractere, usando aspas duplas.
$charDouble = "N";
// Uma variável com uma cadeiea, usando aspas simples.
$stringSimple = 'Mariana';
// Uma variável com uma cadeia, usando aspas duplas.
$stringDouble = "Pacor";
// Atribuir uma cadeia de caracteres à variável do ponto a. 
//$nInt = 'Cadeia ponto A.'
// Atribuir um número decimal à variável do ponto e.
//$charSimple = 25.70;
// O que acontece com o tipo de dado das variáveis do ponto g e do ponto h?
// Apresenta erro. 
/* O que acontece se atribuirmos outro valor numérico à variável do ponto a,
mas entre aspas? */
$nInt = '8';
var_dump($nInt);
// A variável se transforma em String. 
/* Com base na frase “Três pratos de trigo para três tigres tristes”, criar uma variável
para cada palavra, de forma que o nome de cada variável indique a posição da
palavra na frase. */
$one = 'Três';
$two = 'pratos';
$three = 'de';
$four = 'trigo'; 
$five = 'para'; 
$six = 'três'; 
$seven = 'tigres'; 
$eight = 'tristes';
// É possível atribuir um número ($1, $2, $3) como nome da variável? Não.
// Imprimir a frase usando todas as variáveis declaradas.
echo "<br>$one $two $three $four $five $six $seven $eight.";
/* Imprimir uma oração usando pelo menos duas variáveis já declaradas no
ponto anterior. */
echo "<br>$one $five $six.";
/* Declarar as variáveis a seguir e executar o seguinte código. Substituir a variável
$meuDado pelas variáveis declaradas no nosso arquivo. Por último, executar o
arquivo e observar se o tipo de dado retorna true ou false. */
$variable01 = true;
$variable02 = false;
$variable03 = 0;
$variable04 = 1;
$variable05 = 6;
$variable06 = '';
$variable07 = "3";
$variable08 = "true";
$variable09 ='false';
$variable10 = null;
function tipoDado($varN) {
    if ( $varN == true ) {
echo "<br> o valor $varN é verdadeiro.";
}
else {
echo "<br> o valor $varN é falso. <br>";
}
}
// impressão de valor verdadeiro.
tipoDado($variable07);
// impressão de valor falso.
tipoDado($variable03);
// Criar um array numérico com 5 strings de animais diferentes. Em seguida, executar um var_dump para ver os resultados.
$animals = array ('Rato', 'Sapo','Águia','Serpente', 'Cabra','Vaca', 'Gato');
echo '<pre>';
var_dump($animals);
echo '<pre>';
//Imprimir a seguinte oração “Eu gosto de animais: animal1, animal2, ...” com os 7 animais que declaramos.
echo "<br> Eu gosto de animais: ";
foreach ($animals as $a) {
    echo "$a, ";
} echo '<br>';
// Substituir o primeiro animal por outro novo e imprimir o resultado.
$animals[0] = ('Cobra');
echo '<pre>';
print_r ($animals);
echo '<pre>';
// Adicionar um animal novo na posição 100 e imprimir o resultado.
$animals[100] = ('Lontra');
echo '<pre>';
print_r ($animals);
echo '<pre>';
// Adicionar um animal novo na posição 16 e imprimir o resultado.
$animals[16] = ('Lagartixa');
echo '<pre>';
print_r ($animals);
echo '<pre>';
/* Criar um array associativo que contenha as seguintes propriedades de um carro:
Marca, Modelo, Cor, Ano e Placa. Em seguida, executar um var_dump para ver os
resultados. */
$car = array (
    "Marca" => 'Ford',
    "Modelo" => 'Escort Xr3',
    "Cor" => 'Vinho',
    "Ano" => '1996',
    "Placa" => 'XBCT 8989'); echo '<br>';
echo '<pre>';
var_dump($car); echo '<br>';
echo '<pre>';
// Adicionar o nome do dono na posição 0 do array e imprimir o resultado.
$car[0] = ('Mariana');
echo '<pre>';
print_r ($car);
echo '<pre>';
// Adicionar a empresa seguradora na posição 14 e imprimir o resultado.
$car[14] = ('Porto Seguro'); 
echo '<pre>';
print_r ($car);
echo '<pre>';
// Adicionar o número da apólice de seguro à posição “apólice” e imprimir o resultado.
$car['Apólice'] = (12345);
echo '<pre>';
print_r ($car);
echo '<pre>';
// Modificar o número da placa e imprimir o resultado.
$car['Placa'] = ('XXXT 6789');
echo '<pre>';
print_r ($car);
echo '<pre>';
// Modificar o nome do dono e imprimir o resultado.
$car[0] = ('Luisa');
echo '<pre>';
print_r ($car);
echo '<pre>';
// Declarar a variável $inteiro e $decimal, com os respectivos valores.
$integer = 10;
$decimal = 2.5;
// Executar um echo com a soma dos dois valores.
echo $integer + $decimal . '<br>'; 
// Executar um echo com a subtração dos dois valores.
echo $integer - $decimal . '<br>';
// Executar um echo com a divisão dos dois valores.
echo $integer/$decimal . '<br>';
// Executar um echo com a multiplicação dos dois valores.
echo $integer*$decimal . '<br>';
// Atribuir a uma nova variável o resto da divisão dos valores e mostrar a nova variável.
$rest = $integer%$decimal;

echo $rest . '<br>';
// Adicionar 1 a $inteiro e $decimal.
echo $integer+$decimal+1 . '<br>';
// Adicionar 5 a $inteiro e subtrair 0,6 de $decimal.
$integer = $integer + 5;
$decimal = $decimal - 0.6;
 echo 'Inteiro = ' . $integer . ' e Decimal =' . $decimal . '<br>';
/* Na mesma linha, criar a variável $resultado, cujo valor seja o resultado da
multiplicação $inteiro * 2, adicionar $decimal e dividir tudo pela metade de
$inteiro. */
$resultado = ($integer*2+$decimal)/($integer/2);
echo $resultado . '<br>';
// Declarar uma variável com a string ‘Olá’ e outra com a string ‘mundo!’.
$hello = 'Olá ';
$world = 'mundo!';
// Em uma nova variável, concatenar as variáveis criadas recentemente para formar “Olá mundo!”.
$helloWorld = $hello . $world;
// Criar uma nova variável que concatene a variável criada no ponto a, e concatenar a ela a string ‘PHP é o máximo’.
$helloPhp = $helloWorld . ' PHP é o máximo!';
echo $helloPhp;