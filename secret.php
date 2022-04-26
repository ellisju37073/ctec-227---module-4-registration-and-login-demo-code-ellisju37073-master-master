<?php  
session_start();
if(isset($_SESSION['loggedin'])){
    echo "Welcome," , $_SESSION['first_name'];
} else{
    header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
}
?>