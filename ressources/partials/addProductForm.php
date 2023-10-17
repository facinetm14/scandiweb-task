
	<div class="mb-3 row">
		<label for="sku" class="col-sm-1 col-form-label">SKU</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="sku" name="sku" placeholder="#sku" required="Please provide Sku">
		</div>
	</div>
	<div class="mb-3 row">
		<label for="name" class="col-sm-1 col-form-label">Name</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="name" name="name" placeholder="#name" required>
		</div>
	</div>
	<div class="mb-3 row">
		<label for="price" class="col-sm-1 col-form-label">Price</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="price" name="price" placeholder="#price" required>
		</div>
	</div>
	<div class="mb-3 row">
		<label for="productType" class="col-sm-2 col-form-label">Type Switcher</label>
		<div class="col-sm-3">
			<select type="text" class="form-select" id="productType" name="type" placeholder="" required>
				<option value="">Type Switcher</option>
				<option value="Dvd">DVD</option>
				<option value="Furniture">Furniture</option>
				<option value="Book">Book</option>
			</select>
		</div>
	</div>
	<!--DVD-->
	<div class="mb-3 row productSpec" id="Dvd" hidden>
		<label for="size" class="col-sm-1 col-form-label">Size(MB)</label>
		<div class="col-sm-4">
			<input type="text" class="form-control specInput" name="size" placeholder="#size">
		</div>
		<p id="product-desc">DVD</p>
	</div>

	<!--Book-->
	<div class="mb-3 row productSpec" id="Book" hidden>
		<label for="size" class="col-sm-2 col-form-label">Weight(KG)</label>
		<div class="col-sm-3">
			<input type="text" class="form-control" name="weight" placeholder="#weigh">
		</div>
		<p id="product-desc">Book</p>
	</div>

	<!--Furniture-->
	<div class="productSpec" id="Furniture" hidden>
		<div class="row mb-3">
			<label for="size" class="col-sm-2 col-form-label">Height(CM)</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="height" name="height" placeholder="#height">
			</div>
		</div>
		<div class="row mb-3">
			<label for="size" class="col-sm-2 col-form-label">Width(CM)</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="width" name="width" placeholder="#width">
			</div>
		</div>
		<div class="row">
			<label for="size" class="col-sm-2 col-form-label">Length(CM)</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="length" name="length" placeholder="#length">
			</div>
		</div>
		<p id="product-desc">Furniture</p>
	</div>
</form>