<?php
$name   = htmlspecialchars($_POST['name']);
$phone  = htmlspecialchars($_POST['phone']);
$email  = htmlspecialchars($_POST['email']);
$course = htmlspecialchars($_POST['course']);
$batch  = htmlspecialchars($_POST['batch']);
?>

<!DOCTYPE html>
<html>
<head>
<title>Student ID Card</title>

<style>
body{
    background:#e5e7eb;
    font-family:Arial;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.id-card{
    width:350px;
    background:white;
    padding:25px;
    border-radius:12px;
    box-shadow:0 8px 20px rgba(0,0,0,.2);
    text-align:center;
}

.badge{
    background:green;
    color:white;
    padding:6px 15px;
    border-radius:20px;
    display:inline-block;
    margin-top:10px;
}

.back-btn{
    margin-top:15px;
    display:inline-block;
    color:#2563eb;
    text-decoration:none;
}
</style>

</head>
<body>

<div class="id-card">

<h2>STUDENT ID CARD</h2>

<p><b>Name:</b> <?= $name ?></p>
<p><b>Phone:</b> <?= $phone ?></p>
<p><b>Email:</b> <?= $email ?></p>
<p><b>Course:</b> <?= $course ?></p>
<p><b>Batch:</b> <?= $batch ?></p>

<div class="badge">Active Student</div>

<a href="id-card.php" class="back-btn">← Back</a>

</div>

</body>
</html>
