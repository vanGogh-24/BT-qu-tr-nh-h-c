<?php
class Cars {
    function myClassName() {
        return __CLASS__;
    }

    function myDir() {
        return __DIR__;
    }

    function myFile() {
        return __FILE__;
    }

    function myFunctionName() {
        return __FUNCTION__;
    }
}

$obj = new Cars();
echo $obj->myClassName() . "<br>";
echo $obj->myDir() . "<br>";
echo $obj->myFile() . "<br>";
echo $obj->myFunctionName() . "<br>";
?>