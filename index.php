<?php
$nombre="Hyrum Enoc Dominguez Valentin";
$matricula="203241125";
$fecha = date('Y')."_".date('m') . "_".date('d');
$hora = date('H').":".date('i').":".date('s');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="none,noindex,nofollow"/>
    <meta name="description" content="<?php echo $matricula; ?>"/>
    <meta name="author" content="<?php echo $nombre;?>"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <title><?php echo $nombre. ' '. $matricula;?></title>
</head>
<body>
    <h2>&nbsp;</h2>
 <div class="container">
      <div class="card text-center">
        <div class="card-header">
            <?php echo $matricula;?> 
        </div>
         <div class="card-body">
             <?php echo $nombre; ?>
            </div>
  <div class="card-footer text-muted">
        <?php echo $fecha. ' @ '. $hora; ?>
   </div>
    </div>
 </div>
 <h2>&nbsp;</h2>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
 <script src="https://code.jsdelivr.net/npm/@popperjs/core@2.9.2./dist/umd/popper.min.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="https://kit.fontawesome.com/c6c9331c4f" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
 

    
</body>
</html>
