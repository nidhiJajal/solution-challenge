<?php
	include "header.php"
?>
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h2 class="card-title">received Request</h2>
              
            </div>
            <form action="#" method="POST">
			<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>ID</th>
                        <th>Name</th>
						
                        <th>state</th>
                        <th>City</th>
						<th>pincode</th>
						<th>blood group</th>
						<th>Health Issue</th>
						<th>accept</th>
						<th>reject</th>
                      </thead>
					  
					  <?php
							$cn= mysqli_connect("localhost","root","","ms");
							
							$username = $_SESSION['username'];
							
							$q="select * from r_request where r_email='$username'";
							
							$r=mysqli_query($cn,$q);
							while($row=mysqli_fetch_array($r))
							{
							$reg_id=$row['reg_id'];
								$qq="select * from registration where r_id='$reg_id'";
							$cc=mysqli_query($cn,$qq);
							while($rr=mysqli_fetch_array($cc))
							{
							?>
								
								<tbody>
								<tr>
									<?php $rid = $rr['r_id']; ?>
									<?php $name = $rr['name'] ;?>
								
									<?php $state = $rr['state']; ?>
									<?php $city = $rr['city']; ?>
									<?php $pincode = $rr['pincode']; ?>
									<?php $blood_grp = $rr['blood_group']; ?>
									<?php $h_issue = $rr['health_issue']; ?>
									<td><?php echo $rid; ?></td>
									<td><?php echo $name; ?></td>
								
									<td><?php echo $state; ?></td>
									<td><?php echo $city; ?></td>
									<td><?php echo $pincode; ?></td>
									<td><?php echo $blood_grp; ?></td>
									<td><?php echo $h_issue; ?></td>
									<td>
									<a href="receivedreq.php?id=<?php echo $rr['r_id'];?>">
									<input type="button" class="btn btn-primary btn-round" name="send" value="accept request"></td>
									</a>
									
									<td>
									<a href="rejectreq.php?id=<?php echo $rr['r_id'];?>">
									<input type="button" class="btn btn-primary btn-round" name="send" value="reject request" width="50px"/></td>
									</a>
								</tr>
								</tbody>
							<?php } } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
			</form>
			</div>
          </div>
		  
        </div>

	  <?php
		include "footer.php";
	  ?>