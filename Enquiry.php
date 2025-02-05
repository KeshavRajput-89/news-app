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


.custom-submit{
    width:100%;
    font-size:20px;
    color:green
}
.custom-submit:hover{
    width:100%;
    font-size:20px;
    color:white;
    background-color:green;
    border-radius:9px;
}


.custom-clear{
    width:100%;
    font-size:20px;
    color:red
}
.custom-clear:hover{
    width:100%;
    font-size:20px;
    color:white;
    background-color:red;
    border-radius:9px;
}

   </style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<body>

<!-- start navigation-->
<?php include 'components/Navbar.php'; ?> 
<!-- end navigation-->

<div style="background-color:#9af4bc;" class="mt-4">
  <div class="container center px-4 py-4">
    <h2 class="text-primary">Shri Shyam Relocation | Packers & Movers</h2>
    <p class="text-dark">We Move You Safely and Gracefully</p>
  </div>
</div>
    <div>
        <h1 class="text-center py-2">Enquiry</h1>
        <div class="container ">
        <form method="post" action="" id="myForm"> 
            <div class="row bg-primary my-4 pt-5 rounded">
                <div class="col-md-6 mt-2 mb-2">
                    <input type="text" class="form-control py-3" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="col-md-6 mt-2 mb-2">
                    <input type="date" class="form-control py-3" id="date" name="date" required >
                </div>
                <div class="col-md-6 mt-2 mb-2">
                    <input type="text" class="form-control py-3" id="number" name="number" placeholder="Enter your number" required>
                </div>
                <div class="col-md-6 mt-2 mb-2">
                    <input type="text" class="form-control py-3" id="movingFrom" name="movingFrom" placeholder="Moving From" required>
                </div>
                <div class="col-md-6 mt-2 mb-2">
                    <input type="email" class="form-control py-3" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="col-md-6 mt-2 mb-2">
                    <input type="text" class="form-control py-3" id="movingTo" name="movingTo" placeholder="MovingTo" required>
                </div>
                <div class="col-md-12 mt-2 mb-2">
                    <textarea col="12" row="12" class="form-control " name="message" placeholder="text here" style="height:170px;" required></textarea>
                </div>
                <div class="row">
                <div class="col my-4 mb-2">
                    <button type="submit" name="submit" value="submit" class="custom-submit py-2" style="">Submit</button>
                </div>
                 <div class="col my-4 mb-5">
                    <button type="submit" class="custom-clear py-2" style="" onclick="clearForm()">clear</button>
                </div>   
             </div>
        </form>
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