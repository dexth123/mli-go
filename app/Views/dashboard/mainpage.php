<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
    <style>
     .sidebar-item {
        margin-top: 10px;
        margin-bottom: 40px; /* Tambahkan jarak antara setiap item sidebar */
        }
        .recommendation {
            margin-top: 150px; /* Tinggi untuk menyertakan navbar yang tetap terlihat */
        }

        .recommendation .product-container {
            display: flex;
            justify-content: space-between;
            max-width: 900px;
            margin: 0 auto;
        }

        .recommendation .product-container .product-card {
            flex: 0 0 18%;
            max-width: 18%;
            padding: 10px;
        }

        .recommendation .product-container .product-card img {
            width: 100%;
            height: auto;
        }

        #carouselExampleControls .carousel-inner img {
            height: calc(100vh - 200px); /* Tinggi banner carousel */
            object-fit: cover;
        }   
    </style>
</head>
<body>
    <form class="form-container" action="/dashboard" method="POST">
    <div class="container">
        <h1>Tempat Beli Sayuran Murah dan Tercepat</h1>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/images/banner1.jpg') ?>" class="d-block w-100" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/images/banner2.jpg') ?>" class="d-block w-100" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/images/banner3.jpg') ?>" class="d-block w-100" alt="Banner 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="recommendation">
            <div class="product-container">
                <div class="product-card">
                    <img src="<?= base_url('assets/images/product1.jpg') ?>" alt="Product 1">
                </div>
                <div class="product-card">
                    <img src="<?= base_url('assets/images/product2.jpg') ?>" alt="Product 2">
                </div>
                <div class="product-card">
                    <img src="<?= base_url('assets/images/product3.jpg') ?>" alt="Product 3">
                </div>
                <div class="product-card">
                    <img src="<?= base_url('assets/images/product4.jpg') ?>" alt="Product 4">
                </div>
                <div class="product-card">
                    <img src="<?= base_url('assets/images/product5.jpg') ?>" alt="Product 5">
                </div>
            </div>
        </div>
    </div>
    </form>
    
    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan yang terakhir Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/53b3156941.js" crossorigin="anonymous"></script>
</body>
</html>
