<?php
require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase {
    public function testSuccessdisplayRecords()
    {
        //expected result of the test
        $expected = '<div><h3>Cuthbert</h3><h4>Pizza</h4><p>7</p></div>';
        
        //input for the test to get the result
        $testInput1 = [['artist-name' => 'Cuthbert', 'record-name' => 'Pizza', 'record-size' => 7]];
        //run the real function with the input
        $case = displayRecords($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailuredisplayRecords()
    {
        //expected result of the test
        $expected = 'No Records';
        //input for the test to get the result
        $testInput1 = [];
        //run the real function with the input
        $case = displayRecords($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformeddisplayRecords()
    {
        //input for the test to get the result
        $testInput1 = 0;
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = displayRecords($testInput1);
        
    }
}