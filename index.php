<?php 
//引入標頭檔
include_once("config.inc.php");
include_once("utf8_header.php");
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
	
	
	<!--javascript-->
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://masonry.desandro.com/masonry.pkgd.js"></script>
	<script type="text/javascript" src="http://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
</head>


<body id="eliminate-other-css">
	

	
	<div id="left-panel"><!--左側鑲版-->
		<div id="category-title" class="special-font">Bitcheese</div>
			<hr class="horizon">
				<ul>
					<li>Hair</li>
					<li>withHead</li>
					<li>Neck</li>
					<li>bracelet</li>
					<li>Leg</li>
					<li>others</li>
				</ul>
	</div>

	
	
	
	<div id="left-shopping-cart"><!--左側鑲版-->
		<div id="shopping-cart-title" class="special-font">Bitcheese</div>
			<hr class="horizon">
				
			<div id="for_scroll">

					<div id="purchase-details">

						<div id="purchase-pic">
							<img src="checkbillpics/mini1.png" alt="" />
						</div>
						
						<div id="purchase-content">
						 
						 	<div id="purchase-content-price">
						 		$450
						 	</div>
						 
						 	<div id="pruchase-content-amount">
						 			數量<br>
						 				<select>					 
						 					<option value="1">1</option>
						  					<option value="2">2</option>
						  	 				<option value="3">3</option>
						   	 				<option value="4">4</option>
						 				</select>
						 	</div>

						</div>

						<div class="clearfix"></div>
						
						
					</div>
				
				
				</div>
				
				<div id="purchase-tips-details">
				</div>


				<div id="purchase-button">Check Out Bill</div>
	</div>
		
	

	
	<div class="login-background-color"></div><!--登入頁面背景顏色div-->
	
	
	
	<div id="login-page"><!--login-page-->

		<div id="login-page-content">

		 <div class="cancel_button">
			<i class="fa fa-times" aria-hidden="true" id="log-in-cancel"></i>
		</div>

			
			<div id="login-page-logo">
				<img src="images/logo_name.png" alt="Bitcheese飾品">
			</div>

		
			<div id="login-page-info">
	
				<button type="botton" id="log_in_with_facebook">
					<span>
						<i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
						使用Facebook登入
					</span>
				</button>

				<div id="status">
				</div>

				
					<form id="login_form" method="POST" action="log_in.php">
						<input class="input_1" type="text" name="email_login" placeholder=" 輸入信箱 ">
						<input class="input_2" type="password" name="password_login" placeholder=" 密碼 ">
						<input type="hidden" name="log_in" value="log_in">
					</form>
				

			</div>
				
				<div id="login-page-nav">
					登入
				</div>
		
			
		
			<div id="login-page-forget">
				忘記密碼
			</div>	
			

			<div id="login-page-new">
				註冊新帳號
			</div>


		</div>
	</div>

	<!-- 取回密碼 -->

	<div id="pw-back-page"><!--pw-back-->

		<div id="pw-back-page-content">

		 <div class="cancel_button">
			<i class="fa fa-times" aria-hidden="true" id="pw-back-cancel"></i>
		</div>

			
			<div id="pw-back-page-logo">
				<img src="images/logo_name.png" alt="Bitcheese飾品">
			</div>

			<div id="pw-back-page-tip">
				請輸入您註冊所使用的信箱
			</div>
		
			<div id="pw-back-page-info">
				<input class="input_1" type="text" name="email" placeholder=" 輸入信箱 ">
			</div>

			<div id="pw-back-page-new">
				取回密碼
			</div>


		</div>
	</div>

	<!-- 帳號註冊 -->

	<div id="register-page"><!--register-->

		<div id="register-page-content">

		 <div class="cancel_button">
			<i class="fa fa-times" aria-hidden="true" id="register-cancel"></i>
		</div>

			
			<div id="register-page-logo">
				<img src="images/logo_name.png" alt="Bitcheese飾品">
			</div>

		<form id="register_form" method="POST" action="sign_up.php">
			<div id="register-page-info">
				<input class="input_1" type="text" name="email" placeholder=" E-mail ">
				<input class="input_2" type="password" name="password" placeholder=" 密碼 ">
				<input class="input_3" type="password" name="retype_password" placeholder=" 確認密碼">
				<input class="input_4" type="text" name="name" placeholder=" 使用者名稱 ">
				<input class="input_5" type="text" name="mobileNum" placeholder=" 手機 ">
				<input class="input_6" type="text" name="phone" placeholder=" 市話(選填) ">
				<input type="hidden" name="sign_up" value="sign_up">
			</div>	

			<div id="register-page-new">
				送出
			</div>
		</form>


		</div>
	</div>
	


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
			


			
			<div id="tag"><!--首頁大圖上方標籤放置區塊-->
				<ul>
					<li class="tag-title">New Arrival</li>
				</ul>
			</div>
			
			
			
			
			<hr class="horizon"><!--水平線-->
	
	
	
	
		</header>
		
		
		
		<nav>
			<ul>
				<li id="trigger-category">
					<i class="fa fa-th-large" aria-hidden="true"></i>
					&nbsp;商品分類
			    </li>
				
				
				
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
                	if(isset($_COOKIE['user_id'])) {
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
		
		
	
		<div id="display"><!--廣告橫幅-->
			<div class="slider-container"><!--slider function-->
				 <div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="4000">
				  <!--data-interval 改時間-->
					

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
					  <div class="item active">
						<img src="images/111.jpg" alt="adpics">
					  </div>

					  <div class="item">
						<img src="images/222.jpg" alt="Chania">
					  </div>
					
					  <div class="item">
						<img src="images/333.jpg" alt="flower">
					  </div>

					</div>

					
					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
				  </div>
				</div>
		</div>


		
		
	

		<!--masonry-div-->
		<div id="masonry" class="grid">
		
			<div class="grid-sizer"></div>
			<div class="gutter-sizer"></div> 
			
				<?php
					$qry = "Select * FROM bitcheese_products LIMIT 15";//第一次載入15個商品
					$result = $mysqli_conn->query($qry);
					while($row = $result->fetch(PDO::FETCH_ASSOC)){
						$content = <<<EOT
							<div class="grid-item">

								<a href="productinfo.html">
									<div class="merchandise-show"><!--商品呈現大div-->
										
										
									<img class="pic-show-pic" src="product_images/{$row["product_code"]}/1.jpg" alt="">	
										
										
										<div class="text-show">
										
											<h1 class="merchandise-title">{$row["product_name"]}
											</h1><!--商品文案標題-->	
									
									
											<h2 class="merchandise-content">{$row["product_desc"]}
											</h2><!--商品文案內容-->
									
										
											<h1 class="merchandise-price">NT.{$row["price"]}
											</h1><!--商品文案售價-->
								
										</div>
									<div class="info-show"></div><!--read more按鈕-->

								</a>
				
					
								<div class="nav-show"><!--商品呈現導覽列-->

									<a href="checkbill.html">
										<div class="buy-instantly"><!--導覽列左方按鈕-->
											結帳
										</div>
									</a>
	     
									
									<div class="shopping-cart"><!--導覽列右方按鈕-->
								
								
										<div class="shopping-cart-button1">
											<i class="fa fa-share" aria-hidden="true"></i>
										</div>
								
										<div class="shopping-cart-button2 buy_button"><!--購物車按鈕-->

											<form class="shopping_cart_form"><!--購物車表單-->
												<input name="product_code" type="hidden" value="{$row['product_code']}">
												<!--夾帶product_code的數值-->
												<i class="fa fa-shopping-cart"  aria-hidden="true"></i>
											</form>

										</div>
								
										<div class="clearfix"></div>
								
									</div>
		
								</div>
					
							</div>
					
						</div>
			

EOT;
echo($content);

					}

				?>

				
			
		</div><!--masonry div結束-->
				
</div> <!--container結束-->

<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>


<script type="text/javascript">
		$(document).ready(function(){


			//購物車數量增減按鈕
			$( ".spinner_for_sp_cart" ).spinner();
		
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


			/***************Infinte Scroll*******************************/
			var start = 15;//下限
			var limit = 30;//上限
			var interval = 15;//一次取的商品數量
			$(window).scroll(function() {
				if($(window).scrollTop() == $(document).height() - $(window).height()){
					//$('#loader').show();
					$.ajax({
							url: "infinite_scroll.php", 
							type: "POST",
							data: {start: start,
								   limit: limit
								  }
					}).done(function(data){
						console.log(data);
						start = start + interval;
						limit = limit + interval;
						console.log("start: " + start + ",limit: " + limit);
						var $content = $(data);
						$grid.append( $content ).masonry( 'appended', $content);
					}).fail(function(jqXHR, textStatus, errorThrown){
						console.log(jqXHR);
					    console.log(textStatus);
			    		console.log(errorThrown);
					});
					
				}
			});
			
			//grid-item上背景色
			for(var i=0; i<$(".grid-item").length; i++){
				var color_num = 3;//顏色種類
				var index = i%color_num;
				$(".shopping-cart").eq(i).addClass("grid-item-color-"+index);
			}
			
			//登入/註冊頁面跳出
			$("#sign-in").click(function(){
				$("#login-page,.login-background-color").fadeIn();
			});
			
			//登入/註冊頁面取消
			$("#log-in-cancel").click(function(){
				$("#login-page,.login-background-color").fadeOut();
			});
			
			//main-menu滑出滑入
			var panel_width = (parseInt($("#left-panel").css("width")) + 10) + "px";//往視窗外的推移量
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
			$('.buy_button').click(function(e){//使用buy_button將商品加入購物車，購物車不消失
				$(this).children(".shopping_cart_form").submit();
				e.stopPropagation();
			});
			
		});
</script>



<script type="text/javascript">
	$(".shopping_cart_form").submit(function(e){//購物車表單送出
			
			var form_data = $(this).serialize();
			//alert(form_data);
			$.ajax({ 
				url: "cart_process.php",
				type: "POST",
				//dataType:"json", //expect json value from server
				data: form_data
			}).done(function(data) {
    			//alert(data);
    			if($("#left-shopping-cart").css("left") != "0px"){
    				$("#trigger-shopping-cart").trigger( "click" );
    			}
    			else{
					$("#purchase-details" ).load( "cart_process.php", {"load_cart":"1"});
				}
  			}).fail(function(jqXHR, textStatus, errorThrown) {
			    alert(jqXHR);
			    alert(textStatus);
        		alert(errorThrown);
			  });
  			e.preventDefault();
		});

	//移除購物車內的品項
	$("#purchase-details").on('click', 'a.remove-item', function(e) {
		e.preventDefault(); 
		var pcode = $(this).attr("data-code"); //get product code
		$(this).parent().fadeOut(); //remove item element from box
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

	  
	  FB.getLoginStatus(function(response) {//載入頁面時，檢查FB登入狀況
	  										//如果FB登入中，用cookie設定session
	    console.log(response);
	    if (response.status === 'connected') {
	    	$.ajax({
   			url: "start_session.php",
   			type: "POST",
   		}).done(function(data) {
   			//console.log(data);
   		}).fail(function(jqXHR, textStatus, errorThrown) {
		    console.log(jqXHR);
		    console.log(textStatus);
    		console.log(errorThrown);
	    });
	    }
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




</body>
</html>	