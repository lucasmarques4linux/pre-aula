<?php 

trait LogTrait
{
	public function log($message){
		echo "Escrevendo Log: {$message}";
	}

}

class X
{

}

class Z extends X
{
	use LogTrait;

	public function save(){
		$this->log('Salvando e Escrevendo log');
	}

}

$z = new Z();
$z->save();