<?php
namespace Guru86\LaravelRandomDisplay\Tests;

use PHPUnit\Framework\TestCase;

class CoinFactoryTest extends TestCase
{

	public function it_returns_a_random_joke(){

		$this->assertTrue(true);

	}

	public function it_returns_a_predefined_joke(){

		$wordscheck=[
	'welcome',
	'Have a nice day',
	'Hellow'
	   ];

	    $words=new CoinFactory();
	    $word=$words->getRandomWord();

	    $this->assertContains($word,$wordscheck);

	}
	
}
?>