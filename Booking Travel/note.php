<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];	
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];	
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Tổng Quan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/de9f7bda1c.js" crossorigin="anonymous"></script>

<!-- ================== -->

<!-- ======================== -->


<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: ffcc00;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: ffcc00;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<div class="banner-1 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Booking Travel</h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- privacy ---->
<div class="privacy">
	<div class="container">
<!-- =============== -->
	

<div id="travel" class="traveling">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2 style= "color:#fc7703">CÁC ƯU ĐÃI TRONG QUÁ TRÌNH DU LỊCH</h2>
                     <span>Có rất nhiều ưu đãi khi sử dụng dịch vụ trên hệ thống Booking Travel</span> 
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <!-- <i><img src="icon/travel-icon.png" alt="icon"/></i> -->
                     <i class="fa-solid fa-house"></i>
                     <h3>Nhà Ở</h3>
                     <p> Khách hàng được ở trong những căn Villa sang trọng</p>
                     <div class="read-more">
                        <a  href="#">Xem Thêm</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <!-- <i><img src="icon/travel-icon2.png" alt="icon"/></i> -->
                     <i class="fa-solid fa-paper-plane"></i>
                     <h3>Di Chuyển</h3>
                     <p>Có dịch vụ xe đẳng cấp 5 sao chuyên chở tận nơi</p>
                     <div class="read-more">
                        <a  href="#">Xem Thêm</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <!-- <i><img src="icon/travel-icon3.png" alt="icon"/></i> -->
                     <i class="fa-solid fa-earth-americas"></i>
                     <h3>Địa Điểm</h3>
                     <p>Không gian tham quan đảm bảo trải nghiệm tốt nhất</p>
                     <div class="read-more">
                        <a  href="#">Xem Thêm</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <!-- <i><img src="icon/travel-icon4.png" alt="icon"/></i> -->
                     <i class="fa-solid fa-camera"></i>
                     <h3>Ảnh Lưu Niệm</h3>
                     <p>Sẽ có những bức ảnh đẹp nhất lưu giữ kỉ niệm</p>
                     <div class="read-more">
                        <a  href="#">Xem Thêm</a>
                     </div>
                  </div>
               </div>
            </div>
            <h1></br></h1>
            <h1></br></h1>
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <!-- <i><img src="icon/travel-icon.png" alt="icon"/></i> -->
                     <i class="fa-solid fa-shield"></i>
                     <h3>An Ninh</h3>
                     <p> Khách hàng được bảo vệ 24/24</p>
                     <div class="read-more">
                        <a  href="#">Xem Thêm</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <!-- <i><img src="icon/travel-icon2.png" alt="icon"/></i> -->
                     <i class="fa-solid fa-gears"></i>
                     <h3>Phục Vụ</h3>
                     <p>Đội ngũ phục vụ chuẩn 5 sao</p>
                     <div class="read-more">
                        <a  href="#">Xem Thêm</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <!-- <i><img src="icon/travel-icon3.png" alt="icon"/></i> -->
                     <i class="fa-solid fa-briefcase-medical"></i>
                     <h3>Y Tế</h3>
                     <p>Sẵn sàng đội ngũ bác sĩ</p>
                     <div class="read-more">
                        <a  href="#">Xem Thêm</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <!-- <i><img src="icon/travel-icon4.png" alt="icon"/></i> -->
                     <i class="fa-solid fa-address-card"></i>
                     <h3>Hoài Niệm</h3>
                     <p>Lưu lại thông tin về chuyến đi</p>
                     <div class="read-more">
                        <a  href="#">Xem Thêm</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    

      <h1></br></h1>
      <h1></br></h1>
      <div class="row">
         <div class="col-md-12 ">
            <div class="titlepage">
               <h2 style= "color:#fc7703">NHỮNG ĐIỀU CẦN LƯU Ý TRONG QUÁ TRÌNH DU LỊCH</h2>
               <span>Để có một trải nghiệm trọn vẹn khách hàng cần lưu ý</span> 
            </div>
         </div>
      </div>


<!-- ======================= -->
<?php 
// $type = About;
$pagetype=$_GET['type'];
$sql = "SELECT type,detail from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{		

?>


		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;"><?php 	echo $_GET['type'] ?></h3>
		
		
	<p>
	<?php 	echo $result->detail; ?>


	</p> 
<?php } }?>
	

		
	</div>
</div>
<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>