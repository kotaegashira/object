<?php 

class Character
{
    // メンバ変数
    // ヒットポイント(HP)
    public $hitPoint;

    // 初期化メソッド
    public function __construct() {
        $this->hitPoint = 30;
        echo "初期HPは". $this->hitPoint. "です！<br>";
    }

    // メンバメソッド
    // 戦う
    function hit($point) {
        echo "攻撃した！モンスターに". $point. "のダメージ！<br>";
    }

    // メンバメソッド
    // 逃げる
    function runAway() {
        echo "逃げた<br>";
    }

    // モンスターからの攻撃でHPが減る
    public function attacked ($point) {
        $this->damaged($point);
        $this->hitPoint -= $point;
        echo "残りHPは". $this->hitPoint. "です...<br>";
    }

    // モンスターからのダメージ
    public function damaged($point) {
        echo "モンスターからの攻撃を受けた<br>";
        echo $point. "のダメージ!<br>";
    }
}

// クラスをオブジェクト化して使う(動的)
// $オブジェクト名 = new クラス名(引数);
// $オブジェクト名->メンバ変数 = 20;
// $オブジェクト名->メンバメソッド();
$hero = new Character();
$hero->hitPoint = 20;
print_r($hero);
echo "<br>";
// $hero->hit();

// クラスのまま使う(静的)
// クラス名::メンバメソッド();
// Character::hit();

// メンバメソッドの引数
$hero->hit(5);

// コンストラクタ
?>