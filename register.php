<?php
$okay =TRUE;
if (empty($_POST['email'])){
    echo "enter your email fuker</br>";
    $okay=FALSE;
}
if (empty($_POST['password'])){
    echo "enter your password fuker";
    $okay=FALSE;
    
} 
if ($_POST['password'] !=$_POST['confirm']) {
    echo "your passwprd doesnt not match mother fucker</br>";
    $okay=FALSE;
}
//validate birthday
$birthday='';
if(is_numeric($_POST['month'])){
    $birthday =$_POST['month']. '-';
} else{
     echo "please enter the birth month</br>";     
     $okay=FALSE;
}//month

if(is_numeric($_POST['day'])){    //day
    $birthday .=$_POST['day']. '-';
}
else {
    echo "please enter the birth day</br>";
    $okay=FALSE; //day
}
if(is_numeric($_POST['year']))  {    //day
    $birthday .=$_POST['year'];
}
else {
    echo "please enter the birth year</br>";
    $okay=FALSE; //year
}               
//color
 if ($_POST['color']== 'red'){
    echo"red is fovorite</br>";
} elseif ($_POST['color']== 'blue') {
    echo "blue is favorite</br>";

}
else {
    echo "please enter ur color</br>";
} //color
If ($okay) {
    echo " you r success fucker</br>";
    echo "you entered ur $birthday</br>";
}
?>