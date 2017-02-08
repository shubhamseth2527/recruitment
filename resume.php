<!--A Design by JSS
Author: W3layout
Author URL: http://w3layouts.com

-->
<!-- Starting of PHP -->

<?php
$var= mysql_connect("localhost","root","") or die("asdasdasdasd ".mysql_error());
mysql_select_db("testlogin",$var);
$msg= null;
if(isset($_REQUEST['submit']))
{

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$jtitle = $_POST['jtitle'];
$national= $_POST['national'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$cqualification = $_POST['cqualification'];
$collegename = $_POST['collegename'];
$ccity = $_POST['ccity'];
$ccourse = $_POST['ccourse'];
$cyear = $_POST['cyear'];
$ccgpa = $_POST['ccgpa'];
$ccqualification = $_POST['ccqualification'];
$ccollegename = $_POST['ccollegename'];
$cccity = $_POST['cccity'];
$cccourse = $_POST['cccourse'];
$ccyear = $_POST['ccyear'];
$cccgpa = $_POST['cccgpa'];
$cname = $_POST['cname'];
$clocation = $_POST['clocation'];
$cposition = $_POST['cposition'];
$ccertificate = $_POST['ccertificate'];
$ccertificatenum = $_POST['ccertificatenum'];
$cawards = $_POST['cawards'];
$cobjective = $_POST['cobjective'];
$slanguage = $_POST['slanguage'];
$stechnical = $_POST['stechnical'];
$scomputer = $_POST['scomputer'];
$cothers = $_POST['cothers'];
 
$msg= " SUCCESSFULLY PROFILE CREATE";
$insert="INSERT INTO resume (fname, lname, jtitle, national, email, contact, address, pincode, cqualification, collegename, ccity, 
ccourse, cyear, ccgpa, ccqualification,ccollegename, cccity, cccourse, cccyear, cccgpa, cname, clocation, 
cposition, ccertificate, ccertificatenum, cawards, cobjective, slanguage, stechnical, scomputer, cothers)
VALUES ( '$fname', '$lname', '$jtitle', '$national', '$email', '$contact', '$address', '$pincode', '$cqualification', '$collegename', '$ccity', 
'$ccourse', '$cyear', '$ccgpa', '$ccqualification','$ccollegename', '$cccity', '$cccourse', '$ccyear', '$cccgpa', '$cname', '$clocation', 
'$cposition', '$ccertificate', '$ccertificatenum', '$cawards', '$cobjective', '$slanguage', '$stechnical', '$scomputer', '$cothers')";
 mysql_query($insert) or die("error in connection".mysql_error());
 header("location: login.php?status=done");
 exit();
 die();
}
?>
<!-- Ending of PHP -->
<!DOCTYPE HTML>
<html>
<head>
<title>Recruiter an Job Portal</title>
<link rel='shortcut icon' href='images/icon.ico' type='image/x-icon'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Andriod Compatible, 
Smartphone Compatible for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.minmmmm.js"></script>
<script src="js/tooltip.js"></script>
<script src="js/resumevalidate.js"></script>
<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="tooltip"]').tooltip('hide');
});

</script>
<script>

