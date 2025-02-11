<?php
include('./config.php');


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM contacts WHERE id = ".$id;
    $result = mysqli_query($conn,$query);

    if($result){
        // echo "record deleted successfully!
            echo"<script>window.location.href='record.php'</script>";
    }else{
        echo "rechord not deleted!";
    }
}
?>