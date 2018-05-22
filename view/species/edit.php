<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>species/editSave" method="post">
	
		<input type="text" name="description" value="<?= $species['species_description']; ?>">
		

		<input type="hidden" name="id" value="<?= $species['species_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
