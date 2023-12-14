<?php

interface Pizza
{
    public function print();
}

abstract class Topping
{
    abstract public function print();
}

class BasicPizza implements Pizza
{
    public function print(){
       echo "added basic pizza" . PHP_EOL;
    }
}

class Cheese extends Topping implements Pizza
{
    public function __construct(Pizza $pie){
        $this->Pizza = $pie;
    }

    public function print(){
        echo $this->Pizza->print() . "added cheese" . PHP_EOL;
    }
}

class Bacon extends Topping implements Pizza
{
    public function __construct(Pizza $pie){
        $this->Pizza = $pie;
    }

    public function print(){
        echo $this->Pizza->print() . "added bacon" . PHP_EOL;
    }
}

class Pineapple extends Topping implements Pizza
{
    public function __construct(Pizza $pie){
        $this->Pizza = $pie;
    }

    public function print(){
        echo $this->Pizza->print() . "added pineapple" . PHP_EOL;
    }
}

class Mushrooms extends Topping implements Pizza
{
    public function __construct(Pizza $pie){
        $this->Pizza = $pie;
    }

    public function print(){
        echo $this->Pizza->print() . "added mushrooms" . PHP_EOL;
    }
}

class Seafood extends Topping implements Pizza
{
    public function __construct(Pizza $pie){
        $this->Pizza = $pie;
    }

    public function print(){
        echo $this->Pizza->print() . "added seafood" . PHP_EOL;
    }
}

$pizza = new Seafood(new Mushrooms(new Pineapple(new Bacon(new Cheese(new BasicPizza())))));

$pizza->print();
