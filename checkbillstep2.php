<?php
include_once("start_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bitcheese飾品</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/Main.css" media="screen">
	<link rel="stylesheet" href="css/Main.css" media="(min-width:1200px)">
	<link rel="stylesheet" href="css/MobileDevice.css" media="(max-width:1199px)">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	
	<!--javascript-->
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://masonry.desandro.com/masonry.pkgd.js"></script>
	<script type="text/javascript" src="http://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body id="eliminate-other-css" >
	
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
	



	
	


	<div id="container" class="col-10"><!--設定整體版型置中-->
		
		
		
		
		<header>
			
			
			
			<div id="logo" class="col-1"><!--Logo放置區塊-->
				<img src="images/logo.png" alt="BitcheeseLogo" />
			</div>
			


			
			<!-- <div id="tag">首頁大圖上方標籤放置區塊
				<ul>
					<li class="tag-title">Payment</li>
				</ul>
			</div> -->
			
			
			
			<!--
			<hr class="horizon">水平線 -->
	
	
	
	
		</header>
		
		
		
		<nav>
			<ul>
			
				<li id="trigger-category" class="hoverpointer">
					<i class="fa fa-spinner" aria-hidden="true"></i>
					<a href="index.php">回首頁</a>
			    </li>
				
				
				
				<li class="hoverpointer">
					<i class="fa fa-th-large" aria-hidden="true"></i>
					商品分類
				</li>
				
				
				
				<li id="sign-in" class="hoverpointer">
					<i class="fa fa-bookmark" aria-hidden="true"></i>   
					登入/申請
				</li>
				
			</ul>
			<div class="clearfix"></div><!--ul只可與li搭配,所以clearfix要放外面-->
		</nav>
		
<div id="check-bill-container">
<?php
//var_dump($_SESSION);
$content = "";
if(isset($_SESSION['products'])){
	$total_price = 0;
	foreach($_SESSION["products"] as $product){
		$product_name = $product["product_name"]; 
		$product_price = $product["product_price"];
		$product_code = $product["product_code"];
		$product_qty = $product["product_qty"];
		$price_for_items = $product_price * $product_qty;
		$total_price +=  $price_for_items;

		$content .= <<<EOT
		<div class="item_block">
			<div class="check-bill-pic"><img src="product_images/{$product_code}/1.jpg"></div>
			<div class="check-bill-title">{$product_name}</div>
			<div class="check-bill-amount"><input class="spinner_for_checkbill_step_2" data-code="{$product_code}" 
			data-price="{$product_price}" name="qty" value="{$product_qty}"></div>
			<div class="check-bill-price">NT.{$price_for_items}</div>
			<div class="clearfix"></div>
		</div>

EOT;

	}
}
echo($content);

?>


<div class="check-bill-coupon">
	<div class="check-bill-coupon-title">&nbsp;</div>
	<div class="check-bill-coupon-serial">小計</div>
	<div class="check-bill-coupon-result" id="total_price">NT.<?php echo($total_price);?></div>
	<div class="clearfix"></div>
</div>

<div class="check-bill-coupon">
	<div class="check-bill-coupon-title">輸入優惠券序號</div>
	<div class="check-bill-coupon-serial">
		<input type="text" value="" name=""><span>X</span>
	</div>
	<div class="check-bill-coupon-result">結果顯示</div>
	<div class="clearfix"></div>
</div>	


<div class="check-bill-coupon">
	<div class="check-bill-coupon-title">寄送方式</div>
	<div class="check-bill-coupon-serial">顯示所選物流</div>
	<div class="check-bill-coupon-result">產生結果</div>
	<div class="clearfix"></div>
</div>	



<div class="check-bill-coupon">
	<div class="check-bill-coupon-title">付款方式</div>
	<div class="check-bill-coupon-serial">輸顯示所選金流</div>
	<div class="check-bill-coupon-result">產生結果</div>
	<div class="clearfix"></div>
</div>





<div id="check-bill-total">
	<div id="check-bill-total-title">總結金額</div>
	<div id="check-bill-total-result">金額</div>
	<div class="clearfix"></div>
</div>






<script>
$(document).ready(function(){

	function getTotalprice(){//計算總價
		var total_price = 0;//商品總價
		for(var i=0; i<$(".item_block").length; i++){
				total_price += parseInt($(".check-bill-price").eq(i).text().substring(3));
			}
		return total_price;		
	}

	//$("#total_price").text("NT." + getTotalprice());

	//購物車數量增減按鈕
	$( ".spinner_for_checkbill_step_2" ).spinner({
		max: 99,
		min: 1
	});


	
	$("span.ui-spinner").on("click", function(e){
		var pcode = $(this).children(".spinner_for_checkbill_step_2").attr("data-code");//商品編號
		var num = $(this).children(".spinner_for_checkbill_step_2").attr("aria-valuenow");//商品目前數量
		var price = $(this).children(".spinner_for_checkbill_step_2").attr("data-price");//商品單價
		
		var price_for_items = price * num; //每項商品小計
		$(this).closest("div").siblings(".check-bill-price").text("NT." + price_for_items);//金額隨商品數量更動
		
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
		
		$("#total_price").text("NT." + getTotalprice());

	});

});

</script>

</body>
</html>