<html>
<head>
    <style>
         form
		{
			background-color: white;
				  width: 400px;
				  border: 10px solid black;
				  padding: 20px;
				  margin: 10px;
				  text-align: left;
                  margin-right: auto;
                  margin-left: auto;
                  margin-top: auto;
				  border-block: 5px;
                  align-items: center;
		}	
        
		input[type=text] {
						  width: 200px;
						  padding: 4px 6px;
						  margin: 8px 0;
						  box-sizing: border-box;
						  border: 2px solid red;
  							border-radius: 4px;
  							background-color: whitesmoke;
 							 color: black;

						}
         input[type=submit] 
         {
            background-color: #E64A19;
            margin: auto;
            color: #ffffff;
           border-color: 2px solid blue;
           padding: 5px;
           border-radius: 8px 8px 8px 8px;
         }
        .content-table
        {
            border-collapse: collapse;
            margin: 10px 0;
            font-size: 0.5cm;
            min-width: 400px;
            
         }
         .content-table thead 
         {
            background-color: blu;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
            

         }
         .content-table th,
         .content-table td
         {
            padding: 5px 5px;
            align-items:center;
           

         }
         .content-table tbody tr
         {
            border-bottom: 3px  solid blue;
         }
         .content-table tbody tr:nth-of-type(even)
         {
            background-color: #E64A19;

         }
         .content-table tbody tr:nth-of-type(odd)
         {
            border-bottom: 4px solid black;
         }
         
        



    </style>
</head>
<body>




<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'KIKI';

$conn = mysqli_connect( $server,$user,$pass, $database);
$query ="SELECT * from userd Order By first_name desc ";
$result =mysqli_query($conn,$query);
?>
<form action="SearchR.php" method="post">
<a href="SearchR.php"><input type="submit" class="sbt" value="SEARCH" /></a>
<input type="text" name="email" />
</form>


<table class="content-table" >
    <tr>
        <th>First_name</th>
        <th>Last_name</th>
        <th>Email</th>
        <th>DOB</th>
        <th>city</th>
        <th>contact_no</th>
        <th>password</th>
        <th>confirm_password</th>
    </tr>


        <?php
            while ($rows=mysqli_fetch_assoc($result))
            {
        ?>  
           
            <tr>
        <td> <?php echo $rows['first_name'];?></td>        
        <td><?php echo $rows['last_name'];?></td>
         <td><?php echo $rows['email'];?></td>       
         <td><?php echo $rows['DOB'];?></td>
         <td><?php echo $rows['city'];?></td>
         <td><?php echo $rows['contact_no'];?></td>       
         <td><?php echo $rows['password'];?></td>
         <td><?php echo $rows['confirm_password'];?></td>  
        
        <?php      
            }
        ?>
        </tr>   
      

          </table>  

</body>


</html>