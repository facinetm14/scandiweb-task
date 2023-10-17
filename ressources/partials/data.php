<div class="row mt-5 mb-5">
	<?php
		/** process data here 
		 * send GET request to backend
		 * save data in an array
		*/
		use App\Providers\ProductService as ProductService;

		$allProduts = (new ProductService())->findAll();
	?>
	<?php foreach($allProduts as $product): ?>
		<div class="col-lg-3 col-md-6 col-sm-12 mt-5">
		<div class="card" style="">
			<div class="card-body">
				<input class="card-title text-left" type="checkbox"/>
				<div class="text-center card-text">
					<span><?= $product->getSku() ?></span><br/>
					<span><?= $product->getName() ?></span><br/>
					<span><?= $product->getPrice() . CURRENCY ?></span><br/>

					<?php if (property_exists($product, 'size')): ?>
					<span><?= 'Size: ' . $product->getSize() . SIZE ?></span><br/>
					<?php endif ?>

					<?php if (property_exists($product, 'weight')): ?>
					<span><?= 'Weight: ' . $product->getWeight() . WEIGHT?></span><br/>
					<?php endif ?>

					<?php if (property_exists($product, 'height')): ?>
					<span><?= 'Dimension: ' . $product->getHeight() . 'X' . $product->getWidth() . 'X'. $product->getLength() ?></span><br/>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach ?>
</div>