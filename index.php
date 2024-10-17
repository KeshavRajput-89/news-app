<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stuff</title>
</head>
<style>

  /* table animation */
 @keyframes slideInFromLeft {
  0% {
      transform: translateX(-100%);
      opacity: 0;
  }
  100% {
      transform: translateX(0);
      opacity: 1;
  }
}
 /* table animation */

.custom-form-container {
  animation: slideInFromLeft 2s ease;
}


/* client slider */
.client-slide {
  background-color: #f8f9fa;
  text-align: center;
  max-width:170px;
  

}
.client-slide img {
  max-width: 170px;
  max-height: 80px;
  height: auto;
}
/* client slider end */
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstap.min.css">
<link rel="stylesheet" href="css/all.min.css">

<!--google font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">

<body class="scrollable-container">

<!-- start navigation-->
<?php include 'components/navbar.php'; ?> 

<!-- end navigation-->

<div id="carouselIndicators" class="carousel slide" data-ride="carousel" >
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/main1.jpg" class="d-block w-100" style="height:70%;"  alt="Image 1">
    </div>
    <div class="carousel-item">
      <img src="images/main2.jpg" class="d-block w-100 " style="height:70%;"  alt="Image 2">
    </div>
    <div class="carousel-item">
      <img src="images/main3.jpg" class="d-block w-100 "  style="height:70%;" alt="Image 3">
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- about content -->
<div  style="background-color:#f5f5f5;">
  <div class="container">
  <div class="row">
      <div class="custom-form-container col-md-4">
        <form method="post" action="" id="myForm"> 
          <div class="row bg-primary my-4 rounded slideInFromLeft">
                <h4 class="text-center border-bottom pb-2">Send Enquiry</h4>
                <div class="col-md-6 mt-2 mb-2">
                  <input type="text" class="form-control"  name="name" placeholder="Enter your name" required> 
                </div>
                <div class="col-md-6 mt-2 mb-2">
                  <input type="date" class="form-control"  name="date" required>
                </div>
                <div class="col-md-6 mt-2 mb-2">
                  <input type="text" class="form-control"  name="number" placeholder="Enter your number" required>
                </div>
                <div class="col-md-6 mt-2 mb-2">
                  <input type="text" class="form-control"  name="movingFrom" placeholder="Moving From" required>
                </div>
                <div class="col-md-6 mt-2 mb-2">
                  <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                </div>
                <div class="col-md-6 mt-2 mb-2">
                  <input type="text" class="form-control"  name="movingTo" placeholder="MovingTo" required>
                </div>
                <div class="col-md-12 mt-2 mb-2 h-12">
                  <textarea col="2" row="6" class="form-control" name="message" placeholder="text here" style="height:120px;" required></textarea>
                </div>
                <div class="mt-2 mb-2">
                  <button type="submit" name="submit" value="submit" class="btn btn-success" style="width:100%;">Submit</button>
                </div>
                <div class="mt-2 mb-5">
                  <button type="submit" class="btn btn-danger" style="width:100%;" onclick="clearForm()">clear</button>
                </div> 
        </div>
        </form>
      </div>

          <div class=" container col-md-7 ml-2 bg-light">
              <h3 class="text-primary text-lg  my-3">About company</h3>
              <h2 class=" ">welcome to the stuff<br/>packers and movers</h2>
              <p class="text-justify">Shri Shyam Relocation | Packers & Movers - India is nowadays a worldwide renowned Packing and Moving Company conveying exceptional services like packing and moving, corporate relocation, warehouse and storage, domestic relocation and international relocation services. Our potency of brainpower and firm work has made in India (Shri Shyam Relocation | Packers & Movers ) now the leading and matchless relocation company in the industry. in India (Shri Shyam Relocation | Packers & Movers ) have exceedingly enthusiastic and steadfast young specialized in our team, they themselves take care of all the responsibility in organizing all kinds of moving and packing services absolutely.</p>
               <div class="row">
                    <div class="col-md-5 mx-3 custom-shadow " style="background-color:#ecdede;">
                          <img src="https://picsum.photos/id/238/30/30.jpg">
                          <h4>Global service</h4>
                          <p>We always provide people a complete solution focused of any business.</p>
                    </div>
                    <div class="col-md-5 mx-3 custom-shadow" style="background-color:#ecdede;">
                          <img src="https://picsum.photos/id/238/30/30.jpg">
                          <h4>Local service</h4>
                          <p>We always provide people a complete solution focused of any business.</p>
                    </div>
                    <div class=" col-md-3 mx-4 my-3 py-3 px-2"><a href="aboutus.php" class="custom-read">Read more...</a></div>
              </div>
        </div>
        
   </div>
 </div>
