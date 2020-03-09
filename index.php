<?php include_once "functions.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2 style="margin-top: 50px;">Let's Play through PHP ;)</h2>
            <p style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur doloribus enim fugiat ipsum modi nulla numquam officiis quia quisquam sapiente, veniam vitae voluptatum! Cumque ex in necessitatibus placeat quisquam voluptatem!</p>
            <p>
                <?php
                $fname = isset($_REQUEST['fname']) ? filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING) : '';
                $lname = isset($_REQUEST['lname']) ? filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING) : '';
                $cb = isset($_REQUEST['terms']) ? filter_input(INPUT_POST, 'terms', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY) : array();
                $drinks = isset($_REQUEST['drinks']) ? filter_input(INPUT_POST, 'drinks', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY) : array();
                ?>


                <?php
                    if(!empty($fname)){
                        echo "First Name: " . $fname;
                    }
                    ?>
                    <?php
                    if(!empty($lname)){
                        echo "<br>Last Name: " . $lname;
                    }
                    if(count($cb) > 0){
                        echo "<br>Selected Fruits: " . join(', ', $cb);
                    }
                    if(count($drinks) > 0){
                        echo "<br>Selected Drinks: " . join(', ', $drinks);
                    }
                ?>
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">

        <div class="column column-60 column-offset-20">
            <form action="" method="POST">
                <input type="text" placeholder="First Name" name="fname" value="<?php echo $fname; ?>">
                <input type="text" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>">
                <div>
                    <label class="label-inline">Select your fruits: </label>
                    <input type="checkbox" name="terms[]" value="orange" <?php echo isCheked('terms', 'orange'); ?>>
                    <label class="label-inline" for="terms">Orange</label>
                    <input type="checkbox" name="terms[]" value="banana" <?php echo isCheked('terms', 'banana'); ?>>
                    <label class="label-inline" for="terms[]">Banana</label>
                    <input type="checkbox" name="terms[]" value="mango" <?php echo isCheked('terms', 'mango'); ?>>
                    <label class="label-inline" for="terms[]">Mango</label>
                    <input type="checkbox" name="terms[]" value="apple" <?php echo isCheked('terms', 'apple'); ?>>
                    <label class="label-inline" for="terms[]">Apple</label>
                    <input type="checkbox" name="terms[]" value="pineapple" <?php echo isCheked('terms', 'pineapple'); ?>>
                    <label class="label-inline" for="terms">Pineapple</label>
                </div>
                <div>
                    <select name="drinks[]" multiple style="height: 200px;">
                        <option disabled>Select your drinks</option>
                        <?php
                        $sdrinks = array('pepsi', 'Coke', 'sPrite', 'panta', 'Lacci', 'Yogurt milk');
                        displayItems($sdrinks, $drinks);
                        ?>
                    </select>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>