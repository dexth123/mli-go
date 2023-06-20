<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <style>
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
    <!-- Bootstrap JS -->
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>
