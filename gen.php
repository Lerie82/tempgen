#!/usr/bin/env php
<?php
/*
 Description: Generate web templates
 Supported frameworks: Bulma
 Author: Lerie Taylor / lerie@lerieatylor.com / 2021 / https://www.lerietaylor.com/
*/

/// check if we have any arguments, if not, show help and exit
if($argc<=1)
{
	$gen = new TempGen();
	echo $gen->showHelp();
	die();
}

/// go through the arguments, setup commands to execute
for($i=0;$i<=$argc-1;++$i)
{
	switch($argv[$i])
	{
		//default: echo "nothing?"; exit(); break;
		case "-f":
			/// new class
			$gen = new TempGen();
			$gen->parseFile($argv[$i+1]);

			die(var_dump($gen));

			echo "[-] Loading script from file..";
		break;
	}
}

///
class TempGen
{
	private $script_file;

	/// constructor: default/empty
	public function __construct() {}

	/// show help/arg info
	public function showHelp()
	{
		$help = "This script will generate web templates based on user input. See the README file for details.\n";
		$help .= "Arguments:\n";
		$help .= "-f file_name.lt\n";

		return $help."\n";
	}

	/// parse a file
	function parseFile($file)
	{
		$this->script_file = $file;
	}
}
?>
