<?php
namespace Guru86\LaravelRandomDisplay;
//version 1.1
class CoinFactory
{

	// protected $words=[
	// 'welcome',
	// 'Have a nice day',
	// 'Hellow'
	// ];

	public function __construct(array $words=null){

		$words=array(
	'welcome',
	'Have a nice day',
	'Hellow'
	   );

         $this->words=$words;

       
	}

	// public function welcome(){

	// 	echo "Create a new package welcome";

	// }
	public function getRandomWord(){

		//dd($this->words);

		return $this->words[array_rand($this->words)];
	}
	public function getRandomWords(){

		//Implementation

		return $this->words[array_rand($this->words)];
	}
	
}
?>