	/*For total*/
	$(document).ready(function() {
		$(".checkout").on("input", ".quantity", function() {
		var price = +$(".price").data("price");
		var quantity = +$(this).val();
		$("#total").text(price * quantity);
		var total = price * quantity;
		document.getElementById('result').value = total;
		})
	
		var $buttonPlus = $('.increase-btn');
		var $buttonMin = $('.decrease-btn');
		var $quantity = $('.quantity');
		
		/*For plus and minus buttons*/
		$buttonPlus.click(function() {
		$quantity.val(parseInt($quantity.val()) + 1).trigger('input');
		});
		
		$buttonMin.click(function() {
		$quantity.val(Math.max(parseInt($quantity.val()) - 1, 0)).trigger('input');
		});
	})