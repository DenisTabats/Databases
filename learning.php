<!DOCTYPE html>
<?php
include "function_db.php";
$contragents = getAllContragents();
?>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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



  <section id="project">
<h2>Образование </h2><br>

<h3>ГБПОУ «Донецкий политехнический колледж» </h3>
<p>(Донецк)</p>
<p>Отделение компьютерной техники.</p>
<p>Специальность 09.02.01 Компьютерные системы и комплексы, средне-профессиональное образование.</p> 
<p>Период обучения с 2019 по 2023,<br>

<br><h3>ГОУ ВПО «Донецкая академия управления и государственной службы при Главе ДНР» (Донецк)</h3>
<p>Факультет прикладной информатика в управлении корпоративными информационными системами. Бакалавриат.</p>
<p>Период обучения с 2023 по настоящее время,</p><br>

<h3>АНО Военно-патриотический центр «Вымпел»</h3>
<p>Удостоверение о повышении квалификации по программе «Методика подготовки инструкторского состава военно-патриотических и военно-спортивных объединений» в объеме 120 часов. г. Москва, 2023г.</p>
<div class = "container">   
  <table class="table table-striped">
    <thead> <th>Курс</th> <th>Дисциплина</th> <th>Оценка</th></thead>
    <?php
      for( $i = 0; $i < count($contragents); $i++ ) 
      {
        $course = $contragents[$i]["Course"];
        $discipline = $contragents[$i]["Discipline"];
        $evaluation = $contragents[$i]["Evaluation"];
        echo "<tr><td>$course</td><td>$discipline</td><td>$evaluation</td></tr>";
       }
     ?>
  </table>
</div>
</section>

</body>

<footer>
  <?php include "footer.php";?>
</footer>
</html>