<?php
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = "";

        switch($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "sub":
                $result = $num1 - $num2;
                break;
            case "multi":
                $result = $num1 * $num2;
                break;
            case "div":
                $result = $num1 / $num2;
                break;
            case "binary":
                $result = decbin($num1);
                break;
            case "octal":
                $result = decoct($num1);
                break;
            case "hexadecimal":
                $result = dechex($num1);
                break;
        }
        
        

    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <div class="container">
        <form method="post" action=''>
            <div>
                <input type="number" name="num1" id="num1" required value="<?php if(isset($_POST['submit'])) {echo $num1;} ?>">
            </div>
            <div>
                <input type="number" name="num2" id="num2"  value="<?php if(isset($_POST['submit'])) {echo $num2;} ?>">
            </div>
            <div>
                <select name="operation" id="operation">
                    <option value="add" <?php if(isset($_POST['submit'])) {
                        if($operation == "add") {
                            echo "selected";
                        }
                    } ?>>Addition</option>
                    <option value="sub" <?php if(isset($_POST['submit'])) {
                        if($operation == "sub") {
                            echo "selected";
                        }
                    } ?>>Subtraction</option>
                    <option value="multi" <?php if(isset($_POST['submit'])) {
                        if($operation == "multi") {
                            echo "selected";
                        }
                    } ?>>Multiplication</option>
                    <option value="div" <?php if(isset($_POST['submit'])) {
                        if($operation == "div") {
                            echo "selected";
                        }
                    } ?>>Divition</option>
                    <option value="binary" <?php if(isset($_POST['submit'])) {
                        if($operation == "binary") {
                            echo "selected";
                        }
                    } ?>>Binary</option>
                    <option value="octal" <?php if(isset($_POST['submit'])) {
                        if($operation == "octal") {
                            echo "selected";
                        }
                    } ?>>Octal</option>
                    <option value="hexadecimal" <?php if(isset($_POST['submit'])) {
                        if($operation == "hexadecimal") {
                            echo "selected";
                        }
                    } ?>>Hexadecimal</option>
                </select>
            </div>
            <div class="btn-box">
                <button type="submit" name="submit">Calculate</button>
            </div>
        </form>
        <div>
            <h2>Result:  <span><?php if(isset($_POST['submit'])) { echo $result;} ?>
            
            </span></h2>
        </div>
    </div>
    

   

    <script src="script.js"></script>
</body>
</html>