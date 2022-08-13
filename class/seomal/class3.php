<?php 
class Dog {
    private $type; 
    private $color;

    // クラスの中で定義するときは[public]を付ける
    public function __construct($type, $color) // $name, $weight メンバ変数
    {                             
        $this->type = $type;       
        $this->color = $color;  
    }

    function cry() {
        echo "{$this->type}だワン！";
    }
}
$dog = new Dog('ブルドッグ', 'gray');
$dog->cry();

?>