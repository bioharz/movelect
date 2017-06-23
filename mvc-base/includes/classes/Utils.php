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

        $value = filter_var($email, FILTER_VALIDATE_EMAIL);

        return  $value;
    }


}