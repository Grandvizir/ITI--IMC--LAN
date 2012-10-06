<link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.css" type="text/css" />
<a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']); ?>"><button type="button" class="btn btn-inverse">Retour</button></a>
<h5><u>Liste des membres</u></h5>
<table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
				  <th>Last Connexion</th>
				  <th>Ip</th>
				  <th>Role</th>
				  <th>Action</th>
                </tr>
              </thead>
              <tbody>
<?php
$listUser = UserRepository::getAllMembre();

foreach ($listUser as $user)
{
?>

	<tr>
                  <td><?php echo $user->getId();?></td>
                  <td><?php echo $user->getName();?></td>
                  <td><?php echo $user->getLastName();?></td>
                  <td><?php echo $user->getMail();?></td>
                  <td><?php echo $user->getLastConnexion();?></td>
                  <td><?php echo $user->getIp();?></td>
                  <td><?php echo $user->getRole();?></td>
                  <td><a href=""><i class="icon-remove"></i></a> | <a href=""><i class="icon-edit"></i></a></td>
    </tr>
                
<?php
}
?>
</tbody>
</table>

                
             