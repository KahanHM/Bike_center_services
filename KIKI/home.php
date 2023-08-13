<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <style type="text/css">
        body
        {
         
           background-color: #ffffff;
            height: 100%;
            
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

 
        h1
        {
            font-family: "Times New Roman", Times, serif;
            font-size: 40px;
            color: 646667;  
            top: 50px;  
            right: 50px;  
            text-align: center;
        }
       .A
        {
            font-family: "Times New Roman", Times, serif;
            font-size: 25px;
            color: #ffffff;  
            top: 50px;  
            right: 50px;  
            text-align: center;
            
            
            
        }
        .p
         {
           
             
        background-color: #333;
        overflow: hidden;
        }
        .p a 
        {
            float: left;
            color: #f2f2f2;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
        }
        .p a:hover
         {
        background-color: #ddd;
        color: black;
        }
        .p a.active 
        {
        background-color: #04AA6D;
        color: white;
        }
       
        
        a
        {
            color:646667;
            text-decoration:none;
        }
         

        h4
        {
            font-family: "Times New Roman", Times, serif;
            font-size: 25px;
            color: #000;  
            top: 50px;  
            right: 50px;  
            text-align: center;
            
        
        }
        .i
        {
            padding: 40px;
            margin:auto;
            color: #000;
            text-align:center;
           
             

        }
        .L
        {
            font-family: "Times New Roman", Times, serif;
            font-size: 25px;
            color: #000;  
            top: 50px;  
            right: 50px;  
            text-align: center;
            top: 50px;  
            right: 50px; 
            margin-left: auto;  
             margin-right: auto; 
             border: 2px solid black;
             padding: 5px;  
             border: 2px solid white;
        }
        * 
        {
	 font-family: 'Roboto', sans-serif;
        }
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -330px;
            margin-top: 230px;
            width: 130px;
            height: 40px;
            text-align: center;
        }
        button {
            outline: none;
            height: 40px;
            text-align: center;
            width: 190px;
            border-radius: 40px;
            background: #fff;
            border: 2px solid #1ecd97;
            color: #1ecd97;
            letter-spacing: 1px;
            text-shadow: 0;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.25s ease;
        }
        button:hover {
            color: white;
            background: #1ecd97;
        }
        button:active {
            letter-spacing: 2px;
        }
        
        .onclic {
            width: 40px;
            border-color: #bbb;
            border-width: 3px;
            font-size: 0;
            border-left-color: #1ecd97;
            animation: rotating 2s 0.25s linear infinite;
        }
        .onclic:after {
            content: "";
        }
        .onclic:hover {
            color: #1ecd97;
            background: white;
        }
        .validate {
            font-size: 13px;
            color: white;
            background: #1ecd97;
        }
        .validate:after {
            font-family: 'FontAwesome';
            content: "\f00c";
        }
        @keyframes rotating {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        </style>
    </head>

    <body> 
       <table class="p" >
       <tr>
       
        <TH><a href="adminF.php"><img src="/kiki/resorce/kiki.png" height="50px" width="50px"></img></a></TH>
   
       </tr>
       </table>
    <br><br>

   
    <h1>KIkI BIKE SERVICE CENTER</h1> 
    
   
    <h4>WE DELIVER EXCELLENT BIKE CARE</h4> 

    <table class="i" >
    <tr><TH><img src="/kiki/resorce/bluepay.png"  height="50px" width="50px" /></TH>
    <th><img src="/kiki/resorce/bluepay.png"  height="50px" width="50px" /></th>  
    <th><img src="/kiki/resorce/bluepay.png"  height="50px" width="50px" /></th>
    </tr>
    <tr>
        <td>Trained and Certified Mechanics&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>Latest Technology&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>Genuine Parts&nbsp;</td>
    </tr>
    </table>
    </br>
    <div class="container">
 <pre>            <button id="button"><a href="UloginF.php" >Login</a></button><button id="button"><a href="signupF.php" >Register</a></button><button id="button"><a href="ForgotF.php" >Forgot Password</a></button></pre>
</div>
   

</body>



</html>