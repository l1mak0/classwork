<?php
//
//class Door
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

class User
{
    private $firstName;

    public function setFirstName($first_name)
    {
        $this->firstName = $first_name;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
}

$user = new User();
$user->setFirstName('ИВАН');
echo $user->getFirstName();