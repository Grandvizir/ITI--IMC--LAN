<?php

if(!empty($_GET['page']) && $_GET['page'] == "forum")
{
	if(!empty($_GET['post']) && !is_null($_GET['post']) && is_string($_GET['post']) && $_GET['post'] == "new" && !empty($_GET['cat']))
	{
		if(!empty($_POST['NewPost']) && $_POST['NewPost'] == '1')
		{
			if(!empty($_POST['titre']) && !empty($_POST['question']))
			{

				$titre = secureVarClient($_POST['titre']);
				$question = secureVarClient($_POST['question']);

				$post = New Post();
				$post->setCategorie(secureVarClient($_GET['cat']));
				$post->setContenu($question);
				$post->setCreated(time());
				$post->setName($titre);
				$post->setUserId($_SESSION['userId']);
				$post->setLastModify(time());

				ForumRepo::flushNewPost($post);
				header("location:/@/forum/cat/".$post->getCategorie());
			}
			else{
				$path = "bundle/forum/html/newPost.html.php";
			}
		}
		else
		{
			$path = "bundle/forum/html/newPost.html.php";
		}
	}

	else if(!empty($_GET['post']) && !is_null($_GET['post']) && is_string($_GET['post'])
	&& $_GET['post'] != "new"  && !empty($_GET['com']) && !empty($_GET['action']) && $_GET['action'] == "up"){
		$comId = secureVarClient($_GET['com']);

		//TO-DO
		// Faire un lastUpUserId pour verifier que l'U ne flood pas le ++

		$com = new Commentaire();
		$com = ForumRepo::getComById($comId);
		$com->setPower($com->getPower() + 1);
		ForumRepo::flushUpdateCom($com);

		header("location:/@/forum/post/".$com->getPostId());
	}

	else if(!empty($_GET['post']) && !is_null($_GET['post']) && is_string($_GET['post'])
		&& $_GET['post'] != "new"  && !empty($_GET['com']) && $_GET['com'] == "new")
	{
		if(!empty($_POST['NewCom']) && $_POST['NewCom'] == '1')
		{
			if(!empty($_POST['question']))
			{


				$question = secureVarClient($_POST['question']);
				$postId = secureVarClient($_GET['post']);


				$forum = ForumRepo::getAllComForPostId($postId);

				if(checkNewCom($_SESSION['userId'], $forum))
				{
					$post = New Commentaire();
					$post->setContenu($question);
					$post->setCreated(time());
					$post->setPower(0);
					$post->setUserId($_SESSION['userId']);
					$post->setPostId($postId);
					ForumRepo::flushNewCom($post);
					header("location:/@/forum/post/".$post->getPostId());
				}
				else
				{
					header("location:/@/forum/post/".$postId);
				}

			}
			else
			{
				$path = "bundle/forum/html/newCom.html.php";
			}
		}
		else
		{
			$path = "bundle/forum/html/newCom.html.php";
		}
	}

	else if(!empty($_GET['cat']) && $_GET['cat'] == "emptyPost")
	{
		$path = "bundle/forum/html/categorie.html.php";

	}

	elseif(!empty($_GET['cat']) && !is_null($_GET['cat']) && is_string($_GET['cat']) && $_GET['cat'] != "emptyPost" && !isset($_GET['post']))
	{
		$cat = secureVarClient($_GET['cat']);
		$forum = ForumRepo::getAllPostForCat($cat);

		$tmp_array = array();
		$tmp_array = $forum->getListPost();

		if(empty($tmp_array))
		{
			$tbl = array('time' => time(), 'HTTP_USER_AGENT' => $_SERVER['HTTP_USER_AGENT'], "ip" => $_SERVER['REMOTE_ADDR']);
			ForumErno::create($tbl, 1);
			//header("location:index.php?page=forum&cat=emptyPost");
		}
		$path = "bundle/forum/html/categorie.html.php";

	}
	else
	{
		$path = "bundle/forum/html/accueil.html.php";
		$forum = new forum();
		$forum = ForumRepo::getAllCat($forum);
		$forum = ForumRepo::getAllPost($forum);
	}

	if(!empty($_GET['post']) && !is_null($_GET['post']) && is_numeric($_GET['post']) && $_GET['post'] != "new" && !isset($_GET['com']))
	{

		$postSecure = secureVarClient($_GET['post']);

		if($post = ForumRepo::getPostById($postSecure))
		{
			$forum = ForumRepo::getAllComForPostId($postSecure); // ++ tout les commentaires associés !!!
		}
		else
		{
			//gestion erreur + log !
			header("location:/@/forum/");
		}
		$path = "bundle/forum/html/viewPost.html.php";
	}
}


function secureVarClient($value)
{
	$char = array("/", "\/", "'", "%", "&", "<", ">", "+", "=", "_", "$");
	$value = str_replace($char, "",$value);
	return $value;
}

function checkNewCom($userId, Forum $forum)
{
	$tbl = array() ;
	foreach($forum->getListCom() as $com)
	{
		$tbl[] = $com->getCreated()."/".$com->getUserId();
	}

	array_multisort($tbl, SORT_NUMERIC, SORT_DESC);
	if(substr($tbl[0], -1) == $userId)
	{
		return false;
	}
	else
		return true;
}

?>