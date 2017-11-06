<?php
	/**
	 * Created by PhpStorm.
	 * User: Dusan_Resavac
	 * Date: 06.11.2017
	 * Time: 20:19
	 */
	
	namespace Resavac\Laptop;
	
	
	class HPLaptop extends AbstractLaptop implements LaptopInterface
	{
		
		private $model;
		
		function __construct(int $price, float $size, string $model)
		{
			parent::__construct($price, $size);
			$this->model = $model;
		}
		
		function __toString() : string
		{
			return "Manufacturer: HP | Model: " . $this->model . " | " . parent::__toString();
		}
		
		public function getManufacturer(): string
		{
			return "HP";
		}
		
		public function getModel(): string
		{
			return $this->model;
		}
	}