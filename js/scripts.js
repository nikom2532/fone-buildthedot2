var txt_indent_web_app_en = "We create and develop the Websites for the goverment or everyone by our great expert Web Design, can create which you want, fast, Unique, and And appropriate for your business. For example Content Websites, E-Commerce Websites with order system, Login, Register, Webboard, and easier to use it.";
var txt_indent_web_app_th = "รับออกแบบ และพัฒนาเว็บไซต์ สำหรับ หน่วยงาน บริษัท หรือ บุคคลทั่วไป โดยทีมงาน Web Design ที่มีความเชี่ยวชาญ สามารถออกแบบเว็บไซต์ได้ตรงตามความต้องการ รวดเร็ว มีเอกลักษณ์ และเหมาะสมกับธรุกิจนั้นๆ ไม่ว่าจะเป็น เว็บแนะนำองค์กร (Content Website) เว็บไซต์สำหรับผู้ที่ต้องการทำร้านค้าออนไลน์ (E-Commerce Website) พร้อมระบบสั่งซื้อสินค้า, ล๊อคอิน, ลงทะเบียน และเว็บบอร์ด เว็บไซต์รองรับการชำระเงิน เพื่อเพิ่มความสะดวกแก่ผู้ใช้";
var txt_indent_mobile_app_en = "Nowaday, Mobile phone is necessaried. Because when you worked, your life is not stationary. The Mobile Application will make your business more accessible, no matter where. We create and develop iPhone Application and Android Application by great expert Software Developer, can connect with Facebook, upload online photos, QR Code using, Map using, or any connecting with the Web Service, and Function wish you want.";
var txt_indent_mobile_app_th = "ปัจจุบันโทรศัพท์มือถือ ถือเป็นสิ่งจำเป็น เนื่องจากการทำงาน การใช้ชีวิตไม่ได้อยู่กับที่ Mobile Application จะทำให้สามารถเข้าถึงธุรกิจของคุณได้มากขึ้นไม่ว่าจะอยู่ที่ไหน รับออกแบบแลพัฒนา IPhone และ Andoird Application โดยทีมงานที่มีความเชี่ยวชาญ สามารถพัฒนาโดยเชื่อมต่อกับ Facebook, การถ่ายรูป Upload รูปออนไลน์, การใช้ QR Code, Map หรือการเชื่อมต่อกับ Web Service และ Function อื่นๆตามความต้องการ";
var txt_indent_AR_app_en = "Augmented Reality is the Technology that merge between Actual environment and Virtual environment. By users can use the Camera";
var txt_indent_AR_app_th = "Augmented Reality เป็น Technology ที่รวมระหว่างสิ่งแวดล้อมจริงและ สิ่งแวดล้อมเสมือนเข้าด้วยกัน โดยผู้ใช้สามารถดูผ่านอุปกรณ์กล้องโทรศัพท์มือถือ รวมกับการใช้ Application ซึ่งจะทำให้เราเห็นภาพในจอ เป็นโมเดล3มิติ ข้อความ หรือพิกัดต่างๆ ซึ่งมีมุมมอง360องศา รับออกแบบและพัฒนา AR Application และปั้น 3D Model สำหรับระบบปฎิบัติการ IPhone และ Android ตามความต้องการ สามารถนำไปประยุกต์ใช้กับ งาน Event, การทำโฆษณา, ทำนามบัตร, สื่อการเรียนการสอน, หรือใช้เพื่อสร้างความบันเทิง";
jQuery("#lang-th").click(
	function(){
		jQuery(".container #web-app .indent").html(txt_indent_web_app_th);
		jQuery(".container #mobile-app .indent").html(txt_indent_mobile_app_th);
		jQuery(".container #AR-app .indent").html(txt_indent_AR_app_th);
	}
);
jQuery("#lang-en").click(
	function(){
		jQuery(".container #web-app .indent").html(txt_indent_web_app_en);
		jQuery(".container #mobile-app .indent").html(txt_indent_mobile_app_en);
		jQuery(".container #AR-app .indent").html(txt_indent_AR_app_en);
	}
);