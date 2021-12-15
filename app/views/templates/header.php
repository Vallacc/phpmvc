<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $data['judul'];?></title>

	<!-- link CSS -->
	<link href="<?= base_url;?>/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container	">
	    <a class="navbar-brand" href="<?= base_url;?>">MVC</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link active" aria-current="page" href="<?= base_url;?>">Home</a>
	        <a class="nav-link" href="<?= base_url;?>/about">About</a>
	      </div>
	    </div>
	  </div>
	</nav>