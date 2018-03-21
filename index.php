<?php 
// Mini project By Ncube Ntokozo
//ncuben@solusi.ac.zw
//0712948663
$pagetitle = "Zimbabwe Orphanages Directory - Home";
include "incl/header.php";
		include "incl/sidebar.php";
		include "incl/footer.php";
		include "incl/config.php";
		error_reporting (0);
		?>
		<div id="content">
			<div id="content-header">
				<h1>DASHBOARD</h1>
					<div class="btn-group">
					<a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-th"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Home Page"><i class="icon-home"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Alerts"><i class="icon-comment"></i><span class="label label-important">0</span></a>
					<a class="btn btn-large tip-bottom" title="Donate"><i class="icon-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#" class="current">SUMMARY OF ORPHANGES UPLOADED IN THE SYSTEM</a>
			</div>			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box widget-plain">
							<div class="widget-content center">
								<ul class="stats-plain">
									<li>										
										<?php   $conn=mysqli_connect('localhost','root','','orphanage');
  $result = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM `homes`");
$row1 = mysqli_fetch_array($result);
$count = $row1['count'];
?>
					<?php 
  $add=mysqli_query($conn,'SELECT SUM(orphanage_yearly_fund) from `homes`');
  while($row2=mysqli_fetch_array($add))
  {
    $fund=$row2['SUM(orphanage_yearly_fund)'];
  }
 ?>			<h4><?php echo $count; ?></h4>		
 <span>ORPHANAGES ADDED TO THE PORTAL</span>
									</li>
									<li>										
										<h4><?php echo $fund; ?></h4>
										<span>AMOUNT NEEDED TO RUN HOMES</span>
									</li>
									<li>										
										<h4><?php $date = new DateTime('now');
$date->modify('last day of this month');
echo $date->format('Y-m-d');?></h4>
										<span>HELP BEAT THE FUNDING DEADLINE</span>
									</li>
									</div>
						</div>
					</div>
				</div>
				
				<?php include "incl/footer.php"; ?>