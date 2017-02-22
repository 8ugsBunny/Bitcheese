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

	<link rel="stylesheet" href="css/Tablet.css" 
	media="(min-width:768px) and (max-width:1024px)">  

	<link rel="stylesheet" href="css/MobileDevice.css" media="(max-width:767px)">
	
	
	<!--javascript-->
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://masonry.desandro.com/masonry.pkgd.js"></script>
	<script type="text/javascript" src="http://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
</head>


<body id="eliminate-other-css">
	

	

	<div id="left-panel" class="fuck mom mom"><!--左側鑲版--><!--test-->

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
	
		<div id="side-tag" class="hoverpointer">
			<br>
				<i class="fa fa-arrow-right" aria-hidden="true"></i>
			<br>
			<br>
		</div>
	
	</div>
	<div></div>
<div></div>
	<div></div><div></div>
	<div></div>
	
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
				
			<div id="side-tag" class="hoverpointer">
				<br>
					<i class="fa fa-arrow-right" aria-hidden="true"></i>
				<br>
				<br>
			</div>
				
	
	</div>
		
	

	
	<div class="login-background-color"></div><!--登入頁面背景顏色div-->
	
	
	
	<div id="login-page"><!--login-page-->
		<div id="login-page-content">
			<i class="fa fa-times" aria-hidden="true" id="log-in-cancel"></i>
				<div class="clearfix"></div>
			
			<div id="login-page-logo">
				<span class="tips">Insight of taste</span>
			</div>
		
			<div id="login-page-info">
				<input type="text" name="email" placeholder=" 帳號信箱">
				<input type="text" name="password" placeholder=" 密碼">
			</div>
			
			<div id="login-page-nav">
				<span class="forget-password">Forget Password</span>
				<br>
	            <span class="login-by-facebook">Login with Facebook</span>
			</div>
		
			<div id="login-tips">
				<!--<span class="tips">
				Insight of taste <br>
				 	小提醒!免帳號也能輕鬆購買Bitcheese所有商品!<br>
					申請帳號可立即享有Bitcheese所有活動優惠<br>
					要不要申請你自己選<br>
					反正帳號我是要定了 -->
					</span>
			</div>	
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
					<li class="tag-title">NewArrival</li>
				</ul>
			</div>
			
			
			
			
			<hr class="horizon"><!--水平線-->
	
	
	
	
		</header>
		
		
		
		<nav>
			<ul>
				<li id="trigger-category" class="hoverpointer">
					<i class="fa fa-th-large" aria-hidden="true"></i>
					商品分類
			    </li>
				
				
				
				<li><i class="fa fa-search" aria-hidden="true"></i>
					<input id="search-block" class="hoverpointer" type="text" name="search" placeholder=" 搜尋商品..">
				</li>
				
				<li class="hoverpointer">
					<i class="fa fa-list-ul" aria-hidden="true"></i> 
					<a href="checkorder.html" target="_blank">訂單查詢</a>
				</li>
				
				
				<li id="trigger-shopping-cart" class="hoverpointer">
					<a href="checkbill.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i>購物車</a>
				</li>
				
				
				<li id="sign-in" class="hoverpointer">
					<i class="fa fa-bookmark" aria-hidden="true"></i>   
					登入/申請
				</li>
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
						<img src="images/111.jpg" alt="Chania">
					  </div>
					
					  <div class="item">
						<img src="images/111.jpg" alt="flower">
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

									<div class="buy-instantly"><!--導覽列左方按鈕-->
										<span class="buy-instantly-button">
											<a href="checkbill.html">Buy it !</a>
										</span>
									</div>
	     
									
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
		
	
</script>




</body>
</html>	