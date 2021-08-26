<?php
require_once ("db.php");
require_once ("component.php");


$con= createdb();

//create button

if(isset($_POST['create']))
{
    createData();
}
function createData()
{
    $URL= textboxValue("URL");
    $Des= textboxValue("Des");
    $Price= textboxValue("Price");
    $Status= textboxValue("Status");

    if($URL && $Des && $Price && $Status) {

        $sql=" INSERT INTO tasks(URL,Des,Price,Status) VALUES('$URL','$Des','$Price','$Status') 
create table tasks
(
	URL varchar(30) null,
	Des varchar(30) null,
	Price float null,
	Status varchar(30) null
);

";

        if(mysqli_query($GLOBALS['con'],$sql)) {
            echo "record created";
        } else {
            echo "error ";
        }
    }
    else
    {
        echo "provide data";
    }
    }
function textboxValue($value)
{
    $textbox =mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox))
    {
        return false;
    }
    else
    {
        return $textbox;
    }
}
