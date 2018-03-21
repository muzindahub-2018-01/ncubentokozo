<?php 
$pagetitle = "Zimbabwe Orphanages Directory - List Homes";
include "incl/header.php";
		include "incl/sidebar.php";
		include "incl/footer.php";
		include "incl/config.php";
		error_reporting (0);
			?>
		<div id="content">
			<div id="content-header">
				<h1>Orphanages | Homes</h1>
					<div class="btn-group">
					<a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-th"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Home Page"><i class="icon-home"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Alerts"><i class="icon-comment"></i><span class="label label-important">0</span></a>
					<a class="btn btn-large tip-bottom" title="Donate"><i class="icon-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#" class="current">Orphanages List</a>
			</div>
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>Zimbabwe Orphanages Roll</h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Orphanage Name</th>
											<th>Address</th>
											<th>District</th>
											<th>Phone</th>
                                            <th>Anual Budget</th>
											<th>Type</th>
											<th>Carrying Capacity</th>
											<th>Needs</th>
                                            <th>Website</th>
											<th>Merchant Code</th>
											</tr>
									</thead>
									<tbody>
                                          <?php 
	 
  $conn=mysqli_connect('localhost','root','','orphanage');
  $table=mysqli_query($conn,'SELECT * FROM homes');
  while($row=mysqli_fetch_array($table))
	   
			///$row = $result->fetch_array(MYSQLI_ASSOC);
			
			//while($row = $result->fetch_array(MYSQLI_ASSOC))
			{
				
			
			
					
				;?>
					   <tr><td><?php echo $row['orphanage_name'];?></td>
                       <td><?php echo $row['orphanage_address'];?></td>
                        <td><?php echo $row['orphanage_district'];?></td>
                        <td> <?php echo $row['orphanage_cell'];?></td>
                         <td> <?php echo $row['orphanage_yearly_fund'];?></td>
                        <td> <?php echo $row['orphanage_type'];?></td>
                        <td> <?php echo $row['orphanage_capacity'];?></td>
                         <td> <?php echo $row['orphanage_other_needs'];?></td>
                          <td> <?php echo $row['orphanage_website'];?></td>
                          <td><?php echo $row['orphanage_billercode'];?></td>
				</tr>
                        

                         <?php }  echo "</table>";?>
										
				
			<?php include "incl/footer.php" ?>	