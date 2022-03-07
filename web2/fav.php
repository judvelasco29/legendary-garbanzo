<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
        if(isset($_POST['username'], $_POST['dish'], $_POST['color'])){
            $name = ($_POST['username']);
            $dish = ($_POST['dish']);
            $color = ($_POST['color']);
            echo "<h2> Thanks for your selection {$name} <br>
                You really enjoy {$dish} <br>
             - especially with a nice {$color} wine</h2>";
        }
        else { echo "Hi please select and enter your food and drinks. Thank you:-)"; }
    ?>
</body>
</html>