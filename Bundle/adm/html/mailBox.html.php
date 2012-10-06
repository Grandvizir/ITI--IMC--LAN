<link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.css" type="text/css" />
<a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']); ?>"><button type="button" class="btn btn-inverse">Retour</button></a>
<h5><u>Liste des contacts</u></h5>
<table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
				  <th>IP</th>
				  <th>Date</th>
				  <th>View</th>
				  <th>Action</th>
                </tr>
              </thead>
              <tbody>
<?php
$listContact = Contact::getAllContact();

foreach ($listContact as $contact)
{
?>

	<tr>
                  <td><?php echo $contact->getId();?></td>
                  <td><?php echo $contact->getName();?></td>
                  <td><?php echo $contact->getmail();?></td>
         
                  <td><?php echo $contact->getIp();?></td>
                  <td><?php echo $contact->getSendTime();?></td>
                  <td><?php echo $contact->getView();?></td>
                  <td><a href=""><i class="icon-remove"></i></a> | <a href=""><i class="icon-edit"></i></a></td>
    </tr>
                
<?php
}
?>
</tbody>
</table>
