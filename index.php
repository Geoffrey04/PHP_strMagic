<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:37
 */


include"classes/StrUtils.php";

$string = new StrUtils('dede');

echo $string->Capital();


echo $string->Bold();


echo $string->Italic();


echo $string->Underline();


echo $string->Uglify();

