<form action="contact" method="POST">
	<label>Full Name</label>
	<!-- full name for contact -->
	<input type="text" name="fullname" required/>
	<label>Address</label>
	<!-- address for contact -->
	<input type="text" name="address" required/>
	<label>Telephone</label>
	<!-- telephone number for contact -->
	<input type="number" name="telephone" min="0" required/>
	<label>Description</label>
	<!-- description for contact -->
	<textarea name="description" required></textarea>
	<!-- submit button for contact -->
	<input type="submit" name="send" value="Send Enquiry"/>
</form>