<!--
Author: Yann Trottier
File  : views/authenticate.php
Desc. : Authentication form displayed in modal window; ouputted by the controller.
-->

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
		<h4 id="myModalLabel"><?php echo $data[0]['password_name'];?></h4>
</div>
<div class="modal-body" id="modal-body-id">
   <form id="commentForm" method="post">
   <center><label style="font-size:15px"> Enter the master password: </label>
   <input style="font-size:15px" type="password" name="MasterPass"/></center>
   <input style="width:20%; float:right" onClick="sendRequest()" id="formSubmit" class="btn btn-primary" value="<?php echo $action?> password" />
   </form>
</div>
<?php if(isset($error)): ?> 
<div class="modal-footer"><h5 style="color:red"><?php echo $error; ?></h5></div>
<?php endif; ?>
