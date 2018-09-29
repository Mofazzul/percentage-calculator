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
        
    input[type=number]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    *{
        margin: 0;
        padding: 0;
    }

    body, html{
        height: 100%;
        width: 100%;
    }

    .container {
        height: 100%;
        width: 100%;
        display: table;
    }

    .fr-container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        display: table-cell;
        vertical-align: middle;
    }

    form {
        width: 30%;
        margin: 0 auto;
    }
    h4 {
        font-family: "Lato";
        font-weight: 500;
        text-transform: capitalize;
    }

    .result {width: 30%;margin: 0 auto;padding: 10px 0;}

    </style>
</head>
<body>
    <div class="container">
        <div class="fr-container">
        <h3 style="text-align: center; padding-bottom: 50px;">Percentage Calculator</h3>
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
                <h4 id="percentv"><?php echo "The {$percentage_amount_val} percent of {$main_amount_val} is {$percentage_result}"; ?></h4>
            </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</body>
</html> 