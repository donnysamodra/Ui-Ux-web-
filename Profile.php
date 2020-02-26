<?php 

?>

<!doctype html>
<html lang="en">
<head>
 <title>Chart Ui/Ux</title>
 <script type="text/javascript" src="js/Chart.js"></script>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

  <div class="wrapper d-flex align-items-stretch">
    <?php include "nav.php"; ?>


<!-- Page Content  -->
  <div id="content" class="p-4 p-md-5 pt-5">
                <h1 class="mb-3">User's Setting</h1>
                <hr>
        <div class="limiter">
              <div class="jumbotron"> 
                  <div class="row">
                      <div class="col-md-1"></div>
                    <div class="col-md-4">
                      <div class="container center"><img src="images/bapak.png" alt="bapak" width="150" height="150"></div>
                      <div class="container center">&nbsp;<button type="submit" class="btn bg-dark btn-outline-light">Choose Image</button></div>
                      <div class="container center">Max size : 1 MB</div>
                      <div class="container center">Format : JPG/PNG</div>
                         
                    </div>
                  
                    <div class="col-md-6">
                      <form>
                            <div class="row mt-2">
                              <div class="form-group col-md-4"><label class="right">Name &nbsp;</label></div>
                              <div class="col-md-8"><input type="text" class="form-control" placeholder="Mangaras Yanu F."></div>
                            </div>
                            <div class="row mt-2">
                              <div class="form-group col-md-4"><label class="right">Email &nbsp;</label></div>
                            <div class="form-group col-md-8">
                              <div class="row">
                                <div class="col-md-8">admin@gmail.com &emsp; </div>
                                <div class="col-md-4" align="right"><a href="#">Change</a></div>
                              </div>
                            </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-4"><label class="right">Telephone Number &nbsp;</label></div>
                              <div class="form-group col-md-8"><input type="text" class="form-control" placeholder="081234567890"></div>
                            </div>
                            <div class="row mt-2">
                              <div class="form-group col-md-4"><label class="right">Gender &nbsp;</label></div>
                              <div class=" col-md-8">
                                   <div class="form-check">
                                  <label class="form-check-label" for="radio1">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="male" checked>Male
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label" for="radio2">
                                    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Female
                                  </label>
                                </div>
                              </div>
    
                            </div>
                                    <div align="right"><button type="submit" class="btn bg-dark btn-outline-light">Submit</button></div>
                                </form>
                    </div>
                  </div>
                    <hr>
                  <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                            <p>Link your account</p>
                                <button type="submit" class="btn bg-primary btn-outline-light">Facebook <i class='fa fa-facebook'></i></button>
                                <button type="submit" class="btn bg-light btn-outline-primary">Google <i class='fa fa-google'></i></button>
                                <button type="submit" class="btn bg-info btn-outline-light">Twitter <i class='fa fa-twitter-square'></i></button>    
                    </div>
                  </div>
              </div>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main1.js"></script>

</body>
</html>
 