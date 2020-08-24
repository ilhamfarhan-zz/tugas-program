<?php 
	class laptop
	{
		public $merk;

		public function hidupkan()
		{
			return 'Hidupkan laptop '.$this->merk;
 		}
	}

	$laptop1 = new laptop();
	$laptop1->merk = 'acer';
	echo $laptop1->hidupkan();
 ?>