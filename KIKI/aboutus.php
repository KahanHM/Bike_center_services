<!DOCTYPE html>
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

              h1 {
                font-size: 60px;
                text-align: center;
                color: #E64A19;
              } 

              h3 {
                font-size: 30px;
                text-align: center;
                color: #FFF;
              }

              h1 {
                margin-top: 100px;
                text-align:center;
                font-size:60px;
                font-family: 'Bree Serif', 'serif';
                }

              #container {
                margin: 0 auto;

               
              }

              p {
                text-align: center;
                font-size:20px;
                font-family: 'Bree Serif', 'serif';
                color: #E64A19;
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



        .container{
            color: #E64A19;      
         }
         p{
            color:black;
         }
    </style>
	<title>About-us </title>
</head>
<body >
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








	<div class="container">
		<div class="aboutus">
			<div class="text">
				<h1>About Us</h1>
				<div class="line"></div>
			</div>
		</div>
		<div class="content">
			<p><b>W</b>elcome to our Bike Service Center web application's About Us page!

We are a team of passionate bike enthusiasts who are dedicated to providing top-notch service and maintenance for all types of bikes. Our center is equipped with the latest technology and tools to ensure that your bike is in the best possible condition.

We understand that your bike is not just a means of transportation, but also a source of joy and freedom. That's why we take great pride in delivering exceptional service that meets and exceeds your expectations. Our technicians are certified and trained to handle any bike-related issue and provide solutions that will keep your bike running smoothly.</p>
<p>

We believe in transparency and integrity, and that's why we always provide clear and honest communication with our customers. Our goal is to establish long-term relationships with our clients and become their trusted bike service provider.

At our center, we offer a range of services including regular maintenance, repairs, and customization. We also have a wide selection of high-quality parts and accessories to enhance your riding experience.

Thank you for choosing our Bike Service Center for your bike's needs. We look forward to serving you and your bike
</p>
		</div>
		</div>
		<footer></footer>
</body>
</html>