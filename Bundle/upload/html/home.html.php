
<?php
require_once("Bundle/upload/controller.upload.php");
  //var_dump(ControllerUpload::getAllMin());

?>

<div class="photos">
Nos photos :

<?php

	foreach(ControllerUpload::getAllMin() as $val)
	{
		echo '

			<div class="span1" style="margin-top:5px;">
				<a href="/@/concours/action/view/'.$val->getId().'">
					<img src="/'.$val->getPathMin().'"/>
				</a>
			</div>

			';
	}
?>
</div>