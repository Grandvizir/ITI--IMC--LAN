<?php


	class Upload
	{
		private $id;
		public $extension = array(".jpg",".jpeg",".png", ".c");
		private $name;
		private $path;
		private $pathMin;
		private $timeUpload;
		private $userID;


		function __construct()
		{


		}


		function Upload(array $file, $userId)
		{
			$this->name = $file['name'];
			if(!empty($file['path']) || !empty($file['pathMin']))
			{
				$this->path = $file['path'];
				$this->pathMin = $file['pathMin'];
			}
			$this->timeUpload = time();
			$this->userID = $userId;
		}


		function getId(){
			return $this->id;
		}

		function setId($id){
			$this->id = $id;
		}

		public function getExtension(){
			return $this->extension;
		}

		public function setExtension(array $array){
			if(is_array($array)){
				$this->extension = $array;
			}
		}

		public function getName(){
			return $this->name;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function getPath(){
			return $this->path;
		}

		public function getPathMin(){
			return $this->pathMin;
		}

		public function setPathMin($pathMin){
			$this->pathMin = $pathMin;
		}

		public function setPath($path){
			$this->path = $path;
		}

		public function getTimeUpload(){
			return $this->timeUpload;
		}

		public function setTimeUpload($upload){
			$this->timeUpload = $upload;
		}

		public function getUserId(){
			return $this->userID;
		}

		public function setUserId($userId){
			$this->userID = $userId;
		}
	}

?>