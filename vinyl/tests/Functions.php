<?php
require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase {
    public function testSuccessdisplayRecords()
    {
        //expected result of the test
        $expected = '<div><section class ="recordsContent"><img src="www.image.com"/><h3>Cuthbert</h3><h4>Pizza</h4><p>Single</p></section><form action="hiddendelete.php" method="POST"><input type= "hidden" name="delete" value="1"/><button>delete</button></form></div>';

        //input for the test to get the result
        $testInput1 = [['images' => 'www.image.com', 'artist-name' => 'Cuthbert', 'record-name' => 'Pizza', 'record-type' => 'Single', 'id' => 1]];
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

    public function testSuccessvalidatePost()
    {
        //expected result of the test
        $expected = TRUE;

        //input for the test to get the result
        $testInput1 = [['artist-name' => 'Amy Winehouse', 'record-name' => 'Back to Black', 'record-size' => '7 inch']];
        //run the real function with the input
        $case = validatePost($testInput1);
        //compare the expected result with the actual result
        $this->assertTrue($expected, $case);
    }

    public function testFailurevalidatePost()
    {
        //expected result of the test
        $expected = FALSE;
        //input for the test to get the result
        $testInput1 = [['artist-name' => '', 'record-name' => 'Back to Black', '' => '']];
        //run the real function with the input
        $case = validatePost($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedvalidatePost()
    {
        //input for the test to get the result
        $testInput1 = '';
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = validatePost($testInput1);
        
    }

    }
