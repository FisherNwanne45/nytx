<?php
require_once 'resources/config.php';
include_once('resources/session.php');
error_reporting(0);
ini_set('display_errors', 0);

$result = $conn->query("SELECT * FROM site");
if (!$result->num_rows > 0) {
  echo '<h2 style="text-align:center;">No Data Found</h2>';
}
while ($row = $result->fetch_assoc()) {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <title>TAX Clearance Online Checker </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function myFunction() {
        window.print();
      }
    </script>
    <style>
      .rotate {
        animation: rotation 8s infinite linear;
      }

      @keyframes rotation {
        from {
          transform: rotate(0deg);
        }

        to {
          transform: rotate(359deg);
        }
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function() {
        setTimeout(function() {
          $("#tracking-loading").fadeOut();
          $("#tracking-result").fadeIn();
        }, 4000);
      });
    </script>
    <link rel="icon" href="<?php echo $site_url; ?>/assets/images/logo.png" type="image/png">
  </head>

  <body>
    <div class="container">
      <div class="main-body">

        <div class="logo-wrap">
          <img src="<?php echo $site_url; ?>/assets/images/logo.png" class="logo-img">
          <span class="logo-text"><?php echo $site_name; ?></span>
        </div>
        <style>
          .logo-wrap {
            display: flex;
            align-items: center;
            /* vertically centers image + text */
            gap: 10px;
            /* space between icon and text */
          }

          .logo-img {
            width: 48px;
            /* set a reasonable fixed size */
            height: auto;
          }

          .logo-text {
            font-size: 28px;
            font-weight: 700;
            color: #1e293b;
          }
        </style>
        <br><br>
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"> TAX Clearance Online Checker </li>
          </ol>
        </nav>
        <!-- /Breadcrumb -->
        <?php

        error_reporting(0);
        ini_set('display_errors', 0);

        if (!isset($_POST['submit'])) {
          // form not submitted 

          echo "No search operation performed!";
        } else {


          $search = empty($_POST['search']) ? die("ERROR: Enter Search Criteria") : mysqli_real_escape_string($conn, $_POST['search']);
          $dropdown = empty($_POST['dropdown']) ? die("ERROR: Select from dropdown") : mysqli_real_escape_string($conn, $_POST['dropdown']);

          //Create Query

          $query = "SELECT * FROM user WHERE $dropdown='$search'";
          $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

          $num = mysqli_num_rows($result);

          mysqli_close($conn);

          $i = 0;
          while ($i < $num) {
            $row = mysqli_fetch_assoc($result);
            $cid = $row["cid"];
            $name = $row["name"];
            $rank = $row["rank"];
            $image = $row["image"];
            $phone = $row["phone"];
            $type = $row["type"];
            $amt = $row["amt"];
            $rate = $row["rate"];
            $dur = $row["dur"];
            $coldate = $row["coldate"];
            $paydate = $row["paydate"];
            $status = $row["status"];
            $remark = $row["remark"];



            echo ("
  <div  id='tracking-loading' style='text-align: center; padding: 30px 2px;'>
<img src='images/ajax-loader.gif' alt='Loading results...' />
<h4 style=''>
Fetching Result for Tracking Number: " . $cid . "...

</h4><br>
<img src='images/world.png' class='rotate' width='250px' />
</div>



          <div class='row gutters-sm' id='tracking-result' style='display: none;'>
         
            <div class='col-md-3 mb-3'>
              <div class='card'>
                <div class='card-body'>
                  <div class='d-flex flex-column align-items-center text-center'>
                    <img src='resources/img/" . $image . "' alt='user' class='rounded-circle'  height='164'>
                    <div class='mt-3'>
                      <h5>" . $name . "</h5>
                       
                      <p class='text-muted font-size-sm'>ID: " . $cid . "</p>
                      <button class='btn btn-primary noprint'  onclick='myFunction()'>Print</button>
                     <a href='index.php'> <button class='btn btn-outline-primary noprint'>Logout</button></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class='card mt-3'>
                <ul class='list-group list-group-flush'>
                  <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                    <h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-globe mr-2 icon-inline'><circle cx='12' cy='12' r='10'></circle><line x1='2' y1='12' x2='22' y2='12'></line><path d='M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z'></path></svg>" . $coldate . " </h6>
                    
                  </li>
                   
                    
                </ul>
              </div>
            </div>
            <div class='col-md-9'>
             

              <div class='row gutters-sm'>
                <div class='col-sm-6 mb-3'>
                  <div class='card h-100'>
                    <div class='card-body'>
                      <h6 class='d-flex align-items-center mb-3'><i class='material-icons text-info mr-2'>Applicant Data</i></h6>
                      <div class='row'>
                    <div class='col-sm-5'>
                      <h6 class='mb-0'>Full Name</h6>
                    </div>
                    <div class='col-sm-7 text-secondary'>
                      " . $name . "
                    </div>
                  </div><hr>
                        <div class='row'>
                    <div class='col-sm-5'>
                      <h6 class='mb-0'>Home Country</h6>
                    </div>
                    <div class='col-sm-7 text-secondary'>
                      " . $coldate . "
                    </div>
                  </div><hr>
                        <div class='row'>
                    <div class='col-sm-5'>
                      <h6 class='mb-0'>Email</h6>
                    </div>
                    <div class='col-sm-7 text-secondary'>
                      " . $rank . "  
                    </div>
                  </div><hr>
                       <div class='row'>
                    <div class='col-sm-5'>
                      <h6 class='mb-0'>Address</h6>
                    </div>
                    <div class='col-sm-7 text-secondary'>
                      " . $phone . "
                    </div>
                  </div><hr>
                       <div class='row'>
                    <div class='col-sm-5'>
                      <h6 class='mb-0'>Occupation</h6>
                    </div>
                    <div class='col-sm-7 text-secondary'>
                      " . $type . "
                    </div>
                  </div>
                    </div>
                  </div>
                </div>
                <div class='col-sm-6 mb-3'>
                  <div class='card h-100'>
                    <div class='card-body'>
                      <h6 class='d-flex align-items-center mb-3'><i class='material-icons text-info mr-2'>Tax Information</i></h6>
                        <div class='row'>
                    <div class='col-sm-5'>
                      <h6 class='mb-0'>Requested Tax Type</h6>
                    </div>
                    <div class='col-sm-7 text-secondary'>
                      " . $status . "
                    </div>
                  </div><hr>
                      <div class='row'>
                    <div class='col-sm-5'>
                      <h6 class='mb-0'>Accrued Charges</h6>
                    </div>
                    <div class='col-sm-7 text-secondary'>
                      " . $amt . " 
                    </div>
                  </div><hr>
                    <div class='row'>
                    <div class='col-sm-5'>
                      <h6 class='mb-0'>Late Payment Penalty</h6>
                    </div>
                    <div class='col-sm-7 text-secondary'>
                      " . $rate . "
                    </div>
                  </div><hr>
                     <div class='row'>
                    <div class='col-sm-5'>
                      <h6 class='mb-0'>Tax Duration</h6>
                    </div>
                    <div class='col-sm-7 text-secondary'>
                      " . $paydate . "
                    </div>
                  </div> 
                       
                    </div>
                  </div>
                </div>
              </div>

 <div class='card mb-3'>
                <div class='card-body'>
                  
                  <div class='row'>
                    <div class='col-sm-4'>
                      <h6 class='mb-0'> &#9993; Notification Message </h6>
                    </div>
                    <div class='col-sm-8 text-secondary'> 
                      " . $dur . "
                    </div>
                  </div>
                
                    
                  
                </div>
              </div>

            </div>
            
          </div>

        </div>
    </div>
");

            $i++;
          }
        }

        if ($i == 0) {
          echo " <br><br> <hr><h4 class='title-1' align=center>No Results Found</h4>
    
    <br> <a href='../taxes/pages/services/refund-status.php' ><p  align=center>&#x1F50D; Try a New Search</p></a>   <hr><br> <br>";
        }
        ?>
        <style type="text/css">
          @media print {
            .noprint {
              visibility: hidden;
            }
          }

          body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
          }

          .main-body {
            padding: 15px;
          }

          .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
          }

          .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
          }

          .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
          }

          .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
          }

          .gutters-sm>.col,
          .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
          }

          .mb-3,
          .my-3 {
            margin-bottom: 1rem !important;
          }

          .bg-gray-300 {
            background-color: #e2e8f0;
          }

          .h-100 {
            height: 100% !important;
          }

          .shadow-none {
            box-shadow: none !important;
          }
        </style>

        <script type="text/javascript">

        </script>
  </body>

  </html><?php } ?>