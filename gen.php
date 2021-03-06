#!/usr/bin/env php
<?php
/*
 Description: Generate web templates
 Supported frameworks: Bulma
 Author: Lerie Taylor / lerie@lerieatylor.com / 2021 / https://www.lerietaylor.com/
*/

$gen = new TempGen();

if($argc<=1)
{
	echo $gen->showHelp();
	die();
}

//go through the arguments
for($i=0;$i<=$argc-1;++$i)
{
	switch($argv[$i])
	{
		//default: echo "nothing?"; exit(); break;
		case "-f":
			echo "loading script from file..";
		break;
	}
}

//
class TempGen
{
	public function __construct() {}

	public function showHelp()
	{
		$help = "This script will generate web templates based on user input. See the README file for details.\n";
		$help .= "Arguments:\n";
		$help .= "-f file_name.lt\n";

		return $help."\n";
	}
}
?>
