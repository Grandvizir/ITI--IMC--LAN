<?php

include("controller.upload.php");

if(!empty($_GET['page']) && $_GET['page'] == "photos")
{
	//route !
	$path = "html/home.html.php";
	if(!empty($_GET['action']))
	{
		switch ($_GET['action']) {
			case "upload":
				$path = "html/upload.html.php";
				break;
			case "home":
				$path = "html/home.html.php";
				break;
			case "view":
				$path = "html/view.html.php";
				;
				break;

			default:
				;
		}
	}

	if(!empty($_FILES['upld']))
	{
		if($_FILES['upld']['error'] === 0)
		{
			if(ControllerUpload::isSecureUpload($_FILES['upld']) == 1)
			{
				ControllerUpload::flushUpload($_FILES['upld']);
				header("location:/@/concours/");
			}
			else
			{
				header("location:/@/concours/"); // TO-DO LOG + GESTION ERNO
			}
		}
		else
			header("location:/@/concours/"); // TO-DO LOG + GESTION ERNO
	}


}
?>