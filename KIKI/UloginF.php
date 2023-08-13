<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <style>
        h3{
            font-size: 80px;
            font-family: Arial, Helvetica, sans-serif;
            font-style: oblique;
            color: #E64A19;
            padding: 10px;
            margin: 15px;
        }
        table
        {
            font-size: 20px;
        }
        	
			


	
		input[type=email] {
						  width: 450px;
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
	input[type=email]:focus {
							 border: 3px  solid#E64A19;
							}
    </style>
</head>
<body >
    <center><br><br><br><br><br><br>
        <div class="login-box">
            <form method="post" action="UloginB.php">
                <table >
                    <tr>
                        <td><center><h3>LOGIN</h3></center></td>
                    </tr>
                    <tr>
                        <td>User email</td>
                    </tr>
                    <tr>
                        <td><input type="email" name="email" /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" /></td>
                    </tr>
                    </table>
                    <table>
                        <tr>
                        <th><input type="submit" value="Login" name="sbt" /></th>
                        </tr>
                        </form>
                        </table>
                       
                       
                        
                       
                   
                   

                    
             
           
           
                     
        </div>
    </center>
</body>
</html>