<?php 

function clean($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}




if (isset($_POST['sub123']) && $_SERVER ['REQUEST_METHOD'] == "POST") {
    $name = clean($_POST['name']);
    $email = clean($_POST['email']); 

    if (empty($name)) {
        $errName = "Name Is Required";
    } elseif (!preg_match("/^[a-zA-Z. ]*$/", $name)) {
        $errName = "Only letters Whitespace allowed";
    }else {
        $crrName = $name;
    } 
    
    if (empty($email)) {
        $errEmail = "Email is required";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errEmail = "Please enter a valid email"; 
        } else {
            $crrEmail =$email;}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Form Valiadition!</h1>

       <div class="container">
        <div class="row min-vh-100 d-flex">
            <div class="col-md-6 m-auto border rounded shadow p-4">
                <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
                    <div class="mb-3 form-floating">
                    <input type="text" placeholder="Please Enter Your Name" name="name" class="form-control <?= isset($errName) ? 'is-invalid' : null ?><?= isset($crrName) ? 'is-valid' : null?>" value="<?= $name ?? null ?>">
                    <label for="" class= "label">Your name  </label>
                  <div class="invalid-feedback"><?= $errName ?? null ?></div>
                  <div class="valid-feedback"> <?= $crrName ?? null ?></div>
                  
                  <br>
                  <div class="mb-3 form-floating">
                  <input type="text" placeholder="Please Enter Your Email" name="email" class="form-control <?= isset($errEmail) ? 'is-invalid' : null ?><?= isset($crrEmail) ? 'is-valid' : null?>" value="<?= $email ?? null ?>">
                    <label for="" class= "label">Your Email  </label>
                  <div class="invalid-feedback"><?= $errEmail ?? null ?></div>
                  <div class="valid-feedback"> <?= $crrEmail ?? null ?></div>
                  </div>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-dark btn-sm" name="sub123">


                </form>
            </div>
        </div>
       </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>