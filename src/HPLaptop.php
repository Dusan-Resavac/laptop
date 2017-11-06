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
		
		/**
		 * HPLaptop constructor.
		 * @param int    $price
		 * @param float  $size
		 * @param string $model
		 */
		function __construct(int $price, float $size, string $model)
		{
			parent::__construct($price, $size);
			$this->model = $model;
		}
		
		/**
		 * @return string
		 */
		function __toString() : string
		{
			return "Manufacturer: HP | Model: " . $this->model . " | " . parent::__toString();
		}
		
		/**
		 * @return string
		 */
		public function getManufacturer(): string
		{
			return "HP";
		}
		
		/**
		 * @return string
		 */
		public function getModel(): string
		{
			return $this->model;
		}
	}