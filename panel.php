<!DOCTYPE html>
<html lang="en" >
<head>
  <style>[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
  <meta charset="UTF-8">
  <title>Ici ca charbon pd</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./style2.css">
	<link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/4616/4616203.png" />
<!--[if IE]><script type="text/javascript">
    // Fix for IE ignoring relative base tags.
    (function() {
        var baseTag = document.getElementsByTagName('base')[0];
        baseTag.href = baseTag.href;
    })();
</script><![endif]-->

<style>

.tooltips {
  position: relative;
  display: inline;
}
.tooltips span {
  position: absolute;
  width: 140px;
  color: #fff;
  background: #000;
  height: 30px;
  line-height: 30px;
  text-align: center;
  visibility: hidden;
  border-radius: 6px;
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="card">
	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
<canvas id="myChart" width="400" height="400"></canvas>
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Cliques: <?php 
			$filepath = './stats.ini';
            $data = @parse_ini_file($filepath);echo $data['cliques']; ?>', 'Login: <?php 
			$filepath = './stats.ini';
            $data = @parse_ini_file($filepath);echo $data['logs']; ?>', 'Billing: <?php 
			$filepath = './stats.ini';
            $data = @parse_ini_file($filepath);echo $data['billings']; ?>', 'Cc: <?php 
			$filepath = './stats.ini';
            $data = @parse_ini_file($filepath);echo $data['cc']; ?>'],
        datasets: [{
            label: '# of Votes',
			data: [<?php 
			$filepath = './stats.ini';
            $data = @parse_ini_file($filepath);echo $data['cliques']; ?>, <?php 
			$filepath = './stats.ini';
            $data = @parse_ini_file($filepath);echo $data['logs']; ?>, <?php 
			$filepath = './stats.ini';
            $data = @parse_ini_file($filepath);echo $data['billings']; ?>, <?php 
			$filepath = './stats.ini';
            $data = @parse_ini_file($filepath);echo $data['cc']; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    
});
</script>
<br>
<br>
<center>

<button class="button-12" role="button" onclick="window.location.href='./reset.php'">Reset</button></center>

	</p><script type="text/javascript">
function hello()
{
alert('a');
}
</script>

     
      <div class="info"> 
        
			 
      </div>
    </div>
<!-- Follow  -->
<style>
  body {
    position: relative;
  }

  .btn {
    position: absolute;
    right: 30px;
    bottom: 30px;
    height: 40px;
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
    border-radius: 50px;
    box-sizing: border-box
  }

  .twitter-follow-btn {
    background-color: #1da1f2;
    color: white;
  }

  .twitter-follow-btn:hover {
    animation: bounce .5s
  }
  
  @keyframes bounce {
	0%, 20%, 60%, 100% {
		-webkit-transform: translateY(0);
		transform: translateY(0);
	}

	40% {
		-webkit-transform: translateY(-20px);
		transform: translateY(-20px);
	}

	80% {
		-webkit-transform: translateY(-10px);
		transform: translateY(-10px);
	}
}

</style>


<!-- partial -->
  
</body>
</html>
