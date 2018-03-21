<?php 
// Mini project By Ncube Ntokozo
//ncuben@solusi.ac.zw
//0712948663
$pagetitle = "Zimbabwe Orphanages Directory - Add New Home";
include "incl/header.php";
		include "incl/sidebar.php";
		include "incl/footer.php";
		include "incl/config.php";
		error_reporting (0);
		?>
        <div id="content">
			<div id="content-header">
				<h1>Add a New Orphanage Home</h1>
				<div class="btn-group">
					<a class="btn btn-large tip-bottom" title="Manage Files"><i class="icon-th"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Home Page"><i class="icon-home"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Alerts"><i class="icon-comment"></i><span class="label label-important">0</span></a>
					<a class="btn btn-large tip-bottom" title="Donate"><i class="icon-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#" class="tip-bottom">Add Orphanage Home </a>
				<a href="#" class="current">Create Home</a>
			</div>
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>ORPHANAGE ADD PANEL</h5>
							</div>
							<div class="widget-content nopadding">
								<form method="POST" action="register.php" class="form-horizontal">
									<div class="control-group">
										<label class="control-label" >Name of Orphanage | Home:</label>
										<div class="controls">
											<input type="text" id="orphanage_name" name="orphanage_name"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" >Website for Orphanage:</label>
										<div class="controls">
											<input type="text" id="orphanage_website" name="orphanage_website"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" >Annual Funds Required:</label>
										<div class="controls">
											<input type="number" id="orphanage_yearly_fund" name="orphanage_yearly_fund"/>
                                            </div>
                                            <div class="control-goup">
											<label class="control-label" >Orphanage District :</label>
                                            <div class="controls">
                                            <select name="orphanage_district">
                                            <option value="Beitbridge">Beitbridge</option>
<option value="Bikita">Bikita</option>
<option value="Bindura">Bindura</option>
<option value="Binga">Binga</option>
<option value="Bubi">Bubi</option>
<option value="Buhera">Buhera</option>
<option value="Bulawayo">Bulawayo</option>
<option value="Bulilima (North)">Bulilima (North)</option>
<option value="Centenary">Centenary</option>
<option value="Chegutu">Chegutu</option>
<option value="Chikomba">Chikomba</option>
<option value="Chimanimani">Chimanimani</option>
<option value="Chipinge">Chipinge</option>
<option value="Chiredzi">Chiredzi</option>
<option value="Chirumhanzu">Chirumhanzu</option>
<option value="Chitungwiza">Chitungwiza</option>
<option value="Chivi">Chivi</option>
<option value="Epworth">Epworth</option>
<option value="Gokwe North">Gokwe North</option>
<option value="Gokwe South">Gokwe South</option>
<option value="Goromonzi">Goromonzi</option>
<option value="Guruve">Guruve</option>
<option value="Gutu">Gutu</option>
<option value="Gwanda">Gwanda</option>
<option value="Gweru">Gweru</option>
<option value="Harare Rural">Harare Rural</option>
<option value="Harare Urban">Harare Urban</option>
<option value="Hurungwe">Hurungwe</option>
<option value="Hwange">Hwange</option>
<option value="Insiza">Insiza</option>
<option value="Kadoma">Kadoma</option>
<option value="Kariba">Kariba</option>
<option value="Kwekwe">Kwekwe</option>
<option value="Lupane">Lupane</option>
<option value="Makonde">Makonde</option>
<option value="Makoni">Makoni</option>
<option value="Mangwe (South)">Mangwe (South)</option>
<option value="Marondera">Marondera</option>
<option value="Masvingo">Masvingo</option>
<option value="Matobo">Matobo</option>
<option value="Mazowe">Mazowe</option>
<option value="Mberengwa">Mberengwa</option>
<option value="Mount Darwin">Mount Darwin</option>
<option value="Mudzi">Mudzi</option>
<option value="Murehwa">Murehwa</option>
<option value="Mutare">Mutare</option>
<option value="Mutasa">Mutasa</option>
<option value="Mutoko">Mutoko</option>
<option value="Mwenezi">Mwenezi</option>
<option value="Nkayi">Nkayi</option>
<option value="Nyanga">Nyanga</option>
<option value="Rushinga">Rushinga</option>
<option value="Seke">Seke</option>
<option value="Shamva">Shamva</option>
<option value="Shurugwi">Shurugwi</option>
<option value="Tsholotsho">Tsholotsho</option>
<option value="Umguza">Umguza</option>
<option value="UMP">UMP</option>
<option value="Umzingwane">Umzingwane</option>
<option value="Wedza">Wedza</option>
<option value="Zaka">Zaka</option>
<option value="Zvimba">Zvimba</option>
<option value="Zvishavane">Zvishavane</option>
</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" >Orphanage Cell:</label>
										<div class="controls">
											<input type="text" id="orphanage_cell" name="orphanage_cell" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" >Orphanage Address:</label>
										<div class="controls">
											<textarea id="orphanage_address" name="orphanage_address"></textarea>
										</div>
									</div>
                                    <div class="control-group">
										<label class="control-label">Orphanage Capacity :</label>
										<div class="controls">
											<input type="number"  id="orphanage_capacity" name="orphanage_capacity" />
                                            </div>
                                    <div class="control-group">
											<label class="control-label">Orphanage Biller Code :</label>
                                            <div class="controls">
											<input type="number"  id="orphanage_billercode" name="orphanage_billercode"? />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Orphanage Type :</label>
										<div class="controls">
											 <select  id="orphanage_type" name="orphanage_type">
                                              <option value="Boys Only">Boys Only</option>
                                              <option value="Girls Only">Girls Only</option>
                                              <option value="Unisex">Unisex</option>
                                              </select> 
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Orphanage Other Needs:</label>
										<div class="controls">
											<textarea id="orphanage_other_needs" name="orphanage_other_needs"></textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary" id="submit" name="submit">Save</button>
									 </form>
        </div>
    </body>
</html>
					<?php
$conn = mysqli_connect('localhost','root','','orphanage');
if(isset($_POST['submit'])){
	$orphanage_name=$_POST['orphanage_name'];
	$orphanage_address=$_POST['orphanage_address'];
	$orphanage_capacity=$_POST['orphanage_capacity'];
	$orphanage_district=$_POST['orphanage_district'];
	$orphanage_website=$_POST['orphanage_website'];
	$orphanage_cell=$_POST['orphanage_cell'];
	$orphanage_billercode=$_POST['orphanage_billercode'];
	$orphanage_type=$_POST['orphanage_type'];
	$orphanage_yearly_fund=$_POST['orphanage_yearly_fund'];
	$orphanage_other_needs=$_POST['orphanage_other_needs'];
	$orphanage_type=$_POST['orphanage_type'];
	
	
	$query="insert into homes (orphanage_name,orphanage_address,orphanage_capacity,orphanage_district,orphanage_website,orphanage_cell,orphanage_billercode,orphanage_type,orphanage_yearly_fund,orphanage_other_needs)values('$orphanage_name','$orphanage_address','$orphanage_capacity','$orphanage_district','$orphanage_website','$orphanage_cell','$orphanage_billercode', '$orphanage_type', '$orphanage_yearly_fund', '$orphanage_other_needs')";
	
	if (mysqli_query($conn,$query))
	{
		 echo "Thank you for adding a home for hope for the future Children";
   	}
}
?>

<?php include "incl/footer.php"; ?>