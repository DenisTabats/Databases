<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Моя визитка</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav class = "block-menu">
      <ul class="menu">
        <li><a href="index.php">Основная информация</a></li>
        <li><a href="projects.php">Проекты</a></li>
        <li><a href="photo.php">Фото</a></li>
        <li><a href="learning.php">Образование</a></li>
      </ul>
    </nav>
  </header>

  <section id="photo">
    <h3>Фотографии</h3><br>
    <br><img src="img/photo1.jpg" alt="Я">
    <img src="img/photo2.jpg" alt="">
    <img src="img/photo3.jpg" alt="">
  </section>

  <footer>
  <?php include "footer.php";?>
  </footer>
</body>
</html>