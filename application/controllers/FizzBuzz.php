<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FizzBuzz extends CI_Controller {
    function __construct() {
    }
    public function index()
	{
		$node = 20;
        $fizz = 30;
        $buzz = 13;
        $this->fizzbuzz($node, $fizz, $buzz);
	}

    public function fizzbuzz($x, $y, $z) 
    {
        // TO DO CODE

        for ($i=0; $i <= $x; $i++) { 
            if ($x % 3 == 0) {
                echo $x . " Node\n". "<br/>";
            }elseif($x % 5 == 0){
                echo $x . " Fizz\n". "<br/>";
            } else {
                echo $x . " buzz\n". "<br/>";
            }
        }

        for ($i=0; $i <= $y; $i++) { 
            if ($y % 3 == 0) {
                echo $y . " Fizz\n". "<br/>";
            }elseif($y % 5 == 0){
                echo $y . " Buzz\n". "<br/>";
            } else {
                echo $z . " Node\n". "<br/>";
            }
        }

        for ($i=0; $i <= $z; $i++) { 
            if ($z % 5 == 0) {
                echo $x . " Buzz\n". "<br/>";
            }elseif($z % 3 == 0){
                echo $z . " Fizz\n". "<br/>";
            } else {
                echo $z . " Node\n". "<br/>";
            }
        }
    }
}
