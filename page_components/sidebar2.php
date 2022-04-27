<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="index.php">Auto Sales</a></li>
          <li><a href="index.php">Safari</a></li>
          <li><a href="index.php">Online Market</a></li>
        </ul>
      </li>
    <?php
      if($_SESSION['rights'] >= 3)
      {
    ?>
      <li><a><i class="fa fa-edit"></i> Staff <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="staffList.php">Staff List</a></li>
          <li><a href="registration.php">Register Users</a></li>
          <li><a href="editProfile.php">Edit User Profiles</a></li>
          <!--<li><a href="form_wizards.html">Reset User Password</a></li>-->
          <li><a href="deregistration.php">Remove Users</a></li>
        </ul>
      </li>
    <?php
      }
    ?>
    </ul>
  </div>


  <div class="menu_section">
    <h3>AMZ Auto</h3>
    <ul class="nav side-menu">

      <li><a><i class="fa fa-book"></i> Auto Sales <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="sales.php">Current Sales</a></li>
          <li><a href="clients.php">Client Information</a></li>
          <li><a href="makeSale.php">Make A Sale</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-car"></i> Vehicle Listing <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a>Vehicle Listing<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="sub_menu"><a href="vehicleList.php">All Listed Vehicles</a>
              </li>
              <li><a href="stockList.php">Vehicles Not Sold</a>
              </li>
              <li><a href="soldList.php">Vehicles Sold</a>
              </li>
            </ul>
          </li>
          <li><a href="addVehicle.php">Add Vehicle</a></li>
          <li><a href="updateListing.php">Edit Listing</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="menu_section">
    <h3>AMZ Safari</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-book"></i> Safari Sales <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="salesData.php">Safari Sales</a></li>
          <li><a href="clientList.php">Client List</a></li>
          <li><a href="reservationList.php">Reservations</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-plane"></i> Safaris <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a>Destinations<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="sub_menu"><a href="destList.php">Destination Listing</a>
              </li>
              <li><a href="addDest.php">Add Destination</a>
              </li>
              <li><a href="editDest.php">Edit Destination</a>
              </li>
              <li><a href="removeDest.php">Remove Destination</a>
              </li>
            </ul>
          </li>
          <li><a>Safaris<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="sub_menu"><a href="safariList.php">Safari Listing</a>
              </li>
              <li><a href="addSafari.php">Add Safari</a>
              </li>
              <li><a href="editSafari.php">Edit Safari</a>
              </li>
              <li><a href="removeSafari.php">Remove Safari</a>
              </li>
            </ul>
          </li>
          <li><a>Experience Listing<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="sub_menu"><a href="expList.php">Experience Listing</a>
              </li>
              <li><a href="addExp.php">Add Experience</a>
              </li>
              <li><a href="editExp.php">Edit Experience</a>
              </li>
              <li><a href="removeExp.php">Remove Experience</a>
              </li>
            </ul>
          </li>
          <li><a>Hotel Listing<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="sub_menu"><a href="hotelList.php">Hotel Listing</a>
              </li>
              <li><a href="addHotel.php">Add Hotel</a>
              </li>
              <li><a href="editHotel.php">Edit Hotel</a>
              </li>
              <li><a href="removeHotel.php">Remove Hotel</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      </ul>
  </div>

  <div class="menu_section">
    <h3>AMZ Online</h3>
    <ul class="nav side-menu">

      <li><a><i class="fa fa-money"></i> Online Sales <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="sales.php">Current Sales</a></li>
          <li><a href="clients.php">Current Orders</a></li>
          <li><a href="makeSale.php">Current Dispatches</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-truck"></i> Product Listing <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a>Product Categories<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="sub_menu"><a href="level2.html">View All Categories</a>
              </li>
              <li><a href="#level2_1">Add Category</a>
              </li>
              <li><a href="#level2_2">Edit Category</a>
              </li>
              <li><a href="#level2_2">Remove Category</a>
              </li>
            </ul>
          </li>
          <li><a>Products Listing<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="sub_menu"><a href="level2.html">View All Products</a>
              </li>
              <li><a href="#level2_1">Add Product</a>
              </li>
              <li><a href="#level2_2">Edit Product</a>
              </li>
              <li><a href="#level2_2">Remove Product</a>
              </li>
            </ul>
          </li>
          <li><a href="addVehicle.php">Add Vehicle</a></li>
          <li><a href="updateListing.php">Edit Listing</a></li>
        </ul>
      </li>
    </ul>
  </div>

</div>
