<?php

class ForumErno{


	private $ArrayPostEmpty = '<div class="alert alert-error">Aucune question n\'a &eacute;t&eacute; pos&eacute; dans cette cat&eacute;gorie</div>';

	public function create($tbl, $value){
		ob_start();
		setcookie('ForumErno', $value);
		ob_end_flush();
	}

	public function destroy(){
		ob_start();
		setcookie('ForumErno', 'deleted',  time() * 3600);
		ob_end_flush();
	}

	public function controllerGestion()
	{
		ob_start();
		if(!empty($_COOKIE['ForumErno']) &&  is_numeric(intval($_COOKIE['ForumErno'])))
		{


			$value = $_COOKIE['ForumErno'];
			switch ($value) {
				case 1:
					echo $this->ArrayPostEmpty;
					ForumErno::destroy();
					break;
				case 2:
					echo "";
					break;
				case 3:
					echo "";
					break;
				case 4:
					echo "";
					break;
				default:
					echo "";
				;
			} // switch
		}
		else
			return false;
	}
}

?>