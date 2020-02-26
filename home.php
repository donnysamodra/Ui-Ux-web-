<?php 

 ?>

 <!doctype html>
<html lang="en">
  <head>

  	<title>Aplikasi Ui/Ux</title>
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
         <h1 class="mb-3">Dashboard Reward</h1>
         <hr>

        <div class="row pm-3">
          <div class="col sm-4">
            <div><h4 class="mb-2"><span class="fa fa-trophy"></span>&nbsp;Rank Account &nbsp;:&nbsp; 12 </h4></div>
            <div class="row  mt-3" >
                <div class="col-sm-5" align="left"><h5>Reward This Month </h5></div>
            <div class="col sm-6" align="left"><h5>&nbsp;:&nbsp;$600.00</h5></div>
            </div>
             <div class="row pm-12 mt-3" >
                <div class="col-sm-5" align="left"><h5>Total Bonus Reward </h5></div>
            <div class="col sm-6" align="left"><h5>&nbsp;:&nbsp;$200.00</h5></div>
            </div>
            <div class="row pm-12 mt-3" >
                <div class="col-sm-5" align="left"><h5>Total Reward (All Time) </h5></div>
            <div class="col sm-6" align="left"><h5>&nbsp;:&nbsp;$12,200.00</h5></div>
            </div>
              <br><br>
        
       
          </div>
          <!-- <div class="col-sm-2"></div> -->
          <div class="col sm-1">
   
             <div><h4 class="mb-2"><span class="far fa-chart-bar"></span>&nbsp;Graph</h4></div>
         <div style="width: 720px;height: 500px">
        <canvas id="myChart2"></canvas>
      </div>
          </div> 
        </div>
       

      
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main1.js"></script>

<script type="text/javascript">
  var ctx2 = document.getElementById("myChart2").getContext('2d');
  var myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni" ,"Juli", "Agustus" ,"September" ,"Oktober" ,"November" ,"Desember"],
      datasets: [{
        label: 'Data Reward (2019)',
        data: [12, 19, 3, 23, 2, 3 ,3, 20, 3, 13, 14, 3 ],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>
  </body>

</html>