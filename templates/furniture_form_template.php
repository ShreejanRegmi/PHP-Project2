<?php
	if(isset($_GET['fid']))
		echo '<h2>Edit Furniture</h2>';		
	else
	echo '<h2>Add Furniture</h2>';
?>
	<!-- form element is created -->
	<form action="savefurniture" method="POST" enctype="multipart/form-data">
		<!-- input hidden type for id -->
		<input type="hidden" name="id" value="<?php if(isset($furniture['furniture_id'])) echo $furniture['furniture_id']; ?>" required/>
		<label>Name</label>
		<!-- input name for furniture -->
		<input type="text" name="name" value="<?php if(isset($furniture['furniture_name'])) echo $furniture['furniture_name']; ?>"   required/>
		<label>Description</label>
		<!-- input description for furniture -->
		<textarea name="description" required><?php if(isset($furniture['furniture_description'])) echo $furniture['furniture_description']; ?></textarea>
		<label>Price</label>
		<!-- input price for furniture -->
		<input type="number" name="price" min="1" value="<?php if(isset($furniture['furniture_price'])) echo $furniture['furniture_price']; ?>"required/>
		<label>Category</label>
		<!-- category select box is made -->
		<select name="categoryId">
		<?php
				foreach ($categories as $row) {
					$selectedText=(isset($furniture['category_id']) && $row['category_id']==$furniture['category_id'])?'selected="selected"':"";
					echo '<option value="' . $row['category_id'] . '"'.$selectedText.'>' . $row['category_name'] . '</option>';
				}
		?>
		</select>
		<label>Status</label>
		<!-- status for furniture -->
		<select name="status">
			<?php $selectedText='selected="selected"'; ?>
			<option value="show" <?php if(isset($furniture['furniture_status']) && $furniture['furniture_status']=="show") echo $selectedText; ?> >Show</option>
			<option value="hide" <?php if(isset($furniture['furniture_status']) && $furniture['furniture_status']=="hide") echo $selectedText; ?> >Hide</option>
		</select>
		<label>Condition</label>
		<!-- drop down for condition -->
		<select name="condition">
			<option value="new" <?php if(isset($furniture['furniture_condition']) && $furniture['furniture_condition']=="new") echo $selectedText ?> >New</option>
			<option value="second hand" <?php if(isset($furniture['furniture_condition']) && $furniture['furniture_condition']=="second hand") echo $selectedText ?> >Second Hand</option>
		</select>
		<!-- image label -->
		<label id="image-text">Image</label>
		<!-- furniture image -->
		<input id="furniture-image" type="file" name="image[]" multiple/>
		<!-- submit button pressed -->
		<input id="furniture-submit" type="submit" name="submit" value="Save" />
	</form>
