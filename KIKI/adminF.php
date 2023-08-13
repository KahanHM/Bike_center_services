<!DOCTYPE html>

<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <style>
        	

            input[type=text] {
						  width: 100%;
						  padding: 12px 20px;
						  margin: 8px 0;
						  box-sizing: border-box;
						  border: 2px solid red;
  						border-radius: 4px;
                        border: none;
                        border-bottom: 2px solid red;
  							background-color: whitesmoke;
 							 color: black;

						}
    input[type=password] {
						  width: 100%;
						  padding: 12px 20px;
						  margin: 8px 0;
						  box-sizing: border-box;
						  border: 2px solid red;
  						border-radius: 4px;
                        border: none;
                        border-bottom: 2px solid red;
  							background-color: whitesmoke;
 							 color: black;

						}
    input[type=submit] 
                        {
                            width: 100%;
                            background-color: lightblue;
                            color: white;
                            padding: 5px 10px;
                            border: none;
                            border-radius: 8px;
                            cursor: pointer;
                            float:right;
                            text-align: center;
                            text-decoration: none;
                            font-size: larger;
                            

                        }
    input[type=submit]:hover 
                        {
                            background-color: #E64A19;


                        }
	input[type=text]:focus {
							 border: 3px  solid#E64A19;
							}
    </style>
</head>
<body style="background-image: url('/kiki/resorce//istockphoto-1216086843-612x612.jpg');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">
    <center><br><br><br><br><br><br>
        <div class="login-box">
            <form method="post" action="adminB.php">
                <table>
                    <tr>
                        <td><p class="H"><center><b><h3>Admin</h3></center></b></p></td>
                    </tr>
                    <tr>
                        <td>AID</td>
                    </tr>
                    <tr>
                        <td><input type="TEXT" name="Aid" required /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" required /></td>
                    </tr>
                    <tr>
                        <td><center><input type="submit" value="Login" name="submit" /></center></td>
                    </tr>
                </table>
            </form>
            <center><a href="home.php"><input type="submit" value="Back to Home" id="submit-button" /></a></center> 
        </div>
    </center>
</body>
</html>