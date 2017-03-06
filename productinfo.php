<?php 
//引入標頭檔
include_once("config.inc.php");
include_once("utf8_header.php");
include_once("start_session.php");

$product_code = filter_var($_GET['code'], FILTER_SANITIZE_STRING);
$qry = "SELECT * FROM bitcheese_products WHERE product_code = :product_code";
$stmt = $mysqli_conn -> prepare($qry); 
$stmt -> bindParam(":product_code", $product_code, PDO::PARAM_STR);
$stmt -> execute();

if($stmt -> rowCount() == 1){
	$row = $stmt -> fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>

<html>

<head>
	<title>Bitcheese飾品</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><!--0219-->

	<link rel="stylesheet" 
	 href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" href="css/font-awesome.css">

	<link rel="stylesheet" href="css/Main.css" media="screen">

	<link rel="stylesheet" href="css/Main.css" media="(min-width:1025px)">

	<link rel="stylesheet" href="css/Tablet.css" media="(min-width:768px) and (max-width:1024px)">  

	<link rel="stylesheet" href="css/MobileDevice.css" media="(max-width:767px)">

	<link rel="stylesheet" href="css/spin.css" media="(max-width:767px)">
	
	
	
	<!--javascript-->
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://masonry.desandro.com/masonry.pkgd.js"></script>
	<script type="text/javascript" src="http://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
</head>

<body id="eliminate-other-css">

	<div id="aside_button"><!--右下方按鈕區塊開始-->

		<div id="Bonus_show"><!--優惠活動提示按鈕-->
			優惠<br>
			商品
		</div>

		<div id="custom_service"><!--線上客服按鈕-->
			線上<br>
			客服
		</div>
		
		<div id="back_to_top"><!--回到上方按鈕-->
			<i class="fa fa-chevron-up" aria-hidden="true"></i>
		</div>

	</div><!--右下方按鈕區塊結束-->

	
	<div id="left-shopping-cart"><!--左側鑲版-->
		<div id="shopping-cart-title" class="special-font">&nbsp;ShoppingCart</div>
				
			<div id="for_scroll">
					
					<div id="purchase-details"></div>

			</div>
				
				
		
				<div id="purchase-button"><i class="fa fa-usd" aria-hidden="true"></i>&nbsp;結帳</div>
	</div>
		
	

	
	<div class="login-background-color"></div><!--登入頁面背景顏色div-->
	
	
	<!--登入頁面-->
	<div id="login-page">

		<div id="login-page-content"><!--登入頁面大區塊開始-->

			<div class="cancel_button"><!--取消按鈕-->
				<i class="fa fa-times" aria-hidden="true" id="log-in-cancel"></i>
			</div>

			
			<div id="login-page-logo"><!--Logo-->
				<img src="images/logo_name.png" alt="Bitcheese飾品">
			</div>

		
			<div id="login-page-info"><!--輸入登入資料區塊開始-->
	
				<button type="botton" id="log_in_with_facebook"><!--以FB登入-->
					<span>
						<i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
						使用Facebook登入
					</span>
				</button>



				<!--輸入資訊表單-->
				<form id="login_form" method="POST" action="log_in.php">
					<input class="input_1 required email" type="text" name="email_login" placeholder=" 輸入信箱 ">
					<span class="login_error_tips"></span>
					<br>
					<input class="input_2 required" type="password" name="password_login" placeholder=" 密碼 ">
					<span class="login_error_tips"></span>

					<input type="hidden" name="log_in" value="log_in">
				</form>
				

			</div><!--輸入登入資料區塊結束-->
				
			
			<div id="login-page-nav"><!--登入按鈕-->
				登入
			</div>
		
			
			<div id="login-page-forget"><!--忘記密碼按鈕-->

			忘記密碼

			</div>	
			

			<div id="login-page-new"><!--註冊新帳號按鈕-->
				註冊新帳號
			</div>


		</div><!--登入頁面大區塊結束-->

	</div><!--登入頁面結束-->



	<!--取回密碼頁面-->

	<div id="pw-back-page"><!--取回密碼頁面大區塊開始-->

		<div id="pw-back-page-content"><!--內容大區塊開始-->

			<div class="cancel_button"><!--取消按鈕區塊-->
				<i class="fa fa-times" aria-hidden="true" id="pw-back-cancel"></i>
			</div>

			
			<div id="pw-back-page-logo"><!--Logo區塊-->
				<img src="images/logo_name.png" alt="Bitcheese飾品">
			</div>

			<div id="pw-back-page-tip"><!--提示訊息區塊-->
				請輸入您註冊所使用的信箱
			</div>
		
			<div id="pw-back-page-info"><!--信箱輸入區塊-->

				<form id="recieve_password_form" method="POST" action="recieve_password.php">
					<input class="input_1 required email" type="text" name="email" placeholder=" 輸入信箱 ">
					<input type="hidden" value="recieve_password">
				</form>

			</div>

			<div id="pw-back-page-new"><!--取回密碼區塊-->
				取回密碼
			</div>


		</div><!--內容大區塊結束-->
	</div><!--取回密碼頁面大區塊結束-->


	<!--帳號註冊頁面-->

	<div id="register-page"><!--帳號註冊頁面區塊開始-->

		<div id="register-page-content"><!--內容區塊開始-->

			<div class="cancel_button"><!--取消按鈕區塊-->
				<i class="fa fa-times" aria-hidden="true" id="register-cancel"></i>
			</div>

			<div id="register-page-logo"><!--Logo區塊-->
				<img src="images/logo_name.png" alt="Bitcheese飾品">
			</div>


			<!--註冊表單-->
			<form id="register_form" method="POST" action="sign_up.php">
				<div id="register-page-info">
					<input class="input_1 required email" type="text" name="email" placeholder=" E-mail ">
					<span class="register_error_tips"></span>
					<br>

					<input class="input_2 required" id="password" type="password" name="password" placeholder=" 密碼 ">
					<span class="register_error_tips"></span>
					<br>

					<input class="input_3 required" type="password" name="retype_password" placeholder=" 確認密碼">
					<span class="register_error_tips"></span>
					<br>

					<input class="input_4 required" type="text" name="name" placeholder=" 使用者名稱 ">
					<span class="register_error_tips"></span>
					<br>

					<input class="input_5 required mobileTaiwan" type="text" name="mobileNum" placeholder=" 手機 ">
					<span class="register_error_tips">範例:0912456789</span>

					<input type="hidden" name="sign_up" value="sign_up">
				</div>	


				<div id="register-page-new">
					送出
				</div>
			</form><!--註冊表單結束-->


		</div><!--內容區塊結束-->
	</div><!--帳號註冊頁面區塊結束-->
	


	<!--masonry-pixel-version-->
	<!--<script type="text/javascript">
		$(document).ready(function(){
			$('.grid').masonry({
			itemSelector: '.grid-item',
			columnWidth: 270,
			isFitWidth: true
			});
		});
	</script>-->
	
	

		<div id="container"><!--設定整體版型置中-->
		
		
		
		
		<header>	
			<div id="logo" class="col-1"><!--Logo放置區塊-->
				<img src="images/logo.png" alt="BitcheeseLogo" />
			</div>
		</header>
		
		
		
		<nav>
			<ul>
						
				<li><i class="fa fa-search" aria-hidden="true"></i>
					&nbsp;<input id="search-block" type="text" name="search" placeholder=" 搜尋商品..">
				</li>
				
				<!-- <li>
					<i class="fa fa-list-ul" aria-hidden="true"></i> 
					<a href="checkorder.html" target="_blank">訂單查詢</a>
				</li> -->
				
				<a href="checkbill.html">
				<li id="trigger-shopping-cart">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					&nbsp;購物車
				</li>
				</a>

				<li id="contact-us">
					<i class="fa fa-compress" aria-hidden="true"></i> 
					&nbsp;聯絡商家
				</li>
				
                <?php 
                	if(isset($_SESSION['user_id'])) {
                		$content = <<<EOT
                		<li id="membercenter">
							<i class="fa fa-bookmark" aria-hidden="true"></i>   
							&nbsp;會員中心
						</li>

						
						<li id="sign-out">
							<i class="fa fa-sign-out" aria-hidden="true"></i>   
							&nbsp;登出
						</li>
						

EOT;
                	}
                	else{
                		$content = <<<EOT
                		<li id="sign-in">
							<i class="fa fa-sign-in" aria-hidden="true"></i>  
							&nbsp;登入/申請帳號
						</li>

EOT;
                	}
                	echo($content);

                ?>

			</ul>

			<div class="clearfix"></div><!--ul只可與li搭配,所以clearfix要放外面-->
		</nav>
		
	<!--商品資料呈現頁面 -->	

	


	<!--商品呈現頁面大區塊-->
	<div id="product_info">

	<div id="product_info_nav">
		<div id="category-title" class="special-font">
			&nbsp;Category&nbsp;
		</div>
				<ul>
					<li class="special-bg">
					&nbsp;&nbsp;
					<span class="left-panel-eng">Series</span>
					&nbsp;
					<span>系列精選</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>脖子系列</span>
					&nbsp;
					<span class="left-panel-eng">Neck Series</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>手鍊系列</span>
					&nbsp;
					<span class="left-panel-eng">Bracelets</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>髮圈系列</span>
					&nbsp;
					<span class="left-panel-eng">Scrunchs</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>髮夾系列</span>
					&nbsp;
					<span class="left-panel-eng">Snap Clip</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>腳鍊系列</span>
					&nbsp;
					<span class="left-panel-eng">Strap Series</span>
					</li>
				</ul>

				<ul>
					<li class="special-bg">
					&nbsp;&nbsp;

					<span class="left-panel-eng">NewArrival</span>
					&nbsp;
					<span>新品到貨</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>幾何優雅-個性手鍊</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>幾何優雅-個性頸鍊</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>爵士藍調-髮箍</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>少女情懷-髮箍</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>精緻典雅-耳環</span>
					</li>
				</ul> 

				<ul>
					<li class="special-bg">
					&nbsp;&nbsp;
					<span class="left-panel-eng">Bonus</span>
					&nbsp;
					<span>活動特惠商品</span>
					</li>
					
				
					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>49起 &nbsp;單品特惠</span>
					</li>


					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>149起 耳環特惠</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>299起 髮箍特惠</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>買一送一系列</span>
					</li>

					<li class="special-item">
					&nbsp;&nbsp;&nbsp;
					<span>任選一樣 包裹免運</span>
					</li>
				</ul> 

	</div>

	
<?php

	//var_dump($_SESSION);
	
	if(isset($_SESSION["products"][$row['product_code']]['product_qty'])){//如果SESSION有商品，取出商品數量
		$product_qty = $_SESSION["products"][$row['product_code']]['product_qty'];
	}
	else{
		$product_qty = 1;
		}


$content = <<<EOT

	<div id="product_info_display">
		<div id="product_info_pic1"><img src="product_images/{$row['product_code']}/2.jpg"/></div>
		<div id="product_info_pic2"><img src="product_images/{$row['product_code']}/2.jpg"/></div>
		<div id="product_info_pic3"><img src="product_images/{$row['product_code']}/3.jpg"/></div>
		<div id="product_info_pic4"><img src="product_images/{$row['product_code']}/4.jpg"/></div>
		<div id="product_info_pic5"><img src="product_images/{$row['product_code']}/5.jpg"/></div>
		<div class="clearfix"></div>

	</div>

	
	

	
			<div id="product_info_aside">
			
				<div id="product_info_title">{$row['product_name']}</div>
				<div id="product_info_subtitle">{$row['product_desc']}</div>
				<div id="product_info_price">NT.{$row['price']}</div>



				<div id="product_info_amount">數量選取按鈕
					
						<input class="spinner" data-code="{$row['product_code']}" data-price="{$row['price']}" name="qty" value="{$product_qty}" readonly="readonly">

				</div>

				<div id="product_info_button">
					<span id="put_in_cart">放入購物車</span>
					<span>立即結帳</span>
				</div>

				<div id="product_info_context">{$row['copy_desc']}</div>

				</div>


				<div class="clearfix"></div>
			</div>

			<div class="product_pic_display"><img src="product_images/{$row['product_code']}/6.jpg" alt="6"></div>
			<div class="product_pic_display"><img src="product_images/{$row['product_code']}/7.jpg" alt="7"></div>
			<div class="product_pic_display"><img src="product_images/{$row['product_code']}/2.jpg" alt="2"></div>
			<div class="product_pic_display"><img src="product_images/{$row['product_code']}/3.jpg" alt="3"></div>
			<div class="product_pic_display"><img src="product_images/{$row['product_code']}/4.jpg" alt="4"></div>
			<div class="product_pic_display"><img src="product_images/{$row['product_code']}/5.jpg" alt="5"></div>
			<div class="product_pic_display"><img src="product_images/{$row['product_code']}/1.jpg" alt="1"></div>


EOT;

	echo($content);
?>
		
		

	
	

</div><!--container結束-->

	<footer>
	<br>
	Bitcheese Accessories
	<br>
	懇辭花圈花籃
	<br>
    </footer>


<script type="text/javascript">
		$(document).ready(function(){


			//購物車數量增減按鈕
			//購物車數量增減按鈕
		$( ".spinner" ).spinner({
			max: 99,
			min: 1,
			
		});

		//放入購物車，購物車彈出
		$("#put_in_cart").click(function(e){
			e.preventDefault();
			e.stopPropagation();
			var spinner = $(this).parent("#product_info_button").siblings("#product_info_amount").find(".spinner");
			var pcode = spinner.attr("data-code");
			var price = spinner.attr("data-price");
			var num = spinner.attr("aria-valuenow");
			console.log(pcode+", "+price+","+num);
			$.ajax({
				url: "cart_process.php",
				type: "POST",
				data: {product_code: pcode, num_of_item: num}
			}).done(function(data){
				console.log(data);
				if($("#left-shopping-cart").css("left") != "0px"){
    				$("#trigger-shopping-cart").trigger( "click" );
    			}
    			else{
					$("#purchase-details" ).load( "cart_process.php", {"load_cart":"1"});
				}
  			}).fail(function(jqXHR, textStatus, errorThrown) {
			    console.log(jqXHR);
			    console.log(textStatus);
        		console.log(errorThrown);
			  });
		});
			
	


		/*$("span.ui-spinner").on("click", function(e){
			var pcode = $(this).children(".spinner").attr("data-code");//商品編號
			var num = $(this).children(".spinner").attr("aria-valuenow");//商品目前數量
			var price = $(this).children(".spinner").attr("data-price");//商品單價
			
			var price_for_items = price * num; //每項商品小計
			//$(this).closest("div").siblings(".check-bill-price").text("NT." + price_for_items);//金額隨商品數量更動
			
			console.log(pcode + "," + num);
			$.ajax({//購物車增減數量存入SESSION
						url: "modify_item_num_of_sp.php",
						type: "POST",
						data: {product_code: pcode, item_num: num}
			}).done(function(data){
				//console.log(data);
			}).fail(function(jqXHR, textStatus, errorThrown) {
				    console.log(jqXHR);
				    console.log(textStatus);
	        		console.log(errorThrown);
			});
			
			//$("#total_price").text("NT." + getTotalprice());

		});*/
		
			//masonry-percentage-version
			var $grid = $('.grid').masonry({
							itemSelector: '.grid-item',
							columnWidth:'.grid-sizer',
							gutter: '.gutter-sizer',
							percentPosition: true
						});
			
			$grid.imagesLoaded().progress( function() {
			  $grid.masonry();
			});


			
			
			//登入/註冊頁面跳出
			$("#sign-in").click(function(){
				$("#login-page,.login-background-color").fadeIn();
			});
			
			//登入/註冊頁面取消
			$("#log-in-cancel").click(function(){
				$("#login-page,.login-background-color").fadeOut();
			});
			
			//main-menu滑出滑入
			var panel_width = (parseInt($("#left-shopping-cart").css("width")) + 10) + "px";//往視窗外的推移量
			$("#trigger-category").click(function(e){
				$("#left-shopping-cart").animate({left: "-" + panel_width});
				$("#left-panel").animate({left: "0"});
				e.stopPropagation();
				e.preventDefault();
			});
			//購物車滑入滑出
			$("#trigger-shopping-cart").click(function(e){
				$("#left-panel").animate({left: "-" + panel_width});
				$("#left-shopping-cart").animate({left: "0"});
				$("#purchase-details" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
				e.stopPropagation();
				e.preventDefault();
			});


		
			
			$(document).click(function(){//購物車消失
				$("#left-panel,#left-shopping-cart").animate({left: "-" + panel_width});
			});
			
			$('#left-panel,#left-shopping-cart').click(function(e){//使用left-panel,#left-shopping-cart，購物車不消失
				e.stopPropagation();
				e.preventDefault();
				//return false;
			});
			
			
		});
</script>



<script type="text/javascript">
	
	//移除購物車內的品項
	$("#purchase-details").on('click', 'a.remove-item', function(e) {
		e.preventDefault(); 
		var pcode = $(this).attr("data-code"); //get product code
		$(this).parents(".for_the_border").fadeOut(); //remove item element from box
		$.get( "cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
			//$("#cart-info").html(data.items); //update Item count in cart-info
			//$("#trigger-shopping-cart").trigger( "click" ); //trigger click on cart-box to update the items list
		});
	});

	//購物車增減數量存入SESSION
	$("#left-shopping-cart").on("click", "span.ui-spinner", function(e){
		var pcode = $(this).children(".spinner_for_sp_cart").attr("data-code");
		var num = $(this).children(".spinner_for_sp_cart").attr("aria-valuenow");
		//alert(pcode + "," + num);
		$.ajax({
					url: "modify_item_num_of_sp.php",
					type: "POST",
					data: {product_code: pcode, item_num: num}
		}).done(function(data){
			//alert(data);
		}).fail(function(jqXHR, textStatus, errorThrown) {
			    alert(jqXHR);
			    alert(textStatus);
        		alert(errorThrown);
		});

	});
	//普通註冊和登入
	$("#register-page-new").click(function(e){
		e.preventDefault();
		$("#register_form").submit();
	});

	$("#login-page-nav").click(function(e){
		e.preventDefault();
		$("#login_form").submit();
	});

	//取回密碼表單送出
	$('#pw-back-page-new').click(function(e){
		e.preventDefault();
		$("#recieve_password_form").submit();
	});

	
</script>


<script>
/***************FACEBOOK Function****************************/
function fbLogin(){

	 FB.login(function(response) {
	 	console.log(response);
		  if (response.status === 'connected') {// Logged into your app and Facebook.
		  	testAPI();
		  } 
		  else if (response.status === 'not_authorized') {// The person is logged into Facebook, but not your app.
		    
		  } 
		  else {// The person is not logged into Facebook, so we're not sure if 
		  		//they are logged into this app or not.
	  	  }
	  	  
	}, {scope: 'public_profile, email'});

	
}

function testAPI() {//抓取使用FB登入的使用者資料，FB-ID和FB註冊信箱

FB.api('/me','get', {fields: 'id, name, email, gender, locale, picture'}, function(response) {

  	  console.log( response.id + "\n" + response.name + "\n" + response.email + "\n" + response.gender + "\n" + response.locale);

      $.ajax({
      	url: "fb_data_to_DB.php",
      	type: "POST",
      	data: {id: response.id, email: response.email}
      }).done(function(data){
      		console.log(data);
      		location.reload();//執行完fb_data_to_DB.php，重載首頁
      }).fail(function(jqXHR, textStatus, errorThrown) {
		    console.log(jqXHR);
		    console.log(textStatus);
    		console.log(errorThrown);
      });


  });

}

function fbLogout(){
	FB.logout(function(response) {
  			console.log(response);
  			window.location.href = "log_out.php";//跳轉到log_out.php刪除session和cookie
  	});
}


	window.fbAsyncInit = function() {//FB初始化
		FB.init({
		  	appId      : '159127631265867',
		    cookie     : true,  // enable cookies to allow the server to access the session
		    xfbml      : true,  // parse social plugins on this page
		    version    : 'v2.8' // use graph api version 2.8
		});

		  
		FB.getLoginStatus(function(response) {//載入頁面時，檢查FB登入狀況，如果FB登入中，用cookie設定session
		  	console.log(response);
		});

	};

  
(function(d, s, id) {// Load the SDK asynchronously
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/zh_TW/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  //FB登入
  $("#log_in_with_facebook").click(function(e){
  		fbLogin();
  });

  //會員登出和FB登出
  $("#sign-out").click(function(e){
  	FB.getLoginStatus(function(response){
  		if(response.status === "connected"){
  			fbLogout();	
  		}
  		else{
  			window.location.href = "log_out.php";//跳轉到log_out.php刪除session和cookie
  		}
  	});		
  });

</script>


<script>
	//pw-back page跳出
	$(document).ready(function(){

		$("#login-page-forget").click(function(){

		$("#login-page").hide();
			$("#pw-back-page").fadeIn(1000);
				//登入註冊頁面取消
			$("#pw-back-cancel").click(function(){
				$("#pw-back-page,.login-background-color").fadeOut();
			});

			});
		});

	//register page跳出
	$(document).ready(function(){

		$("#login-page-new").click(function(){

		$("#login-page").hide();
			$("#register-page").fadeIn(1000);
				//登入註冊頁面取消
			$("#register-cancel").click(function(){
				$("#register-page,.login-background-color").fadeOut();
			});

			});
		});


</script>
<!--驗證表單的JS-->
<script type="text/javascript">
	$(document).ready(function(){
	
		$("#register_form").validate({


			errorContainer: ".register_error_tips",

			submitHandler: function(form) {
				form.submit();
			},
			errorPlacement: function(error, element) {


				element.next('.register_error_tips').html(error);

			},
			rules: {
				retype_password: {
					equalTo : '#password'
				}
			}

		});
		
		$("#login_form").validate({

			errorContainer: ".login_error_tips",

			submitHandler: function(form) {
				form.submit();
			},
			errorPlacement: function(error, element) {
				element.next(".login_error_tips").html(error);
			}
			
		});

		$("#recieve_password_form").validate({

			submitHandler: function(form) {
				form.submit();
			},
			errorPlacement: function(error, element) {

				$("#pw-back-page-tip").html(error);

			}
			
		});
	});
</script>
<script>
	jQuery.extend(jQuery.validator.messages, {

		required: "必填.",
		remote: "Please fix this field.",
		email: "錯誤的Email格式.",

		url: "請輸入正確的網址.",
		date: "請輸入正確的日期.",
		dateISO: "請輸入正確的 (ISO) 日期格式.",
		number: "本欄位請填入數字.",
		digits: "本欄位請填入數字.",
		creditcard: "請輸入正確的信用卡號.",

		equalTo: "請輸入相同密碼.",

		maxlength: $.validator.format("至多輸入 {0} 個字."),
		minlength: $.validator.format("至少輸入 {0} 個字."),
		rangelength: $.validator.format("請輸入 {0} 到 {1} 個字."),
		range: $.validator.format("請輸入 {0} 到 {1} 的數字."),
		max: $.validator.format("請輸入小於等於 {0} 的值."),
		min: $.validator.format("請輸入大於等於 {0} 的值.")
	});
</script>
<script>
	jQuery.validator.addMethod("mobileTaiwan", function( value, element ) {
		var str = value;
		var result = false;
		if(str.length > 0){
			//是否只有數字;
			var patt_mobile = /^[\d]{1,}$/;
			result = patt_mobile.test(str);

			if(result){
				//檢查前兩個字是否為 09
				//檢查前四個字是否為 8869
				var firstTwo = str.substr(0,2);
				var firstFour = str.substr(0,4);
				var afterFour = str.substr(4,str.length-1);
				if(firstFour == '8869'){
					$(element).val('09'+afterFour);
					if(afterFour.length == 8){
						result = true;
					} else {
						result = false;
					}
				} else if(firstTwo == '09'){
					if(str.length == 10){
						result = true;
					} else {
						result = false;
					}
				} else {
					result = false;
				}
			}
		} else {
			result = true;
		}
		return result;

		}, "錯誤的手機號碼格式");

</script>
	

</body>
</html>	