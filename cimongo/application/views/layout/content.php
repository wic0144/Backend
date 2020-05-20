<div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?php echo base_url("public/assets/images/faces/face1.jpg")?>" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
              </div>
            </div>
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="<?php echo base_url("public/assets/images/dashboard/circle.svg")?>" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">Weekly Sales 
                    </h4>
                    <h2 class="mb-5">$ 15,0000</h2>
                    <h6 class="card-text">Increased by 60%</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="<?php echo base_url("public/assets/images/dashboard/circle.svg")?>" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">Weekly Orders 
                    </h4>
                    <h2 class="mb-5">45,6334</h2>
                    <h6 class="card-text">Decreased by 10%</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="<?php echo base_url("public/assets/images/dashboard/circle.svg")?>" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">Visitors Online 
                    </h4>
                    <h2 class="mb-5">95,5741</h2>
                    <h6 class="card-text">Increased by 5%</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <div class="clearfix">
                      <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                      <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"><ul><li><span class="legend-dots" style="background:linear-gradient(to right, rgba(218, 140, 255, 1), rgba(154, 85, 255, 1))"></span>CHN</li><li><span class="legend-dots" style="background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))"></span>USA</li><li><span class="legend-dots" style="background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))"></span>UK</li></ul></div>
                    </div>
                    <canvas id="visit-sale-chart" class="mt-4 chartjs-render-monitor" style="display: block; width: 491px; height: 245px;" width="491" height="245"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Account</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">LineId</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">BankName</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">BankNo</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Credit</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Add</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>  
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recent Tickets</h4>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search by Account" aria-label="Recipient's username" aria-describedby="basic-addon2" id="myInput" onkeyup="myFunction()">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-gradient-primary" type="button">Search</button>
                        </div>
                      </div>
                    <div class="table-responsive">
                      <table class="table" id="myTable">
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                            <th> Account </th>
                            <th> Name </th>
                            <th> Line ID </th>
                            <th> BankNo. </th>
                            <th> BankName </th>
                            <th> Credit </th>
                            <th> Password </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($account as $key => $row) {?>
                          <tr>
                            <td>
                              <img src="<?php echo base_url("public/assets/images/faces/face1.jpg")?>" class="mr-2" alt="image"> </td>
                              <td><input type="hidden" value="<?php echo($row["_id"])?>"></td>
                            <td> <?php echo($row["account_id"])?></td>
                            <td> <?php echo($row["name"])?></td>
                            <td> <?php echo($row["line_id"])?></td>
                            <td> <?php echo($row["bank_account_number"])?></td>
                            <td>
                              <label class="badge badge-gradient-success"><?php echo($row["name_bank"])?></label>
                            </td>
                            <td> <?php echo($row["credit"])?></td>
                            <td> <?php echo($row["Password"])?></td>
                            <td>
                            <button type="button" class="btn btn-gradient-dark btn-icon-text pd-5"> Edit </button>
                          <button type="submit" class="btn btn-gradient-warning btn-icon-text">Delete </button>
                            </td>
                          </tr>
                        <?php }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &amp; made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- container-scroller -->
   <?php print_r($account);?>   
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>