
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?= PROJECT_ROOT ?>/dashboard/index.php">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= PROJECT_ROOT ?>/teachers/index.php">
          <span data-feather="users"></span>
          Teachers
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= PROJECT_ROOT ?>/courses/index.php">
          <span data-feather="layers"></span>
          Courses
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= PROJECT_ROOT ?>/classes/index.php">
          <span data-feather="shopping-cart"></span>
          Classes
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= PROJECT_ROOT ?>/students/index.php">
          <span data-feather="users"></span>
          Students
        </a>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Saved reports</span>
      <a class="link-secondary" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle"></span>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file-text"></span>
          Current month
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file-text"></span>
          Year-end sale
        </a>
      </li>
    </ul>
  </div>
</nav>