<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
    <style>
        select{
            width: 200px;
            height: 27px;
        }
        .input{
            width: 200px;
        }
        input{
            width: 200px;
            height: 25px;
        }
    </style>
</head>
<body bgcolor="gray">
<center>
<h1>Simple Calculator</h1>
    <form method="post">
        <h3>Number 1:</h3>
        <input type="number" name="num1" placeholder="First Number" required>
        <br>
        <h3>Operator :</h3>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <h3>Number 2:</h3>
        <input type="number" name="num2" placeholder="Second Number" required>
        <br>
        <br>
        <br>
        <input type="submit" name="calculate" value="Calculate" class="input">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = '';

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Division by zero error!';
                }
                break;
            default:
                $result = 'Invalid operator';
                break;
        }

        echo "<h2>Result: $result</h2>";
    }
    ?>
</center>
</body>
</html>
