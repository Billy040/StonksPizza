<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class BerekeningTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testPrijsBerekening()
    {
       $prijs = 8.50;
       $aantal = 2;

       $totaal = $prijs * $aantal;

         $this->assertEquals(17.00, $totaal);

    }
}
