<?php
include __DIR__ . './index_logica.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <ul class="container-card">
    <li class="card">
      <figure class="img-container">
        <img src="<?php echo $locandina0->imgLoca; ?>" alt="" />
      </figure>
      <h5><?php echo $locandina0->titolo; ?></h5>
      <p><?php echo $locandina0->anno_uscita; ?></p>
      <p><?php echo $locandina0->categoria; ?></p>
    </li>

    <li class="card">
      <figure class="img-container">
        <img src="<?php echo $locandina1->imgLoca; ?>" alt="" />
      </figure>
      <h5><?php echo $locandina1->titolo; ?></h5>
      <p><?php echo $locandina1->anno_uscita; ?></p>
      <p><?php echo $locandina1->categoria; ?></p>
    </li>

    <li class="card">
      <figure class="img-container">
        <img src="<?php echo $locandina2->imgLoca; ?>" alt="" />
      </figure>
      <h5><?php echo $locandina2->titolo; ?></h5>
      <p><?php echo $locandina2->anno_uscita; ?></p>
      <p><?php echo $locandina2->categoria; ?></p>
    </li>

  </ul>
</body>

</html>