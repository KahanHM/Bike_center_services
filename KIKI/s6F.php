<html>
<head>
	<style>


		h1
		{
			color:#E64A19;
			font-size: 40PX;
			text-align: center;
			

		}
		.a
		{
			color:black;
			font-size: 20PX;
			text-align: center;
			

		}
		form
		{
			background-color: ghostwhite;
				  width:80%;
				  border: 20px solid black;
				  padding: 50px;
				  margin: 20px;
				  text-align: left;
				  border-block: 10px;
		}	
		input[type=submit]
		{

			border-style:solid ;
			border-color: skyblue;
			color: black;
			margin: 5px;
			
			margin-left: 80px;
			margin-right:-80px;
			
			font-size: 20px;
			display: flex;
			background: #E64A19;

		}

					


	
		input[type=text] {
						  width: 50%;
						  padding: 12px 20px;
						  margin: 8px 0;
						  box-sizing: border-box;
						  border: 2px solid red;
  							border-radius: 4px;
  							background-color: whitesmoke;
 							 color: black;

						}
	input[type=text]:focus {
							 border: 3px  solid#E64A19;
							}
	textarea 
			{
			  width: 50%;
			  height: 150px;
			  padding: 12px 20px;
			  box-sizing: border-box;
			  border: 2px solid #ccc;
			  border-radius: 4px;
			  background-color: #f8f8f8;
			  font-size: 16px;
			  resize: none;
			  color: black;
			
			}

	</style>
	
</head>
<body>
	<form action="s6B.php" method="post">

		<h1>Periodic Service</h1>
		
			<B><p class="a">
				Get Our Services Just Fill the
					 form .
			</p></B>

		<center><input type="text" name="name" placeholder="Your Name" required><br>
		<br>

		<input type="text" name="Pnum" placeholder="Phone Number" required><br>
		<br>



		<input type="text" name="parts" placeholder="Parts Name" required><br>
		<br>


		<input type="text" name="Bmodel" placeholder="Bike Model" required><br>
		<br>
		<textarea name="details" required>What kind of service Need
			
		</textarea></center><br>

		<center><input type="submit" class="submit" value="Book Now" /></center>






	</form>




</body>
</html>