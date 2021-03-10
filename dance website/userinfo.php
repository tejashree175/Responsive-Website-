<?php 
$con= mysqli_connect('localhost','root');
if ($con){
    echo "connection successfull";
}
    else{
        echo"no connection";
    }

mysqli_select_db($con , 'dance website' );

 $Username = $_POST['Username'];
 $EmailId= $_POST['EmailId'];
 $MobileNo = $_POST['MobileNo'];
 $DanceForm = $_POST['DanceForm'];
 $AnySuggestion = $_POST['AnySuggestion'];


 $query = "insert into userinfo (Username,EmailId, MobileNo,DanceForm, AnySuggestion) values('$Username','$EmailId','$MobileNo','$DanceForm','$AnySuggestion')";
 echo "this is me";

 mysqli_query($con,$query);



?>