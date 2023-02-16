<!DOCTYPE html>

<head>
    <title> calculator</title>
</head>
<?php

error_reporting(E_ERROR | E_PARSE);
$FirstNumber = $_POST['FirstNumber'];
$SecondNumber = $_POST['SecondNumber'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
    switch ($operator) {
        case "add":
            $result = $FirstNumber + $SecondNumber;
            break;
        case "subtract":
            $result = $FirstNumber - $SecondNumber;
            break;
        case "multiply":
            $result = $FirstNumber * $SecondNumber;
            break;
        case "divide":
            if ($SecondNumber == 0) {
                echo "kan niet delen met 0";
            } else {
                $result = $FirstNumber / $SecondNumber;
            }
            break;
        case "modulo":
            if ($SecondNumber == 0) {
                echo "kan niet delen met 0";
            } else {
                $result = $FirstNumber % $SecondNumber;
            }
    }
} else {
    echo "voer 2 getallen in";
}
?>

<body>
    <div id="page-wrap">
        <h1>Calculator</h1>
        <form action="calculator.php" method="post" id="quiz-form">
            <p>
                <b>Number 1:</b>
                <input type="text" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber; ?>" />

            </p>
            <p>
                <b>Number 2:</b>
                <input type="text" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" />
            </p>
            <b>
                <?php echo "Operation: $operator" ?>
            </b>
            <p>
                <b>Result</b>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>">
            </p>
            <input type="submit" name="operator" value="add" />
            <input type="submit" name="operator" value="Subtraction" />
            <input type="submit" name="operator" value="multiply" />
            <input type="submit" name="operator" value="divide" />
            <input type="submit" name="operator" value="modulo">
        </form>
    </div>
</body>

</html>