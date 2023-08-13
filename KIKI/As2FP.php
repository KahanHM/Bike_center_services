<html>
<head>
    <style>
       
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

$name = isset ($_POST['name']) ? $_POST['name'] :'';

$query ="SELECT * from s2F where name ='$name'";
$result =mysqli_query($conn,$query);
$Name_found = mysqli_num_rows($result);
if ($Name_found)
{
   echo "Results Found";
}
else {
   
    echo "<script>alert( 'No Results Found')</script>";
    echo "<script>window.location.href = 'As2F.php';</script>";
    
    
}
?>




<table class="content-table" >
    <tr> 
        <th>Name</th>
        <th>Phone Number</th>
        <th>Bike Model</th>
        <th>Details</th>
        
    </tr>


        <?php
            while ($rows=mysqli_fetch_assoc($result))
            {
        ?>  
           
            <tr>
            <td><?php echo $rows['name'];?></td>  
        <td> <?php echo $rows['Pnum'];?></td>        
        <td><?php echo $rows['Bmodel'];?></td>
              
         <td><?php echo $rows['details'];?></td>
         
        
        <?php 
       
            }
        ?>
        </tr>   
      

          </table>  

</body>


</html>