<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" />


    <style>
         h3{
            font-size: 50px;
            font-family: Arial, Helvetica, sans-serif;
            font-style: oblique;
            color: #E64A19;
            padding: 10px;
        }



        input[type=email] {
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
            input[type=date] {
						  width: 400px;
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
         input[type=tel] {
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
        input[type=text] {
						  width: 400px;
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
    <script>
        function validateForm(){
            var first_name = document.forms["signupForm"]["first_name"].value;
            var last_name = document.forms["signupForm"]["last_name"].value;
            var password = document.forms["signupForm"]["password"].value;
            var confirm_password = document.forms["signupForm"]["confirm_password"].value;
            const date = new Date();
            if (/^[a-zA-Z\s]+$/.test(first_name) == false) {
                alert("First name must have only letters and spaces");
                return false;
            }else if (/^[a-zA-Z\s]+$/.test(last_name) == false) {
                alert("Last name must have only letters and spaces");
                return false;
            }else if (password.length < 8) {
                alert("Password must have at least 8 characters");
                return false;
            }else if (password != confirm_password) {
                alert("Confirm your password correctly");
                return false;
            }else{
                return true;
            }
        }   
    </script>

</head>
<body >
    <center>
        <div class="login-box">
            <form method="post" name="signupForm" action="signupB.php" enctype="multipart/form-data" onSubmit="return validateForm()">
                <table>
                    <tr>
                        <td><center><h3>Registration Form</h3></center></td>
                    </tr>
                    <tr>
                        <td>First name</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="first_name" required /></td>
                    </tr>
                    <tr>
                        <td>Last name</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="last_name" required /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                    </tr>
                    <tr>
                        <td><input type="email" name="email" required /></td>
                    </tr>
                    <tr>
                        <td>Date of birth</td>
                    </tr>
                    <tr>
                        <td><input type="date" name="DOB" id="DOB" style="width:200px;" required /></td>
                    </tr>
                    <tr>
                        <td>City</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="city" required /></td>
                    </tr>
                    <tr>
                        <td>Contact number</td>
                    </tr>
                    <tr>
                        <td><input type="tel" name="contact_no"  pattern="[0-9]{2} [0-9]{3} [0-9]{3} [0-9]{3}" placeholder="94 123 456 789" required /></td>
                    </tr>
                    
                        
                    <tr>
                        <td>Password</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" required /></td>
                    </tr>
                    <tr>
                        <td>Confirm password</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="confirm_password" required /></td>
                    </tr>

                    <tr>
                        <td><center><input type="submit" value="Sign up" class="sbt" /></center></td>
                    </tr>
                </table>
            </form>
            <center><a href="home.php"><input type="submit" value="Back to Home" id="submit-button" /></a></center> 
        </div>
    </center>
    <script>
            function addLeadingZeros(num, totalLength) {
                return String(num).padStart(totalLength, '0');
            }
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; 
            var yyyy = today.getFullYear();
            var max_DOB = yyyy-6 + '-' + addLeadingZeros(mm,2) + '-' + addLeadingZeros(dd,2);
            document.getElementById("DOB").setAttribute("max", max_DOB);
        </script>
</body>
</html>