<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    
        $("option[value=Null]").remove();
       
 
});
</script>
</head>
<body>






















<?php
include('db_config.php');
$country = $_POST['country'];
$sql= "SELECT  * FROM `company` WHERE CompanyName='$country'";
$query = $db->query($sql);
echo '<option value="">Select State</option>';
while($res = $query->fetch_assoc()){
echo '<option value="'.$res['EMail1'].'">'.$res['EMail1'].'</option>';
echo '<option value="'.$res['EMail2'].'">'.$res['EMail2'].'</option>';
echo '<option value="'.$res['EMail3'].'">'.$res['EMail3'].'</option>';



	
}
?>