</div>
<!-- about content end -->

<div style="background-color:#f5f5fd;">
<div class="container">
<div class="row">
<div class="col-md-3 my-4 ">
      <div class="card bg-transparent " style="width: 16rem; height: 22.3em;">
        <div class="card-body ">
          <h4 class="card-title my-3 ">What We Do ?</h4>
          <h3 class="card-text">We are optimists who Love to work together.</h3>
          <div class=" col-md-12 my-5"><a href="aboutus.php" class="custom-read">More Services</a></div>
        </div>
      </div>
</div>

  
<div class="col-md-3 my-4 custom-card-shadow">
      <div class="card " style="width: 16rem;">
        <img src="images/quality packing.jpg" height="190px" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Quality Packing</h5>
          <p class="card-text">Our company provides Quality Packing services .</p>
          <h4><a href="#" class="text-decoration-none">View More></a></h4>
        </div>
      </div>
</div>


<div class="col-md-3 my-4 custom-card-shadow">
      <div class="card " style="width: 16rem;">
      <img src="images/office shifting.jpg" height="190px" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Office Shifting</h5>
          <p class="card-text">Our company also provides Office Shifting services .</p>
          <h4><a href="#" class="text-decoration-none">View More></a></h4>
        </div>
      </div>
</div>


<div class="col-md-3 my-4 custom-card-shadow">
      <div class="card " style="width: 16rem;">
      <img src="images/house shifting.jpg" height="190px" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">House Shifting</h5>
          <p class="card-text">Our company provides House Shifting services.</p>
          <h4><a href="#" class="text-decoration-none">View More></a></h4>
        </div>
      </div>
</div>


<div class="col-md-3 my-4 custom-card-shadow">
      <div class="card " style="width: 16rem;">
      <img src="images/transportation.jpg" height="190px" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Transportation</h5>
          <p class="card-text">Our company provides Transportation services .</p>
          <h4><a href="#" class="text-decoration-none">View More></a></h4>
        </div>
      </div>
</div>

<div class="col-md-3 my-4 custom-card-shadow">
      <div class="card " style="width: 16rem;">
      <img src="images/warehousing.jpg" height="190px" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Smart Warehousing</h5>
          <p class="card-text">Our company provides Smart Warehousing services.</p>
          <h4><a href="#" class="text-decoration-none">View More></a></h4>
        </div>
      </div>
</div>

<div class="col-md-3 my-4 custom-card-shadow">
      <div class="card " style="width: 16rem;">
      <img src="images/industry solution.jpg" height="190px" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Industry Solution</h5>
          <p class="card-text">Our company provides Industry Solution services.</p>
          <h4><a href="#" class="text-decoration-none">View More></a></h4>
        </div>
      </div>
</div>


<div class="col-md-3 my-4 custom-card-shadow">
      <div class="card " style="width: 16rem;">
      <img src="images/luggage care.jpg" height="190px" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Caring your Luggage</h5>
          <p class="card-text">Our company provides Luggage caring services.</p>
          <h4><a href="#" class="text-decoration-none">View More></a></h4>
        </div>
      </div>
</div>
</div>
<div>
</div>
  </div>

<!-- client section slider -->

<div style="background-color:#f9e8e8;" >
  <div class="container py-5">
    <div class="col text-center custom-client-margin " >
      <h3>Our clients</h3>
      <p>We give complete satisfaction to our client</p>
  </div>
