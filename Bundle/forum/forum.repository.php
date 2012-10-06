<?php
require_once("/bundle/Reader/Reader.class.php");
include('forum.class.php');
include('forum.categorie.class.php');
include('forum.post.class.php');
include('forum.com.class.php');

class ForumRepo extends Reader
{

	public function flushNewPost(Post $post)
	{
		$bdd = ForumRepo::getPdoConnexion();
		$req = $bdd->prepare('INSERT INTO post(name, contenu, categorie, userId, created, lastModify) VALUES(:name, :contenu, :categorie, :userId, :created, :lastModify)');
		$req->execute(array(
					'name' => $post->getName(),
					'contenu' => $post->getContenu(),
					'categorie' => $post->getCategorie(),
					'userId' => $post->getUserId(),
					'created' => $post->getCreated(),
					'lastModify' => $post->getLastModify()
				));
	}

	public function flushNewCom(Commentaire $post)
	{
		$bdd = ForumRepo::getPdoConnexion();
		$req = $bdd->prepare('INSERT INTO commentaire(userId, contenu, created, power, postId) VALUES(:userId, :contenu, :created, :power, :postId)');
		$req->execute(array(
					'contenu' => $post->getContenu(),
					'userId' => $post->getUserId(),
					'created' => $post->getCreated(),
					'power' => $post->getPower(),
					'postId' => $post->getPostId()
				));
	}

	public function flushUpdateCom(Commentaire $com)
	{
			$bdd = ForumRepo::getPdoConnexion();
			$reponse = $bdd->prepare('UPDATE commentaire SET contenu = :contenu, created = :created, postId = :postId, userId = :userId, power = :power where id=:id');
			$reponse->execute(array(
								'id' => $com->getId(),
								'contenu' => $com->getContenu(),
								'created' => $com->getCreated(),
								'postId' => $com->getPostId(),
								'userId' => $com->getUserId(),
								'power' => $com->getPower()
								));
	}

	public function getComById($id)
	{
		$bdd = ForumRepo::getPdoConnexion();
		$reponse = $bdd->prepare('SELECT * FROM commentaire where id=:id');
		$reponse->execute(array('id' => $id));
		$donnees = $reponse->fetch();
		if($donnees)
		{
			$com = New Commentaire();
			$com->setContenu($donnees['contenu']);
			$com->setCreated($donnees['created']);
			$com->setPostId($donnees['postId']);
			$com->setPower($donnees['power']);
			$com->setId($donnees['id']);
			$com->setUserId($donnees['userId']);
			return $com;
		}
		else
		{
			return false;
		}
	}

	public function getAllCat(Forum $forum){
		$bdd = ForumRepo::getPdoConnexion();
		$reponse = $bdd->query('SELECT * FROM categorie');

		$array = array();

		while($donnees = $reponse->fetch())
		{
			$cat = new Categorie();
			$cat->setId($donnees['id']);
			$cat->setName($donnees['name']);
			array_push($array, $cat);
		}
		$forum->setListCat($array);
		return $forum;
	}

	public function getAllPost(Forum $forum){
		$bdd = ForumRepo::getPdoConnexion();
		$reponse = $bdd->query('SELECT * FROM post');
		$array = array();

		while($donnees = $reponse->fetch())
		{
			$post = new Post();
			$post->setId($donnees['id']);
			$post->setName($donnees['name']);
			$post->setCategorie($donnees['categorie']);
			//more
			array_push($array, $post);
		}
		$forum->setListPost($array);
		return $forum;
	}

	public function getAllPostForCat($cat){
		$bdd = ForumRepo::getPdoConnexion();
		$reponse = $bdd->prepare('SELECT * FROM post where categorie=:cat ORDER BY lastModify ASC');
		$reponse->execute(array('cat' => $cat));


		$forum = new Forum();
		$array = array();

		while($donnees = $reponse->fetch())
		{
			$post = new Post();
			$post->setId($donnees['id']);
			$post->setCategorie($donnees['categorie']);
			$post->setName($donnees['name']);
			$post->setContenu($donnees['contenu']);
			$post->setUserId($donnees['userId']);
			$post->setCreated($donnees['created']);
			$post->setLastModify($donnees['lastModify']);
			$array[] = $post;
		}
		$forum->setListPost($array);
		return $forum;
	}

	public function getAllComForPostId($id)
	{
		$bdd = ForumRepo::getPdoConnexion();
		$reponse = $bdd->prepare('SELECT * FROM commentaire where postId=:id ORDER BY power DESC');

		$reponse->execute(array('id' => $id));

		$forum = new Forum();
		$array = array();

		while($donnees = $reponse->fetch())
		{
			$com = new Commentaire();
			$com->setId($donnees['id']);
			$com->setContenu($donnees['contenu']);
			$com->setPower($donnees['power']);
			$com->setUserId($donnees['userId']);
			$com->setCreated($donnees['created']);
			$com->setPostId($donnees['postId']);
			$array[] = $com;
		}
		$forum->setListCom($array);
		return $forum;
	}

	public function getPostIdByCat($cat){
		if(is_numeric($id))
		{
			$bdd = ForumRepo::getPdoConnexion();
			$reponse = $bdd->prepare('SELECT * FROM post where cat=:cat');
			$reponse->execute(array('cat' => $cat));
			$donnees = $reponse->fetch();
			if($donnees)
			{
				$com = New Commentaire();
				$com->setContenu($donnees['contenu']);
				$com->setCreated($donnees['created']);
				$com->getPostId($donnees['created']);
				return $user;
			}
			else
			{
				return false;
			}
		}
		else
			return false;
	}

	public function getPostById($id){
		$bdd = ForumRepo::getPdoConnexion();
		$reponse = $bdd->prepare('SELECT * FROM post where id=:id');
		$reponse->execute(array('id' => $id));
		if($reponse)
		{
			while($donnees = $reponse->fetch())
			{
				$post = new Post();
				$post->setId($donnees['id']);
				$post->setCategorie($donnees['categorie']);
				$post->setName($donnees['name']);
				$post->setContenu($donnees['contenu']);
				$post->setUserId($donnees['userId']);
				$post->setCreated($donnees['created']);
				$post->setLastModify($donnees['lastModify']);
			}
			return $post;
		}
		else
		{
			return FALSE;
		}
	}

}
?>