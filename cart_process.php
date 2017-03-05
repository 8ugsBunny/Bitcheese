<?php
///////////購物車///////////
//傳入參數: product_code


session_start(); //start session
include_once('utf8_header.php');
include_once("config.inc.php"); //include config file
setlocale(LC_MONETARY,"zh"); // US national format (see : http://php.net/money_format)

############# add products to session #########################
if(isset($_POST["product_code"]))
{
	
	foreach($_POST as $key => $value){
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING); //create a new product array 
	}
	//獲得$new_product['product_code']
	//var_dump($_POST);
	
	//抓取符合product_code的商品
	$statement = $mysqli_conn->prepare("SELECT * FROM bitcheese_products WHERE product_code=:product_code LIMIT 1");
	$statement->bindParam(':product_code', $new_product['product_code'], PDO::PARAM_STR);
	$statement->execute();
	

	while($row = $statement->fetch(PDO::FETCH_ASSOC)){ 

		$new_product["product_name"] = $row["product_name"]; 
		$new_product["product_price"] = $row["price"]; 

		/*if(isset($_SESSION["products"])){  //if session var already exist
			if(isset($_SESSION["products"][$new_product['product_code']])) //check item exist in products array
			{
				//unset($_SESSION["products"][$new_product['product_code']]); //unset old item
			}			
		}*/

		//code,name,price,qty放入$_SESSION["products"][$new_product['product_code']]
		$_SESSION["products"][$new_product['product_code']]["product_code"] = $new_product["product_code"];
		$_SESSION["products"][$new_product['product_code']]["product_name"] = $new_product["product_name"];
		$_SESSION["products"][$new_product['product_code']]["product_price"] = $new_product["product_price"];	
		
		if(!isset($_SESSION["products"][$new_product['product_code']]['product_qty'])){
			$_SESSION["products"][$new_product['product_code']]['product_qty'] = 1;
		}
		else{
			$_SESSION["products"][$new_product['product_code']]['product_qty'] = $_SESSION["products"][$new_product['product_code']]['product_qty'] +1;
		}
		//var_dump($_SESSION["products"][$new_product['product_code']]);
	}
	
 	$total_items = count($_SESSION["products"]); //count total items
	die(json_encode(array('items'=>$total_items))); //output json 

}



################## list products in cart ###################
if(isset($_POST["load_cart"]) && $_POST["load_cart"]==1)
{

	if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){ //if we have session variable

		$total = 0;
		foreach($_SESSION["products"] as $product){ //loop though items and prepare html content
			
			//set variables to use them in HTML content below
			$product_name = $product["product_name"]; 
			$product_price = $product["product_price"];
			$product_code = $product["product_code"];
			$product_qty = $product["product_qty"];
			//$product_color = $product["product_color"];
			//$product_size = $product["product_size"];
			
			$cart_content .=  ' <div class="for_the_border"> 
								
								    <div class="purchase-pic">
										<img src="product_images/'.$product_code.'/1.jpg"/>
									</div>

									<div class="purchase-content">
								 
								 		<div class="purchase-content-price">單價 NT.'.$product_price.'</div>
								 
									 	<div class="pruchase-content-amount">
									 		<input class="spinner_for_sp_cart" data-code="'.$product_code.'" name="qty" value="'.$product_qty.'" readonly="readonly">
									 	</div>

									 	<a href="#" class="remove-item" data-code="'.$product_code.'">&times;<span>移除商品<span></a>


									</div>

									

									<div class="clearfix"></div>

									
								</div>';
			
			$subtotal = $product_price * $product_qty;
			$total = $total + $subtotal;
		}

		//$cart_content .= '<div>Total : '."$currency ".$total.'</div>';
		$cart_content .= '<script>
							//購物車數量增減按鈕
							$( ".spinner_for_sp_cart" ).spinner({
								max: 99,
								min: 1
							});
						</script>';
		
		die($cart_content); //exit and output content
	}else{
		die("<div id='empty_tip'>購物車內無商品</div>"); //we have empty cart
	}
}

################# remove item from shopping cart ################
if(isset($_GET["remove_code"]) && isset($_SESSION["products"]))
{
	$product_code   = filter_var($_GET["remove_code"], FILTER_SANITIZE_STRING); //get the product code to remove

	if(isset($_SESSION["products"][$product_code]))
	{
		unset($_SESSION["products"][$product_code]);
	}
	
 	$total_items = count($_SESSION["products"]);
	die(json_encode(array('items'=>$total_items)));
}

?>
