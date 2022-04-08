<?php
include __DIR__ . './index_logica.php';

// $qualsiasi_nome = new Movie("https://picsum.photos/seed/picsum/200/300", "");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <ul>
    <li>
      <figure class="img-container">
        <img src="<?php echo $locandina->imgLoca; ?>" alt="" />
      </figure>
      <h5 ><?php echo $locandina->titolo; ?></h5>
      <p><?php echo $locandina->anno_uscita; ?></p>
      <p><?php echo $locandina->categoria; ?></p>
    </li>
  </ul>
</body>

</html>