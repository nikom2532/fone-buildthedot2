<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Build The Dot</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />	
		<link href="css/base.css" type="text/css" rel="stylesheet">
		<link href="css/skeleton.css" type="text/css" rel="stylesheet">	      		
		<link href="css/style.css" rel="stylesheet" type="text/css"> 
        <link href="css/layout.css" type="text/css" rel="stylesheet">      
        <link rel="shortcut icon" href="images/iconWeb.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type='text/javascript' src='js/respond.min.js'></script>
		<script type='text/javascript' src='js/jquery-1.7.1.min.js'></script>
	
		<script type='text/javascript'>
				$(document).ready(function(){
					var str=location.href.toLowerCase();
					$("#links a").each(function() {
						if (str.indexOf(this.href.toLowerCase()) > -1) {
						$("li.active").removeClass("active");
						$(this).parent().addClass("active");
						}
					});
			}) 
		</script>
	</head>
	<body>
    	<div id="wrapper">
            <div id="wrap-header">
                    <div class="container">
                        <!--<div id="hotline" class="sixteen columns right">
                            <div class="right"><div id="text-hotline">087-7839922</div></div>
                        </div> -->
                        <div class="sixteen columns" id="logo">
                          <img src="images/logonew2.png" alt="BuildTheDot" width="126" height="192">
                                 
                         </div>
                          <nav class="sixteen columns" id="header-nav-desktop">
                            <ul id="links">			
                                <li><a href="index.php" class="active">Home</a></li>								
                                <li class="dot"><img src="images/dot2.png"></li>
                                <li><a href="works.php">Works</a></li>
                                <li class="dot"><img src="images/dot2.png"></li>
                                <li><a href="contact.php">Contact us</a></li>
                            </ul>
                        </nav><!--end nav-menu  -->
                        <nav class="sixteen columns" id="header-nav-mobile">
							 <ul>			
                                <li><a href="index.php">Home</a></li>								
                                <li><a href="works.php">Works</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                            </ul>
						</nav>
                        <div class="sixteen columns">
                        	<div id="slogan">
								<ul>
									<li>We design</li>
									<li class="text-yellow">We build</li>
									<li>We care</li>
								</ul>
							</div>    
                        </div>
                    </div><!-- end container --> 
            </div><!--end wrap-header -->
			<div class="container" id="wrap-banner">
            	<div class="sixteen columns feature" id="banner">
                	<img src="images/banner.png" width="545" height="239" alt="Desktop Tablet Mobile">
                </div>
            </div>
            <div class="container">
            <div id="wrap-feature">
            	<div class="one-third column feature">
						<h3 class="feature-title">web application</h3>
                        	 <div id="wrap-icon">
                                 <img src="images/icon_web1.png"  alt="Web Application">
                                 <img src="images/icon_web2.png"  alt="Web Application">
                             </div>
                            <p class="indent">รับออกแบบ และพัฒนาเว็บไซต์ สำหรับ หน่วยงาน บริษัท หรือ บุคคลทั่วไป โดยทีมงาน Web Design ที่มีความเชี่ยวชาญ 					                             สามารถออกแบบเว็บไซต์ได้ตรงตามความต้องการ รวดเร็ว มีเอกลักษณ์ และเหมาะสมกับธรุกิจนั้นๆ ไม่ว่าจะเป็น
							 เว็บแนะนำองค์กร (Content Website) เว็บไซต์สำหรับผู้ที่ต้องการทำร้านค้าออนไลน์ (E-Commerce Website) พร้อมระบบ 							 สั่งซื้อสินค้า, ล๊อคอิน, ลงทะเบียน และเว็บบอร์ด เว็บไซต์รองรับการชำระเงิน เพื่อเพิ่มความสะดวกแก่ผู้ใช้</p>
                            
                             
				</div>
			
				<div class="one-third column feature">
                        <h3 class="feature-title">mobile application</h3>
                         <div id="wrap-icon">
                             <img src="images/icon_app1.png"  alt="Mobile Application">
                             <img src="images/icon_app2.png"  alt="Mobile Application">
                        </div>
                        <p class="indent"> ปัจจุบันโทรศัพท์มือถือ ถือเป็นสิ่งจำเป็น เนื่องจากการทำงาน การใช้ชีวิตไม่ได้อยู่กับที่ Mobile Application 	 				  							จะทำให้สามารถเข้าถึงธุรกิจของคุณได้มากขึ้นไม่ว่าจะอยู่ที่ไหน รับออกแบบและพัฒนา IPhone และ Andoird Application
							โดยทีมงานที่มีความเชี่ยวชาญ สามารถพัฒนาโดยเชื่อมต่อกับ Facebook, การถ่ายรูป Upload รูปออนไลน์, การใช้ QR Code, Map 							หรือการเชื่อมต่อกับ Web Service และ Function อื่นๆตามความต้องการ</p>
                       
				</div>
				<div class="one-third column feature">	
                        <h3 class="feature-title">ar application</h3>
                         <div id="wrap-icon">
                             <img src="images/icon_ar1.png"  alt="AR Application">
                             <img src="images/icon_ar2.png"  alt="AR Application">
                        </div>
                        <p class="indent">Augmented Reality เป็น Technology ที่รวมระหว่างสิ่งแวดล้อมจริงและ สิ่งแวดล้อมเสมือนเข้าด้วยกัน 				 						 โดยผู้ใช้สามารถดูผ่านอุปกรณ์กล้องโทรศัพท์มือถือ รวมกับการใช้ Application ซึ่งจะทำให้เราเห็นภาพในจอ 
						 เป็นโมเดล3มิติ ข้อความ หรือพิกัดต่างๆ ซึ่งมีมุมมอง360องศา รับออกแบบและพัฒนา AR Application และปั้น 3D Model สำหรับระบบปฎิบัติการ 						 IPhone และ Android ตามความต้องการ สามารถนำไปประยุกต์ใช้กับ งาน Event, การทำโฆษณา, 
						 ทำนามบัตร, สื่อการเรียนการสอน, หรือใช้เพื่อสร้างความบันเทิง</p>        
				</div>
            </div>
            </div><!--end wrap-content -->
            <footer>
            	<div class="container" id="wrap-footer">
					<div class="sixteen columns">
							<div class="four columns" id="footer-logo-desktop">
								<h3><a href="#"></a></h3>
							</div>
                            <div id="footer-logo-mobile" class="sixteen columns">
								<h3><a href="#"></a></h3>
							</div>
							<div id="footer-contact" class="four columns">
								<ul>
									<li><h3>Contact Us</h3></li>
									<li class="b600">Tel. </li>
									<li>+66 (0) 8 7783 9922</li>
									<li>+66 (0) 8 3068 1807</li>
									<li>+66 (0) 8 5506 5953</li>
									<li class="b600">Email </li>
									<li  class="email">contact@buildthedot.com</li>
								</ul>
							</div>
							<nav class="eight columns" id="footer-nav-desktop">
								<ul class="right">
									<a href="index.php"><li id="link-home"></li></a>
									<a href="works.php"><li id="link-work"></li></a>
									<a href="contact.php"><li id="link-contact"></li></a>
									<a href="http://www.facebook.com/BuildTheDot1"><li id="link-fb"></li></a>
								</ul>
							</nav>
                            <nav class="sixteen columns" id="footer-nav-mobile">
								<ul class="right">
									<a href="index.php"><li id="link-home"></li></a>
									<a href="works.php"><li id="link-work"></li></a>
									<a href="contact.php"><li id="link-contact"></li></a>
									<a href="http://www.facebook.com/BuildTheDot1"><li id="link-fb"></li></a>
								</ul>
							</nav>
							<div class="sixteen columns">
								<h3  id="copyright-desktop">&copy; BuildTheDot 2013. All rights reserved.</h3>
                                <h3  id="copyright-mobile">&copy; BuildTheDot 2013. All rights reserved.</h3>
							</div>
						</div>
					</div>
            </footer>
		</div><!--end wrapper -->
	</body>
</html>
