<?php
class Complex {
	/*
	 * PHP Complex Numbers Class
	 *
	 */
	protected $re; // Real part
	protected $im; // Imaginary part
	function __construct ($r,$i) {
		$this->re = (double)$r;
		$this->im = (double)$i;
	}
	public static function Add($c1, $c2) {
		return new Complex($c1->re + $c2->re, $c1->im + $c2->im);
	}
	public static function Sub($c1, $c2) {
		return new Complex($c1->re - $c2->re, $c1->im - $c2->im);
	}
	public static function Mp($c1, $c2) {
		return new Complex($c1->re * $c2->re, $c1->im * $c2->im);
	}
	public static function Div($c1, $c2) {
		return new Complex($c1->re / $c2->re, $c1->im / $c2->im);
	}
	public function result() {
		return $this->re.' + '.$this->im.'i';
	}
	public function show() {
		echo '<pre>';
		print_r($this->result());
		echo '</pre>';
	}
}
$cnum1 = new Complex(2,3);
$cnum2 = new Complex(4,5);
$oper = (object) [
	'summ' => Complex::Add($cnum1,$cnum2)
	, 'sub' => Complex::Sub($cnum1,$cnum2)
	, 'mp' => Complex::Mp($cnum1,$cnum2)
	, 'div' => Complex::Div($cnum1,$cnum2)
];
echo 'Возьмем 2 комплексных числа:';
echo $cnum1->show();
echo $cnum2->show();
echo 'Сумма:';
echo $oper->summ->show();
echo 'Разность:';
echo $oper->sub->show();
echo 'Умножение:';
echo $oper->mp->show();
echo 'Деление:';
echo $oper->div->show();
?>