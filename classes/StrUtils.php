<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:38
 */

class StrUtils
{
    private $str ;
    function __construct($str)
    {
        $this->str = "String as default" ;

    }



    public function Bold() {

       return "<b>$this->str</b>".'<br>' ;

    }


    public function Italic() {

       return "<i>$this->str</i>" .'<br>';

    }



    public function Underline() {

       return "<u>$this->str</u>" .'<br>';

    }


    public function Capital() {

       return "<span style='text-transform: capitalize'>$this->str</span>".'<br>';

    }



    function Uglify() {

        return "<b><i><u>$this->str</u></i></b>".'<br>';

    }

}