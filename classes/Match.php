<?php

namespace Classes;

class Match
{
	private $attack;
	private $defense;
	private $keeper;

	public function __construct()
	{
		$this->attack=new Attack();
		$this->defense=new Defense();
		$this->keeper=new Keeper();
	}

	public function start(){
		echo "Start Match";
	}
	//TODO:Wrong way
//	public function attack(){
//
//	}
//
//	public function defense(){
//
//	}
//
//	public function keeper(){
//
//	}
}