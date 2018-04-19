<?php session_start();?>
<?php
	
    $mysqli = mysqli_connect('localhost', 'root', '', 'mad');
    $sql = "SELECT username FROM users";
    //$result = mysqli_result object
    $result = mysqli_query( $mysqli,$sql ); 
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Construction Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="parallaxxxw.css">
    <link rel="stylesheet" href="index1nn2.css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <link rel="stylesheet" href="stylecontact2.css">
     <link rel="stylesheet" href="sidenavstyle2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="servicestyle2.css">
</head>
<body>
   <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg> 
      </a>
    </span>

    <ul class="navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#showcase">About</a></li>
      <li><a href="#newsletter">Services</a></li>
      <li><a href="#contactForm">Contact</a></li>
	     <li><a href="http://localhost/madphp/login2.php">TENDER</a></li>
    
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <!-- <a href="http://localhost/madphp/login2.php">Login</a>-->    
 <a href="http://localhost/madphp/register2.php">Sign Up</a>
	
</div>

  <div id="main">
  </div>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Cidcom Services
      </span>
    </div>
  </div>

  <section class="section section-light">
    <h2>Why Us?</h2>
    <p>
      In the modern world, construction usually involves the translation of designs into reality. A formal design team may be assembled to plan the physical proceedings, and to integrate those proceedings with the other parts. The design usually consists of drawings and specifications, usually prepared by a design team including Architect, civil engineers, mechanical engineers, electrical engineers, planning consultants and architectural consultants. The design team is most commonly employed by (i.e. in contract with) the property owner. Under this system, once the design is completed by the design team, a number of construction companies or construction management companies may then be asked to make a bid for the work, either based directly on the design, or on the basis of drawings and a bill of quantities provided by a quantity surveyor. Following evaluation of bids, the owner typically awards a contract to the most cost efficient bidder.
    </p>
  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        “Create with the heart; build with the mind.” 
         ― Criss Jami
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Our Approach</h2>
    <p>
     A new construction company faces a number of challenges. Regardless of whether it offers commercial construction services, new residential construction or general repairs and modifications, a construction company without a service record needs a series of clear goals as it begins to operate. These goals are different from the specific, tangible objectives that a construction business needs, but they are just as important to lasting profitability.One of the first goals a new construction company sets out to achieve needs to be establishing a strong and sustainable internal structure
    </p>
  </section>

  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        “The real beauty of the building is seen when the right paints touch its walls” 
― Ernest Yeboah.
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Client Relationships</h2>
    <p>
      As a new construction company begins operating, its goals may shift toward developing a body of work and establishing a positive reputation. This goal is important because it moves beyond establishing the business and provides a basis for future work, which can serve as an example for even more-profitable and ambitious projects. A new construction company may need to invest in a model home or extensive packages of plans and images that clients can use to better understand what they're paying for when they contract with the company for a new construction job.
    </p>
  </section>

  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Request a Service
      </span>
    </div>
        </div>
    ......
     
    <header id="showcase">
    <h1>Get in touch with Cidcom Group Services</h1>
    <p>The roads to success are always under construction</p>
    <a href="#" class="button">About Us</a>
  </header>
  <section id="section-a">
    <div style="width:100%;display:block;height:30px"></div>
<div class="content">
  <div id="left">
  <h3>INTRODUCION</h3>
  <p style="margin-left:10px;margin-right:10px">       Cidcom is one of the leading construction companies today. We are different from other companies as we provide timely and unique services to our respected clients. Also we see to it that our orders reach our clients on time.
   We as a construction company strive hard to stand up to the expectations of other companies and if you choose us, we will surely give you the best</p>
  </div>
  <div id="right">
  <h3>PRINCIPLES</h3>
      <div class="imgcontainer">
        <div id="one"><img src="truth.jpg" style="width:100px;position: relative;left: -85px; height:100px"><span style="position: absolute;top: 35px;left: 210px">Trust the process!</div><br>
        <div class="overlay">
            <div class="text">TRUST</div>
          </div>
          
                    </div>  
<div class="imgcontainer">
    <div id="one"><img src="abnegation (3).jpg" style="width:100px;position: relative;left: -80px;height: 100px"><span style="position: absolute;top: 35px;left: 225px">Hold the vision!</div><br>
        <div class="overlay">
          <div class="text">VISION</div>
        </div>
      </div>

   
        
      <div class="imgcontainer">
        <div id="three"><img src="8770dc954dd8e2c206f16c06b4f6b9e6--cross-stitch-patterns-divergent-symbols.jpg" style="width:100px;position: relative;left: -85px; height:100px"><span style="position: absolute;top: 35px;left: 210px">Expect the results!</div><br>  
        <div class="overlay">
          <div class="text">RESULTS</div>
        </div>  
      </div>  
<br><br><br><br><br>
  
</div>
<div id="footer">
<marquee><img src="footer_element.png" width="100%"></marquee>
    </div>
  </section>......


    <section id="newsletter">
      <div class="container">
        <h1>Subscribe To Our Newsletter</h1>
        <form>
          <input type="email" placeholder="Enter Email...">
          <button type="submit" class="button_1">Subscribe</button>
        </form>
      </div>
    </section>
....
  <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="pra4.png">
          <h3>Reliability</h3>
          <p> Maintain a win-win environment for all involved; the bank, investor, broker, contractor, and the homeowner.</p>
        </div>
        <div class="box">
          <img src="pra5.png">
          <h3>Guarantee</h3>
          <p>Constant improvements in all aspects of home improvement, remodels, renovations</p>
        </div>
        <div class="box">
          <img src="pra6.png">
          <h3>Power</h3>
          <p>Growth of our company not only through increased volume but also through technology and efficiency.</p>
        </div>
      </div>
    </section>...
<div class="container">
      <h1 class="brand"><span>Constructors</span> of the future</h1>
    <div class="wrapper animated bounceInLeft">
      <div class="company-info">
        <h3>The Constructors</h3>
        <ul>
          <li><i class="fa fa-road"></i> 44 Something st</li>
          <li><i class="fa fa-phone"></i> (555) 555-5555</li>
          <li><i class="fa fa-envelope"></i> constructor@gmail.com</li>
        </ul>
      </div>
      <div class="contact">
        <h3>Email Us</h3>

        <form id="contactForm">
          <p>
            <label>Name</label>
            <input type="text" name="name" id="name">
          </p>
		  
        <!--  <p>
            <label>Company</label>
            <input type="text" name="company" id="company">
          </p>
		-->  
          <p>
            <label>Email Address</label>
            <input type="email" name="email" id="email">
          </p>
          <p>
            <label>Phone Number</label>
            <input type="text" name="phone" id="phone">
          </p>
          <p class="full">
            <label>Message</label>
            <textarea name="message" rows="5" id="message"></textarea>
          </p>
          <p class="full">
            <button type="submit" >Submit</button>
          </p>
        </form>
      </div>
    </div>
  </div>
    .......

  

    <footer>
      <p>The constructors, Copyright &copy; 2017</p>
        
        <a href="https://www.facebook.com/"><img src="fb.png" align="center" style="bottom: 5px; left: 622px; height:30px; width: 30px"></a>
        <a href="https://www.instagram.com/accounts/emailsignup/?hl=en"><img src="insta1.jpg" align="center" style="bottom: 5px; left: 652px; height:30px; width: 30px;"></a>
</div>
    </footer>
</body>
</html>
