<?php
	/**
	 * Created by PhpStorm.
	 * User: Dusan_Resavac
	 * Date: 06.11.2017
	 * Time: 20:25
	 */
	
	namespace Resavac\Laptop;
	
	
	class DellLaptop extends AbstractLaptop implements LaptopInterface
	{
		
		private $model;
		private $hasWebcam;
		
		function __construct(int $price, float $size, string $model, bool $hasWebcam)
		{
			parent::__construct($price, $size);
			$this->model = $model;
			$this->hasWebcam = $hasWebcam;
		}
		
		function __toString() :string
		{
			return "Manufacturer: DELL | Model: " . $this->model . " | Has Webcam: " . $this->hasWebcam . " | " . parent::__toString();
		}
		
		public function getManufacturer(): string
		{
			return "DELL";
		}
		
		public function getModel(): string
		{
			return $this->model;
		}
	}