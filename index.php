<?php
	$robot = new Robot();
	// 初期値を出力
	echo '初期値の名前：' . $robot->getName() . '<br>';
	echo '初期値の食べ物：' . $robot->getFood() . '<br>';

	$robot->setName('ドラ・ザ・キッド');
	$robot->setFood('ケチャップとマスタードをかけたドラ焼き');
	$robot->robot();

	// $robot = new Robot();
	// $robot->setName('ドラえもん');
	// $robot->setFood('どら焼き');
	// $robot->greeting();

	Class Robot {
		// プロパティ
		private $name;
		private $food;

		// コンストラクタで初期値を設定
		function __construct(){
			$this->name = ('ドラえもん');
			$this->food = ('どら焼き');
		}

		// メソッド
		public function setName($namae){
			$this->name = $namae;
		}

		public function getName(){
			return $this->name;
		}

		public function setFood($tabemono){
			$this->food = $tabemono;
		}

		public function getFood(){
			return $this->food;
		}

		private function talk(){
			echo 'こんにちは、ボクの名前は' . $this->name . 'です';
		}

		private function eat (){
			echo '好きな食べ物は' . $this->food . 'です';
		}

		public function greeting(){
			$this->talk();
			$this->eat();
		}

		

	}

