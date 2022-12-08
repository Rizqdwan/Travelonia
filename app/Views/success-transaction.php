<!doctype html>
<html>
    <?php require_once '../app/Views/Components/head.php'; ?>

  <body>

    <main class="container">
      <div class="px-4 pt-1 my-3 text-center ">
          <div class="overflow-hidden">
            <div class="container px-5">
              <img src="<?php echo $GLOBALS['path']?>/assets/success-transaction.png" class="img-fluid" alt="Success Payment">
            </div>
          </div>
          <h1 class="display-5 fw-bold mb-3">Your Transcation is Successfull</h1>
          <div class="col-lg-6 mx-auto">
            <p class="lead text-muted mb-2">Thank you for your transcation, Enjoy your vocation.
              <br>Please wait., Our admin will contact you &#x1F60A;
            </p>
            <a href="<?php echo $GLOBALS['path']?>/home" class="text-success">Back To Home</a>
          </div>
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>