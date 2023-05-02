	<h2>  Affichage des Clubs</h2>
<table border="2">
<tr>
<td>Id</td>
<td>Nom</td>
<td>Description</td>
<td>Adresse</td>
<td>Domaine</td>
</tr>
	<tr>
	<td><?PHP echo $_GET['id']; ?></td>
	<td><?PHP echo $_GET['nom']; ?></td>
	<td><?PHP echo $_GET['description']; ?></td>
	<td><?PHP echo $_GET['adresse']; ?></td>
	<td><?PHP echo $_GET['domaine']; ?></td>

	<?PHP

?>
</table>

