<nav class="navbar navbar-expand-lg navbar-dark" style="background: #002151">
  <a class="navbar-brand" href="index.php">Power 28</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=application">application</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=tuto">tuto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=forum">forum</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=FAQ">FAQ</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <!--<?php echo $_SESSION['name'] ?>-->mon compte
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=admin">admin</a>
          <a class="dropdown-item" href="index.php?page=account">mon compte</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?page=index&action=signout">déconection</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=panier">panier</a>
      </li>
    </ul>
    <!--
    <form class="form-inline my-2 my-lg-0" action="index.php?page=search<?php if (isset($_POST['submit'])): ?>&action=submit&search=<?php echo $_POST['search'] ?><?php endif; ?>" method="post">
      <input class="form-control mr-sm-2 background_dark" type="search" placeholder="search" aria-label="search"name="search">
      <button class="btn btn-outline my-0 my-sm-0" type="submit" name="submit"><i class="fas fa-search"></i></button>
    </form>
  -->
  </div>
</nav>