function ADD() {
	document.getElementById('menu1').innerHTML+= "<div class='row' id=\"textbox2\"> <div class=\"form-group col-md-12\"> <div class=\"row\"> <div class=\"col-lg-3\"> <input type=\"text\" placeholder=\"Qualification\" id=\"lastName\" name=\"cqualification\" class=\"input_text\" /></div> <div class=\"col-lg-9\"><input type=\"text\"   placeholder=\"Name of College or University\" id=\"lastName\" name=\"collegename\" class=\"input_text\" /></div></div><div class=\"row\"><div class=\"col-lg-3\"><input type=\"text\"  id=\"lastName\" placeholder=\"City or Location\" name=\"ccity\" class=\"input_text\" /></div><div class=\"col-lg-3\"><input type=\"text\"   id=\"lastName\" placeholder=\"Major Course \" name=\"ccourse\" class=\"input_text\" /></div><div class=\"col-lg-3\"><input type=\"text\"   id=\"lastName\" placeholder=\"Year of Passing\" name=\"cyear\" class=\"input_text\" /></div><div class=\"col-lg-3\"><input type=\"text\"   id=\"lastName\" placeholder=\"CGPA/PERCENTAGE\" name=\"ccgpa\" class=\"input_text\" /></div></div></div>";
}
</script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet">
<!----font-Awesome----->
<!-- navbar style css -->
<link href="css/navstyles.css" rel="stylesheet">
<!-- navbar style css -->
</head>
<body>
<!-- nav bar start -->
<div id="cssmenu" class="overlayDiv">
  <ul>
    <li><a href='index.php'><span>Home</span></a></li>
    <li><a href='jobs.php'><span>Jobs</span></a></li>
    <li><a href='company.php'><span>Recruiter</span></a></li>
    <li><a href='login.php'><span>Login</span></a></li>
    <li class="active"> <a href='resume.php'><span>Resume Upload</span></a></li>
    <li><a href='contact.php'><span>Contact</span></a></li>
    <li class='last'><a href='about.php'><span>About</span></a></li>
  </ul>
</div>
<!--/.navbar-collapse-->
<div class="banner_1">
  <div class="container">
    <div id="search_wrapper1">
      <div id="search_form" class="clearfix">
        <h1>Start your job search</h1>
        <p>
          <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
          <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
          <label class="btn2 btn-2 btn2-1b">
            <input type="submit" value="Find Jobs">
          </label>
        </p>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="single">
    <div class="form-container">
      <h2>Upload Your Resume</h2>
      <div class="search_form1">
        <form action="" method="post">
          <input type="text" class="text" placeholder=" " value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
          <br>
          <input type="file" name="myfile">
          <input type="submit" value="Post your CV">
        </form>
      </div>
    </div>
  </div>
</div>
<div>
<!-- ccv write  -->
<form action="resume.php" method="post">
<div class="container">
<h2 align="center">Make Your Resume</h2>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Basic</a></li>
  <li><a data-toggle="tab" href="#menu1">Education</a></li>
  <li><a data-toggle="tab" href="#menu2">Experience</a></li>
  <li><a data-toggle="tab" href="#menu3">Achievements</a></li>
  <li><a data-toggle="tab" href="#menu4">Skills</a></li>
