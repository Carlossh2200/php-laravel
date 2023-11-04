<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num01" placeholder="number01">
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num02" placeholder="number02">
        <button>Calculate</button>
    </form>

    <?php 
    //Grabbing data from URL
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num01 = filter_input(INPUT_POST,"num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST,"num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = filter_input(INPUT_POST,"operator", FILTER_SANITIZE_SPECIAL_CHARS);

        //Error Handling
        $error=false;
        if (empty($num01) || empty($num02) || empty($operator)) {
            echo "<p>Fill al fields.</p>";
            $error = true;
        }

        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<p>Only numbers allowed.</p>";
            $error = true;
        }

        //Calculate if no errors
        if (!$error){
            $res=0;
            switch($operator){
                case 'add':
                    $res = $num01 + $num02;
                    break;
                case 'subtract':
                    $res = $num01 - $num02;
                    break;
                case 'multiply':
                    $res = $num01 * $num02;
                    break;
                case 'divide':
                    $res = $num01 / $num02;
                    break;
                default:
                echo "<p>ERROR</p>";
            }
            
            echo "<p class='calc-result'>Result =" . $res . "</p>" . "<br>";
        }
    }
    ?>

</body>
</html>