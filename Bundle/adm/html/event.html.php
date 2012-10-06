<?php
if(!empty($_GET['add']) && $_GET['add'] == '1')
{
	include("add_event.html.php");
}


?>
<br>
<link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.css" type="text/css" />
<a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']); ?>"><button type="button" class="btn btn-inverse">Retour</button></a>
<a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']); ?>/action/event/add"><button type="button" class="btn btn-success">Ajouter une evenement</button></a>
<h5><u>Liste des evenements</u></h5>
<table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Author</th>
				  
				  <th>Action</th>
                </tr>
              </thead>
              <tbody>
<?php
$listEvent = EventRepository::getAllEvent();

foreach ($listEvent as $event)
{
?>

	<tr>
                  <td><?php echo $event->getId();?></td>
                  <td><?php echo $event->getName();?></td>
                  <td><?php echo $event->getUserId();?></td>
         
                 
                  <td><a href=""><i class="icon-remove"></i></a> | <a href=""><i class="icon-edit"></i></a></td>
    </tr>
                
<?php
}
?>
</tbody>
</table>
