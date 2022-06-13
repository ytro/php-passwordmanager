<!--
Author: Yann Trottier
File  : views/create.php
Desc. : New password form displayed in modal window; outputted by the controller.
-->

<form id="commentForm" method="post">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <div class="form-group info">
        <h4>Password</h4>
        <input type="text" class="form-control" style="float:bottom;" name="password_name" placeholder="Name" />
    </div>
</div>
    <div class="modal-body" id="modal-body-id">
       <div class="form-group info">
           <label> Login: </label>
           <input type="text" class="form-control" name="login" placeholder="Login" />
       </div>
       <div class="form-group info">
           <label> Password: </label>
           <input type="password" class="form-control" name="password" />
       </div>
       <div class="form-group info">
           <label> URL: </label>
           <input type="text" class="form-control" name="detail_link" placeholder="http://www.hotmail.com" />
       </div>
    </div>
    <div class="modal-footer">
       <center><label> Notes </label>
       <textarea name="notes" rows="5" class="form-control" style="width:90%"></textarea></center>
    </div>
    <div class="modal-footer">
       <input style="width:30%; float:right" id="createForm" class="btn btn-primary" onclick="sendRequest()" value="Create password" />
    </div>
</form>