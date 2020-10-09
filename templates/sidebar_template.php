<section class="left"><!-- left section class -->
			<ul><!-- ul element -->
				<?php foreach ($categories as $category): ?><!-- for all the categories-->
					<li><a href="furnitures&c_id=<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></a></li>	<!-- showing the category list on sidebar-->
				<?php endforeach ?><!-- element tag -->
			</ul><!-- element tag -->
</section><!-- element tag -->