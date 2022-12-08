<!DOCTYPE html>
<html lang="en">
  <?php require_once '../app/Views/Components/head.php'; ?>
  <body>
      <div class="d-flex align-items-center justify-content-center vh-100">
          <div class="text-center">
              <h1 class="display-1 fw-bold">4<span><img src="<?php echo $GLOBALS['path']?>/assets/cry.png" width="100" alt="404"></span>4</h1>
              <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
              <p class="lead text-muted">
                  The page you’re looking for doesn’t exist.
                </p>
              <a href="<?php echo $GLOBALS['path']?>/home" class="btn btn-success">Go Home</a>
          </div>
      </div>
  </body>
</html>