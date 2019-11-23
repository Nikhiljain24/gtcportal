<div id="sidenav">
<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="profile.php">View Profile</a></li>
				<li><a href="cprofile.php">View Company Profile</a></li>
				<li><a href="viewEvent.php">View Your Event</a></li>
				<!--?php
					
					$result = $qgen->select('tbl_user','*','status="Active"');
					while($arr = $db->fetchAssoc($result)) {
						?>
						<li><a href="subcat.php?id=<?php echo $arr['cat_id'];?>"><?php echo $arr['cat_title']?></a></li>
						php
					}
				?-->
</ul>
</div>