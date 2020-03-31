<?php
	/*
		loop through array of $_SESSION['cart'][services_isbn] => number
		get isbn => take from database => take services price
		price * number (quantity)
		return sum of price
	*/
	function total_price($cart){
		$price = 0.0;
		if(is_array($cart)){
		  	foreach($cart as $isbn => $qty){
		  		$servicesprice = getservicesprice($isbn);
		  		if($servicesprice){
		  			$price += $servicesprice * $qty;
		  		}
		  	}
		}
		return $price;
	}

	/*
		loop through array of $_SESSION['cart'][services_isbn] => number
		$_SESSION['cart'] is associative array which is [services_isbn] => number of servicess for each services_isbn
		calculate sum of servicess 
	*/
	function total_items($cart){
		$items = 0;
		if(is_array($cart)){
			foreach($cart as $isbn => $qty){
				$items += $qty;
			}
		}
		return $items;
	}
?>