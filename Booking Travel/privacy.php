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
	

<div id="blog" class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 style= "color:#fc7703">MỘT VÀI ĐỊA ĐIỂM NỔI BẬT</h2>
                     <span>Những địa điểm có lượt tham quan nhiều nhất</span> 
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/blog-image0.jpg" alt="#"/>
                        <span>4 December 2023</span>
                     </figure>
                     <div class="travel">
                        <span>Đăng bởi: Trần Văn Quyền</span> 
                        <p><strong class="Comment"> 2.314 </strong>  Bình Luận</p>
                        <p><strong class="like">5.231 </strong>Lượt Thích</p>
                     </div>
                     <h3>Nhà Trắng</h3>
                     <p>Nhà Trắng, còn được gọi là Tòa Bạch Ốc, là nơi ở và làm việc chính thức của Tổng thống Hoa Kỳ. Nó nằm ở số 1600 Đại lộ Pennsylvania NW, Washington, D.C., và là một trong những địa danh nổi tiếng nhất thế giới.</br> 
                     Nhà Trắng được xây dựng vào năm 1792 theo thiết kế của kiến trúc sư James Hoban. Nó là một tòa nhà theo phong cách tân cổ điển, với mặt tiền màu trắng và mái màu xanh lá cây. Nhà Trắng có tổng cộng 132 phòng, 35 phòng tắm, 6 tầng và 18 lối vào.
                     Nhà Trắng là nơi diễn ra nhiều sự kiện quan trọng của đất nước Mỹ, bao gồm các cuộc họp của Nội các, các cuộc tiếp đón chính trị và các sự kiện ngoại giao. Nó cũng là nơi ở của gia đình Tổng thống và nhân viên của họ.</p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/blog-image.jpg" alt="#"/>
                        <span>10 December 2023</span>
                     </figure>
                     <div class="travel">
                        <span>Đăng bởi: Trần Văn Quyền</span> 
                        <p><strong class="Comment"> 4.256 </strong>  Bình Luận</p>
                        <p><strong class="like">12.624 </strong>Lượt Thích</p>
                     </div>
                     <h3>Điện Kremli</h3>
                     <p>Điện Kremli là một pháo đài lịch sử và là một trong những địa danh nổi tiếng nhất ở Nga. Nó nằm ở trung tâm thành phố Moskva và là nơi đặt trụ sở của chính phủ Nga.
                     Kremli được xây dựng từ thế kỷ 12 và đã trải qua nhiều lần tu sửa và mở rộng. Nó bao gồm một khu phức hợp các tòa nhà lịch sử, bao gồm Cung điện Kremlin, Nhà thờ Thánh Basil, Quảng trường Đỏ và Tháp Spasskaya.
                     Kremli là một biểu tượng của quyền lực và sự thống nhất của Nga. Nó là một địa điểm du lịch nổi tiếng, thu hút hàng triệu du khách mỗi năm.</p>
                  </div>
               </div>
            </div>
            
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/blog-image1.jpg" alt="#"/>
                        <span>4 December 2023</span>
                     </figure>
                     <div class="travel">
                        <span>Đăng bởi: Trần Văn Quyền</span> 
                        <p><strong class="Comment"> 3.414 </strong>  Bình Luận</p>
                        <p><strong class="like">4.231 </strong>Lượt Thích</p>
                     </div>
                     <h3>Nhà Xanh</h3>
                     <p>Nhà Xanh của tổng thống Hàn Quốc còn được gọi là Thanh Ngõa Đài hay Cheongwadae.</br>
                     Nhà Xanh tọa lạc tại số 01, đường Jeong Wa Dae, thành phố Seoul, Hàn Quốc. Nó còn là biểu tượng văn hóa, chính trị, văn hóa của xứ sở kim chi. 
                     Nhà Xanh từng là cung điện của thời đại phong kiến ​​Joseon
                     Nhà Xanh ban đầu được gọi là cung điện cổ xưa. Cung điện được xây dựng vào thời đại phong kiến ​​Joseon. Truyền thuyết kể rằng Blue House là một di tích cổ xưa của triều đại Goryeo. Trong triều đại Joseon, Cheong Wa Dae thuộc khu vườn phía sau cung điện. Cho đến ngày nay, tòa nhà được sử dụng làm trung tâm chính trị - Dinh tổng thống, nơi làm việc của giới cầm quyền.</p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/blog-image2.jpg" alt="#"/>
                        <span>10 December 2023</span>
                     </figure>
                     <div class="travel">
                        <span>Đăng bởi: Trần Văn Quyền</span> 
                        <p><strong class="Comment"> 6.256 </strong>  Bình Luận</p>
                        <p><strong class="like">100.624 </strong>Lượt Thích</p>
                     </div>
                     <h3>Tòa Nhà Quốc Hội Việt Nam</h3>
                     <p>Tọa lạc trên đường Độc Lập, Tòa nhà Quốc hội là trụ sở làm việc của Quốc hội Việt Nam, được xây dựng trên nền tòa nhà Quốc hội cũ, cạnh Quảng trường Ba Đình, khu di tích Hoàng thành Thăng Long...</br>
                     Nhà Quốc hội là nơi tổ chức lễ kỷ niệm những ngày trọng đại của dân tộc, nơi đón tiếp khách quốc tế cấp cao của Đảng và Nhà nước, đồng thời phục vụ nhu cầu tham quan, hưởng thụ văn hóa của nhân dân cả nước và du khách quốc tế.</br>
                     Công trình được coi là biểu tượng của một nước Viêt Nam yêu tự do, yêu hòa bình, sẵn sàng hợp tác với bạn bè quốc tế.
                     Nhà Quốc hội là một tác phẩm kiến trúc đồ sộ không chỉ có ý nghĩa về mặt chính trị mà còn có ý nghĩa to lớn về mặt tư tưởng, văn hóa, trở thành biểu tượng của nhân dân cả nước.</p>
                  </div>
               </div>
            </div>
            
         </div>
      </div>


      <h1></br></h1>
            <div class="col-md-12">
                  <div class="titlepage" >
                     <h2 style= "color:#fc7703">CHÍNH SÁCH BẢO MẬT</h2>
                     <span>Những chính sách đảm bảo sự bảo mật cho Website</span> 
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