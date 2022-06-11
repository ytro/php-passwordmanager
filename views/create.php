<!--
Author: Yann Trottier
File  : views/create.php
Desc. : New password form displayed in modal window; outputted by the controller.
-->

<form id="commentForm" method="post">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
	<center><h4>Password</h4></center>
	<center><input type="text" style="float:bottom;" name="password_name" placeholder="Name" /></center>
</div>
	<div class="modal-body" id="modal-body-id">
	   <label> Login: </label>
	   <input type="text" name="login" placeholder="Login" />
	   <label> Password: </label>
	   <input type="text" name="password" />
	   <label> URL: </label>
	   <input type="text" name="detail_link" placeholder="http://www.hotmail.com" />
	</div>
	<div class="modal-footer">
	   <center><label> Notes </label>
	   <textarea name="notes" rows="5" style="width:90%"></textarea></center>
	</div>
	<div class="modal-footer">
	   <input style="width:30%; float:right" id="createForm" class="btn btn-primary" onclick="sendRequest()" value="Create password" />
	</div>
</form>