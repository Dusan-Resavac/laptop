<?php
	/**
	 * Created by PhpStorm.
	 * User: Dusan_Resavac
	 * Date: 06.11.2017
	 * Time: 20:20
	 */
	
	namespace Laptop;
	
	
	interface LaptopInterface
	{
		public function getManufacturer() : string;
		public function __toString() : string;
		public function getModel() : string;
	}