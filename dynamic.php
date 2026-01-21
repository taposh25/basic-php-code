<?php
$name = $phone = $email = $course = $batch = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = htmlspecialchars($_POST["name"]);
    $phone  = htmlspecialchars($_POST["phone"]);
    $email  = htmlspecialchars($_POST["email"]);
    $course = htmlspecialchars($_POST["course"]);
    $batch  = htmlspecialchars($_POST["batch"]);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student ID Generator</title>

<style>
body{
    background:#f2f2f2;
    font-family: Arial, sans-serif;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.card{
    background:white;
    width:350px;
    padding:25px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,.2);
}

.card h2{
    text-align:center;
    margin-bottom:15px;
}

input{
    width:100%;
    padding:10px;
    margin-bottom:10px;
    border:1px solid #ccc;
    border-radius:5px;
}

button{
    width:100%;
    padding:10px;
    background:#2563eb;
    border:none;
    color:white;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:#1d4ed8;
}

.preview{
    margin-top:20px;
    padding:15px;
    border:1px solid #ddd;
    border-radius:8px;
    background:#fafafa;
    text-align:center;
}

.badge{
    display:inline-block;
    background:green;
    color:white;
    padding:5px 12px;
    border-radius:20px;
    margin-top:10px;
}
</style>
</head>

<body>

<div class="card">

<h2>Create Your Virtual ID Card</h2>

<form action="id-card.php" method="POST">

<input name="name" placeholder="Name" required>
<input name="phone" placeholder="Phone" required>
<input name="email" type="email" placeholder="Email" required>
<input name="course" placeholder="Course" required>
<input name="batch" placeholder="Batch No" required>

<button>Generate ID</button>

</form>

<?php if(!empty($name)){ ?>
<div class="preview">

<h3>STUDENT ID CARD</h3>
<p><b>Name:</b> <?= $name ?></p>
<p><b>Phone:</b> <?= $phone ?></p>
<p><b>Email:</b> <?= $email ?></p>
<p><b>Course:</b> <?= $course ?></p>
<p><b>Batch:</b> <?= $batch ?></p>

<span class="badge">Active Student</span>

</div>
<?php } ?>

</div>

</body>
</html>
