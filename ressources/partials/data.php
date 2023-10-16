<div class="row mt-5 mb-5">
	<?php
		/** process data here 
		 * send GET request to backend
		 * save data in an array
		*/
		use App\Providers\ProductService as ProductService;
		$produts = ProductService::findAll();
	?>
	<?php foreach($produts as $el): ?>
		<div class="col-lg-3 col-md-6 col-sm-12 mt-5">
		<div class="card" style="">
			<div class="card-body">
				<input class="card-title text-left" type="checkbox"/>
				<div class="text-center card-text">
					<span><?= $el['sku'] ?></span><br/>
					<span><?= $el['name'] ?></span><br/>
					<span><?= $el['price'] ?></span><br/>
					<span><?= "Weight: " . $el['specs'] ?></span><br/>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach ?>
</div>