<?php
	session_start();
?>
<?php
	require_once('db.php');
	if (isset($_POST['submit'])) 
	{
		extract($_POST);

		if (!empty($nom) and !empty($email) and !empty($message)) 
		{
		
			$req=$db->prepare('INSERT INTO reponses(id_parent,nom,email,messages,datepost) VALUES (?,?,?,?,NOW())');
			$req->execute(array($_GET['id'],$nom, $email,$message));
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Réponses</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<section style="text-align: center;">

	<?php
		require_once('db.php');
		$req=$db->prepare('SELECT * FROM commentaires WHERE id =?');
		$req->execute(array($_GET['id']));
		while ($reponse = $req->fetch(PDO::FETCH_OBJ)) {
			?>
			<div style="background-color: white;">
				<p style="text-align:center;">Poster par <?php echo $reponse->nom; ?> le <?php echo $reponse->datepost; ?></p>
				<p style="text-align:center;"><?php echo $reponse->messages; ?></p>
			</div>
				<br>
			
			<?php
		}
	?>
		<?php
			if(isset($_SESSION['user'])) {
		?>
		<h2>Répondre à la question</h2>
		<form method="POST" action="">
			<div class="form-group">
				<label>Votre pseudo</label>
				<input style="width: 25%; margin: auto; display:block;" type="text" name="nom" placeholder="nom" required="" class="form form-control">
			</div>
			<div class="form-group">
				<label>Adresse mail</label>
				<input style="width: 25%; margin: auto; display:block;" type="email" name="email" placeholder="email" required="" class="form form-control">
			</div>
			<div class="form-group">
				<p>Votre réponse</p>
				
				<textarea name="message" style="width: 25%;" placeholder="message"></textarea>
			</div>
			<input style="margin: auto; display:block;" type="submit" name="submit" value="Poster" required="" class="btn btn-primary">
		</form>
	<?php
}
?>
	<h2>Réponses</h2>
	<?php
		require_once('db.php');
		$req=$db->prepare('SELECT * FROM reponses WHERE id_parent=?');
		$req->execute(array($_GET['id']));
		while ($reponse = $req->fetch(PDO::FETCH_OBJ)) {
			?>
			<p>
				<span>Poster par <?php echo $reponse->nom; ?> le <?php echo $reponse->datepost; ?></span>
				<br>
				<?php echo $reponse->messages; ?>
				<br>
			</p>
			<?php
		}
	?>

	</section>
</body>
</html>