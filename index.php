<?php
//
// class Door
//{
//    public $color;
//    public $material;
//    public $is_open;
//
//
//    public function open()
//    {
//        $this->is_open = true;
//        echo 'Дверь открыта';
//
//    }
//
//    public function close()
//    {
//        $this->is_open = false;
//        echo 'Дверь закрыта';
//    }
//}
//
//$myDoor = new Door();
//$myDoor->color = 'Красный';
//$myDoor->material = 'Дерево';
//$myDoor->open();
//var_dump($myDoor);
//$myDoor->material = 'Метал';
//var_dump($myDoor);
//class TrafficLight
//{
//    public $is_working;
//    public $color;
//    public $height;
//
//
//    public function working()
//    {
//        $this->is_working = true;
//    }
//
//    public function notWorking()
//    {
//        $this->is_working = false;
//    }
//
//    public function colorRed()
//    {
//        $this->color = 'Красный';
//        echo 'Движение запрещено!';
//    }
//
//    public function colorYellow()
//    {
//        $this->color = 'Жёлтый';
//        echo 'Приготовится к движению!';
//    }
//
//    public function colorGreen()
//    {
//        $this->color = 'Зелёный';
//        echo 'Движение разрешенно!';
//    }
//
//}
//
//$traffic_light = new TrafficLight();
//$traffic_light->working();
//$traffic_light->colorGreen();
//var_dump($traffic_light);
//$traffic_light->colorYellow();
//var_dump($traffic_light);
//$traffic_light->height = 2.5;
//var_dump($traffic_light);
//$traffic_light->notWorking();
//var_dump($traffic_light);
//class Calc
//{
//    public $numberFirst;
//    public $numberSecond;
//    public $op;
//
//    public function result()
//    {
//        if ($this->op == '+'){
//            echo $this->numberFirst + $this->numberSecond . '<br>';
//        } elseif ($this->op == '-') {
//            echo $this->numberFirst - $this->numberSecond . '<br>';
//        } elseif ($this->op == '*') {
//            echo $this->numberFirst * $this->numberSecond . '<br>';
//        } else  {
//            echo $this->numberFirst / $this->numberSecond . '<br>';
//        }
//
//    }
//}
//
//$newCalc = new Calc();
//$newCalc->numberFirst = 5;
//$newCalc->numberSecond = 2;
//
//$newCalc->op = '+';
//$newCalc->result();
//
//$newCalc->op = '-';
//$newCalc->result();
//
//$newCalc->op = '*';
//$newCalc->result();
//
//$newCalc->op = '/';
//$newCalc->result();
//
//class User
//{
//    private $firstName;
//
//    public function setFirstName($first_name)
//    {
//        $this->firstName = $first_name;
//    }
//
//    public function getFirstName()
//    {
//        return $this->firstName;
//    }
//}
//
//$user = new User();
//$user->setFirstName('ИВАН');
//echo $user->getFirstName();
//abstract class Messenger
//{
//    protected $name;
//    public function __construct($name)
//    {
//        $this->name = $name;
//
//    }
//    abstract function send($message);
//    abstract function getName();
//    public function close()
//    {
//        echo 'Выход из мессенджера';
//    }
//}
//
//class EmailMessenger extends Messenger
//{
//    public function send($message)
//    {
//        echo "{$this->name} отпровляет сообщение: {$message}<br>";
//    }
//
//    public function getName()
//    {
//        echo $this->name.'<br>';
//    }
//}
//
//$outlook = new EmailMessenger("Outlook");
//$outlook->send("Hello PHP");
//$outlook->getName();
//$outlook->close();
//trait Printer
//{
//    public function printSimpleText($text)
//    {
//        echo "{$text}<br>";
//    }
//    public function printHeaderText($text)
//    {
//        echo "<h2>{$text}</h2><br>";
//    }
//}
//class Message
//{
//    use Printer;
//}
//$myPrint =  new Message();
//$myPrint->printSimpleText('Сообщение');
//$myPrint->printHeaderText('Сообщение и заголовок');

require './mp3Player.php';

$mp3 = new mp3Player();
$mp3->setId(5);
echo $mp3->getId();

$players = new mp3Player();
$players->addMusic('Название песни № 1');
$players->addMusic('Название песни № 2');
$players->addMusic('Название песни № 3');
$players->addMusic('Название песни № 4');
$players->addMusic('Название песни № 5');

$players->play();//Название песни № 1
$players->SwitchUp();
$players->play();//Название песни № 2
$players->SwitchUp();
$players->play();//Название песни № 3
$players->SwitchUp();
$players->play();//Название песни № 4
$players->SwitchUp();
$players->play();//Название песни № 5
$players->SwitchUp();
$players->play();//Название песни № 1