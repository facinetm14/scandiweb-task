<script>
	const typeSwitcher = document.querySelector('#productType');
	const productSpec = document.querySelectorAll('.productSpec');
	typeSwitcher.addEventListener('change', function(e){
		e.preventDefault();
		// hide all products and set inputs to non-required
		productSpec.forEach(function(elt) {
			elt.setAttribute("hidden", "");
			const inputs = elt.querySelectorAll("input");
			inputs.forEach(function(input) {
				input.removeAttribute("required");
			});
		});

		// display and set to required
		const productType = e.target.value;
		const currentProduct = document.getElementById(productType);
		currentProduct.removeAttribute("hidden");
		const inputs = currentProduct.querySelectorAll("input");
		inputs.forEach(function(elt) {
			elt.setAttribute("required", "");
		});
	});
</script>