<?php

namespace tests\models;

use PHPUnit\Framework\TestCase;
use ipkroks\exponentiation\Exponentiation;


class ExponentiationTest extends TestCase
{
    public function testGo(){
        $exponant = new Exponentiation();
        $this->assertEquals($exponant->go(3), 9);
    }
}