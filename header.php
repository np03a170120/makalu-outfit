<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fontawesome-free-5.15.2-web/css/all.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />

    <link rel="stylesheet" href="./css/main.css">
    <title>Makalu Outfit</title>
</head>
<style>
.sidenav {
    position: fixed;
    top: 0;
    right: -100%;
    transition: all .8s ease-in-out;
    z-index: 9999999999;
    background: #fff;
    height: 100%;
    width: 100%;
    max-width: 500px;
    padding: 40px 0;
    border-left: 1px solid #efefef;
    opacity: 0;
    overflow-y: auto;
}

.sidenav.open {
    right: 0;
    opacity: 1;
}
</style>

<body>
    <header>
        <div class="container-fluid">
            <div class="header-top">
                <div class="row j-c">
                    <div class="col-lg-8 w-100">
                        <ul class="ht-contact j-c">
                            <li><i class="fas fa-mobile-alt"></i>01-4486712</li>
                            <li><i class="far fa-envelope"></i>dummy@company.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-2 ">
                        <ul class="social-links j-c ">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <div class="track-order">
                            <a href="#"><i class="fas fa-map-pin"></i>Track My order</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="row">
                    <div class="col-lg-3 j-c-c">
                        <div class="logo">
                            <img src="./images/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 j-c-c">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <!-- <li class="nav-item active">
                                            <a classs="nav-link" href="#">Home <span
                                                    class="sr-only">(current)</span></a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="single-category.php">Men</a>
                                            <div class="dropdown-nav">
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Jacket & Wear Mens</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Bottoms</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Fleece</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Women</a>
                                            <div class="dropdown-nav">
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Jacket & Wear</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Bottoms</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Fleece</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Kids</a>
                                            <div class="dropdown-nav">
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Jacket & Wear</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Bottoms</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Fleece</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Shoes</a>
                                            <div class="dropdown-nav">
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Jacket & Wear</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Bottoms</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Fleece</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Climbing</a>
                                            <div class="dropdown-nav">
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Jacket & Wear</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Bottoms</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dn-section-single">
                                                    <div class="dn-title">
                                                        <h3>Fleece</h3>
                                                    </div>
                                                    <ul class="dn">
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                        <li><a href="#">Fleece</a></li>
                                                        <li><a href="#">Jacket</a></li>
                                                        <li><a href="#">Bottom</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                    </div>
                    <div class="col-lg-3 j-c-c pos-rel">
                        <div id="myDIV">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search" aria-label="Search"
                                    aria-describedby="search-addon" />

                            </div>
                            <div class="search-filter">
                                <div class="row">
                                    <div class="col-lg-3 mr">
                                        <form action="/action_page.php" class="pt-3">
                                            <label for="cars">Accessories</label>
                                            <select id="cars" name="cars">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="fiat">Fiat</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="col-lg-3">
                                        <form action="/action_page.php" class="pt-3">
                                            <label for="cars">Colors</label>
                                            <select id="cars" name="cars">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="fiat">Fiat</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <form action="/action_page.php" class="pt-3">
                                            <label for="cars">Gender</label>
                                            <select id="cars" name="cars">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="fiat">Fiat</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <form action="/action_page.php" class="pt-3">
                                            <label for="cars">Equipments</label>
                                            <select id="cars" name="cars">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="fiat">Fiat</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="submit-btns j-c">
                                    <button class="btn-search">Search</button>
                                    <button class="btn-delete">Delete</button>
                                </div>
                            </div>
                        </div>
                        <ul class="shop-feature">
                            <li><span class="search_id"><i class="fas fa-search"></i></span></li>
                            <li class="notify"><a href="cart-items.php"><i class="fas fa-shopping-cart"></i></a>
                                <div class="sf-count">
                                    <span>10</span>
                                </div>
                            </li>
                            <li class="notify"><a href="wishlist.php"><i class="fas fa-heart"></i></a>
                                <div class="sf-count">
                                    <span>10</span>
                                </div>
                            </li>

                            <!-- <li><a href="login.php"><i class="fas fa-user"></i></a></li>
                            <li><a href="register.php"><i class="fas fa-user"></i></a></li> -->
                            <div class="dropdown">
                                <li class="droplink"><a href="#"><i class="fas fa-user"></i></a></li>
                                <div class="dropdown-content">
                                    <a href="login.php">
                                        <i class="fas fa-lock"></i>
                                        Login
                                    </a>
                                    <a href="register.php">
                                        <i class="fas fa-key"></i>
                                        Register
                                    </a>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>