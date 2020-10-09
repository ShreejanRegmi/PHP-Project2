<section class="left">
			<ul>
				<!-- for all categories existing -->
				<?php foreach ($categories as $category): ?>
					<li><a href="furnitures&c_id=<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></a></li>	
				<?php endforeach ?>
			</ul>
</section>