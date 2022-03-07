<?php
    session_start();


    if(!isset($_SESSION["num_visits"])){
        $_SESSION["num_visits"]=0;
    }
    else{
        $_SESSION["num_visits"]=$_SESSION["num_visits"]+1;
    }
?>

<h1>Hello</h1>
<p>You have visited this page <?php echo $_SESSION["num_visits"] ?> times</p>
<p><a href="?reset=true">Reset</a></p>
	<?php
	if ($_SESSION["num_visits"]==5){
		echo "<h2> Thank you for visiting the page a lot. </h2>";
	}elseif ($_SESSION["num_visits"]==10) {
		header("Location: congratulations.php");
		exit();
	}elseif ($_SESSION["num_visits"]>20){
		session_destroy();
	}
	?>
