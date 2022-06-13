<?php

/* --
Author: Yann Trottier
File  : controllers/password.controller.php
Desc. : Controller accessed on application start. Registers database 
        information provided by the model, password_model. Variables
        are then employed to correctly display the requested views.
*/

class Password extends Controller
{
    /* -- 
    Method accessed on application start. Outputs password table.
    */
    
    function home(){
        $this->loadModel('password_model');
        $this->sendToView('data', $this->password_model->get_all());
        $this->sendToView('columns', [
            "password_name" => "Name",]);
        $this->sendToView('actions', [
            "view"      => "index.php?url=password/view/",
            "delete"    => "index.php?url=password/delete/"]);
        $this->sendToView('create',"index.php?url=password/create");
        $this->loadView('list');
    }
    
    /* -- 
    If requested password exists and user is authenticated, outputs the 
    password record.
    */
    
    function view($id){
        $this->loadModel('password_model');
        if(!$this->password_model->check_exists($id)) $this->home();
        else {
            $this->sendToView('data', $this->password_model->get_details($id));
            if($this->isAuth('View'))
                $this->loadView('show', false);
        }
    }
    
    /* -- 
    If requested password exists and user is authenticated, deletes the 
    password record and redirects user to main view.
    */
    
    function delete($id) {
        $this->loadModel('password_model');
        if(!$this->password_model->check_exists($id)) $this->home();
        else {
            $this->sendToView('data', $this->password_model->get_details($id));
            if($this->isAuth('Delete')) {
                $this->password_model->delete_password($id);
                $this->loadView('reload_page', false);
            }
        }
    }
    
    /* -- 
    If form hasn't been submitted, outputs the form view. Otherwise, creates 
    a new password using the fields and redirects user to main view.
    */
    
    function create() {
        if($_SERVER['REQUEST_METHOD'] != 'POST') {
            $this->sendToView('create',"index.php?url=password/create");
            $this->loadView('create', false);
        } 
        else {
            $fields = $_POST;
            $this->loadModel('password_model');
            $this->password_model->new_password(NULL,
                                                $fields['password_name'], 
                                                $fields['login'], 
                                                $fields['password'], 
                                                $fields['detail_link'], 
                                                $fields['notes']);
            $this->loadView('reload_page', false);
        }
    }
    
    /* -- 
    Checks if user is authorized. Outputs the login view if $_POST fields
    do not exist or entered password/keyword is invalid. Otherwise, return true.
    */  
    
    function isAuth($action) {      
        if($action == 'View') {
            $this->sendToView('action', 'View');
            
            if($_SERVER['REQUEST_METHOD'] != 'POST') {
                $this->loadView('authenticate', false);
                return false;
            }
            else if($_POST['MasterPass'] !== $this->password_model->get_MP()) {
                $this->sendToView('error', "Master password is invalid, please try again!");
                $this->loadView('authenticate', false);
                return false;
            }
            return true;
        }
        else if ($action == 'Delete') {
            $this->sendToView('action', 'Delete');
            
            if($_SERVER['REQUEST_METHOD'] != 'POST') {
                $this->loadView('authenticate', false);
                return false;
            }
            else if($_POST['MasterPass'] !== 'SUPPRIMER') {
                $this->sendToView('error', "You didn't type the word correctly!");
                $this->loadView('authenticate', false);
                return false;
            }
            return true;
        }
    }
}