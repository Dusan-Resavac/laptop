<?php
	
	namespace Resavac\Laptop;
	
	/**
	 * Created by PhpStorm.
	 * User: Dusan_Resavac
	 * Date: 06.11.2017
	 * Time: 20:13
	 */
	abstract class AbstractLaptop
	{
		private $price;
		private $size;
		
		/**
		 * AbstractLaptop constructor.
		 * @param int   $price
		 * @param float $size
		 */
		function __construct(int $price,
							 float $size)
		{
			$this->price = $price;
			$this->size = $size;
		}
		
		/**
		 * @return int
		 */
		public function getPrice(): int
		{
			return $this->price;
		}
		
		/**
		 * @return float
		 */
		public function getSize(): float
		{
			return $this->size;
		}
		
		function __toString()
		{
			return "Price: " .  $this->price . " | Size: " . $this->size;
		}
		
	}