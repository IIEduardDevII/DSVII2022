<?php

class Operacion 
	{  
		protected $num; 
		protected $contador;
		protected $suma;
		 
 
		function __construct($num, $cont, $sum)
		{  
			$this->num = $num;
			$this->contador = $cont;
			$this->suma = $sum;
		} 
		function calc_operacion()
		{  
			foreach ($this->num as $indice => $numero)
			{
				if ($this->contador == 2)
				{
					$numero=$this->suma; 
					echo $numero."<br>";
					$this->contador=$this->contador-2;
					$this->suma=$this->suma-$this->suma;
				}
				else
				{
					echo $numero."<br>"; 
					$this->contador=$this->contador+1;
					$this->suma=$this->suma+$numero;
				}
			}
		} 
 
		
 
	}
?>