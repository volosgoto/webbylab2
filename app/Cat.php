<?php
namespace app;

class Cat extends  Animal {
    public function meow() {
        return 'Cat ' . $this->getName() . ' is saying meow';
//        return "Cat {$this->getName()} is saying meow";
    }
}

