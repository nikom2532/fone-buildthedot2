var txt_indent_web_app_en = "We design and develop a website or web application such as personal websites, company websites and e-commerce websites by a team with experience in web development. We create simple and intuitive interface to provide the best user experience.";
var txt_indent_web_app_th = "รับออกแบบ และพัฒนาเว็บไซต์ สำหรับ หน่วยงาน บริษัท หรือ บุคคลทั่วไป โดยทีมงาน Web Design ที่มีความเชี่ยวชาญ สามารถออกแบบเว็บไซต์ได้ตรงตามความต้องการ รวดเร็ว มีเอกลักษณ์ และเหมาะสมกับธรุกิจนั้นๆ ไม่ว่าจะเป็น เว็บแนะนำองค์กร (Content Website) เว็บไซต์สำหรับผู้ที่ต้องการทำร้านค้าออนไลน์ (E-Commerce Website) พร้อมระบบสั่งซื้อสินค้า, ล๊อคอิน, ลงทะเบียน และเว็บบอร์ด เว็บไซต์รองรับการชำระเงิน เพื่อเพิ่มความสะดวกแก่ผู้ใช้";
var txt_indent_mobile_app_en = "We create and develop the mobile application for iOS and Android platform by a professional team. The application can connect to Facebook, photo upload, QR Code scan, google map and other  features depend on your requirements.";
var txt_indent_mobile_app_th = "ปัจจุบันโทรศัพท์มือถือ ถือเป็นสิ่งจำเป็น เนื่องจากการทำงาน การใช้ชีวิตไม่ได้อยู่กับที่ Mobile Application จะทำให้สามารถเข้าถึงธุรกิจของคุณได้มากขึ้นไม่ว่าจะอยู่ที่ไหน รับออกแบบแลพัฒนา IPhone และ Andoird Application โดยทีมงานที่มีความเชี่ยวชาญ สามารถพัฒนาโดยเชื่อมต่อกับ Facebook, การถ่ายรูป Upload รูปออนไลน์, การใช้ QR Code, Map หรือการเชื่อมต่อกับ Web Service และ Function อื่นๆตามความต้องการ";
var txt_indent_AR_app_en = "We design and create Augmented Reality application(AR) for Iphone and Andriod. AR application is a great way to entertain your audience with some special effects. It can be used in events or exhibitions to make the show or demostration more interesting.";
var txt_indent_AR_app_th = "Augmented Reality เป็น Technology ที่รวมระหว่างสิ่งแวดล้อมจริงและ สิ่งแวดล้อมเสมือนเข้าด้วยกัน โดยผู้ใช้สามารถดูผ่านอุปกรณ์กล้องโทรศัพท์มือถือ รวมกับการใช้ Application ซึ่งจะทำให้เราเห็นภาพในจอ เป็นโมเดล3มิติ ข้อความ หรือพิกัดต่างๆ ซึ่งมีมุมมอง360องศา รับออกแบบและพัฒนา AR Application และปั้น 3D Model สำหรับระบบปฎิบัติการ IPhone และ Android ตามความต้องการ สามารถนำไปประยุกต์ใช้กับ งาน Event, การทำโฆษณา, ทำนามบัตร, สื่อการเรียนการสอน, หรือใช้เพื่อสร้างความบันเทิง";

function onchange_menu_th(){
	jQuery("#wrap-header a#header-home").css("font-size", "1.5em");
	jQuery("#wrap-header a#header-works").css("font-size", "1.5em");
	jQuery("#wrap-header a#header-contactus").css("font-size", "1.5em");
	jQuery("#wrap-header a#header-home").html("หน้าบ้าน");
	jQuery("#wrap-header a#header-works").html("ผลงาน");
	jQuery("#wrap-header a#header-contactus").html("ติดต่อเรา");
}
function onchange_menu_en(){
	jQuery("#wrap-header a#header-home").css("font-size", "1.0em");
	jQuery("#wrap-header a#header-works").css("font-size", "1.0em");
	jQuery("#wrap-header a#header-contactus").css("font-size", "1.0em");
	jQuery("#wrap-header #header-home").html("Home");
	jQuery("#wrap-header #header-works").html("Works");
	jQuery("#wrap-header #header-contactus").html("Contact us");
}
function onchange_footer_th(){
	onchange_menu_th();
	jQuery("div.container#wrap-footer #footer-contact #footer-contactus").html("ติดต่อเรา");
	jQuery("div.container#wrap-footer #footer-contact #footer-Tel").html("โทรศัพท์");
	jQuery("div.container#wrap-footer #footer-contact #footer-email").html("อีเมลล์:");
	jQuery("div.container#wrap-footer h3#copyright-desktop").html("&copy; BuildTheDot 2013. สงวนลิขสิทธิ์.");
	jQuery("div.container#wrap-footer h3#copyright-mobile").html("&copy; BuildTheDot 2013. สงวนลิขสิทธิ์");
	$.cookie("language", "th");
}
function onchange_footer_en(){
	onchange_menu_en();
	jQuery("div.container#wrap-footer #footer-contact #footer-contactus").html("Contact Us");
	jQuery("div.container#wrap-footer #footer-contact #footer-Tel").html("Tel.");
	jQuery("div.container#wrap-footer #footer-contact #footer-email").html("E-mail:");
	jQuery("div.container#wrap-footer h3#copyright-desktop").html("&copy; BuildTheDot 2013. All rights reserved.");
	jQuery("div.container#wrap-footer h3#copyright-mobile").html("&copy; BuildTheDot 2013. All rights reserved.");
	$.cookie("language", "en");
}

