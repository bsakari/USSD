<?php
/**
 * Created by PhpStorm.
 * User: qhoi
 * Date: 8/15/19
 * Time: 10:30 AM
 */

//Must be received like this!!!
$phone = $_POST['phoneNumber'];
$data = $_POST['text'];

$items = explode("*",$data);

//If data is empty
if ($data=="")//text = "";
{
    //Show the main menu to the user
    $menu = "CON Welcome to IEBC\nPlease enter your name";
    
}elseif (count($items)==1)//text = "Wanyama";
{
    $menu = "CON Please enter your Date of birth";
}elseif (count($items)==2)//text = "Wanyama*1991-12-19";
{
    $menu = "CON Please enter your County";
}elseif (count($items)==3)//text = "Wanyama*1991-12-19*Bungoma";
{
    $menu = "CON Please enter your Constituency";
}elseif (count($items)==4)//text = "Wanyama*1991-12-19*Bungoma*Chwele";
{
    $menu = "CON Your details are \nnames $items[0]\nDOB $items[1]\nCounty $items[2] \nConstituency $items[3]\nPlease Enter \n1 to accept \n2 to cancel";

}elseif (count($items)==5)//text = "Wanyama*1991-12-19*Bungoma*Chwele*1 or 2";
{
    if ($items[4]=="1"){
        $menu = "END Thank you for registering with IEBC";
        //Connect to the db and save to the db
//        $conn = mysqli_connect("localhost","root","","ussd");
//        $sql = "insert into voters values(null,'$items[0]','$items[1]','$items[2]','$items[3]')";
//        mysqli_query($conn,$sql);

    }else{
        $menu = "END You cancelled your registration";
    }

}

//You must tell safaricom that the data you are rying to
//submit is plain text
header("content-type:text/plain");
//Finally echo your menu
echo $menu;


//To host, Register with africa's talking
//For sms, Create a new team
//Inside a created team, create a new app// NO NEED



        //PROCEED WITH THESE STEPS

//Go to sandbox app
//Click ussd
//Create channel
//Host your USSD code to a live server/Domain

//  *384*32746#  I tested with this Service code the first time

//Launch simulator
//Use your service code with any dummy number.
//Preferably your own

?>