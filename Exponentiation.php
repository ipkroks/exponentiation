<?php

namespace popov\exponentiation;

class Exponentiation {
	public function go($number) {
		return $number * 2;
	}
}

$ex = new Exponentiation();

echo $ex->go(5);