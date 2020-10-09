<!-- form start  -->
<form action="saveupdate" method="POST" enctype="multipart/form-data">
	<label>Title</label>
	<!-- title for the update -->
	<input type="text" name="title" required/>
	<label>Description</label>
	<!-- description for the update -->
	<textarea name="description" required></textarea>	
	<label>Image</label>
	<!-- image for the update -->
	<input id="update-image" type="file" name="image"/>
	<!-- submit button for the update -->
	<input id="update-submit" type="submit" name="submit" value="Add">
</form>