<div id="clientCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="row  px-5" style="margin-left:40px;">
          <div class="col"><div class="client-slide"><img src="images/clientimg1.gif" alt="Client 1"> </div></div>
          <div class="col"><div class="client-slide"><img src="images/clientimg2.gif" alt="Client 2"></div></div>
          <div class="col"><div class="client-slide"><img src="images/clientimg3.gif" alt="Client 3"></div></div>
          <div class="col"><div class="client-slide"><img src="images/clientimg4.gif" alt="Client 4"></div></div>
        </div>
    </div>
      <div class="carousel-item ">
        <div class="row  mx-5 px-5">
          <div class="col"><div class="client-slide"><img src="images/clientimg5.gif" alt="Client 5"></div></div>
          <div class="col"><div class="client-slide"><img src="images/clientimg6.gif" alt="Client 6"></div></div>
          <div class="col"><div class="client-slide"><img src="images/clientimg7.gif" alt="Client 7"></div></div>
          <div class="col"><div class="client-slide"><img src="images/clientimg8.gif" alt="Client 8"></div></div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="row   mx-5 px-5">
          <div class="col"><div class="client-slide"><img src="images/clientimg9.gif" alt="Client 9"></div></div>
          <div class="col"><div class="client-slide"><img src="images/clientimg10.gif"alt="Client 10"></div></div>
          <div class="col"><div class="client-slide"><img src="images/clientimg11.gif"alt="Client 11"></div></div>
          <div class="col"><div class="client-slide"><img src="images/clientimg12.gif" alt="Client 12"></div></div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="row  mx-5 px-5">
          <div class="col"><div class="client-slide"><img src="images/clientimg13.gif" alt="Client 13"></div></div>
          <div class="col"> <div class="client-slide"><img src="images/clientimg14.gif" alt="Client 14"></div></div>
          <div class="col"><div class="client-slide"><img src="images/clientimg15.gif" alt="Client 15"></div></div>
          <div class="col"><div class="client-slide"><img src="images/clientimg16.gif" alt="Client 16"></div></div>
        </div>
      </div>    
    </div>
    <div>
    <a class="carousel-control-prev" href="#clientCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#clientCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
   <!-- client section slider end -->
   <div>
<div class="container py-5">
<div class="row py-5" >
    <div class="col text-center">
        <div class="border p-3 mx-2 bg-primary rounded">
          <div><img src="images/icon-user.png" alt="icon1" width="30px" height="30px" ></div>
          <h4 class="text-white mt-2">Our customers</h4>
        </div>
    </div>
    <div class="col text-center">
        <div class="border p-3 mx-2 bg-primary rounded">
        <div><img src="images/icon-smile.png" alt="icon2" width="30px" height="30px" ></div>
          <h4 class="text-white mt-2">Happy clients</h4>
        </div>
    </div>
    <div class="col text-center">
        <div class="border p-3 mx-2 bg-primary rounded">
          <div><img src="images/icon-idea.png" alt="icon3" width="30px" height="30px" ></div>
          <h4 class="text-white mt-2">Project complete</h4>
        </div>
    </div>
    <div class="col text-center">
        <div class="border p-3 mx-2 bg-primary rounded">
          <div><img src="images/icon-team.png" alt="icon4" width="30px" height="30px" ></div>
          <h4 class="text-white mt-2">Our team</h4>
        </div>
    </div>
</div>
  </div>
</div> <!--  client secion slider end -->
</div>
  
<!-- client section end -->


<div style="background-color:#dedede;"> <!--strength section---> 
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-4 px-5 ">
          <img src="images/major strength.jpg" class="rounded" width="300px" height="300px" >
        </div>
          <div class="col-md-8 py-4">
            <h2>Our major strength</h2>
            <p>Shri Shyam Relocation | Packers & Movers - India accepts as true that your time should begin with your complete understanding of each step that will be taken.
            </p>
            <div class="container">
              <ol class="list-group-numbered">
                <li class="list-group-item">Absolute security from sun, pilferage, rain and dust</li>
                <li class="list-group-item">Exclusively packing of fragile commentary</li>
                <li class="list-group-item">Usage of proper packing material</li>
                <li class="list-group-item">Tamper proof sealing of goods</li>
                <li class="list-group-item">Security supervisors at various locations</li>
                <li class="list-group-item">Cost effective services</li>
              </ol>
            </div>
           </div>
        </div>
    </div>
</div>  
<!-- strength section -->

<div style="background-color:#6a00f;">
  <div class="container center px-4 py-4">
    <h2 class="text-center text-primary">Get Relocated anywhere in India with Real Specialist..</h2>
    <p class="text-center text-primary">24*7 Customer Care Support No: 8929864832 or Mail Us : <a href="ks5727033@gmail.com text-decoration-none">ks5727033@gmail.com</a> </p>
  </div> 
</div>
  

<!-- footer -->
<?php include 'components/Footer.php'; ?> 
<!-- footer end -->



















<script>
  if(window.history.replaceState)
  {
    window.history.replaceState( null, null,window.location.href);
  }
</script>
<script>
  function clearForm()
  {
    document.getElementById("myForm").reset();
  }
</script>




    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
<?php include "components/Form.php" ?>
</html>