function onclick_lang_th(){
	jQuery(".container #web-app .indent").html(txt_indent_web_app_th);
	jQuery(".container #mobile-app .indent").html(txt_indent_mobile_app_th);
	jQuery(".container #AR-app .indent").html(txt_indent_AR_app_th);
	jQuery("#lang #lang-bar a#lang-en").css("color","#FFFFFF");
	jQuery("#lang #lang-bar a#lang-th").css("color","#FCC214");
	onchange_footer_th();
}
jQuery("#lang-th").click(
	function(){
		onclick_lang_th();
	}
);

function onclick_lang_en(){
	jQuery(".container #web-app .indent").html(txt_indent_web_app_en);
	jQuery(".container #mobile-app .indent").html(txt_indent_mobile_app_en);
	jQuery(".container #AR-app .indent").html(txt_indent_AR_app_en);
	jQuery("#lang #lang-bar a#lang-en").css("color","#FCC214");
	jQuery("#lang #lang-bar a#lang-th").css("color","#FFFFFF");
	onchange_footer_en();
	$.cookie("language", "en");
}
jQuery("#lang-en").click(
	function(){
		onclick_lang_en();
	}
);

function onclick_lang_th_portfolios(){
	jQuery(".container #wrap-content h3.head-title").html("ผลงาน");
	jQuery("#lang #lang-bar a#lang-en-portfolios").css("color","#FFFFFF");
	jQuery("#lang #lang-bar a#lang-th-portfolios").css("color","#FCC214");
	jQuery("h3.head-title").css("font-size", "2.1em");
	onchange_footer_th();
}
jQuery("#lang-th-portfolios").click(
	function(){
		onclick_lang_th_portfolios();
	}
);

function onclick_lang_en_portfolios(){
	jQuery(".container #wrap-content h3.head-title").html("portfolios");
	jQuery("#lang #lang-bar a#lang-en-portfolios").css("color","#FCC214");
	jQuery("#lang #lang-bar a#lang-th-portfolios").css("color","#FFFFFF");
	jQuery("h3.head-title").css("font-size", "1.8em");
	onchange_footer_en();
}
jQuery("#lang-en-portfolios").click(
	function(){
		onclick_lang_en_portfolios();
	}
);

function onclick_lang_th_contactus(){
	jQuery(".container .head-title").html("ติดต่อเรา");
		jQuery(".container #wrap-form #form1 #name").html("ชื่อ");
		jQuery(".container #wrap-form #form1 #email").html("อีเมลล์");
		jQuery(".container #wrap-form #form1 #tel").html("โทรศัพท์");
		jQuery(".container #wrap-form #form1 #textcontent").html("ข้อความ");
		jQuery(".container #wrap-form #form1 #submit-btn.submit").val("ส่งข้อความ");
		jQuery(".container #wrap-address .title").html("ติดต่อทีมงาน");
		jQuery(".container #wrap-address .sub-title#tel").html("โทรศัพท์");
		jQuery("#wrap-address #name1").html("วรวรรณ:");
		jQuery("#wrap-address #name2").html("พัชรภรณ์:");
		jQuery("#wrap-address #name3").html("นิคม:");
		jQuery(".container #wrap-address .sub-title#email").html("อีเมลล์");
		jQuery("#lang #lang-bar a#lang-en-contactus").css("color","#FFFFFF");
		jQuery("#lang #lang-bar a#lang-th-contactus").css("color","#FCC214");
		jQuery("h3.head-title").css("font-size", "2.1em");
		jQuery("h4").css("font-size", "1.23em");
		onchange_footer_th();
}
jQuery("#lang-th-contactus").click(
	function(){
		onclick_lang_th_contactus();
	}
);

function onclick_lang_en_contactus(){
	jQuery(".container h3.head-title").html("Contact us");
		jQuery(".container #wrap-form #form1 #name").html("Name");
		jQuery(".container #wrap-form #form1 #email").html("E-mail");
		jQuery(".container #wrap-form #form1 #tel").html("Telephone");
		jQuery(".container #wrap-form #form1 #textcontent").html("Message");
		jQuery(".container #wrap-form #form1 #submit-btn.submit").val("Send Message");
		jQuery(".container #wrap-address h4.title").html("Contact Team");
		jQuery(".container #wrap-address .sub-title#tel").html("Telephone");
		jQuery("#wrap-address #name1").html("Vorawan:");
		jQuery("#wrap-address #name2").html("Patcharaporn:");
		jQuery("#wrap-address #name3").html("Arming Huang:");
		jQuery(".container #wrap-address .sub-title#email").html("E-mail");
		jQuery("#lang #lang-bar a#lang-en-contactus").css("color","#FCC214");
		jQuery("#lang #lang-bar a#lang-th-contactus").css("color","#FFFFFF");
		jQuery("h3.head-title").css("font-size", "1.8em");
		jQuery("h4").css("font-size", "1.03em");
		onchange_footer_en();
}
jQuery("#lang-en-contactus").click(
	function(){
		onclick_lang_en_contactus();
	}
);