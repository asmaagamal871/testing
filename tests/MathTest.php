<?php
require './src/Math.php';

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testFactorial()
    {
        $math = new Math();
        $this->assertEquals(1, $math->factorial(0));
        $this->assertEquals(1, $math->factorial(1));
        $this->assertEquals(120, $math->factorial(5));
        $n = rand(3, 20);
        echo $n;
        $this->assertEquals($n * $math->factorial($n - 1), $math->factorial($n));
        $this->assertEquals(null, $math->factorial(-3));
        $this->assertEquals(null, $math->factorial(1.5));
        $this->assertEquals(null, $math->factorial(false));
        $this->assertEquals(null, $math->factorial('abc'));

    }
}
