<?php 
Class Cat { // 変数やメソッドのまとまり
    private $name;    // 属性(メンバ変数)
    private $weight;  // 属性(メンバ変数)

    // メンバ変数はクラスの中のどこからでも呼び出し可能

    // クラスの中で定義するときは[public]を付ける
    public function __construct($name, $weight) // $name, $weight メンバ変数
    {                             
        $this->name = $name;       
        $this->weight = $weight;  
    }

    // 猫が食事をすると体重が1キロ増えるプログラム
    public function eat($food) {
        $this->weight += 1;
        echo "体重:{$this->weight}kg";
    }

    function cry()
    {
        echo "私は{$this->name}だにゃん！";
    }
}

// インスタンスの作成
// キャットクラスの呼び出し
$cat1 = new cat("一郎", 5);
$cat2 = new cat("二郎", 3);

// クラスの中のメソッドを呼び出す際は、->(アロー)を使い呼び出す
$cat1->eat("魚"); // 体重：6kg
$cat2->eat("魚"); // 体重：4kg
$cat1->eat("魚"); // 体重：7kg