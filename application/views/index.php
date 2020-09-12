<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<title>Hackaton Covid19</title>

	<style type="text/css">
		#menu{
			font-size: 20px;
			padding : 20px;
			background-color: red;
		}
		#menu ul{
			list-style : none;
			margin: 0;
			padding: 0;
		}
		#menu ul li{
			display: inline-table;
		}
		#menu ul li:hover{
			background-color: grey;
		}
		#menu ul li a{
			display: block;
			text-decoration: none;
			line-height: 40px;
			padding: 0 10px;
			color: #fff;
		}
	</style>

</head>

<body>

	<div id="menu">
		<ul>
			<li><a href=""> Home </a> </li>
			<li><a href=""> Report </a> </li>
		</ul>
	</div>

	<div class="jumbotron jumbotron-fluid ">
	  <div class="container text-center">
	    <h1 class="display-4">Corona Virus/Covid19</h1>
	    <p class="lead">
	    	<h2>Pantau penyebaran virus corona<br>Waspada Virus Corona 
	    		<br>Stay clean and healty</h2></p>
	  </div>
	</div>

	<style type="text/css">
		.box{
			padding: 30px 40px;
			border-radius: 5px;
		}	
	</style>

	<div class="container">
		<h1>Data pasien corona virus di seluruh Indonesia<br></h1>
		<div class="row" style="margin-top: 20px;"> 
			
			<div class="col-md-4">
				<div class="bg-danger box text-white">
					<div class="row">
						<div class ="col-md-6">
							<h5>Meninggal</h5>
							<h2 id="data-kasus"> 1 </h2>
							<h5>orang</h5>
						</div>

						<div class="col-md-4">
							<img class="img rounded-circle" 
							src="<?php echo base_url()?>assets/img/death.png" style="width: 100px;">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="bg-secondary box text-white">
					<div class="row">
						<div class ="col-md-6">
							<h5>Positif</h5>
							<h2 id="data-kasus"> 1 </h2>
							<h5>orang</h5>
						</div>

						<div class="col-md-4">
							<img class="img rounded-circle" 
							src="<?php echo base_url()?>assets/img/positive.png" 
							style="width: 100px;">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="bg-success box text-white">
					<div class="row">
						<div class ="col-md-6">
							<h5>Sembuh</h5>
							<h2 id="data-kasus"> 1 <!-- <?php echo $value['cases']; ?> --> </h2> 
							<h5>orang</h5>
						</div>

						<div class="col-md-4">
							<img class="img rounded-circle" 
							src="<?php echo base_url()?>assets/img/happy.png" style="width: 100px;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="">

	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>

</html>

<!-- <script>
	$(document).ready(function(){

		// semuaData();

		function semuaData(){
			$.ajax({
				url : 'https://coronavirus-19-api.herokuapp.com/all',
				success : function(data){
					try{
						var json = data;
						var kasus = data.cases;
						var meninggal = data.deaths;
						var sembuh = data.recovered;

						alerts(kasus);

					}catch{
						alert('Errorr');
					}
				}
			});
		}
	});
</script> -->