<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Palindrome extends CI_Controller {

    function __construct() {
  
     }
    public function index()
	{
		$wordList = ("Latihan"); 
        $this->palindrome($wordList);
      
        
	}

    public function palindrome($x) 
    {
        // TO DO CODE

        $j = 0;
        while(!empty($x[$j])) {
           $j++;
        }
        
        for($i = ($j-1); $i >= 0; $i--) {
            echo $x[$i]." Palindrom";
        }

    }
}
