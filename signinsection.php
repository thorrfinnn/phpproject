
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailValue = $_POST["emailName"];
    $passwordValue = $_POST["passwordName"];
    $_SESSION["email"] = $emailValue;
    $_SESSION["password"] = $passwordValue;

    header("Location: profil.php");
    exit();
}
?>
<section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">                                                    
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="https://vectorseek.com/wp-content/uploads/2023/08/Spotify-Logo-Png-Vector.svg-.png" style="max-width: 100px;";
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1"></h4>
                      </div>
      
                      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="emailName" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <div class="input-group">
            <input name="passwordName" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">Show/Hide</button>
        </div>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Listen , Live and enjoy </h4>
                      <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script>
    function togglePassword() {
        var passwordInput = document.getElementById("exampleInputPassword1");
        var showHideButton = document.querySelector('.input-group button');

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showHideButton.textContent = "Hide";
        } else {
            passwordInput.type = "password";
            showHideButton.textContent = "Show";
        }
    }
</script>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    
    $emailValue = $_POST["emailName"];
    $passwordValue = $_POST["passwordName"];

    if(empty($emailValue) || empty($passwordValue)){

        echo "<h1> values are empty </h1>";
    }else{

        echo 'Welcome, your informarion: <br>';
        echo "Email : $emailValue <br>";
        echo "Password : $passwordValue <br>";
        
    }
}else{

    echo "you are not using post method !";
}

?>