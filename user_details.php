<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>
 <link rel="stylesheet" href="css/index.css">
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
 <style>
  table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 7px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
label {width: 50px;}
.constant_input {width: 35px;}
.const_values_ul{margin:0px; padding:0px;width: 360px; column-count: 3;}
.const_values_ul li{display:inline-block;width: 120px;}
#const_values {background-color: #dff0d8;padding: 10px;border: 1px solid #aFF0a7;border-radius: 15px;}
.mode{float:left;}
.clearboth{clear:both;}

.success {
	color: #fff;
    background: #71ca71;
    border: 1px solid #0cab0c;
    padding: 5px;
    font-weight: bold;
    border-radius: 10px;
}
.filter-row {
	margin: 17px 0;
}
.filter-row select.input-lg {
	padding: 5px;
    height: 30px;
}
.navbar{margin-bottom:0px;}
.navbar {
    border-radius: 0px; height:51px!important;
}
.navbar-brand{height:62px;}

  </style>
  </head>

  <body id="page-top">


 <?php include 'header.php';?>
    <div id="wrapper">

      <!-- Sidebar -->
      <?php include 'leftbar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">User Details</li>
          </ol>

         

          

          <!-- DataTables Example -->
           <div class="panel panel-default">
                        <div class="panel-heading">
                           <div class="pull-right"><i class="fa fa-bullhorn"></i></div>
                           <div class="panel-title">All User list</div>
                        </div>
                        <div class="list-group">
						<?php
							echo "<table border='1' id= results>
							<tr>
							<th>ID</th>
							<th>UserName</th>
							<th>Email</th>
							<th>Password</th>
							<th>UserType</th>
							<th>User Permission</th>
							<th>Action</th>
							
							</tr>";

							while($row = $result->fetch_assoc()) {
							  
						

							  echo "<tr>"; 

								echo "<td>" . $row['id'] . "</td>";
								echo"<td>". $row['username']."</td>";
								echo"<td>". $row['email']."</td>";
								echo"<td>". $row['password'] ."</td>";
								echo"<td>". $row['usertype'] ."</td>";
								
								echo"<td>";
									echo "<form action='user_update.php' method='POST' id='user_update_".$row['id']."'>";
									echo "<select name='user_type' id='select_".$row['id']."' ><option value=''>-- Select --</option><option value='2'>Administrator</option><option value='3'>Paid User</option></select>";
									echo "<input type='hidden' name='id' value='".$row['id']."' />";
									echo "</form>";
								echo "</td>";
								
								echo"<td><a class='btn btn-success' href='javascript: void(0);' onclick='submitForm(".$row['id'].")' >update</a></td>";
								
							  echo "</tr>";
							  }
							echo "</table>";
							?>
                        </div>
                        
                     </div>

        </div>
		<script>
			function submitForm(id){
				$('#user_update_' + id).submit();
			}
		</script>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