</ul>
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<h4>Fill your basic information</h4>
<form method="post" name="oneform" onSubmit="return resumevalidate()">
  <div class="row">
    <div class="form-group col-md-12">
      <div class="col-lg-6">
        <input type="text" onChange="progresscomplete();"  id="firstName" placeholder="First Name" name="fname" class="input_text"  onkeypress="return onlyAlphabets(event,this);" />     </div>
      <div class="col-md-6">
        <input type="text" onChange="progresscomplete();" placeholder="Last Name" id="lastName" name="lname" class="input_text" onkeypress="return onlyAlphabets(event,this);" />
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-12">
      <div class="col-md-6">
        <input type="text" onChange="progresscomplete();" path="jobtitle" placeholder="Job Title" id="jobtitle" name="jtitle" class="input_text" onkeypress="return onlyAlphabets1(event,this);" />
      </div>
      <div class="col-md-6">
        <input type="text" onChange="progresscomplete();" placeholder="Nationality" id="nationality" name="national" class="input_text" onkeypress="return onlyAlphabets(event,this);" />
      </div>
    </div>
  </div>
  <!-- End of text box row --> 
  
  <!-- Start Of Row -->
  <div class="row">
    <div class="form-group col-md-12">
      <div class="col-md-6">
        <input type="text" onChange="progresscomplete();"  placeholder="Email" id="email" name="email" class="input_text" />
      </div>
      <div class="col-md-6">
        <input type="text" onChange="progresscomplete();"  placeholder="Conatct" id="contact" name="contact" class="input_text" onkeypress="return onlyNum(event,this);" />
      </div>
    </div>
  </div>
  <!-- End of text box row -->
  
  <div class="row">
    <div class="form-group col-md-12">
      <div class="col-md-9">
        <input type="text" onChange="progresscomplete();"  placeholder="Address" id="address" name="address" class="input_text" />
      </div>
      <div class="col-lg-3">
        <input type="text"  id="lastName" name="pincode" placeholder="Pin Code" class="input_text" maxlength="6" onkeypress="return onlyNum(event,this);" />
      </div>
    </div>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <button type="button" class="button_example"> Next and Save </button>
  </div>
  
  <!-- End of text box row -->
  </div>
  <br>
  <!-- start of Education Detail -->
  <div id="menu1" class="tab-pane fade">
    <h4>Fill your Education Detail</h4>
    <a onClick="ADD();" style="cursor:cell">ADD more Schools or University</a> 
    <!-- Start Of Row -->
    
    <div class="row" id="textbox2">
      <div class="form-group col-md-12 center-block text-center">
        <div class="row">
          <div class="col-lg-3">
            <input type="text"   placeholder="Qualification" id="lastName" name="cqualification" class="input_text" onkeypress="return onlyAlphabets(event,this);"/>
          </div>
          <div class="col-lg-9">
            <input type="text"   placeholder="Name of College or University" id="lastName" name="collegename" class="input_text" onkeypress="return onlyAlphabets(event,this);"/>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <input type="text"  id="lastName" placeholder="City or Location" name="ccity" class="input_text" onkeypress="return onlyAlphabets(event,this);"/>
          </div>
          <div class="col-lg-3">
            <input type="text"   id="lastName" placeholder="Major Course " name="ccourse" class="input_text" onkeypress="return onlyAlphabets1(event,this);"/>
          </div>
          <div class="col-lg-3">
            <input type="text"   id="lastName" placeholder="Year of Passing" name="cyear" class="input_text" onkeypress="return onlyNum(event,this);"/>
          </div>
          <div class="col-lg-3">
            <input type="text"   id="lastName" placeholder="CGPA/PERCENTAGE" name="ccgpa" class="input_text" onkeypress="return onlyNum1(event,this);"/>
          </div>
        </div>
      </div>
      <div class="form-group col-md-12 center-block text-center">
        <div class="row">
          <div class="col-lg-3">
            <input type="text"   placeholder="Qualification" id="lastName" name="ccqualification" class="input_text" onkeypress="return onlyAlphabets(event,this);"/>
          </div>
          <div class="col-lg-9">
            <input type="text"   placeholder="Name of College or University" id="lastName" name="ccollegename" class="input_text" onkeypress="return onlyAlphabets(event,this);"/>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <input type="text"  id="lastName" placeholder="City or Location" name="cccity" class="input_text" onkeypress="return onlyAlphabets(event,this);"/>
          </div>
          <div class="col-lg-3">
            <input type="text"   id="lastName" placeholder="Major Course " name="cccourse" class="input_text" onkeypress="return onlyAlphabets1(event,this);"/>
          </div>
          <div class="col-lg-3">
            <input type="text"   id="lastName" placeholder="Year of Passing" name="ccyear" class="input_text" onkeypress="return onlyNum(event,this);"/>
          </div>
          <div class="col-lg-3">
            <input type="text"   id="lastName" placeholder="CGPA/PERCENTAGE" name="cccgpa" class="input_text" onkeypress="return onlyNum1(event,this);"/>
          </div>
        </div>
      </div>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <button type="button" class="button_example"> Next and Save </button>
    </div>
  </div>
  <!-- Ending of Education detail --> 
  <!-- Starting of Experience -->
  <div id="menu2" class="tab-pane fade">
    <h4>Fill your Experience</h4>
    <div class="row" id="textbox2">
      <div class="form-group col-md-12 center-block text-center">
        <div class="row">
          <div class="col-lg-6">
            <input type="text"   id="lastName" name="cname" placeholder="Comapny Name" class="input_text" onkeypress="return onlyAlphabets1(event,this);"/>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <input type="text"  id="lastName" name="clocation" placeholder="City or Location" class="input_text" onkeypress="return onlyAlphabets(event,this);"/>
          </div>
          <div class="col-lg-3">
            <input type="text"  id="lastName" name="cposition" placeholder="Position" class="input_text" onkeypress="return onlyAlphabets1(event,this);"/>
          </div>
        </div>
      </div>
    </div>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <button type="button" id="" class="button_example"> Next and Save </button>
  </div>
  <!-- Ending of Experience --> 
  <!-- Starting of Experience -->
  <div id="menu3" class="tab-pane fade">
    <h4>Fill your Achievements</h4>
    <div class="row" id="textbox2">
      <div class="form-group col-md-12 center-block text-center">
        <div class="row">
          <div class="col-lg-6">
            <input type="text"   id="lastName" name="ccertificate" placeholder="Certificaion" class="input_text" onkeypress="return onlyAlphabets1(event,this);"/>
          </div>
          <div class="col-lg-3">
            <input type="text"   id="lastName" name="ccertificatenum" placeholder="Certification Number" class="input_text" />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <input type="text"   id="lastName" name="cawards" placeholder="Awards and Honours" class="input_text" />
          </div>
        </div>
      </div>
    </div>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <button type="button" id="" class="button_example"> Next and Save </button>
  </div>
  <!-- Ending of Achievements -->
  <div id="menu4" class="tab-pane fade">
    <h4>Fill your Skills, Languages, Technical Skills</h4>
    <div class="row">
      <div class="col-lg-12">
        <input type="text"   id="lastName" name="cobjective" placeholder="Insert your Carreer Objective" class="input_text" onkeypress="return onlyAlphabets1(event,this);"/>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <input type="text"   id="lastName" name="slanguage" placeholder="Insert your Languages skills" class="input_text" onkeypress="return onlyAlphabets1(event,this);"/>
      </div>
      <div class="col-lg-6">
        <input type="text"   id="lastName" name="stechnical" placeholder="Insert your Technical skills" class="input_text" onkeypress="return onlyAlphabets1(event,this);"/>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <input type="text"   id="lastName" name="scomputer" placeholder="Insert your Computer skills" class="input_text" onkeypress="return onlyAlphabets1(event,this);"/>
      </div>
      <div class="col-lg-6">
        <input type="text"   id="lastName" name="cothers" placeholder="Insert your Other skills" class="input_text" />
      </div>
    </div>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <button type="submit" class="button_example"> Convert to PDF </button>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <button type="submit" name="submit" class="button_example"> Complete Profile </button>
  </div>
  </div>
  </div>
