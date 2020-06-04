


<?php
require_once('views/header.php');
?>

<section id="logIn">
<div class = "card text-center my-5 py-5 z-depth-1 mb3"  style="width: 60%; margin : auto">
                     
     <form method="POST">
  <div>
    <h2>Login</h2>
  </div>
  <div>
    <input id="username" type="text" name="username" placeholder="Username">
  </div>
  <div>
    <input id="password" type="password" name="password" placeholder="Password">
  </div>
  <div>
    <input type="submit" value="Submit">
  </div>
</form>

</div>
</section>

<?php
require_once('views/footer.php');
?>