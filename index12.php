<?php
    echo "<h2>Привет</h2>";
    echo "<h3>Это я</h3>";
    echo "<h1  style='color: #ff5b64'>Я люблю тебя</h1>";
    echo "кух<br/>" ;
$first = "я переменная";
echo $first;
echo "<br/>";
$a = 1;
$a = "пидор";
echo $a. " Yes" . "<br/>";
$x = 4;
$y = 5;
echo $x + $y . "<br/>";
echo $x - $y . "<br/>";
echo $x * $y . "<br/>";
echo $x / $y . "<br/>";
$x++;
echo $x . "<br/>";
$abs = "appels";
$abs .= "-это фрукт";
echo $abs;
if ($x<=10 and $y == 3) {
    echo 'Правда';
} else {
    echo 'Ложь';
}
$text = 'Академия 1';
echo $text . "<br/>";
echo gettype($text);
var_dump((bool) $text);
//объекты
    /*class ForTest {};
    $objectTest = new ForTest();
    echo gettype($objectTest) . "<br/>";*/
//работа с массивами
/*    $fruits = array('orange', 'apple', 'peach');
    $fruits = ['orange', 'apple', 'peach'];
    echo gettype($fruits) . "<br/>";
    echo $fruits[0] . "<br/>";
    $fruits[3] = 'pineapple'; //добаввление эллемента
    echo $fruits . "<br/>";
    var_dump($fruits);
    echo "<br/>";
    print_r($fruits);
    echo "<br/>";
    echo $fruits[0];
    echo "<br/>";*/
//ассациативные массивы
/*    $arr = ['dog'=>'Rex', 'cat'=>'Bars'];
    echo $arr['dog'] . "<br/>";*/
//многомерный массив
/*    $arrMany = [
        [1, 2, 3],
        ['test', 'test2']
    ];
    echo $arrMany[1][1] . "<br/>";*/
//условия
  /*  $name = 'Artem';
    if ($name != true) {
        echo 'Пошел нахуй';
    } else {
        echo 'Хух';
    }*/

/*echo "<br/>";
$text = $name == true ? 1 : 2;
echo $text . "<br/>";*/
//типо условие
/*$num = 33;
switch ($num) {
    case 1:
        echo 'Num равен 1';
        break;
    case 2:
        echo 'Num равен 2';
        break;
    case 3:
        echo 'Num равен 3';
        break;
    default:
        echo 'Num равен другому значению';
        break;
}*/
//цикл
$num = 10;
/*while ( $num<15 ) {
    echo $num . "<br/>";
    $num++;
}*/
/*do {
    echo $num;
} while ($num>20);*/
//цикл
/*for ($i=0; $i<10; $i++) {
    if ($i==7) {
        break;
    }
    if ($i==3) {
        continue;
    }
    echo $i . "<br/>";
}*/
//цикл перебора массива
    echo "<br/> <br/>";
    $arr = [1, 2, 3];
    foreach ($arr as $key=>$value) {
        echo $key. ' ' . $value . "<br/>";
    }

    $arr2 = ['dog'=>'Rex', 'cat'=>'Bars'];
    foreach ($arr2 as $key=>$value) {
        echo $key . ' ' . $value . "<br/>";
    }
//функция
/*    $li = hello(3, -1);
    function hello($a, $b) {
        $c = $a+$b;
        return $c*-2;
    }
    echo $li;*/














