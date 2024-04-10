<?php
// Create a landing page with a contact form, send it to the server which will 
// validate the data, then send an email with the entered information.
echo '<pre>' . print_r($_POST, true) . '</pre>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = [];

    // validare i dati
    if (empty($name)) {
        $errors['name'] = 'Name is required.';
    }

    if (empty($surname)) {
        $errors['surname'] = 'Surname is required.';
    }

    if (empty($age)) {
        $errors['age'] = 'Age is required.';
    }

    if (empty($username)) {
        $errors['username'] = 'Username is required.';
    }

    if (empty($email)) {
        $errors['email'] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email is not valid.';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required.';
    } elseif (strlen($password) < 8) {
        $errors['password'] = 'Password must be at least 8 characters long.';
    }
    
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="card">
  <div class="card-body text-center">

  <form action="" method="post" novalidate>
  <div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" name="name" class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>" id="name" placeholder="Name" value="<?= $name ?? '' ?>">
    <div class="invalid-feedback"><?= $errors['name'] ?? '' ?></div>
  </div>

  <div class="mb-3">
    <label for="surname" class="form-label">Surname:</label>
    <input type="text" name="surname" class="form-control <?= isset($errors['surname']) ? 'is-invalid' : '' ?>" id="surname" placeholder="Surname" value="<?= $surname ?? '' ?>">
    <div class="invalid-feedback"><?= $errors['surname'] ?? '' ?></div>
  </div>

  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" name="age" class="form-control <?= isset($errors['age']) ? 'is-invalid' : '' ?>" id="age" value="<?= $age ?? '' ?>">
    <div class="invalid-feedback"><?= $errors['age'] ?? '' ?></div>
  </div>

  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" name="username" class="form-control <?= isset($errors['username']) ? 'is-invalid' : '' ?>" id="username" placeholder="Username" value="<?= $username ?? '' ?>">
    <div class="invalid-feedback"><?= $errors['username'] ?? '' ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : '' ?>" name="email" id="email" placeholder="example@email.com" aria-describedby="emailHelp" value="<?= $email ?? '' ?>">
    <div class="invalid-feedback"><?= $errors['email'] ?? '' ?></div>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" id="password" placeholder="Password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : '' ?>" >
    <div class="invalid-feedback"><?= $errors['password'] ?? '' ?></div>  
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

  <div id="emailHelp" class="form-text">We'll never share your data with anyone else.</div>
</form>

  </div>
</div>
</body>
</html>
