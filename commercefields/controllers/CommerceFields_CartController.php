<?php
namespace Craft;

/**
 * Commerce Fields Controller
 *
 * @author     Native Savannah, LLC <dev@nativesavannah.com>
 * @copyright  Copyright (c) 2016, Native Savannah, LLC
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @see        https://github.com/nativesavannahllc/craftcms-commercefields
 * @package    commercefields
 * @version    1.0
 */
class CommerceFields_CartController extends Commerce_CartController
{
    /**
     * This function is called by several actions if the request is via AJAX. By 
     * extending it we can add in the custom fields without having to duplicate 
     * all the actions.
     * 
     * @param Commerce_OrderModel $cart 
     * @return array
     */
    protected function cartArray(Commerce_OrderModel $cart)
    {
    	// call the parent class, which will do most of the work for us
    	$theData = parent::cartArray($cart);

    	// Now get the custom fields and add them in
    	foreach (craft()->fields->getFieldsByElementType('Commerce_Cart') as $field)
    	{
    		$handle = $field->handle;
    		$theData[$handle] = $cart->$handle;
    	}

    	return $theData;
    }


}