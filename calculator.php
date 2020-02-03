<html>
    <head>
        <title>Calculator</title>
    </head>

    <body>

    <form method="POST">
            <div class="">
                <input type="number" name="firstNumber">
                <label for="firstNumber">First Number</label>
            </div>

            <div class="">
                <input type="number" name="secondNumber">
                <label for="secondNumber">Second Number</label>
            </div>

            <div>
            <input type="submit" name="berekening" value="add">
            <input type="submit" name="berekening" value="subtract">
            <input type="submit" name="berekening" value="multiply">
            <input type="submit" name="berekening" value="divide">
            <input type="submit" name="berekening" value="mudolo">
            </div>

        </form>

        <?php

        if (isset($_POST["berekening"]) && is_numeric($_POST["firstNumber"]) && is_numeric($_POST["secondNumber"])){

        switch ($_POST["berekening"]){

            case "add":
                $antwoord =  $_POST["firstNumber"] + $_POST["secondNumber"];
                echo "je antwoord is $antwoord";
                break;

            case "subtract":
                $antwoord =  $_POST["firstNumber"] - $_POST["secondNumber"];
                echo "je antwoord is $antwoord";
                break;

            case "multiply":
                $antwoord =  $_POST["firstNumber"] * $_POST["secondNumber"];
                echo "je antwoord is $antwoord";
                break;
                
            case "divide":
                $antwoord =  $_POST["firstNumber"] / $_POST["secondNumber"];
                echo "je antwoord is $antwoord";
                break;

            case "mudolo":
                $antwoord =  $_POST["firstNumber"] % $_POST["secondNumber"];
                echo "je antwoord is $antwoord";
                break;
        }
    }

        ?>
    </body>

</html>