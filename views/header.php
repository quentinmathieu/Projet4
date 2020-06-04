<header id="nav">
  <nav class="navbar navbar-expand-lg navbar-dark brown darken-3">


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="basicExampleNav">


      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.php?route=public">Accueil
          </a>
        </li>
        <?php
        if (session_status() == PHP_SESSION_NONE) {

          session_start();
        }
        if ($_SESSION['isAdmin']) {
          echo '
      <li class="nav-item">
        <a class="nav-link" href="index.php?route=backOffice">Mes tickets</a>
      </li>';
        }
        ?>
      </ul>



      <ul class="navbar-nav m-y=0">

        <?php
        if (session_status() == PHP_SESSION_NONE) {

          session_start();
        }
        if ($_SESSION['isAdmin']) {
          echo '
      <li class="nav-item">
        <a class="nav-link" href="index.php?route=disconnect">déconnexion</a>
      </li>';
        }
        ?>
      </ul>
    </div>


  </nav>
</header>