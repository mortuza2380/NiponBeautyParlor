<div class="sticky-header header-section ">
      <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        
        <div class="logo">
          <a href="index.html">
            <h1>BP</h1>
            <span>NIPUN PARLOUR</span>
          </a>
        </div>
       
       
        <div class="clearfix"> </div>
      </div>
      <div class="header-right">
        <div class="profile_details_left">
          
            <li class="dropdown head-dpdn">
              
              <ul class="dropdown-menu">
                
                <li>
            
                   <div class="notification_desc">
                     <?php if($num>0){
while($result=mysqli_fetch_array($ret1))
{
            ?>
                 <a class="dropdown-item" href="view-appointment.php?viewid=<?php echo $result['ID'];?>">New appointment received from <?php echo $result['Name'];?> </a><br />
<?php }} else {?>
    <a class="dropdown-item" href="all-appointment.php">No New Appointment Received</a>
        <?php } ?>
                           
                  </div>
                  <div class="clearfix"></div>  
                 </a></li>
                 
                
                 <li>
                  <div class="notification_bottom">
                    <a href="new-appointment.php">See all notifications</a>
                  </div> 
                </li>
              </ul>
            </li> 
          
          </ul>
          <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="profile_details">  
        <?php
$adid=$_SESSION['bpmsaid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?> 
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img"> 
                  <span class="profil-img"><img src="images/admin.png" alt="" width="50" height="60"> </span> 
                  <div class="user-name">
                    <p><?php echo $name; ?></p>
                    <span>Nipun PARLOUR(Admin)</span>
                  </div>
                  <i class="fa fa-angle-down lnr"></i>
                  <i class="fa fa-angle-up lnr"></i>
                  <div class="clearfix"></div>  
                </div>  
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li> <a href="change-password.php"><i class="fa fa-cog"></i> Settings</a> </li> 
                <li> <a href="admin-profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
                <li> <a href="index.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
              </ul>
            </li>
          </ul>
        </div>  
        <div class="clearfix"> </div> 
      </div>
      <div class="clearfix"> </div> 
    </div>