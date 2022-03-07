<html>
<head><title>Calculation Result</title></head>
<body>
    <?php

        $v1=$_POST['val1'];
        $v2=$_POST['val2'];
        $operators=$_POST['calc'];

        # test if input is_numeric
        if(is_numeric($v1) && is_numeric($v2)){

            # test if calc is not null
            if(!empty($operators)){
                
                # switch statement for value of calc
                switch($operators){
                    case "add":
                        $result =  $v1+$v2;
                        break;
                    case "sub":
                        $result = $v1-$v2;
                        break;
                    case "mul":
                        $result = $v1*$v2;
                        break;
                    case "div":
                        $result = $v1/$v2;
                }
                echo "Calculation result: $result";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>