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
$query ="SELECT * from Forgotpassword Order By id desc ";
$result =mysqli_query($conn,$query);
?>

<table class="content-table" >
    <tr>
        <th>email</th>
       
    </tr>


        <?php
            while ($rows=mysqli_fetch_assoc($result))
            {
        ?>  
           
            <tr>
        <td> <?php echo $rows['email'];?></td>        
       
        <?php      
            }
        ?>
        </tr>   
      

          </table>  

</body>


</html>