<h2> Affichage des Clubs</h2>
<table border="2">
	<tr>
		<td>Id</td>
		<td>Nom</td>
		<td>Description</td>
		<td>Adresse</td>
		<td>Domaine</td>
	</tr>
	<tr>
		<td>
			<?PHP
			var_dump($_POST['id']);
			echo $_POST['id']; ?>
		</td>
		<td>
			<?PHP echo $_POST['nom']; ?>
		</td>
		<td>
			<?PHP echo $_POST['description']; ?>
		</td>
		<td>
			<?PHP echo $_POST['adresse']; ?>
		</td>
		<td>
			<?PHP echo $_POST['domaine']; ?>
		</td>