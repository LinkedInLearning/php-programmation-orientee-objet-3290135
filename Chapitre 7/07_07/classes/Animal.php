<?php

abstract class Animal {

    abstract public function manger();


    public function dormir()
    {
        return "je dors";
    }
}

//$animal = new Animal();

class Chien extends Animal {

    public function manger()
    {
        return "je mange des croquettes pour chien.";
    }
}

class Chiot extends Chien {

}

class Chat extends Animal {

    final public function manger()
    {
        return "Je mange des croquettes pour chat";
    }
}

class Chaton extends Chat {

 

}



$chien = new Chien();
echo $chien->manger();

$chat = new Chat();
echo $chat->manger();

$chaton = new Chaton();
echo $chaton->manger();

