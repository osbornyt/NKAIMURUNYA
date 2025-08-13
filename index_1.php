<?php
// Sample students array
$students = [
    1 => ["name" => "Laurence Obonyo", "grade" => "Form 4", "gender" => "Male", "age" => 15, "img" => "lawrance"],
    2 => ["name" => "Ngadi Faith Andisa", "grade" => "Form 4", "gender" => "Female", "age" => 16, "img" => "andisa"],
    3 => ["name" => "Atieno Frank Agalo", "grade" => "Form 4", "gender" => "Male", "age" => 17, "img" => "frank"],
    4 => ["name" => "Peter Adhiambo Otieno", "grade" => "Form 4", "gender" => "Male", "age" => 14, "img" => "peter"],
    5 => ["name" => "Faith Adhiambo Otieno", "grade" => "Form 4", "gender" => "Female", "age" => 14, "img" => "faith"],
    6 => ["name" => "Thomas Benedict Kyalo", "grade" => "Form 4", "gender" => "Male", "age" => 14, "img" => "benedict"],
    7 => ["name" => "Hannah Waithera Kuria", "grade" => "Form 4", "gender" => "Female", "age" => 14, "img" =>"hannah"],
    8 => ["name" => "Petronilla Wanjiru", "grade" => "Form 4", "gender" => "Female", "age" => 14,"img" => "petronilla"],
    9 => ["name" => "Odhiambo Doreen Achieng", "grade" => "Form 4", "gender" => "Female", "age" => 14, "img" => "doreen"],
    10 => ["name" => "Purity Munyiva Kyalo", "grade" => "Form 4", "gender" => "Female", "age" => 14, "img" => "purity"],
    11 => ["name" => "Sylvester Mecha Mugo", "grade" => "Form 4", "gender" => "Male", "age" => 14, "img" => "sylvester"]

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profiles - Nakimurunya Secondary School</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>
<body>

    <!-- Introductory Message Card -->
    <div class="intro-card">
        <h1 style="text-align: center">Thank You</h1>
        <p>
            Nkaimurunya Secondary School extends its deepest gratitude to Sister and Elder Crimmins for their 
            compassionate and transformative tuition support. Your generosity has ensured that eleven deserving 
            students will have their school fees fully covered for the remainder of this academic year. This crucial 
            assistance will allow them to focus entirely on their KCSE exam preparations, free from the worry of 
            being sent home. We are immensely thankful for your commitment to their education and future.
        </p>
        <p>
            The student applications and personal statements, which reflect their dedication and aspirations, 
            are available for your review below.
        </p>
        <div class="involve">
          <a href="get-involved.php" class="get-involved-button">Get Involved</a>
        </div>
    </div>

    <h2>Student Profiles</h2>
    
    <!-- Student Cards -->
     <div class="content-container">
        <div class="card-container">
            <?php foreach ($students as $id => $student): ?>
                <div class="card" data-name="<?= $student['name'] ?>" data-grade="<?= $student['grade'] ?>" data-gender="<?= $student['gender'] ?>" data-age="<?= $student['age'] ?>">
                    <div class="image-container">
                        <img src="images/<?= $student['img'] ?>.jpg" alt="<?= $student['name'] ?>'s Image" class="student-image">
                    </div>
                    <h3><?= $student['name'] ?></h3>
                    <p><strong>Grade:</strong> <?= $student['grade'] ?></p>
                    <p><strong>Gender:</strong> <?= $student['gender'] ?></p>
                    <a href="student.php?id=<?= $id; ?>" class="view-details-btn">View Details</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="gallery-section">
  <h2>Gallery</h2>
  <div class="gallery">
    <div class="gallery-item">
      <img src="images/group.jpg" alt="Image 1">
    </div>
    <div class="gallery-item">
      <img src="images/parents.jpg" alt="Image 2">
    </div>
    <div class="gallery-item">
      <img src="images/group1.jpg" alt="Image 3">
    </div>
    <div class="gallery-item">
      <img src="images/group2.jpg" alt="Image 4">
    </div>
  </div>
</div>


</body>
</html>
