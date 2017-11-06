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
		
		/**
		 * DellLaptop constructor.
		 * @param int    $price
		 * @param float  $size
		 * @param string $model
		 * @param bool   $hasWebcam
		 */
		function __construct(int $price, float $size, string $model, bool $hasWebcam)
		{
			parent::__construct($price, $size);
			$this->model = $model;
			$this->hasWebcam = $hasWebcam;
		}
		
		/**
		 * @return string
		 */
		function __toString() :string
		{
			return "Manufacturer: DELL | Model: " . $this->model . " | Has Webcam: " . $this->hasWebcam . " | " . parent::__toString();
		}
		
		/**
		 * @return string
		 */
		public function getManufacturer(): string
		{
			return "DELL";
		}
		
		/**
		 * @return bool
		 */
		public function isHasWebcam(): bool
		{
			return $this->hasWebcam;
		}
		
		/**
		 * @return string
		 */
		public function getModel(): string
		{
			return $this->model;
		}
	}