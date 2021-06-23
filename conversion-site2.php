<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>conversition-site</title>
</head>
    <body>
        <box>
            <h1 style="color:red;">Page 2 [Conversion Rate]</h1>
            <br><br>
            <h1 style="color:red;">Conversion Site</h1>
               <br><br>
                <div action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <a href="www.home.com">1.Home</a>
                    <a href="www.conversionrate.com">2.Conversion Rate</a>
                    <a href="www.history.com">3.History</a>
                </div>
                <fieldset>
                    <legend style="color:red;">Conversion Rate</legend>
                    <box>
                        <input type="text"name="feet to inch" id="feet to inch" value="feet to inch">
                    </box>  
                    
                    <box>
                        <input type="Number"name="number" id="number" value="1">
                    </box>
                    <box>
                        <input type="Number"name="number" id="number" value="12">
                    </box>
                   
                </fieldset>
        </box>
 </body>
</html>