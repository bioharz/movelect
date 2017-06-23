<?php

/**
 * Created by IntelliJ IDEA.
 * User: bioharz
 * Date: 22/06/17
 * Time: 17:45
 */
class Utils
{

     static function isValidEmail($email){

         if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
             //echo("$email is a valid email address");
             error_log("email is a valid email address");
             return true;
         } else {
             //echo("$email is not a valid email address");
             error_log("email is not a valid email address");
             return false;
         }


        //$value = filter_var($email, FILTER_VALIDATE_EMAIL);

        //error_log("email korrekt???:->".$value);

        //return  $value;
    }


}