<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">

<?php require 'inc/header.php'; ?>

<h1>S'inscrire</h1>

<form action="" method="POST">
<div class="form-group">
    <label for="">Pseudo</label>
    <input id="username" type="text" name="username" class="form-control" >
</div>

<div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control">
</div>

<div class="form-group">
    <label for="">Mot de passe</label>
    <input type="password" name="password" class="form-control" >
</div>

<div class="form-group">
    <label for="">Confirmez votre mot de passe</label>
    <input type="password" name="password_confirm" class="form-control" >
</div>
<button type="submit" class="btn btn-primary">M'inscrire</button>
</form>
<?php require 'inc/footer.php'; ?>