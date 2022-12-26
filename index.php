<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    include './vendor/_header.php'; 
    
    header('Content-Type: text/html; charset=utf-8');
    ?>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/400/200/?random" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/400/200/?random" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/400/200/?random" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="pt-4 pb-0 card-grid">
        <div class="container">
            <div class="row g-4">
                <!-- Left big card -->
                <div class="col-lg-6">
                    <div class="card card-overlay-bottom card-grid-lg card-bg-scale" style="background-image:url(https://picsum.photos/400/200/?random); background-position: center left; background-size: cover;">
                        <!-- Card featured -->
                        <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                        <!-- Card Image overlay -->
                        <div class="d-flex align-items-center p-3 p-sm-4">
                            <div class="w-100 mt-auto">
                                <!-- Card category -->
                                <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a>
                                <!-- Card title -->
                                <h2 class="text-white h1"><a href="post-single-4.html" class="btn-link stretched-link text-reset">Ten tell-tale signs you need to get a new startup.</a></h2>
                                <p class="text-white">No visited raising gravity outward subject my cottage Mr be. Hold do at tore in park feet near my case. </p>
                                <!-- Card info -->
                                <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center text-white position-relative">
                                                <div class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" src="https://api.lorem.space/image/album?w=40&h=40" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Louis</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Nov 15, 2022</li>
                                    <li class="nav-item">5 min read</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right small cards -->
                <div class="col-lg-6">
                    <div class="row g-4">
                        <!-- Card item START -->
                        <div class="col-12">
                            <div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url(https://picsum.photos/400/200/?random);  background-position: center left; background-size: cover;">
                                <!-- Card Image -->
                                <!-- Card Image overlay -->
                                <div class="d-flex align-items-center p-3 p-sm-4">
                                    <div class="w-100 mt-auto">
                                        <!-- Card category -->
                                        <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                                        <!-- Card title -->
                                        <h4 class="text-white"><a href="post-single-4.html" class="btn-link stretched-link text-reset">Best Pinterest boards for learning about business</a></h4>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item position-relative">
                                                <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Bryan</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">Aug 18, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-md-6">
                            <div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url(https://picsum.photos/400/200/?random); background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="d-flex align-items-center p-3 p-sm-4">
                                    <div class="w-100 mt-auto">
                                        <!-- Card category -->
                                        <a href="#" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a>
                                        <!-- Card title -->
                                        <h4 class="text-white"><a href="post-single-4.html" class="btn-link stretched-link text-reset">Five intermediate guide to business</a></h4>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item position-relative">
                                                <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Joan</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">Jun 03, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="col-md-6">
                            <div class="card card-overlay-bottom card-grid-sm card-bg-scale" style="background-image:url(https://picsum.photos/400/200/?random);  background-position: center left; background-size: cover;">
                                <!-- Card Image overlay -->
                                <div class="d-flex align-items-center p-3 p-sm-4">
                                    <div class="w-100 mt-auto">
                                        <!-- Card category -->
                                        <a href="#" class="badge text-bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                                        <!-- Card title -->
                                        <h4 class="text-white"><a href="post-single-4.html" class="btn-link stretched-link text-reset">15 reasons to choose startup</a></h4>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item position-relative">
                                                <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Amanda</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">Jan 28, 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mb-4">
            <div class="container">


                <h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2>
                <p>Latest breaking news, pictures, videos, and special reports</p>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-9">
                    <div class="row gy-4">
                        <!-- Card item START -->
                        <?php
                            $queryTodosPost = $pdo->query("select * from post");
                            while ($linhaTodosPost = $queryTodosPost->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                        <div class="col-sm-6">
                           
                               

                                <div class="card">
                                <!-- Card img -->
                                <div class="position-relative">
                                    <img class="card-img" src="https://api.lorem.space/image/album?w=1000&h=750" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                        <!-- Card overlay bottom -->
                                        <div class="w-100 mt-auto">
                                            <!-- Card category -->
                                            <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Desenvolvimento web - PHP</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-3">
                                    <!-- Sponsored Post -->
                                    <a href="#!" class="mb-0 text-body small" tabindex="0" role="button" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="You're seeing this ad because your activity meets the intended audience of our site.">
                                        <i class="bi bi-info-circle ps-1"></i> Sponsored
                                    </a>
                                    <h4 class="card-title mt-2"><a href="post-single.html" class="btn-link text-reset fw-bold"><?php echo $linhaTodosPost['tituloPost']; ?></a></h4>
                                    <p class="card-text"><?php echo substr($linhaTodosPost['descricaoPost'], 0, 30); ?> ...</p>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="https://api.lorem.space/image/album?w=50&h=50" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                                                    <span class="ms-3"> <?php echo date('d-m-Y',strtotime($linhaTodosPost['dataPost']));  ?></span>
                                                </div>
                                            </div>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                          




                           
                        </div>
                        <?php
                            }
                            ?>
                        <!-- Card item END -->
                
                     
                        <!-- Load more START -->
                        <div class="col-12 text-center mt-5">
                            <button type="button" class="btn btn-primary-soft">Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
                        </div>
                        <!-- Load more END -->
                    </div>
                </div>

                <div class="col-lg-3 mt-5 mt-lg-0">
                    <div data-sticky="" data-margin-top="80" data-sticky-for="767">

                        <!-- Social widget START -->
                        <div class="row g-2">
                            <div class="col-4">
                                <a href="#" class="bg-facebook rounded text-center text-white-force p-3 d-block">
                                    <i class="fab fa-facebook-square fs-5 mb-2"></i>
                                    <h6 class="m-0">1.5K</h6>
                                    <span class="small">Fans</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="bg-instagram-gradient rounded text-center text-white-force p-3 d-block">
                                    <i class="fab fa-instagram fs-5 mb-2"></i>
                                    <h6 class="m-0">1.8M</h6>
                                    <span class="small">Followers</span>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="bg-youtube rounded text-center text-white-force p-3 d-block">
                                    <i class="fab fa-youtube-square fs-5 mb-2"></i>
                                    <h6 class="m-0">22K</h6>
                                    <span class="small">Subs</span>
                                </a>
                            </div>
                        </div>
                        <!-- Social widget END -->

                        <!-- Trending topics widget START -->
                        <div>
                            <h4 class="mt-4 mb-3">Trending topics</h4>
                            <!-- Category item -->
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded bg-dark-overlay-4 " style="background-image:url(https://api.lorem.space/image/album?w=550&h=550); background-position: center left; background-size: cover;">
                                <div class="p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">Desenvolvimento web</a>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(https://api.lorem.space/image/album?w=550&h=550); background-position: center left; background-size: cover;">
                                <div class="bg-dark-overlay-4 p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">Designer</a>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(https://api.lorem.space/image/album?w=550&h=550); background-position: center left; background-size: cover;">
                                <div class="bg-dark-overlay-4 p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">Marketing</a>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(https://api.lorem.space/image/album?w=550&h=550); background-position: center left; background-size: cover;">
                                <div class="bg-dark-overlay-4 p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">Photography</a>
                                </div>
                            </div>
                            <!-- Category item -->
                            <div class="text-center mb-3 card-bg-scale position-relative overflow-hidden rounded" style="background-image:url(https://api.lorem.space/image/album?w=550&h=550); background-position: center left; background-size: cover;">
                                <div class="bg-dark-overlay-4 p-3">
                                    <a href="#" class="stretched-link btn-link fw-bold text-white h5">Sports</a>
                                </div>
                            </div>
                            <!-- View All Category button -->
                            <div class="text-center mt-3">
                                <a href="#" class="fw-bold text-body text-primary-hover"><u>View all categories</u></a>
                            </div>
                        </div>
                        <!-- Trending topics widget END -->

                        <div class="row">

                            <!-- ADV widget START -->
                            <div class="col-12 col-sm-6 col-lg-12 my-4">
                                <a href="#" class="d-block card-img-flash">
                                    <img src="https://api.lorem.space/image/album?w=260&h=300" alt="">
                                </a>
                                <div class="smaller text-end mt-2">ads via <a href="#" class="text-body"><u>Bootstrap</u></a></div>
                            </div>
                            <!-- ADV widget END -->
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>




    <?php include 'vendor/_footer.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>