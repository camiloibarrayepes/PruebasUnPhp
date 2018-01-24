<?php

include 'simpletest/autorun.php';
include 'comoHasEstado.class.php';

class PruebasUnitarias extends UnitTestCase{

	function testPruebaUnitaria(){

		$comoHasEstado = new comoHasEstado();

		$this->assertTrue('comoHasEstado.class.php');
		$this->assertEqual('ok', $comoHasEstado->yoComoEstoy());
	}
}

?>