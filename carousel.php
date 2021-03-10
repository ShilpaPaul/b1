<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffa64d;">
        <div class="container-fluid">
          <a class="navbar-brand" href="">CHOICE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost/bootstrap/navigation.html?#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/bootstrap/">LOGIN/REGISTER</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="https://weneedfun.com/wp-content/uploads/2016/01/Flower-Petals-5.jpg">FLOWER</a></li>
                  <li><a class="dropdown-item" href="https://shilpapaul.github.io/b1/carousel.html">Carousel</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="https://shilpapaul.github.io/b1/accordian.html">Accordian</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <center><h1>CAROUSEL</h1></center>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://th.bing.com/th/id/R33d02c67b4a6e90abe2d7a58f764edd8?rik=JYmQaMVSULpYQg&riu=http%3a%2f%2fthewowstyle.com%2fwp-content%2fuploads%2f2015%2f01%2fnature-images.jpg&ehk=BNPsuSOUR7ATZ3EpRwxx1xFl7LUbO3tYlu1wFLCBrCE%3d&risl=&pid=ImgRaw" class="d-block w-100" alt="img1" height="300px">
                      </div>
                      <div class="carousel-item">
                        <img src="https://images.wallpaperscraft.com/image/road_winter_snow_135079_1920x1080.jpg" height="300px" class="d-block w-100" alt="img2">
                      </div>
                      <div class="carousel-item">
                        <img src="https://th.bing.com/th/id/Reb0a56f97c5448bd667d207f4f7da584?rik=wRcZDdR%2b3DundA&riu=http%3a%2f%2f1.bp.blogspot.com%2f-1-LKgITZNp4%2fUh7HpTpOFbI%2fAAAAAAAAEHM%2fJyWoGLN_qoE%2fs1600%2fAutumn-Oak-Trees1.jpg&ehk=2dqYBkW%2fHJlikyO1KHeFsvtHzpyMgK5WH8G%2fwLNLnLQ%3d&risl=&pid=ImgRaw" height="300px" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <center><h1>CAROUSEL WITH CONTROL</h1></center>
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://www.hdwallpaper.nu/wp-content/uploads/2015/06/1843513.jpg" class="d-block w-100" alt="..." height="600">
                      </div>
                      <div class="carousel-item">
                        <img src="http://www.hdwallpaperspulse.com/wp-content/uploads/2019/05/11/cool-Purple-Flowers-Wallpaper.jpeg" class="d-block w-100" alt="..." height="600">
                      </div>
                      <div class="carousel-item">
                        <img src="https://weneedfun.com/wp-content/uploads/2016/01/Flower-Petals-5.jpg" class="d-block w-100" alt="..." height="600">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>