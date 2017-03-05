<?php

	include_once('utf8_header.php');
	include_once('config.inc.php');
	include_once('start_session.php');
	
	
	$name = filter_var($_POST['search_name'], FILTER_SANITIZE_STRING);
	$qry = "SELECT * FROM bitcheese_products WHERE product_name LIKE %:name%";
	$stmt = $mysqli_conn -> prepare($qry);
	$stmt -> bindParam(':name', $name, PDO::PARAM_STR);
	$stmt -> execute();
	$products_list = '<div class="grid-sizer"></div>
					  <div class="gutter-sizer"></div> ';

	while($row = $stmt->fetch(PDO::FETCH_ASSOC){
		 $products_list .= <<<EOT
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
	}

	die($products_list);
?>

<script>
$.ajax({
	url: "search_function.php",
	type: "POST",
	data: {search_name: scearch_name},	
	}).done(function(data){
		$(".grid").html(data);
		$grid.imagesLoaded().progress( function() {
			  $grid.masonry();
		});
	}).fail(function(jqXHR, textStatus, errorThrown){
		console.log(jqXHR);
	    console.log(textStatus);
		console.log(errorThrown);
	});
 </script>