<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3></h3>
    <ul class="nav side-menu">
      <?php
        if($_SESSION['rights'] <= 3)
        {
      ?>
      <li><a><i class="fa fa-home"></i> Infomatics <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="index.php">Dashboard</a></li>
          <li><a href="inventory.php"> Warehouse Inventory </a></li>
          <!--<li><a href="tenantList.php"> Tenants' List </a></li>
          <li><a href="tenancy.php"> Tenancy Details </a></li>-->
        </ul>
      </li>
      <!--<li><a><i class="fa fa-users"></i> Staff Manager <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="staffList.php">Staff List</a></li>
          <li><a href="registration.php">Staff Registration</a></li>
          <li><a href="editProfile.php">Edit Staff Profiles</a></li>
          <!--<li><a href="form_wizards.html">Reset User Password</a></li>--
          <li><a href="deregistration.php">Remove Users</a></li>
        </ul>
	  </li>-->
      	  
		<li><a><i class="fa fa-book"></i> Warehouse <span class="fa fa-chevron-down"></span></a>
			<ul class="nav child_menu">
				<li><a href="addEntry.php">Recieve Items</a></li>
				<li><a href="dispatch.php">Dispatch Items</a></li>
			</ul>
		</li>
		<li><a><i class="fa fa-book"></i> Requisitions <span class="fa fa-chevron-down"></span></a>
			<ul class="nav child_menu">
				<li><a href="makeRequisition.php">Make Requisition</a></li>
				<li><a href="viewRequisition.php">View Requisition</a></li>
			</ul>
		</li>
      
    <?php
      }
    ?>
    </ul>
  </div>

</div>
