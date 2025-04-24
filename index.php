<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
	<title> Gerar PDF </title>
</head>
<body>
	<h1 class="text-center"> Gerar PDF </h1>
	<div class="container text-center">
	  <div class="row p-5">
	    <div class="col">
	    	<?=
	      		"<a class='btn btn-secondary' href='/dompdf/public/index.php'>
					Gerar por DomPdf (PHP)
				</a>";
	    	?>
	    </div>
	    <div class="col">
	    	<?=
		      	"<a class='btn btn-secondary' href='/fpdf/public/index.php'>
					Gerar por Fpdf (PHP)
				</a>";
			?>
	    </div>
	  </div>

	  <div class="row p-5">
	    <div class="col">
	    	<a class='btn btn-secondary' href='/dompdf/public/index.php'>
				Gerar por DomPdf (HTML)
			</a>
	    </div>
	    <div class="col">
	    	<a class='btn btn-secondary' href='/fpdf/public/index.php'>
				Gerar por Fpdf (HTML)
			</a>
	    </div>
	  </div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>