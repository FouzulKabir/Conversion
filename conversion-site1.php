<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>conversition-site</title>
</head>
    <body>
        <box>
            <h1 style="color:red;">Page 1 [Home]</h1>
            <h1 style="color:red;">Conversion Site</h1>
               <br><br>
                <div action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <a href="www.home.com">1.Home</a>
                    <a href="www.conversionrate.com">2.Conversion Rate</a>
                    <a href="www.history.com">3.History</a>
                </div>
                <fieldset>
                    <legend style="color:red;">Conversion Site</legend>
                    <box>
                        <input type="text"name="feet to inch" id="feet to inch" value="feet to inch">
                    </box>    
                        <br><br>

                    <label for="value">Value:</label>
                    <input type="number" name="value" id="value"value="3">
                    <br><br>
                    
                    <label for="Result">Result:</label>
                    <input type="number" name="Result" id="Result"value="36">
                    <br><br>
                </fieldset>
        </box>
 </body>
</html>