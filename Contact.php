!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stuff-Service</title>

  
 
  <style>
    .navbar-custom-margin{
      margin: bottom 20px;
    }

    .carousel-item img {
        width: 100%;
        height: auto;
    }
    
    .custom-shadow-container-netwrok{
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5) ;
}

   </style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<body>

<!-- start navigation-->
<?php include 'components/navbar.php'; ?> 

<!-- end navigation-->

<div style="background-color:#9af4bc;" class="mt-4">
  <div class="container center px-4 py-4">
    <h2 class="text-primary">Shri Shyam Relocation | Packers & Movers</h2>
    <p class="text-dark">We Move You Safely and Gracefully</p>
  </div>
  
</div>


<!-- #edf9f8 -->
<div style="background-color:;">
  <div class="container ">
    <h1 class="py-3">Contact us</h1>
    <div class="row">
     
      <div class="col-md-8 my-4 ">
            <div class="col mx-1  custom-shadow-container-netwrok">
                <div class=" py-3 px-3 ">
                    <h2>Head Office</h2>
                 
                    <hr />
                <p class="clrr"><span class="fas fa-map-marker-alt text-primary" aria-hidden="true"></span ><strong class="text-primary"> Address :</strong></p>
                <p>Head Office:- Office No. 408, Parijat Business Centre, Vatva-Gamdi Road, Near Sardar Patel Ring Road, New Vatva, Ahmedabad, Gujarat 382427</p>
                <hr />
                <p class="clrr"><i class="fas fa-mobile-alt text-primary" aria-hidden="true"></i><strong class="text-primary"> Mobile No :</strong></p>
                <h4>9322205544</h4>

                <hr />
                <p class="clrr"><i class="fas fa-envelop text-primary" aria-hidden="true"></i><strong class="text-primary"> E-mail Id :</strong><br>

                  <a href="mailto:ks5727033@gmail.com">ks5727033@gmail.com</a>
                </p>
                </div>
                
            </div>
            
      </div>
      <div class="col-md-4">
              <form method="post" action="" id="myForm"> 
                    <div class="row bg-primary my-4 rounded">
                        <h4 class="text-center border-bottom pb-2">Send Enquiry</h4>
                        <div class="col-md-6 mt-2 mb-2"><input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required></div>
                        <div class="col-md-6 mt-2 mb-2"><input type="date" class="form-control" id="date" name="date" required ></div>
                        <div class="col-md-6 mt-2 mb-2"><input type="text" class="form-control" id="number" name="number" placeholder="Enter your number" required></div>
                        <div class="col-md-6 mt-2 mb-2"><input type="text" class="form-control" id="movingFrom" name="movingFrom" placeholder="Moving From" required></div>
                        <div class="col-md-6 mt-2 mb-2"><input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required></div>
                        <div class="col-md-6 mt-2 mb-2"><input type="text" class="form-control" id="movingTo" name="movingTo" placeholder="MovingTo" required></div>
                        <div class="col-md-12 mt-2 mb-2 h-12"><textarea col="2" row="6" class="form-control" name="message" placeholder="text here" style="height:120px;" required></textarea></div>
                        <div class="mt-2 mb-2"><button type="submit" name="submit" value="submit" class="btn btn-success" style="width:100%;">Submit</button></div>
                        <div class="mt-2 mb-5"><button type="submit" class="btn btn-danger" style="width:100%;" onclick="clearForm()">clear</button></div>   
                    </div>
                </form>
                <div class="row rounded custom-shadow-container-netwrok my-4" >  
                  <b>          
                    <ul class=" py-3  ">
                        <h3 class="text-primary" style="font-family:roboto;">Our services</h3>
                        <h5 class="py-1"><a href=""class=" text-decoration-none text-dark ">Corporate shifting</a> </h5>
                        <h5 class="py-1"><a href=""class="text-decoration-none text-dark">Intercity shifting</a></h5>
                        <h5 class="py-1"><a href=""class="text-decoration-none text-dark">Local shifting</a></h5>
                        <h5 class="py-1"><a href=""class="text-decoration-none text-dark">Residental relocation</a></h5>
                        <h5 class="py-1"><a href=""class="text-decoration-none text-dark">Smart warehousing</a></h5>
                        <h5 class="py-1"><a href=""class="text-decoration-none text-dark">Bike transportation</a></h5>
                        <h5 class="py-1"><a href=""class="text-decoration-none text-dark">Office shifting</a></h5>
                        <h5 class="py-1"><a href=""class="text-decoration-none text-dark">House shifting </a></h5>
                    </ul>
                  </b>
               </div>
      </div>
    </div>
  </div>
</div>
<div style="background-color:f9e8e8;">
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


<?php include "components/Form.php" ?>
<script src="index.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>