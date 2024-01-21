
<?php
	include "header.php"
?>

      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h2 class="card-title">Post Request</h2>
              
            </div>
            <div class="card-body">
              <!--<form class="navbar-form">-->
              <div class="input-group no-border">
			  <form method="POST" action="#">
			  <div class="row">
                 <div class="col-md-8">
                <input type="text" value="" class="form-control" placeholder="Search blood group" name ="searchtxt">
				</div>
				<div class="col-md-4">
                <input type="submit" class="btn btn-primary btn-round" name="searchbtn" value="search">
				</div></div>
				</form>				  
			</div>
            <!--</form>-->
            </div>
			<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
						<thead class="">
							<th>Name</th>
							<th>state</th>
							<th>City</th>
							<th>pincode</th>
							<th>blood group</th>
							<th>health issue</th>
							<th>action</th>
						</thead>
						
						<?php
								if(isset($_POST['searchbtn']))
								{
									$seardata=$_POST['searchtxt'];
									
									$cn=mysqli_connect("localhost","root","","ms");
										
									$q="select r_id,name,state,city,pincode,blood_group,health_issue from registration where blood_group='$seardata'";
										
									$r=mysqli_query($cn,$q);
									
										
									while($row=mysqli_fetch_array($r))
									{
						?>
								
								<tbody>
								<tr>
									<?php $name = $row['name'] ?>
									<?php $state = $row['state'] ?>
									<?php $city = $row['city'] ?>
									<?php $pincode = $row['pincode'] ?>
									<?php $blood_grp = $row['blood_group'] ?>
									<?php $h_issue = $row['health_issue'] ?>
									<td><?php echo $name ?></td>
									<td><?php echo $state ?></td>
									<td><?php echo $city ?></td>
									<td><?php echo $pincode ?></td>
									<td><?php echo $blood_grp ?></td>
									<td><?php echo $h_issue ?></td>
									<td>
									<a href="postrequest.php?id=<?php echo $row['r_id'];?>"/>
									<input type="button" class="btn btn-primary btn-round" name="send" value="send request">
									</td>
									</a>
								</tr>
								</tbody>
								<?php
									}
								}?>
							</table>
							
							
			      </div>
                </div>
              </div>
            </div>
	      </div>
		  <h2> please serch required blood group and you will get data like...name,state,city etc... </h2>
        </div>
      </div>
	  

	  <?php
		include "footer.php";
	  ?>
      