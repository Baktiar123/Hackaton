<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/datatables/datatables.net-bs/css/dataTables.bootstrap.min.css">

	<title>Hackaton Covid19</title>


</head>

<body>

	

	<div class="jumbotron jumbotron-fluid ">
	  <div class="container text-center">
	    <h1 class="display-4"><b>Corona Virus/Covid19</b></h1>
	    <p class="lead">
	    	<h3>Pantau penyebaran virus corona di Indonesia<br>Waspada Virus Corona 
	    		<br>Stay clean and healty</h3></p>
	  </div>
	</div>

	<style type="text/css">
		.box{
			padding: 30px 40px;
			border-radius: 5px;
		}	
	</style>

	<div class="container">
		<h1>Data pasien virus corona di seluruh Indonesia<br></h1>
		<div class="row" style="margin-top: 20px;"> 
			
			<div class="col-md-4">
				<div class="bg-danger box text-white">
					<div class="row">
						<div class ="col-md-6">
							<h5>Meninggal</h5>
							<h2 id="data-kasus"> <?= $death = $jumlah->numbers->fatal; ?> </h2>
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
							<h2 id="data-kasus"> <?= $positive = $jumlah->numbers->infected; ?> </h2>
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
							<h2 id="data-kasus"> <?= $Healty = $jumlah->numbers->recovered; ?> </h2> 
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

	<div class="container">
		<br><br><h1>Data pasien virus corona berdasarkan provinsi</h1>
		<div class="row" style="margin-top: 20px; margin-left: -20px; margin-bottom: 30px;">
			<div class="box-body">
				
              <table id="example2" class="table table-bordered table-striped" style="margin-top: 20px;">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Provinsi</th>
                  <th>Positif</th>
                  <th>Meninggal</th>
                  <th>Sembuh</th>
                 
                </tr>
                </thead>
                <tbody>
                 <?php foreach ($jumlah->regions as $jml) : ?>
	                <tr>
	                  <td></td>
	                  <td><?= $jml->name; ?></td>
	                  <td><?= $jml->numbers->infected; ?></td>
	                  <td><?= $jml->numbers->fatal; ?></td>
	                  <td><?= $jml->numbers->recovered; ?></td>
	                </tr>
                 <?php endforeach; ?>
                </tbody>
                
              </table>
           </div>
		</div>
	</div>
	
	<div class="jumbotron jumbotron-fluid ">
	  <div class="container ">
	    <h1 class="display-4">Deteksi Dini Covid19</h1>
	    <p class="lead">
	    	<h2>Bila merasakan gejala berikut segera periksakan ke dokter</h2>  <h5>- Merasakan demam	<br>
- Merasakan batuk / pilek	<br>
- Merasa kesulitan bernafas atau sesak nafas<br>	
- Mengalami nyeri tenggorokan	<br>
- Lama penyakit kurang dari 14 hari</h5></p>
	  </div>
	</div>

	<div class="container">
	<br><br><h1>Waspada Terhadap Hoax<br></h1><br>
	<h5>&nbsp; Berikut ini adalah berita / artikel hoax<br></h5>
		<div class="row" style="margin-top: 20px; margin-left: 2px; ">
			
				<table class="table">
				<tbody>
                 <?php foreach ($news as $berita) : ?>
	                <tr>
	                  <td></td>
	                  <td><?= $berita->title; ?></td><br>
	                  <td><?= $berita->url; ?></td><br><br>
	                </tr>
                 <?php endforeach; ?>
                </tbody>
            </table>
			
		</div>
	</div>

	<div class="container">
	<br><br><h1>Lapor Sigap Covid 19<br></h1>
		<div class="row" style="margin-top: 20px; margin-left: 2px; ">
			<div class="box-body">
				<button type="button" class="btn btn-primary" data-toggle="modal" 
				data-target="#staticBackdrop">
					Buat Laporan Sigap
				</button>
			</div>
		</div>
	</div>
			
	<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h3 class="modal-title" id="staticBackdropLabel">Lapor Sigap Covid</h3>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="post" action="<?php echo base_url().'Page/tambah_aksi'; ?>">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
          </div>
          <div class="form-group">
            <label>Pernyataan</label>
            <textarea name="pernyataan" class="form-control"></textarea>
          </div>
       
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
	     </div>
	   </div>
	 </div>
	</div>

	<div class="container">
	
		<div class="row" style="margin-top: 20px; margin-left: -20px; margin-bottom: 30px;">
			<div class="box-body">
				
				<table class="table">
				  
				  
				  <tbody>
                 <?php foreach ($datalaporan as $dlp) : ?>
			        <tr>
			            <td><?php echo $dlp->nama ?></td>
			            <td><?php echo $dlp->email ?></td>
			            <td><?php echo $dlp->alamat ?></td>
			            <td><?php echo $dlp->pernyataan ?></td>
			        </tr>
			    <?php endforeach; ?>
                </tbody>
				</table>

              
                
                
              </table>
           </div>
		</div>
	</div>
<footer class="footer bg-light" style="width:100%; height:80px; padding-top: 8px;">
	<div class="container text-center">
		
		<div class="row" style="margin-top: 20px; margin-left: -20px; margin-bottom: 30px;">
			<div class="footer-copyright">
		        <div class="container">
		          © 2020 Copyright Website Created By.Baktiar Mahardika
		          <a class="grey-text text-lighten-4 right" href="facebook.com"></a>
		        </div>
		    </div>
		</div>
	</div>
</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>

</html>

<script src="<?php echo base_url()?>assets/datatable/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/datatable/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    })
  })
</script>
<script>
	$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
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