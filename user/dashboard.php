<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsuid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  
    <title>Dashboard | Online Birth Certificate System</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    
    <!-- Header top area start-->
    <div class="wrapper-pro">
      <?php include_once('includes/sidebar.php');?>
        <!-- Header top area start-->
       <?php include_once('includes/header.php');?>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                   
                                    <div class="col-lg-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
      <center>
  <img src="1.png" width=100 height=200>
</center>
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
            <div class="income-order-visit-user-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                       <?php
$uid=$_SESSION['obcsuid'];
$sql="SELECT FirstName,LastName,MobileNumber from  tbluser where ID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?> 
                           <div class="main-income-phara">
                                           <h2>Welcome to Online Birth Certificate Registration <?php  echo $row->FirstName;?>  <?php  echo $row->LastName;?>!!!</h2>
                                        </div>
                                        <?php $cnt=$cnt+1;}} ?>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
          

        
        
         
        </div>
    </div>
<center>
<div class="post-description"><div class="row cus_row_search"><input type="text" class="form-control st-default-search-input" placeholder="Search IndiaFilings articles" id="search_input_single" style="width: -webkit-fill-available;"></div><h1 style="text-align: center;">Tamilnadu Birth Certificate</h1><p>A birth certificate is an important government document used to verify an individual’s birth date, place of birth and parents.<br> Birth registration is a mandatory process in India.<br> The births can be registered free of cost within 22 days from the date of birth. <br> A fine has to be paid if the birth has to be registered after 22 days. <br> Since, a birth certificate is a must for obtaining <a href="https://www.indiafilings.com/learn/pan-permanent-account-number/">PAN</a>, <a href="https://www.indiafilings.com/learn/driving-license/">driving license</a> and school admission, its best to get the birth certificate as soon as possible.<br> In this article, we look at the procedure for obtaining a birth certificate in Tamilnadu.</p><h2>Applying for Birth Certificate</h2><p>The below steps are necessary to apply for a Birth Certificate in Tamilnadu.<br> The parent’s of the child or by the nearest family member can apply for the birth certificates.</p><p><strong>Step 1: Visit the Town Panchayat or Apply online</strong></p><p>The first step in registering a birth is by visiting the Town Panchayat or by visiting a&nbsp; Common Service Centre (CSC) of TN Government.<br> In case of an application for a birth certificate in Chennai, visit the respective Zonal Assistant Health Officer or Birth and <a href="https://www.indiafilings.com/learn/tn-death-certificate/">Death</a> Registrar.</p><p><strong>Step 2: Applying for the certificate</strong></p><p>The person who is applying for the certificate has to carry the required documents at the time of applying the certificate. <br> Normally it requires the identity and address proof of parents.</p><p><strong>Step 3: Enter the details</strong></p><p>After receiving the application form, the following details have to be entered.</p><ul><li>Name of the child</li><li>Parents Name</li><li>Gender of the child</li><li>Date of Birth</li><li>Place of Birth</li></ul><p><strong>Step 4: Submission of the form</strong></p><p>After the completion of the form, the applicant has to submit the form to the town panchayat or the concerned office. <br> The applicant has to furnish additional documents if required.</p>
<h2>Required Documents</h2><p>There is no requirement of furnishing any documents if the medical institution <br> or hospital have already informed the municipality office regarding the birth.<br> If the municipality has not informed of the birth, the head of the family or any nearest relative must register the birth. <br> The registration of birth requires the submission of a certificate that the person or medical institution who has conducted the delivery issues.<br>  If a birth has occurred in a medical institution, the registration will be handled by the institution.</p></div></div></div></div>   
<?php include_once('includes/footer.php');?></center>
    <!-- Footer End-->
   
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/wow/wow.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jvectormap/jvectormap-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/Chart.min.js"></script>
    <script src="js/flot/dashtwo-flot-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html><?php }  ?>