<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        print("<title>Document</title>");
    ?>
</head>
<body>
    <h1>FIRST FORM</h1>
    <p>Using <strong>if Conditional statement</strong> to determine the greatest of two numbers</p>
    <form action="process.php" method="POST">
        <div>
            <label for="Number">Number</label><br>
            <input type="number" name="num1" id="name" placeholder="Enter First Number" required>
        </div>
        <div>
            <label for="number">Number</label><br>
            <input type="Number" name="num2" id="name" placeholder="Enter Second  Number" required>
        </div>
        <br>
        <div>
            <button name="check">Check</button>
        </div>
    </form>

        <h1>SECOND FORM</h1>
        <P>A Simple Grading System Using<strong> if, else if and else statement</strong></P>
    <form action="process.php" method="POST">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" placeholder="Enter FullName" required>
        </div>
        <div>
            <label for="score">Score</label><br>
            <input type="score" name="score" placeholder="Enter Your Score" required>
        </div>
        <br>
        <div>
            <button name="submit">Submit</button>
        </div>
    </form>

    <h1>THIRD FORM</h1>
    <p>Using The <strong>Switch State</strong> To output a Random Number Picked from 1 to 5</p>
    <form action="process.php" method="POST">
        <div>
            <label for="numbe">Number</label><br>
            <input type="number" name="number" placeholder="Please enter a number From 1 to 5" required>
        </div>
        <br>
        <div>
            <button name="checkNum">Go</button>
        </div>
    </form>
</body>
</html>
