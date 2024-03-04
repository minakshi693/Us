
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            line-height: 1.7em;
            padding: 0;
            background-color: #ffffff;
            text-align: center;
        }

        .topheader {
            background-color: darkblue;
            color: #fff;
        }

        span {
            color: #fff;
        }

        nav li {
            list-style: none;
            display: inline-block;
            padding: 10px;


        }

        .nav-links {
            float: inline-end;
        }

        nav a {
            color: #333;

        }

        .nav-links a:hover {
            border-bottom: 2px solid darkblue;
            padding: 20px;
            color: #333;

        }

        #logo {
            float: inline-start;
            display: block;

        }

        h1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
            margin: 10px 0px;
            padding: 0px 0px 5px;
            color: #105A87;
            letter-spacing: -1px;
            border-bottom: 1px dotted black;
            text-align: left;
        }

        form {
            box-sizing: border-box;

            margin: 20px auto;
            font-size: 14px;
            padding: 4px;
            max-width: 600px;

        }

        .row {
            display: flex;

        }

        .col-25 {
            flex: 30%;
        }

        .col-75 {
            flex: 70%;
        }

        #container1 {
            box-sizing: border-box;
            padding: 20px;
            margin: auto;
            border-style: none;
            width: 800px;

        }

        input[type="submit"] {


            background-color: #4CAF50;
            border: 1px solid #4CAF50;
            width: 20%;
            cursor: pointer;
            border-radius: 4px;
            padding: 10px;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;

        }

        .inner {
            height: 100px;
            display: table-cell;
            vertical-align: middle;
        }

        #subheader h1 {
            font-size: 28px;
            letter-spacing: -1px;
            float: left;
            border-right: solid 1px #ccc;
            margin-top: 10px;
            padding-right: 40px;
            margin-right: 40px;
            color: #fff
        }

        #subheader span {
            display: inline-block;
            padding-top: 15px;
            font-size: 16px
        }

        input[type="text"],
        input[type="email"],
        textarea {
            float: right;
            border-radius: 3px;
            overflow: auto;
            width: calc(100% - 20px);
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
        }

        label {
            float: left;
            width: 30%;
            padding: 16px;
            text-align: left;
        }
    </style>


<body>
     <header>
        <div class="topheader">
            <div class="container" style="text-align: right;">

                "For Urgent Support: &nbsp;"
                <span class="fa fa-phone"></span>
                <a href="+919878965430">
                    <span itemprop="telephone">+919878965430</span>
                </a>
                " &nbsp; | &nbsp;"
                Payment Option
            </div>
        </div>
        <div class="container">
            <div id="logo">
                <div class="inner">
                    <a href="https://www.poojainfotech.com/support.php" title="home">
                        <img src="logo.png" alt="POOJA INFOTECH" title="Pooja Infotech"
                            style="width: 140px; height: 72px;">

                    </a>
                    <div class="nav-links">
                        <nav>
                            <ul>
                                <li><a href="#">Domain</a></li>
                                <li><a href="#">Hosting</a></li>
                                <li><a href="#">Web Promotion</a></li>
                                <li><a href="#">Web Designing</a></li>
                                <li><a href="#">Add ons</a></li>
                                <li><a href="#">Support</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <div id="subheader">
        <div class="banner">
            <span>
                <img itemprop="image" src="banner.jpg" title="support" width="1140px" height="250">
            </span>
        </div>

    </div>
    </div> 
    <form method="post" onsubmit="return sub()">
        <div id="container1">
            <h1>Support</h1>

            <div class="row">
                <div class="col-25"><label for="name">Name</label></div>
                <div class="col-75"><input type="text" id="name" name="namee" placeholder="Your Name" required autocomplete="off"></div>
            </div>
            <div class="row">
                <div class="col-25"><label for="company">Company </label></div>
                <div class="col-75"><input type="text" id="company" name="company" placeholder="Your Company Name" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25"><label for="email">Email</label></div>
                <div class="col-75"><input type="email" id="email" name="email" placeholder="Your Email ID" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25"><label for="company">Mobile No.</label></div>
                <div class="col-75"><input type="text" id="mobile" name="mobile" placeholder="Your Mobile Number"
                        maxlength="10" required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25"><label for="msg">Support For</label></div>
                <div class="col-75"><textarea id="msg" name="msg" placeholder="Support For" cols="25"
                        rows="5" required autocomplete="off"></textarea>

                </div>
            </div>
            <div>
                <center><input type="submit" value="Submit" name="submit"></a></center>
            </div>

    </form>
    </div>

    </div>
    </div>

    </head>
    <?php
    include("config.php");
    //error_reporting(0);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $namee = $_POST['namee'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $msg = $_POST['msg'];
    $sql = "INSERT INTO `info` VALUES('','$namee','$company','$email','$mobile','$msg')";
    $result = mysqli_query($conn,$sql);
    if($result){
       echo '<script>alert("Your data added successfully")</script>';
        echo "<script>window.location.href='viewuser.php'</script>";
        $to= $_POST['email'];
	  			$cc=$_POST['email'];
					$from='admin@mina.kitret.com';
					$sub='Order form details from Pooja Hosting.';
					$headers="From: $from\r\n" .
					"Cc: $cc \r\n".
				   'X-Mailer: PHP/' . phpversion() . "\r\n" .
				   "MIME-Version: 1.0\r\n" .
				   "Content-Type: text/html; charset=utf-8\r\n" .
				   "Content-Transfer-Encoding: 8bit\r\n\r\n";
		$mess="<!DOCTYPE html><html><head>
				<meta name='viewport' content='width=device-width, initial-scale=1.0'>
				<title>Enquery Details</title></head><body>
				<table width='1000' border='0' align='center' cellspacing=2 cellpadding='5' bordercolor='#1D2E7E' bgcolor='#1D2E7E'>
		<tr>
			<td colspan='2' bgcolor='#1D2E7E' style='color:#FFFFFF'><strong>ORDER FROM POOJA HOSTING</strong></td>
  </tr>
		  <tr>
			<td width='200' bgcolor='#FFFFFF'><strong>Name</strong></td>
			<td width='500' bgcolor='#FFFFFF'>$_POST[namee]</td>
		  </tr>
		  <tr>
		    <td bgcolor='#FFFFFF'><strong>Email</strong></td>
		    <td bgcolor='#FFFFFF'>$_POST[email]</td>
  </tr>
		  <tr>
			<td bgcolor='#FFFFFF'><strong>Company</strong></td>
			<td bgcolor='#FFFFFF'>$_POST[company]</td>
		  </tr>
		  <tr>
        <td bgcolor='#FFFFFF'><strong>Contact</strong></td>
        <td bgcolor='#FFFFFF'>$_POST[mobile]</td>
      </tr>
      <tr>
        <td bgcolor='#FFFFFF'><strong>Support For</strong></td>
        <td bgcolor='#FFFFFF'>$_POST[msg]</td>
      </tr>
     
			<tr>
			  <td bgcolor='#FFFFFF'><strong>Date</strong></td>
			  <td bgcolor='#FFFFFF'>".date("F j, Y, g:i a")."</td>
			</tr>
		</table></body></html>";
        $ee=mail($to,$sub,$mess,$headers);
        echo "<script>window.location.href='viewuser.php'</script>";
    }
    
    else{
        echo "Failed to add your data";
    }
}
    ?>
</body>

</html>
 