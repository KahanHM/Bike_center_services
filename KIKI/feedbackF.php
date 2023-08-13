<html>
  <head>
    <style>

              @import url(https://fonts.googleapis.com/css?family=Open+Sans);
              @import url(https://fonts.googleapis.com/css?family=Bree+Serif);

              body {
                background: #ffffff;
                font-size:22px;
                line-height: 42px;
                color: #ffffff;
                word-wrap:break-word !important;
                font-family: 'Open Sans', sans-serif;
                width: 100%;
                }


                p{
                    color: #E64A19;
                }
                .Th
                {
                    color: #000000;
                    font-size: large;
                   font-family: sans-serif;
                   

                }
                .td
                {
                    color: #0493bd;
                    font-size: medium;
                    

                }

            

              #container {
                margin: 0 auto;

               
              }

              nav {
                margin: 50px 0;
                background-color: #E64A19;
              
              }

              nav ul {
                padding: 0;
                margin: 0;
                list-style: none;
                position: relative;
                }
                
              nav ul li {
                display:inline-block;
                background-color: #E64A19;
                }

              nav a {
                display:block;
                padding: 0 10px;
                color:#FFF;
                font-size:18px;
                line-height: 50px;
                text-decoration:none;
              }

              nav a:hover { 
                background-color: #000000; 
              }


              nav ul ul {
                display: none;
                position: absolute; 
                top: 60px; 
              }
                

              nav ul li:hover > ul {
                display:inherit;
              }
                

              nav ul ul li {
                width:170px;
                float:none;
                display:list-item;
                position: relative;
              }


              nav ul ul ul li {
                position: relative;
                top:-60px; 
                left:170px;
              }

                

              li > a:after { content:  ' +'; }
              li > a:only-child:after { content: ''; }


              @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);
          html {
            background: #ffffff;
          }

          

            </style>
</head>
 <body><div id="container">
    <nav>
        <ul>
        <li><img src="/kiki/resorce/kiki.png" height="50px" width="50px"></img></li>
            <li><a href="dashboardF.php">Home</a></li>
            <li><a href="#">services&nbsp;</a>
            <!-- First Tier Drop Down -->
            <ul>
                <li><a href="s1F.php">Periodic Service</a></li>
                <li><a href="s2F.php">General Repairs</a></li>
                <li><a href="s3F.php">Batteries</a></li>
                <li><a href="s4F.php">Engine Work</a></li>
                <li><a href="s5F.php">Insurance Services</a></li>
                <li><a href="s6F.php">Spare Parts</a></li>
                <li><a href="s7F.php">Bike Customisation </a></li>
            </ul>        
            </li>
           
           
            <li><a href="feedbackF.php">FeedBack</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="home.php">Log out </a></li>
        </ul>
    </nav>


        <?php include 'f.php';?>

        <?php

        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $database = 'KIKI';

        $conn = mysqli_connect( $server,$user,$pass, $database);
        $query ="SELECT * from feedback Order By id desc ";
        $result =mysqli_query($conn,$query);
        ?>
        
     
        

        
                <?php
                    while ($rows=mysqli_fetch_assoc($result))
                    {
                ?>        
                <p class="Th"> <?php echo $rows['name'];?></p>
                        
               <p class="td"> <?php echo $rows['feedback'];?></p>    
                    
                <?php      
                    }
                ?>

        



</body>
</html>