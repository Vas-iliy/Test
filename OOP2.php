<?php
class User
{
    const  MARK = 123;
    public static $login = 'test';

    public static function getLogin()
    {
        //в прошлой лабе мы просто обращались к свойству, а в этой записываем его
        echo self::$login;
    }

    public function getMark()
    {
        echo User::MARK . "<br/>";
        //self-обращение к самому себе, то есть к User
        echo self::MARK;
    }
}

$abc = new User();
//преимущества статических свойств и методов, то что не надо создавать новые объекты
$abc->getLogin();
User::getLogin();


//echo User::$login . "<br/>";
User::$login = 'tets';
//echo User::$login;
//$abc->getMark();

//echo User::MARK;