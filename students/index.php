<?php include_once('../partials/header.php'); ?>

<?php
  $sql = "SELECT * FROM `students`";

  $result = $conn->query($sql);

  if (!$result) {
    die('query failed: ' . $conn->error);
  }
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Students</h1>
    <button type="button" class="btn btn-sm btn-outline-secondary">
      <span data-feather="plus"></span>
      Create New
    </button>
  </div>

  <h2>Listing</h2>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $result->fetch_assoc()) { ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td>
              <a href="<?= PROJECT_ROOT ?>/students/show.php?id=<?= $row['id'] ?>">
                <?= $row['first_name'].' '.$row['last_name'] ?>
              </a>
            </td>
            <td>
              <a href="" class="btn btn-warning">
                <span data-feather="edit"></span>
              </a>
              <a href="" class="btn btn-danger">
                <span data-feather="trash"></span>
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</main>

<?php include_once('../partials/footer.php'); ?>