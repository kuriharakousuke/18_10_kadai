<?php

class User{
    public $name;
    public static $count = 0;
    public function __construct($name){
       $this->name = $name;
       self::$count++;
    }
    public function sayHi( ){
      echo "hi, I am $this->name!";
    }
    public static function getMessage( ){
      echo "hello from user class!";
    }
  }

class AdminUser extends User{
    public function sayHello( ){
       echo "hello from Admin!";
    }
}

//staticメソッド
User::getMessage();
echo "<br>";

//インスタンス化
$tom = new User("TOM");
$bob = new User("BOB");
$steve = new AdminUser("STEVE");

//インスタンス化の数をカウント
echo User::$count;
echo "<br>";

echo $tom->name;
echo "<br>";
echo $steve->name;
echo "<br>";
$bob->sayHi();
echo "<br>";
$steve->sayHi();
echo "<br>";
$steve->SayHello();

?>