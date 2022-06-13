<!--
Author: Yann Trottier
File  : views/show.php
Desc. : Displays password information in modal window; outputted by controller.
-->
<form id="commentForm" method="post">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <div class="form-group info">
        <h4>Password</h4>
        <input type="text" style="float:bottom;" class="form-control" id="myModalLabel" value="<?php echo $data[0]['password_name'];?>" />
    </div>
</div>
<div class="modal-body" id="modal-body-id">
   <div class="form-group info">
       <label> Login: </label>
       <input type="text" class="form-control" value="<?php echo $data[0]['login'];?>" />
   </div>
   <div class="form-group info">
       <label> Password: </label>
       <input type="text" class="form-control" value="<?php echo $data[0]['password'];?>" />
   </div>
   <div class="form-group info">
       <label> URL: </label>
       <input type="text" class="form-control" value="<?php echo $data[0]['url'];?>" />
   </div>
</div>
<div class="modal-footer">
   <center><label> Notes </label>
   <textarea rows="5" class="form-control" style="width:90%;"><?php echo $data[0]['notes'];?></textarea></center>
</div>
</form>