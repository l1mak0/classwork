<?php
require './Player.php';
require './Id.php';


class mp3Player implements Player
{
    private $music = [];
    private $current = 0;
    use Id;


    public function addMusic($sound)
    {
        $this->music[] = $sound;
    }

    public function play()
    {
        if (!empty($this->music)){
            echo $this->music[$this->current] . "<br>";
        } else "Плейлист пуст!<br>";
    }

    public function SwitchUp()
    {
        if ($this->current + 1 >= count($this->music)){
            $this->current = 0;
        } else {
            $this->current++;
        }
    }

    public function SwitchDown()
    {
        if ($this->current -1 < 0){
            $this->current = count($this->music) - 1;
        } else{
            $this->current--;
        }
    }
}