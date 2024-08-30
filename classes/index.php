<?php include_once('../partials/header.php'); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Classes</h1>
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
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <td>1</td>
        <td>
          <a href="" class="btn btn-warning">
            <span data-feather="edit"></span>
          </a>
          <a href="" class="btn btn-danger">
            <span data-feather="trash"></span>
          </a>
        </td>
      </tbody>
    </table>
  </div>
</main>

<?php include_once('../partials/footer.php'); ?>