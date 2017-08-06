<?php
namespace src\coding_dojo;
		
Class ProductPurchase{

	public function isValidPurchase($purchaseList) {

        if($purchaseList['Maintenance'] == 0) return false;
        return (array_sum($purchaseList) < 2000) ? false : true;
	}
	
}