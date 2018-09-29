<?php

    if(isset($_POST['percentage-submit'])){
        $main_amount_val = $_POST['total'];

        $percentage_amount_val = $_POST['percentage'];

        $percentage_result = ($percentage_amount_val / 100 )*$main_amount_val;

        if($percentage_result){
            $percentage_result;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Percentage Of A Number</title>

    <style>
        .container{
            width: 1140px;
            margin: 0 auto;
            
        }

        .container{
            border: 1px solid #ccc;
            padding: 50px;
        }

        input{
            display: block;
            margin-bottom: 20px;
            margin-top: 5px;
        }

       
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
      
            <label for="total">Main Amount</label>
            <input type="number" name="total" id="total" required>

            <label for="percentage">Percentage Amount</label>
            <input type="number" name="percentage" id="percentage" required>
            
            <input type="submit" name="percentage-submit">
        </form>
        <?php if(isset($percentage_result)) : 
        ?>
        <div class="result">
            <?php echo "The {$percentage_amount_val}% percentage of {$main_amount_val} is {$percentage_result}"; ?>
        </div>
        <?php
        endif;
        ?>
    </div>
</body>
</html>