<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Icon Logo -->
    <link rel="icon" href="asset/img/icon.png" type="image/x-icon">

    <title>Rumah Idaman - Moro Adver</title>
  </head>
  <body>
    
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top w-100">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="asset/img/icon.png" alt="" width="30"  class="d-inline-block align-text-top me-2"> MORO ADVER</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">LAYANAN</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">FITUR</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">KONTAK</a>
              </li>
            </ul>
            <div>
                <button class="button-primary">DAFTAR</button>
                <button class="button-secondary">MASUK</button>
            </div>            
          </div>
        </div>
  </nav>

      <!-- HERO SECTION -->
      <section id="hero">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-md-6 hero-tagline my-auto">
              <h1>Membantu 
                Temukan 
                Rumah Impian</h1>
              <p><span class="fw-bold">MORO ADVER</span> hadir memberikan solusi terbaik terhadap rumah impianmu, bisa langsung beli sewa ataupun anda jual kembali.</p>

              <button class="button-lg-primary">TEMUKAN RUMAH</button>
              <a href="#">
                <img src="asset/img/arrow.png" alt="">
              </a>
            </div>  
          </div> 
          </div>

          <img src="asset/img/img hero.png" alt="" class="position-absolute bottom-0 end-0 img-hero">
          <img src="asset/img/ornamen.png" alt="" class="h-100 position-absolute bottom-0 start-0 img-ornamen">

        </div>
      </section>

      <!-- Layanan Section -->
      <section id="layanan">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h2>Layanan Kami</h2>
              <span class="sub-title">Moro Adver hadir memberikan solusi terbaik bagi Anda</span>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md-4 text-center">
              <div class="card-layanan">
                <div class="wadah-icon position-relative mx-auto">
                  <img src="asset/img/icon1.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                </div>
                <h3 class="mt-4">Property Baru</h3>
                <p class="mt-3">Rumah impinan baru jadi milik anda
                  nikmati hunian murah dan dengan lingkungan
                  yang asri dan lingkungan yang bersih.</p>
              </div>
            </div>

            <div class="col-md-4 text-center">
              <div class="card-layanan">
                <div class="wadah-icon position-relative mx-auto">
                  <img src="asset/img/icon2.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                </div>
                <h3 class="mt-4">Sewa Rumah</h3>
                <p class="mt-3">Rumah impinan baru jadi milik anda
                  nikmati hunian murah dan dengan lingkungan
                  yang asri dan lingkungan yang bersih.</p>
              </div>
            </div>

            <div class="col-md-4 text-center">
              <div class="card-layanan">
                <div class="wadah-icon position-relative mx-auto">
                  <img src="asset/img/icon3.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                </div>
                <h3 class="mt-4">Beli Rumah</h3>
                <p class="mt-3">Rumah impinan baru jadi milik anda
                  nikmati hunian murah dan dengan lingkungan
                  yang asri dan lingkungan yang bersih.</p>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- SEARCH SECTION -->
      <section id="search">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>
              Temukan Rumah Impian
            </h2>
            <p>
              Sekarang anda tidak perlu ribet dalam mencari model rumah impianmu.
            </p>
          </div>
        </div>

        <div class="col-10 mx-auto">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="jual-tab" data-bs-toggle="tab" data-bs-target="#jual" type="button" role="tab" aria-controls="jual" aria-selected="true">Jual</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="sewa-tab" data-bs-toggle="tab" data-bs-target="#sewa" type="button" role="tab" aria-controls="sewa" aria-selected="false">Sewa</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="property-tab" data-bs-toggle="tab" data-bs-target="#property" type="button" role="tab" aria-controls="property" aria-selected="false">Property Baru</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="jual" role="tabpanel" aria-labelledby="jual-tab">
              <div class="input-group input-cari mb-3">
                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> <img src="asset/img/icon search/1.png" alt=""> Tipe Rumah</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
  
                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> <img src="asset/img/icon search/3.png" alt=""> Range Harga</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                <input type="text" class="form-control input-cari2" aria-label="Text input with dropdown button" placeholder="cari berdasarkan property ...">
  
                <button class="button-primary type="button">CARI</button>
              </div>
            </div>
  
  
            <div class="tab-pane fade" id="sewa" role="tabpanel" aria-labelledby="sewa-tab">
              <div class="input-group input-cari mb-3">
                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> <img src="asset/img/icon search/1.png" alt=""> Tipe Rumah</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
  
                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> <img src="asset/img/icon search/3.png" alt=""> Range Harga</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                <input type="text" class="form-control input-cari2" aria-label="Text input with dropdown button" placeholder="cari berdasarkan property ...">
  
                <button class="button-primary type="button">CARI</button>
              </div>
            </div>
  
  
            <div class="tab-pane fade" id="property" role="tabpanel" aria-labelledby="property-tab">
              <div class="input-group input-cari mb-3">
                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> <img src="asset/img/icon search/1.png" alt=""> Tipe Rumah</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
  
                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> <img src="asset/img/icon search/3.png" alt=""> Range Harga</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                <input type="text" class="form-control input-cari2" aria-label="Text input with dropdown button" placeholder="cari berdasarkan property ...">
  
                <button class="button-primary type="button">CARI</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      </section>

      <!-- REKOMENDASI SECTION -->
      <section id="rekomendasi">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h2>Rekomendasi Ruah Impian</h2>
            </div>
          </div>

            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="card p-2">
                  <img src="asset/img/icon rekomendasi/img1.png" alt="" class=" img-card mb-2">
                  <div class="card-body">
                    <h4>IDR. 200.000.000</h4>
                    <p>Baturaja Timu Kab. OKU <br> <span class="text-danger">Sewa</span></p>
                    
                  </div>
  
                  <div class="card-fasilitas d-flex justify-content-between p-3">
                    <span>
                      <img src="asset/img/icon rekomendasi/2.png" alt=""> 3
                      <p>Kamar Tidur</p> 
                    </span>                     
                    <span>
                      <img src="asset/img/icon rekomendasi/3.png" alt=""> 3
                      <p>Kamar Mandi</p>
                    </span>
                    <span>
                      <img src="asset/img/icon rekomendasi/4.png" alt=""> 100m
                      <p>Luas Tanah</p>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card p-2">
                  <img src="asset/img/icon rekomendasi/img1.png" alt="" class="mb-2">
                  <div class="card-body">
                    <h4>IDR. 200.000.000</h4>
                    <p>Baturaja Timu Kab. OKU <br> <span class="text-danger">Sewa</span></p>
                    
                  </div>
  
                  <div class="card-fasilitas d-flex justify-content-between p-3">
                    <span>
                      <img src="asset/img/icon rekomendasi/2.png" alt=""> 3
                      <p>Kamar Tidur</p> 
                    </span>                     
                    <span>
                      <img src="asset/img/icon rekomendasi/3.png" alt=""> 3
                      <p>Kamar Mandi</p>
                    </span>
                    <span>
                      <img src="asset/img/icon rekomendasi/4.png" alt=""> 100m
                      <p>Luas Tanah</p>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card p-2">
                  <img src="asset/img/icon rekomendasi/img1.png" alt="" class="mb-2">
                  <div class="card-body">
                    <h4>IDR. 200.000.000</h4>
                    <p>Baturaja Timu Kab. OKU <br> <span class="text-danger">Sewa</span></p>
                    
                  </div>
  
                  <div class="card-fasilitas d-flex justify-content-between p-3">
                    <span>
                      <img src="asset/img/icon rekomendasi/2.png" alt=""> 3
                      <p>Kamar Tidur</p> 
                    </span>                     
                    <span>
                      <img src="asset/img/icon rekomendasi/3.png" alt=""> 3
                      <p>Kamar Mandi</p>
                    </span>
                    <span>
                      <img src="asset/img/icon rekomendasi/4.png" alt=""> 100m
                      <p>Luas Tanah</p>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card p-2">
                  <img src="asset/img/icon rekomendasi/img1.png" alt="" class="mb-2">
                  <div class="card-body">
                    <h4>IDR. 200.000.000</h4>
                    <p>Baturaja Timu Kab. OKU <br> <span class="text-danger">Sewa</span></p>
                    
                  </div>
  
                  <div class="card-fasilitas d-flex justify-content-between p-3">
                    <span>
                      <img src="asset/img/icon rekomendasi/2.png" alt=""> 3
                      <p>Kamar Tidur</p> 
                    </span>                     
                    <span>
                      <img src="asset/img/icon rekomendasi/3.png" alt=""> 3
                      <p>Kamar Mandi</p>
                    </span>
                    <span>
                      <img src="asset/img/icon rekomendasi/4.png" alt=""> 100m
                      <p>Luas Tanah</p>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card p-2">
                  <img src="asset/img/icon rekomendasi/img1.png" alt="" class="mb-2">
                  <div class="card-body">
                    <h4>IDR. 200.000.000</h4>
                    <p>Baturaja Timu Kab. OKU <br> <span class="text-danger">Sewa</span></p>
                    
                  </div>
  
                  <div class="card-fasilitas d-flex justify-content-between p-3">
                    <span>
                      <img src="asset/img/icon rekomendasi/2.png" alt=""> 3
                      <p>Kamar Tidur</p> 
                    </span>                     
                    <span>
                      <img src="asset/img/icon rekomendasi/3.png" alt=""> 3
                      <p>Kamar Mandi</p>
                    </span>
                    <span>
                      <img src="asset/img/icon rekomendasi/4.png" alt=""> 100m
                      <p>Luas Tanah</p>
                    </span>
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card p-2">
                  <img src="asset/img/icon rekomendasi/img1.png" alt="" class="mb-2">
                  <div class="card-body">
                    <h4>IDR. 200.000.000</h4>
                    <p>Baturaja Timu Kab. OKU <br> <span class="text-danger">Sewa</span></p>
                    
                  </div>
  
                  <div class="card-fasilitas d-flex justify-content-between p-3">
                    <span>
                      <img src="asset/img/icon rekomendasi/2.png" alt=""> 3
                      <p>Kamar Tidur</p> 
                    </span>                     
                    <span>
                      <img src="asset/img/icon rekomendasi/3.png" alt=""> 3
                      <p>Kamar Mandi</p>
                    </span>
                    <span>
                      <img src="asset/img/icon rekomendasi/4.png" alt=""> 100m
                      <p>Luas Tanah</p>
                    </span>
                  </div>
                </div>
              </div>

            </div>        
      </section>
      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>