<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php #page-top">DN Clothing</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php #about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php #produk">Produk</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php #contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="../database/template_dashboard_admin/index.php">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">

            <?php 
            require_once 'dbkoneksi.php';
            ?>
            <form method="POST" action="../database/template_dashboard_admin/proses_pesanan.php">
                <div class="form-group row">
                <label for="kode" class="col-4 col-form-label text-light">No</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                    </div> 
                    <input id="id" name="id" type="text" class="form-control"
                    value="">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label text-light">Tanggal</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                    </div> 
                    <input id="tanggal" name="tanggal" type="date" class="form-control"
                    value="">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label text-light">Pakaian</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="pakaian_id" name="pakaian_id" type="text" class="form-control" 
                    value="">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="kota" class="col-4 col-form-label text-light">Quantity</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div>
                    </div> 
                    <input id="quantity" name="quantity" 
                    value="" type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                <input type="submit" name="proses"  
                class="btn btn-dark" value="Simpan"/>
                </div>
            </div>
            </form>            
              
                </div>
        <div class="social d-flex justify-content-center">
            </div>
        </section>
         <section class="contact-section bg-black"id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-dark mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Jakarta Pusat</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-dark mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">dn.cloth0@gmail.com</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-dark mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+62 882-1010-5287</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://instagram.com/dn.cloth_?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook"></i></a>
                    <a class="mx-2" href="https://wa.me/message/TZE5ZFHOWQVVK1"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; @Nabila Fahima 2023</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
