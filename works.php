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
        <script src="js/jquery-1.7.1.min.js"></script> 
 <script type="text/javascript" src="js/jquery.validate.js"></script> 
	
		<script type='text/javascript'>
			$( document ).ready(function() {
				 $("#form1").validate({
				rules: {
				  name: "required",// simple rule, converted to {required:true}
				  email: {// compound rule
				  required: true,
				  email: true
				},
				phone: {
				  required: true
				},
				comment: {
				  required: true
				}
				},
				messages: {
				  name:"กรุณาระบุชื่อผู้ติดต่อ",
				  email: "กรุณาระบุอีเมลล์",
				  phone: "กระณาระบุหมายเลขโทรศัพท์",
				  comment: "กรุณาระบุข้อความ"
				  
				}
				 });

				var str=location.href.toLowerCase();
					$("#links a").each(function() {
						if (str.indexOf(this.href.toLowerCase()) > -1) {
						$("li.active").removeClass("active");
						$(this).parent().addClass("active");
						}
					});
			});
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
                                <li><a href="index.php">Home</a></li>								
                                <li><img src="images/dot2.png"></li>
                                <li><a href="works.php" >Works</a></li>
                                <li><img src="images/dot2.png"></li>
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
          <div class="container">
            	<div id="wrap-content" >
					<div class="sixteen columns" >
                       <h3 class="head-title">ผลงาน</h3>    
					</div>
                    <div class="ten columns offset-by-two head-works">
						<h3>Web Design</h3>
                        <h4>MTK WOOD</h4>
						<div id="wrap-works">				
							<img src="images/works/mtkCom.png" width="506" height="328" alt="MTK WOOD">
						</div>
                      	<div class="eight columns tag">
                        	<ul>
                            	<li class="grey-tag">Logo Design</li>
                                <li class="yellow-tag">Web Design</li>
                                <li class="grey-tag">Responsive Web Design</li>
                            </ul>
                        </div>
                    </div><br class="clear" />
                     <div class="ten columns offset-by-two head-works">
						<h3>Web Application</h3>
                        <h4>Patient Information Management System in Hospital</h4>
						<div id="wrap-works">				
							<img src="images/works/hospital2.png" width="506" height="376" alt="WebApp">
						</div>
                      	<div class="eight columns tag">
                        	<ul>
                            	<li class="grey-tag">Logo Design</li>
                                <li class="yellow-tag">Web Design</li>
                                <li class="grey-tag">Responsive Web Design</li>
                                <li class="yellow-tag">Web Application</li>
                            </ul>
                        </div>
                    </div><br class="clear" />
                     <div class="ten columns offset-by-two head-works">
						<h3>Iphone Application</h3>
                        <h4>AR Star</h4>
						<div id="wrap-works">				
							<img src="images/works/ARMobile.png" width="210" height="390" alt="IphoneApp">
						</div>
                      	<div class="eight columns tag">
                        	<ul>
                            	<li class="grey-tag">Iphone Application</li>
                                <li class="yellow-tag">Augmented Reality</li>
                            </ul>
                        </div><br class="clear" />
                         <h4>Question For Kids</h4>
						<div id="wrap-works">				
							<img src="images/works/QuestionForKidMobile.png" width="506" height="334" alt="IphoneApp">
						</div>
                      	<div class="eight columns tag">
                        	<ul>
                            	<li class="grey-tag">Ipad Application</li>
                            </ul>
                        </div>
                    </div><br class="clear" />
                    
                </div><!--end wrap-content -->
			
            </div><!--end wrap-container -->
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
									<li class="email"><a href="mailto:contact@buildthedot.com">contact@buildthedot.com</a></li>
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
									<a href="index_.php"><li id="link-home"></li></a>
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
