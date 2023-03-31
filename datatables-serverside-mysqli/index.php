<?php include "conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hakko Blogs DataTable Serverside Processing</title>
        <!-- css table datatables/dataTables -->
	<link rel="stylesheet" href="datatables/dataTables.bootstrap.css"/>
    
         <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            
            
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="http://www.hakkoblogs.com">Hakko Blog's</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <!-- <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>-->
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="http://www.hakkoblogs.com" class="dropdown-toggle" data-toggle="dropdown">Tutorial
                            </a>
                                 <!--<ul class="dropdown-menu">
                                    <li><a href="http://www.hakkoblogs.com">Java</a></li>
                                    <li><a href="http://www.hakkoblogs.com">PHP</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">MySQLi</li>
                                    <li><a href="http://www.hakkoblogs.com">Javascript</a></li>
                                </ul> -->
                            </li>
                            <li><a href="http://www.hakkoblogs.com">Pemrograman </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div><br />

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                             <?php
             // if(isset($_GET['hal']) == 'hapus'){
				// $kd_dept = $_GET['kd'];
				// $cek = mysqli_query($koneksi, "SELECT * FROM data WHERE nim='$kd_dept'");
				// if(mysqli_num_rows($cek) == 0){
					// echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				// }else{
					// $delete = mysqli_query($koneksi, "DELETE FROM data WHERE nim='$kd_dept'");
					// if($delete){
						// echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
					// }else{
						// echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
					// }
				// }
			// }
			 ?>
                                  <div class="panel panel-default">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon-user"></i> DataTables Serverside Processing</h3> 
                        </div>
                        <div class="panel-body">
                                    <table id="lookup" class="table table-bordered table-hover">  
	                                   <thead bgcolor="#eeeeee" align="center">
                                        <tr>
	  
                                        <th>No</th>
	                                    <th>Pengusul </th>
                                        <th>Jenis diklat  </th>
                                        <th>Rumpun</th>
                                        <th>Jabatan </th>
	                                    <th>Nama diklat</th>
	                                    <th class="text-center"> Action </th> 
	  
                                       </tr>
                                      </thead>
                                        <tbody>
                                        </tbody>									
                                    </table>
                                    <div class="pull-right">
                            <a href="input.php" class="btn btn-sm btn-primary">Tambah Data</a>
                            </div>
                                </div>
                            </div>
                            
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        
        <!--/.wrapper--><br />
        <div class="footer span-12">
            <div class="container">
              <center> <b class="copyright"><a href="http://www.hakkoblogs.com"> Hakko Blog's</a> &copy; 2016 DataTables Bootstrap </b></center>
            </div>
        </div>
		
        <script src="scripts/jquery.1.11.1.js" type="text/javascript"></script>
        <!--<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>-->		
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
        <script src="datatables/jquery.dataTables.min.js"></script>
        <script src="datatables/dataTables.bootstrap.min.js"></script>
        <script>
        $(document).ready(function() {
				var dataTable = $('#lookup').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"ajax-grid-data.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".lookup-error").html("");
							$("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#lookup_processing").css("display","none");
							
						}
					}
					
				} );
			} );
        </script>
      
    </body>
