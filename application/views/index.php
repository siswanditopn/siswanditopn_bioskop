<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>SiswanditoPN - Bioskop</title>

    <!-- Bootstrap Example -->
    <link href="<?= base_url('assets'); ?>/css/dashboard.css" rel="stylesheet">

    <!-- Fontawesome versi 6 -->
    <script src="https://kit.fontawesome.com/900e4dbd61.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Bioskop</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <i class="fa-fw fa-solid fa-gauge-high"></i>
                  Beranda
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa-fw fa-solid fa-location-dot"></i>
                  Kota/Kabupaten
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa-fw fa-solid fa-city"></i>
                  Bioskop
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa-fw fa-solid fa-film"></i>
                  Film
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa-fw fa-solid fa-calendar-days"></i>
                  Jadwal
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa-fw fa-solid fa-cart-shopping"></i>
                  Order
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Beranda</h1>
          </div>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil doloribus saepe nostrum inventore vitae vel temporibus, incidunt voluptas harum quod, consequatur minima quisquam sed, alias eveniet cum quas expedita placeat nemo. Dolorum assumenda reprehenderit temporibus in ab quaerat consectetur aspernatur, iusto quia a corporis dolor est asperiores recusandae. Alias deleniti accusamus obcaecati, voluptates distinctio nobis animi est minima magnam quis, cumque labore voluptas vel possimus. Fugit eaque mollitia temporibus fugiat! Saepe animi ex, rerum obcaecati, autem voluptatem veniam cupiditate, consequatur dolores exercitationem rem consectetur iure atque illo aut iste assumenda dolore nam. Ullam blanditiis impedit excepturi natus numquam, ipsum sed!
          </p>
        </main>
      </div>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets'); ?>/js/dashboard.js"></script>

  </body>
</html>