</form>
<br>
<!-- end of cv write -->
<div class="footer">
  <div class="container">
    <div class="col-md-3 grid_3">
      <h4>Navigate</h4>
      <ul class="f_list f_list1">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Sign In</a></li>
        <li><a href="login.php">Join Now</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
    </div>
    <div class="col-md-3 grid_3">
      <h4> Navigate </h4>
      <ul class="f_list f_list1">
        <li><a href="features.php">Features</a></li>
        <li><a href="terms.php">Terms of use</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="jobs.php">Post a Job</a></li>
      </ul>
    </div>
    <div class="col-md-3 grid_3">
      <h4>Recruiter</h4>
      <p>Through these job portals you can apply for those vacancies which have not been published in newspaper. </p>
    </div>
    <div class="col-md-3 grid_3">
      <h4>Sign up for our newsletter</h4>
      <p>Register for job alerts through registered email by Employment News weekly.</p>
      <form>
        <input type="text" class="input_text" placeholder="Enter your email">
        <button type="button" class="btn red">Subscribe now!</button>
      </form>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="footer_bottom">
  <div class="container">
    <div class="col-sm-2"> </div>
    <div class="col-sm-6 footer_text"> </div>
    <div class="clearfix"> </div>
    <div class="copy">
      <p>Copyright © 2016 Recruiter . All Rights Reserved . Design by JSS <a href="http://lpurecruitment.orgfree.com/capstone/about.php" target="_blank">About </a> </p>
    </div>
  </div>
</div>
</body>
</html>
