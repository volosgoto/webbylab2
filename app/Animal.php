<?php
namespace app;

class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        return $this->getName();
    }

    public function getName() {
        return $this->name;
    }
}