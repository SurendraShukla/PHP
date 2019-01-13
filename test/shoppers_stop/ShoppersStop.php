<?php

// $discountSlabs = array(
//                         0=>array('min'=>1, 'max'=>5000, 'discountPercentage'=>0),
//                         1=>array('min'=>5001, 'max'=>10000, 'discountPercentage'=>10),
//                         2=>array('min'=>10001, 'max'=>99999, 'discountPercentage'=>20)
//                     );
$discountSlabs = array(
                        0=>array('min'=>1, 'max'=>4000, 'discountPercentage'=>10),
                        1=>array('min'=>4001, 'max'=>8000, 'discountPercentage'=>15),
                        2=>array('min'=>8001, 'max'=>12000, 'discountPercentage'=>20),
                        3=>array('min'=>12001, 'max'=>99999, 'discountPercentage'=>30)
                    );

$purchaseAmount = 20000;
$totalDiscount = 0;
$breakLoop = false;

for( $slabIndex=0; $slabIndex<count($discountSlabs); $slabIndex++ ) {
	$slabMin = $discountSlabs[$slabIndex]['min']-1;
	$slabMax = $discountSlabs[$slabIndex]['max'];
	$slabDiscountPercentage = $discountSlabs[$slabIndex]['discountPercentage'];

	if ($purchaseAmount <= $slabMax) {
		$slabAmount = $purchaseAmount-$slabMin;
		$breakLoop = true;
	}else{
		$slabAmount = $slabMax-$slabMin;
	}

	$totalDiscount+= $slabAmount*($slabDiscountPercentage/100);
	// echo "\n slabAmount=[".$slabAmount.'] discount=['.$discount.'] total Discount=['.$totalDiscount.'] ';
	if ( $breakLoop ) {
		break;
	}
}

echo 'Bill Amount=['.($purchaseAmount-$totalDiscount).']';
?>

