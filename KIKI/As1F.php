<html>
<head>
    <style>
       
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
$query ="SELECT * from s1F Order By id desc ";
$result =mysqli_query($conn,$query);
?>
<form action="As1FP.php" method="post">
<a href="As1FP.php"><input type="submit" class="sbt" value="Previus Record" /></a>
<input type="text" name="name" />
</form>

<table class="content-table" >
    <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>location</th>
        <th>Bike Model</th>
        <th>Details</th>
    </tr>


        <?php
            while ($rows=mysqli_fetch_assoc($result))
            {
        ?>  
           
            <tr>
        <td> <?php echo $rows['name'];?></td>        
        <td><?php echo $rows['Pnum'];?></td>
         <td><?php echo $rows['Address'];?></td>       
         <td><?php echo $rows['Bmodel'];?></td>
         <td><?php echo $rows['details'];?></td> 
        
        <?php      
            }
        ?>
        </tr>   
      

          </table>  

</body>


</html>