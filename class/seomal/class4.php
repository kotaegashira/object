<?php 

class Robot {
    private $name;
    private $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function run() {
        echo "{$this->name}が走ります<br/>";
    }

    public function junp() {
        echo "{$this->name}が飛びます<br/>";
    }
}
$robot = new Robot('ASIMO', '白');
$robot->run();
$robot->junp();

?>