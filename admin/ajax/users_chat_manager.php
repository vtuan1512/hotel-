<?php 
session_start();

    require('/Xampp/xampp/htdocs/BookingWebsite/admin/inc/db_config.php');
    require('/Xampp/xampp/htdocs/BookingWebsite/admin/inc/essentials.php');
   
    $outgoing_id = $_SESSION['managerId'];
    $sql = "SELECT * FROM user_cred  
            WHERE NOT id={$outgoing_id} AND NOT role = '1' ORDER BY id DESC
           ";

    $query = mysqli_query($con,$sql);
    $output="";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat.";
    } else {
        require "/Xampp/xampp/htdocs/BookingWebsite/admin/data_manager.php";
    }
    
    echo $output;
    
?>