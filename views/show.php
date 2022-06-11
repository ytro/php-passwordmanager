<!--
Author: Yann Trottier
File  : views/show.php
Desc. : Displays password information in modal window; outputted by controller.
-->

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	<center><h4>Password</h4></center>
	<center><input type="text" style="float:bottom;" id="myModalLabel" value="<?php echo $data[0]['password_name'];?>" /></center>
</div>
<div class="modal-body" id="modal-body-id">
   <label> Login: </label>
   <input type="text" value="<?php echo $data[0]['login'];?>" />
   <label> Password: </label>
   <input type="text" value="<?php echo $data[0]['password'];?>" />
   <label> URL: </label>
   <input type="text" value="<?php echo $data[0]['url'];?>" />
</div>
<div class="modal-footer">
   <center><label> Notes </label>
   <textarea rows="5" style="width:90%;"><?php echo $data[0]['notes'];?></textarea></center>
</div>