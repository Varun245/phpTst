<?php

namespace Tests\Unit;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalulatorTest extends TestCase
{

    public function setUp()
    {
        $this->ss=new Calculator;
    }


    public function test_areaOfsquare()
    {
        $length=2;
        $response=$this->ss->areaOfSquare($length);
        $this->assertTrue(is_int($response));
        $this->assertEquals(4,$response);
    }

    public function test_areaOfsquare_lengthIs6()
    {
        $length=2;
        $response=$this->ss->areaOfSquare($length);
        $this->assertTrue(is_int($response));
        $this->assertEquals(4,$response);
    }

    // public function test_areaOfSquare_WhenCalledWithoutLength_ThrowAnException()
    // {
    //     $this->expectException('ArgumentCountError');
    //     $this->expectExceptionMessage('Too few arguments to function');
    //     $this->ss->areaOfSquare();
    // }
}