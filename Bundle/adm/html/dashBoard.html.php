<?php



?>

<div class="span3">Il y a actuellement <?php echo count(UserRepository::getAllMembre()); ?> membres <a a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']);?>/action/user">User Administration</a></div>
<div class="span3" style="margin-left:3px;" >Vous avez actuellement <?php echo count(Contact::getAllContact()); ?> message(s) dans votre <a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']);?>/action/message">mailBox</a></div>


<div class="span3" style="margin-left:3px;">Vous avez actuellement <?php echo count(EventRepository::getAllEvent()); ?> &eacute;venement(s) dans votre <a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']);?>/action/event">EventBox</a></div>



