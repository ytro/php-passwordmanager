<!--
Author: Yann Trottier
File  : views/authenticate.php
Desc. : Authentication form displayed in modal window; ouputted by the controller.
-->

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <span id="myModalLabel"><?php echo $data[0]['password_name'];?></span>
</div>
<div class="modal-body" id="modal-body-id">
   <form id="commentForm" method="post">
   <div class="form-group <?php if(isset($error)) echo 'has-error'; ?>">
       <label>
            <?php 
                if($action == 'View') echo 'Enter the master password:'; 
                if($action == 'Delete') echo "Type 'SUPPRIMER'";
             ?>
       </label>
       <input type="<?php 
                if($action == 'View') echo 'password'; 
                if($action == 'Delete') echo 'text';?>" 
              name="MasterPass"
              class="form-control"/>
   </div>
   <input onClick="sendRequest()" id="formSubmit" class="btn btn-primary" value="<?php echo $action?> password" />
   </form>
</div>
<?php if(isset($error)): ?> 
    <div class="modal-footer">
        <div class="form-group has-error">
        <label class="control-label"><?php echo $error; ?></label>
    </div>
<?php endif; ?>
