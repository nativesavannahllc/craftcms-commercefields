# Commerce Fields

Craft Commerce plugin that returns custom fields in Ajax requests to the Cart Controller.

This plugin simply subclasses `Commerce_CartController` and simply extends the `cartArray` function.  This is the function called by several actions if the request is via Ajax. By extending it we can add in the custom fields without having to duplicate all the actions.

## Installation

1. Move the `commercefields` directory into your project's `craft/plugins` directory.
2. Navigate to `Settings > Plugins` page in your Craft admin area and install **Commerce Fields**.
3. There is no step 3.

## Usage

When making an Ajax request involving the cart, simply point to the `CommerceFields_CartController`.

So, for example, say you have a form that looks like this:

~~~~
<form method="POST" id="commerceForm">
	<input type="hidden" name="action" value="commerce/cart/updateCart">
	<input type="hidden" name="redirect" value="cart/">
	...
	<input type="submit" value="Update">
</form>
~~~~

When this form is submitted it will hit the stock `Commerce_CartController`. To submit this via Ajax to the `CommerceFields_CartController`:

~~~~
<script type="text/javascript">
	$('#commerceForm').submit(function(e)
	{
		$.post(
			'{{ actionUrl('commerceFields/cart/updateCart') }}', 
			registrantsForm.serializeArray(), 
			function(response) {
				// response.cart contains the cart JSON object
				console.log(response.cart);
			}
		);
		// stop form from submitting the entire page
		return false;
	});
</script>
~~~~

Notice that we use the `actionUrl` function to output the proper path to the controller.

You can use any `action*` method found in `Commerce_CartController`. 