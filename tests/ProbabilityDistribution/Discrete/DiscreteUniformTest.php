<?php
require_once('tests/CustomPHPUnit.php');
require_once('lib/ProbabilityDistribution/Discrete/DiscreteUniform.php');

class DiscreteUniformTest extends CustomPHPUnit {
	private $testObject;

	public function __construct() {
		$this->testObject = new DiscreteUniform(1, 10);
	}

	public function test_rvs() {
		//$this->assertEquals(, $this->testObject->rvs);
	}

	public function test_pmf() {
		$this->assertEquals(0.1, $this->testObject->pmf(4));
	}

	public function test_cdf() {
		$this->assertEquals(0.4, $this->testObject->cdf(4));
	}

	public function test_sf() {
		$this->assertEquals(0.6, $this->testObject->sf(4));
	}

	public function test_ppf() {
		$this->assertEquals(2, $this->testObject->ppf(0.2));
	}

	public function test_isf() {
		$this->assertEquals(9, $this->testObject->isf(0.2));
	}

	public function test_stats() {
		$summaryStats = $this->testObject->stats('mvsk');

		$this->assertEquals(5.5, $summaryStats['mean']);
		$this->assertEquals(8.33333, round($summaryStats['variance'], 5));
		$this->assertEquals(0, $summaryStats['skew']);
		//$this->assertEquals(, $summaryStats['kurtosis']);
	}
}
?>
