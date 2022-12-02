<!DOCTYPE html>
<html lang="en">
  <?php require_once '../app/Views/Components/head.php'; ?>
<body>
  <?php require_once '../app/Views/Components/navbar.php'; ?>

  <main class="container-fluid">
      <article class="container">
          <section class="row py-5 g-4">
            <div class="col-md-8 p-3 bg-light border rounded-3">
              
                  <!-- Ini buat icon dan detail Pemesan-->
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img src="" alt="icon">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h3 class="fs-6">Detail Pemesan</h3>
                    </div>
                  </div>

                  <!-- Mulai dari sini formnya -->
                  <form action="">

                    <div class="mb-3">
                      <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="namaLengkap" placeholder="Masukan nama lengkapmu">
                    </div>

                    <div class="mb-3">
                      <label for="emailPengguna" class="form-label">Alamat Email</label>
                      <input type="email" class="form-control" id="emailPengguna" placeholder="Masukan emailmu cuy@mail.com">
                    </div>

                    <label for="telp" class="form-label">Nomor Telephone</label>
                    <div class="input-group mb-3">
                      <select class="form-select form-select" aria-label="select kode negara">
                        <option selected>Kode Negara</option>
                        <option value="+62">+62</option>
                        <option value="+62">+62</option>
                        <option value="+62">+62</option>
                      </select>
                      <input type="tel" class="form-control" id="telp" aria-label="nomor telephone">
                    </div>
                    

                    <div class="mb-3">
                      <p class="form-label">Pilih Metode Pembayaran</p>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="BCA" name="payment-method" value="BCA">
                        <label class="form-check-label" for="BCA" >
                          BCA 12412252515
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="MANDIRI" name="payment-method" value="MANDIRI" >
                        <label class="form-check-label" for="MANDIRI">
                          MANDIRI 9244124124
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="BNI" name="payment-method" value="BNI" >
                        <label class="form-check-label" for="BNI">
                          BNI 1233124124
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="DANA" name="payment-method" value="DANA" >
                        <label class="form-check-label" for="DANA">
                          DANA 082314124124
                        </label>
                      </div>

                    </div>


                  
                  </form>
            </div>    
            <div class="col-md-3 p-3 offset-md-1 bg-light border rounded-3" >
              <h3 class="fs-6">Detail Pemesanan</h3>
              <img src="" alt="gambar detail pesanan" >
              <p class="fs-5 fw-bold">Candi Borobudur, Yogyakarta </p>
              <hr>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="" alt="icon">
                </div>
                <div class="flex-grow-1 ms-3">
                  <p>Berlaku 3 hari sejak</p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="" alt="icon">
                </div>
                <div class="flex-grow-1 ms-3">
                  <p>Berlaku 3 hari sejak</p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="" alt="icon">
                </div>
                <div class="flex-grow-1 ms-3">
                  <p>Berlaku 3 hari sejak</p>
                </div>
              </div>
              <hr>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-auto">
                  <p class="fw-bold">Total</p>
                </div>
                <div class="flex-grow-3">
                  <p class="text-primary">IDR 5123123</p>
                </div>
              </div>



            </div>
          </section>
      </article>
      <article class="container">
          <section>

          </section>
      </article>
  </main>

  <?php require_once '../app/Views/Components/footer.php'; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>