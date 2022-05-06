<html>
<head>
	<title>Healthcare Center</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style >
     .form-control {
    border-radius: 0.75rem;
}
footer .widget h5 {
    font-size: 20px;
    margin-bottom: 10px;
    text-transform: uppercase;
    color: white;
}

#map {
  height:150px;
  width: 100%;
}
</style>

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>

</head>

<!------ Include the above in your HEAD tag ---------->
<body style="background: -webkit-linear-gradient(left, black, maroon); background-size: cover;">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background: -webkit-linear-gradient(left, black, black); background-size: cover;" >
    <div class="container-fluid">
    <div class="collapse navbar-collapse" id="">
    <a class="navbar-brand js-scroll-trigger" href="#" style="margin-top: 10px;margin-left:40px;font-family: 'IBM Plex Sans', sans-serif;"><h4> HEALTHCARE CENTER
</h4></a>
        <ul class="navbar-nav ">
          <li class="nav-item"   style="margin-left: 600px;">
            <a class="nav-link " href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
          </li>
  
          <li class="nav-item" style="margin-left: 120px;">
            <a class="nav-link js-scroll-trigger" href="services.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>ABOUT US</h6></a>
          </li>

          <li class="nav-item"style="margin-left: 90px;">
            <a class="nav-link js-scroll-trigger" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>CONTACT</h6></a>
          </li>
        </ul>
      </div>
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
    </div>
  </nav>

	

<div class="container register"  style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="row">
                    <div class="col-md-9 register-left" style="margin-top: 1%;left: 15%">
                        <img src="https://www.clipartmax.com/png/full/67-676333_my-hospital-record-hospitals-icon.png" alt=""/>
                        <h1>Making Healthcare Better Toghether</h1>
                         <p>Fight the fight Find the cure</p>
                    </div>
                    <div class="col-lg-12 register" style="margin-top: 70px;background: -webkit-linear-gradient(left, white,pink);">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%; float:right; background:maroon;">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Receptionist</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading" style="color:black;"> <ins>Register as Patient</ins></h3>
                                <form method="post" action="func2.php">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="First Name *" name="fname"  onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                            <a href="index1.php" style="color:blue;">Already have an account?</a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password *" name="cpassword"  onkeyup='check();' required/><span id='message'></span>
                                        </div>
                                        <input type="submit" class="btnRegister" name="patsub1" style=" background: maroon;" onclick="return checklen();" value="Register"/>
                                    </div>

                                </div>
                            </form>
                            </div>

                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading" style="color:black;"><ins>Login as Doctor</ins></h3>
                                <form method="post" action="func1.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" style=" background: maroon;" name="docsub1" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>


                            <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading"  style="color:black;"><ins>Login as Admin</ins></h3>
                                <form method="post" action="func3.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" style=" background: maroon;" name="adsub" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <footer style="background: -webkit-linear-gradient(left,black,maroon);color: #e4d6d6">

<div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="wow fadeInDown" data-wow-delay="0.1s">
        <div class="widget">
          <h5>About HEALTHCARE</h5>
          <p>
            Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
          </p>
        </div>
      </div>
      <div class="wow fadeInDown" data-wow-delay="0.1s">
        <div class="widget">
          <h5>Information</h5>
          <ul >
            <li><a style="color: #e4d6d6" href="#">Home</a></li>
            <li><a style="color: #e4d6d6" href="#">Laboratory</a></li>
            <li><a style="color: #e4d6d6"href="#">Medical treatment</a></li>
            <li><a style="color: #e4d6d6" href="#">Terms & conditions</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="wow fadeInDown" data-wow-delay="0.1s">
        <div class="widget">
          <h5>HEALTHCARE CENTER</h5>
          <p>
            Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
          </p>
          <ul>
            <li>
              <span class="fa-stack fa-lg">
            <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
          </span> Monday - Saturday, 8am to 10pm
            </li>
            <li>
              <span class="fa-stack fa-lg">
            <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
          </span> +62 0888 904 711
            </li>
            <li>
              <span class="fa-stack fa-lg">
            <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
          </span> .com
            </li>

          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="wow fadeInDown" data-wow-delay="0.1s">
        <div class="widget">
          <h5>Our location</h5>
          <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28921.830849044756!2d73.88068129999999!3d25.02630635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645429392170!5m2!1sen!2sin"></iframe></div>
          
        </div>
      </div>
    
    
      
    </div>
  </div>
</div>

</footer>
    <script src="js/map.js"></script>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </html>

  