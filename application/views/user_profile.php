<!DOCTYPE HTML>
	<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>تسويق الكتروني</title>
		
		<meta name="keywords" content="content">
		
		<meta name="viewport" content="width=device-width; initial-scale=1.0">		

		
		<link rel="stylesheet" href="<?php echo base_url();?>css/stylesheet.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url();?>css/angelina.css" type="text/css" >		
        <link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css" type="text/css" >		
		<link rel="stylesheet" href="<?php echo base_url();?>css/prettyPhoto.css" type="text/css" >	
		<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen">
		<!-- template skin -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/skin.css"type="text/css" >	
		
        <link href="<?php echo base_url();?>css/ticker-style.css" rel="stylesheet" type="text/css" />
	
	     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script src="<?php echo base_url();?>js/jquery.easing.1.3.js" type="text/javascript" ></script>

		
		<!-- prettyPhoto -->	
		<script src="<?php echo base_url();?>js/jquery.prettyPhoto.js" type="text/javascript" ></script> 	
		<script src="<?php echo base_url();?>js/setting-1.js"type="text/javascript"  ></script> 

		
		
	
	<script src="<?php echo base_url();?>js/site.js" type="text/javascript"></script>
		
		
	</head>
	<body>
	
	<!-- start of wrapper -->
	<div id="wrapper">
	
		<!-- start of section top -->
		<section id="top">
			<div id="top-wrapp">
					<?php include('header2.php')?>
				
					
						
					
                   
			</div>
		</section>
		<!-- end of section top -->

		<!-- start of section middle -->
        <div id="news" > 
        <ul id="js-news" class="js-hidden">
		<li class="news-item"><a href="fa.hrml">محمود شعبان يقدم برنامج هاتولى راجل على قناة الحافظ</a></li>
		<li class="news-item">jQuery News Ticker now has support for right-to-left languages!</li>
		<li class="news-item">jQuery News Ticker now has support for loading content via an RSS feed!</li>
		<li class="news-item">jQuery News Ticker now has an optional fade effect between items!</li>
		<li class="news-item">New updates have been made to jQuery News Ticker! Check below for more details!</li>
		<li class="news-item">jQuery News Ticker is now compatible with jQuery 1.3.2! See below for further details and for latest download.</li>
		<li class="news-item">Further updates to jQuery News Ticker are coming soon!</li>
	</ul>
        </div>
		
			
				
			<div id="content">
						<div id="left">
                      <div id="profile_half1">
                      <span id="user_state"><img src="#"/> </span>
                      <img src="<?php echo base_url();?>upload/img2.jpg" width="150" height="120" id="profile_img" />
                    
                      <table width="300" id="user_data" border="0">
  <tr>
    <td> <p id="user_name"><?php if (isset($username)){ echo $username;}?></p></td>
  </tr>
  <tr>
    <td>  <a href="#" id="message"><span style="color:#F90">3</span> صندوق الرسائل</a></td>
  </tr>
  <tr>
    <td><a href="#" id="edit">تعديل حسابي الشخصي</a></td>
  </tr>
  <tr>
    <td>  <p id="state"><?php if (isset($country)){ echo $country;}?><span>,</span><?php if (isset($city)){ echo $city;}?></p></td>
  </tr>
  <tr>
    <td>   <a href="#" id="message">شجره الاعضاء</a></td>
  </tr>
</table>

                   
                   
                      </div>
                      
                    <div id="clear"></div>
                      <div id="profile_half2" style="width:100%">
                     <img style="float:right;margin-left:5px;margin-top:4px;" src="<?php echo base_url() ; ?>images/vcard.png" /><h3 style="float:right">الخدمات التي تم شراءها</h3>
                     <table style="float:right" width="800" border="0">
  <tr>
    <td><div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div></td>
    <td>
    <div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>
</td>
  </tr>
  <tr>
    <td>
    <div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>
</td>
    <td>
    <div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>
</td>
  </tr>
  <tr>
    <td><div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>
</td>
    <td>
    <div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>
</td>
  </tr>
</table>

<!------------------------------- favorite ------------------------------------>
 <img style="float:right;margin-left:5px;margin-top:4px;" src="<?php echo base_url() ; ?>images/vcard.png" /><h3 style="float:right">الخدمات المفضله</h3>
                     <table style="float:right" width="800" border="0">
  <tr>
    <td><div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div></td>
    <td>
    <div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>
</td>
  </tr>
  <tr>
    <td>
    <div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>
</td>
    <td>
    <div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>
</td>
  </tr>
  <tr>
    <td><div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>
</td>
    <td>
    <div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>
</td>
  </tr>
</table>

                      </div>
                      
                      		
				</div>
                        
                        
                        <div id="right">
                      
    <div class="main_menu" >
  
    <ul class="nav2" style="margin-top:-10px">
    <h3 id="dept">الاقسام</h3>
<li><a href="#"> مدارس </a></li>
<li><a href="#"> مطاعم </a></li>
<div class="sub_links" style="display: none; ">

<p><a href="#">مطاعم تمراز</a></p>

<p><a href="#">مؤمن</a></p> 
</div>
<li><a href="#"> الاطباء </a></li>

<div class="sub_links" style="display: none; ">

<p><a href="#">جراحه</a></p>
<p><a href="#">جراحه</a></p> 

</div>

<li><a style="#"> خالد بدوى </a></li>

<div class="sub_links" style="display: none; ">
<p><a href="#">ابراهيم شديد</a></p> 
</div>                  

                  

    </ul>    
</div>

<div id="clear"></div>
<div id="serv_block" >
<h3 style="margin-top:-10px;">الخدمات الاكثر ربحا</h3>
<div style="background-color:#5e8d03">
<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

</div>

<div id="clear"></div>
<div id="adv_block" >
<h3 style="margin-top:-10px;">الرعاه</h3>

<div id="adv">
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
<img src="<?php echo base_url();?>images/adv.gif"  />
</div>
</div>

<div id="clear"></div>
<div id="serv_block2" >
<h3 style="margin-top:-10px;">الخدمات التي تم تسليمها</h3>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

<div id="most">
<img src="<?php echo base_url();?>upload/img4.jpg"  width="60" height="50"/>
<h6 id="h6"><a href="#">تصميم مواقع خلال خمس ايام</a></h6>
<p id="p">تصميم مواقع خلال خمس ايام مع تقديم استضافه لمده شهر مجانا </p>
</div>

</div>
				</div>	
                
                </div>
	
				</div>
					
		
		<!-- end of section middle -->

		<!-- start of section bottom -->
		<?php include('footer.php')?>
		<!-- end of section bottom -->
		
	</div>
	<!-- end of wrapper -->

	</body>
	</html>