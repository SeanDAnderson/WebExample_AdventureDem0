<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User{
    public $name_first="";
    public $name_last="";
    public $username="";
    public $email="";
    public $password="";

/*
 * Method to confirm a fully populated User object
 * All legal String characters are legal character in the current build, only
 * empty fields are rejected
 * 
 * 
 */
    public function validate(){
        //Fields checked in reverse order for efficiency
        if ($this->password != null && $this->password != "" &&
                $this->email != null && $this->email != "" &&
                $this->username != null && $this->username != "" &&
                $this->name_last != null && $this->name_last != "" &&
                $this->name_first != null && $this->name_first != ""
                )
            {
            return true;
        }
        
        //The default behavior is to return false, errors may return false negatives
        return false;
    }
    
    
}