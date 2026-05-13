<nav class="navbar navbar-expand-lg bg-primary text-white">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">
      <img src="img/sttnf.png" alt="Logo" width="40"> My Web
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link text-white" href="index.php?hal=home">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="index.php?hal=about">About Me</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="index.php?hal=contact">Contact Me</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">My Studies</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?hal=jenis_list">Level</a></li>
            <li><a class="dropdown-item" href="index.php?hal=produk_list">Studies</a></li>
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <?php if (isset($_SESSION['user'])): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
              Hi,
              <?= $_SESSION['user'] ?> (
              <?= $_SESSION['role'] ?>)
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link text-white" href="login.php">Login</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>