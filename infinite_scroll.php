<?php
include("config.inc.php");

$start = filter_var($_POST['start'], FILTER_SANITIZE_NUMBER_INT);
$limit = filter_var($_POST['limit'], FILTER_SANITIZE_NUMBER_INT);
$qry = "SELECT * FROM bitcheese_products LIMIT 0, 12";
$stmt = $mysqli_conn -> query($qry);
//echo($qry);
$content_1="";
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
$content_1 .= <<<EOT
		<div class="grid-item">
				<div class="merchandise-show"><!--商品呈現大div-->
				
					<img class="pic-show-pic"  src="product_images/{$row["product_code"]}/1.jpg"	alt="accessories" />  
					
					<!--商品文案呈現div-->
					<div class="text-show">
						
						<!--商品文案標題-->	
						<h1 class="merchandise-title">
							{$row["product_name"]}<br>
						</h1>
						
						<!--商品文案內容-->
						<h2 class="merchandise-content">
						  {$row["product_desc"]}
						</h2>
						
						<!--商品文案售價-->
						<h1 class="merchandise-price">
						<span class="line-through"></span><br/>
							NT.{$row['price']}
						</h1>
					
					</div>
					
					
					<div class="info-show"><!--read more按鈕-->
						<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
					</div>
				
					
					<div class="nav-show"><!--商品呈現導覽列-->
						
						
						<div class="buy-instantly"><!--導覽列左方按鈕-->
							<span class="buy-instantly-button">Buy it !</span>
						</div>
     
						<div class="shopping-cart"><!--導覽列右方按鈕-->
							
							
								<div class="shopping-cart-button1">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
							
								<div class="shopping-cart-button2">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								</div>
							
								<div class="clearfix"></div>
							
						</div>
						
						
					</div>
					
				</div>
		</div>
			
EOT;
}

die($content_1);

	$content = <<<EOT
	<div class="grid-item grid-item--height3">
				<div class="merchandise-show"><!--商品呈現大div-->
				
					<img class="pic-show-pic"  src="1.jpg"	alt="accessories" />  
					
					<!--商品文案呈現div-->
					<div class="text-show">
						
						<!--商品文案標題-->	
						<h1 class="merchandise-title">
							名偵探摳男的小星星<br>
						</h1>
						
						<!--商品文案內容-->
						<h2 class="merchandise-content">
						  即刻雋永 立即擁有
						</h2>
						
						<!--商品文案售價-->
						<h1 class="merchandise-price">
						<span class="line-through"></span><br/>
							NT.149
						</h1>
					
					</div>
					
					
					<div class="info-show"><!--read more按鈕-->
						<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
					</div>
				
					
					<div class="nav-show"><!--商品呈現導覽列-->
						
						
						<div class="buy-instantly"><!--導覽列左方按鈕-->
							<span class="buy-instantly-button">Buy it !</span>
						</div>
     
						<div class="shopping-cart"><!--導覽列右方按鈕-->
							
							
								<div class="shopping-cart-button1">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
							
								<div class="shopping-cart-button2">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								</div>
							
								<div class="clearfix"></div>
							
						</div>
						
						
					</div>
					
				</div>
		</div>
			
			
			
			<div class="grid-item grid-item--height3">
							
							<div class="merchandise-show"><!--商品呈現大div-->
				
					<img class="pic-show-pic"  src="3.jpg"	alt="accessories" />  
					
					<!--商品文案呈現div-->
					<div class="text-show">
						
						<!--商品文案標題-->	
						<h1 class="merchandise-title">
							名偵探摳男的小星星<br>
						</h1>
						
						<!--商品文案內容-->
						<h2 class="merchandise-content">
						  即刻雋永 立即擁有
						</h2>
						
						<!--商品文案售價-->
						<h1 class="merchandise-price">
						<span class="line-through"></span><br/>
							NT.149
						</h1>
					
					</div>
					
					
					<div class="info-show"><!--read more按鈕-->
						<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
					</div>
				
					
					<div class="nav-show"><!--商品呈現導覽列-->
						
						
						<div class="buy-instantly"><!--導覽列左方按鈕-->
							<span class="buy-instantly-button">Buy it !</span>
						</div>
     
						<div class="shopping-cart"><!--導覽列右方按鈕-->
							
							
								<div class="shopping-cart-button1">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
							
								<div class="shopping-cart-button2">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								</div>
							
								<div class="clearfix"></div>
							
						</div>
						
						
					</div>
					
				</div>
			</div>
			
			<div class="grid-item grid-item--height3">
							
							<div class="merchandise-show"><!--商品呈現大div-->
				
					<img class="pic-show-pic"  src="2.jpg"	alt="accessories" />  
					
					<!--商品文案呈現div-->
					<div class="text-show">
						
						<!--商品文案標題-->	
						<h1 class="merchandise-title">
							名偵探摳男的小星星<br>
						</h1>
						
						<!--商品文案內容-->
						<h2 class="merchandise-content">
						  即刻雋永 立即擁有
						</h2>
						
						<!--商品文案售價-->
						<h1 class="merchandise-price">
						<span class="line-through"></span><br/>
							NT.149
						</h1>
					
					</div>
					
					
					<div class="info-show"><!--read more按鈕-->
						<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
					</div>
				
					
					<div class="nav-show"><!--商品呈現導覽列-->
						
						
						<div class="buy-instantly"><!--導覽列左方按鈕-->
							<span class="buy-instantly-button">Buy it !</span>
						</div>
     
						<div class="shopping-cart"><!--導覽列右方按鈕-->
							
							
								<div class="shopping-cart-button1">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
							
								<div class="shopping-cart-button2">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								</div>
							
								<div class="clearfix"></div>
							
						</div>
						
						
					</div>
					
				</div>
			</div>
			
			
			<div class="grid-item grid-item--height3">
							
							<div class="merchandise-show"><!--商品呈現大div-->
				
					<img class="pic-show-pic"  src="1.jpg"	alt="accessories" />  
					
					<!--商品文案呈現div-->
					<div class="text-show">
						
						<!--商品文案標題-->	
						<h1 class="merchandise-title">
							名偵探摳男的小星星<br>
						</h1>
						
						<!--商品文案內容-->
						<h2 class="merchandise-content">
						  即刻雋永 立即擁有
						</h2>
						
						<!--商品文案售價-->
						<h1 class="merchandise-price">
						<span class="line-through"></span><br/>
							NT.149
						</h1>
					
					</div>
					
					
					<div class="info-show"><!--read more按鈕-->
						<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
					</div>
				
					
					<div class="nav-show"><!--商品呈現導覽列-->
						
						
						<div class="buy-instantly"><!--導覽列左方按鈕-->
							<span class="buy-instantly-button">Buy it !</span>
						</div>
     
						<div class="shopping-cart"><!--導覽列右方按鈕-->
							
							
								<div class="shopping-cart-button1">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
							
								<div class="shopping-cart-button2">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								</div>
							
								<div class="clearfix" />
							
						</div>
						
						
					</div>
					
				</div>
			</div>
EOT;

/*for($i=0; $i<5; $i++)
echo($content);*/
?>			
