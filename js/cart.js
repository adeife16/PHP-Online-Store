	$(document).ready(function(){
	$(".Add").click(function(x){
		x.preventDefault();
		
		var $form = $(this).closest("#cart-form");
		var random = $form.find(".random").val();
		var name = $form.find(".name").val();
		var disc = $form.find(".disc").val();
		var qty = $form.find(".qty").val();
		var user = $form.find(".user").val();
		// var dataString = $("#cart-form").serialize();
		
			$.ajax({
				type:'POST',
				url: 'cart.inc.php',
				data: {
					random: random,
					name: name,
					price: disc,
					qty: qty,
					user: user
				},
				cache: false,
				success: function (result) {
					$("#msg").html('Cart Updated Successfully!');
					$("#cart-icon").html(result);
				}
			});
		
		return false;
	});
});