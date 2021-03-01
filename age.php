<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        .firstpage{
            background-image: url("pic.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            height: 100vh;
        }

        ul li a{
            color: white;
            font-size: 28px;
            margin:10px
        }

     ul li a:hover
{
    background: linear-gradient(to right, #A1C4FD 0%, #C2E9FB 100%);
    border-radius: 50px;
    color: black;
    position: relative;
    margin:10px
}
.maincalc{
    box-shadow: -1px 1px 60px 10px rgb(36, 35, 35);
    background: rgba(0, 0, 0, 0.8);
    margin-top: 80px;
    
}

.resultbtn{
  display: inline-block;
  font-size: 1.5rem;
  white-space: nowrap;
    vertical-align: middle;
    user-select: none;
  font-weight: bold;
  background-color: transparent;
  margin-left: 50px;
  margin-top: 50px;
  color: white;
  box-sizing: border-box;
  font-family: inherit;
  overflow-x: visible;
  overflow-y: visible;
  transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition-property: color, background-color, border-color, box-shadow;
    transition-duration: 0.15s, 0.15s, 0.15s, 0.15s;
    transition-timing-function: ease-in-out, ease-in-out, ease-in-out, ease-in-out;
    transition-delay: 0s, 0s, 0s, 0s;
    border-radius: .25rem;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    padding-top: 0.375rem;
    padding-right: 0.75rem;
    padding-bottom: 0.375rem;
    padding-left: 0.75rem;
}

.resultbtn:hover{
  background-color: #dc3545;
  color: black;
}

hr.rounded {
  border-top: 8px solid dodgerblue;
  border-radius: 5px;
  margin-left: 0;
  width: 130px;
}
        
    </style>
</head>
<body>
    <ul class="nav sticky-top justify-content-center" style="background-color: #15192F; " >
        <li class="nav-item">
          <a class="nav-link active" href="#page_one">Main Page</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="#page_two">About</a>
        </li>
      </ul>

      <section class="firstpage" id="page_one">
      <div class="container">
          <div class="row">
            <div class="col-sm-8 maincalc">
            <div class="row">
  <div class="col-sm" style="color:white;"></div>
  <div class="col-sm" style="color:white; font-size: 23px;font-weight: bold; margin-top: 25px;">Age Calculator</div>
  <div class="col-sm" style="color:white;"></div>
</div>



<div class="row">

  <div class="col-sm-8">
  <form action="age.php" name="form" style="margin: 25px;" method="POST">

<label for="dob" style="margin:25px;font-size: 20px; color: white; font-weight: bold; font-family: sans-serif;">Date Of Birth:</label>
<input type="date" id="dob" name="dob" style="border-radius:10px;background: linear-gradient(to right, #A1C4FD 0%, #C2E9FB 100%); font-size: 20px; font-weight: bold; font-family: sans-serif;" required><br>
<input type="submit" name="age"value="Result" class="resultbtn">
</form>
  </div>

  <div class="col-sm-4"></div>

</div>          

                  <?php
                  $flagabc=0;
     if(isset($_POST['age']))
     {
      $flagabc=1;
        $dob = $_POST['dob'];
        $age = date_diff(date_create($dob),date_create('today'));
     }
?>
            <div class="row">
            <div class="col-sm"></div>
  <div class="col-sm" style="background: linear-gradient(to right, #A1C4FD 0%, #C2E9FB 100%); width: 100%;margin-top: 60px;margin-bottom: 50px; border-radius: 10px;">
  <p style="font-size: 20px; font-weight: bold; margin: 20px;"><?php 
  if($flagabc==0)
  {
    echo "Input your Date of birth first.";
  }
  else
  {
    echo  "Your age is: ".$age->y." Years ".$age->m." Months ".$age->d." Days ";
  }
  ?></p>
    
  </div>
  <div class="col-sm"></div>
</div>
            </div>
            <div class="col-sm-4"></div>
          </div>

      </div>
      </section>
      

      <section style="background-image: linear-gradient(to right, #acb6e5 0%, #86fde8 100%);" id="page_two">

      <div class="container" >

      <div class="row">
  <div class="col-sm"></div>
  <div class="col-sm">

  <h4 style="color: red; margin-top:100px;">ABOUT ME</h4>
  <hr class="rounded">
  </div>
  <div class="col-sm"></div>
</div>

      <div class="row">
  <div class="col-sm-8">


  <div class="card" style="width: 18rem; margin-top: 20px;margin-bottom:20px;">
  <img class="card-img-top" src="siham.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Abdur Samad Siham</h5>
    <p class="card-text">
Computer Science and Engineering Student at Ahsanullah University of Science and Technology.</p>
    <a href="https://abdur-samad-siham.github.io/portfolio/#Home" target="_blank" class="btn btn-primary">Portfolio</a>
  </div>
</div>

  </div>
  <div class="col-sm-4" style="margin-top:40px">
    <h4 style="color:green">Contact</h4>
    <p style="margin-top:25px;font-weight:bold;font-size: 22px;">Email: abdursamad101@gmail.com</p>
    <p style="margin-top:25px;font-weight:bold;font-size: 22px;">Mobile: 01710-00000</p>
    <p style="margin-top:25px;font-weight:bold;font-size: 22px;">Address: Jatrabari ,Dhaka</p>
  </div>
</div>

      </div>

      </section>  


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>