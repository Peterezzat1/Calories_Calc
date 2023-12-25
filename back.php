<?php 



$name = $_REQUEST['firstname'];
$weight = $_REQUEST['secondname']; 
$height = $_REQUEST['address']; 
$days = $_REQUEST['days'];
$age = $_REQUEST['age'];


if(isset($_POST['btntest'])){ 

   
    $host = "localhost"; 
    $user = "root"; 
    $password =""; 
    $db = "calories_cal"; 


    
    @$conn= mysqli_connect($host,$user,$password,$db);
    
    $insert= "insert into studentsbis values('$name','$weight','$height','$days','$age')";
    
   
    
    mysqli_query($conn,$insert);

   

    if($conn){
       
        echo("<h1 style=color:green;> Your Registartion is Done!</h1>");
        

    }
    else{
        echo("<h1 style=color:red;> Your Registartion is Failed❌</h1>");
    }
   
}

?>

