<!DOCTYPE html>
<html>
    <head>
        <title>Captcha example</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="captcha">
            <button type="submit">Check</button>
        </form>

        <img src="captcha.php" alt="captcha">

        <?php
            if (isset($_REQUEST["captcha"]))
            {
                session_start();
                echo "<p>";
                echo ($_SESSION["captcha"] == $_REQUEST["captcha"] ? "Valid" : "Invalid") . " captcha";
                echo "</p>";
             }
        ?>

    </body>
</html>