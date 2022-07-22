<?php
   ob_start();
   //starting session
   session_start();
   if (isset($_POST['submit'])){

   
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
    $username =$_POST['username'];
    $pwd = $_POST['pwd'];

    //setting the session
    if ($username == 'john' && $pwd == '1234'){
        $_SESSION['username'] = $username;
        
    header("Location: /extras/dashboard.php"); 
    
    } else {
    echo 'incorrect login dets';
    }
    }
    
}

       
    ?>
    <!---->
    <form action="<?php echo htmlspecialchars
    ($_SERVER['PHP_SELF']);?>"
        method="POST">
       <div>
            <label>Username</label>
            <input type="text" name="username">
       </div> 
        <br>
        <div>
            <label for="pwd">Password</label>
            <input type="password" name="pwd">
       </div>
        <br>
       <input type="submit" value="submit">
    </form>
