<?php
require_once("file.class.php");
require_once("file.repository.php");
require_once( "lib/imagethumb/imagethumb.php");

class ControllerUpload extends Upload
{
	public function isSecureUpload(array $file)
	{
		//secure Extension is_array + type MIME
		$extension = strtolower(strrchr($file['name'],'.'));

		$upload = new Upload();
		$upload->Upload($file, $_SESSION['userId']);
		if(in_array($extension, $upload->getExtension())){
			return 1;
		}
		else
		 return 0;
	}

	public function flushUpload(array $file)
	{

		$time = time();
		$path = "bundle/upload/ressource/".$time.$file['name'];
		$pathMin = "bundle/upload/ressource/min/".$time.$file['name'];
		$file['path'] = $path;
		$file['pathMin'] = $pathMin;

		$newFile = new Upload();
		$newFile->Upload($file, $_SESSION['userId']);

		FileRepository::flushUpload($newFile);
			$image_src  = $file['tmp_name'];
			$image_dest = $pathMin;
			imagethumb($image_src, $image_dest, 150);

		//TEST miniatures



		if(move_uploaded_file($file['tmp_name'], $path))
		{
			return 1;
		}
		else
			return 0;
	}

	public function getAllMin()
	{
		$array = array();

		$array = FileRepository::getAllMinInArray();
		return $array;

	}
}
?>