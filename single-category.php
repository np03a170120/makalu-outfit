<?php include 'header.php' ?>

<section class="breadcrumb">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
            <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">checkout</li>
            <li class="breadcrumb-item active" aria-current="page">checkout</li>
        </ol>
    </nav>
</section>
<section class="category sec-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="test">
                    <div class="sec-title-inner ">
                        <h2>Men</h2>
                    </div>
                    <!-- FILTER BY Price -->
                    <div class="filter-single-check">
                        <div class="fsc-title">
                            <h6>Sort By</h6>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Recommended
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Newest
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Loweest Price
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Highest Price
                            </label>
                        </div>
                    </div>
                    <!-- <ul class="wear-types ">
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Fleece</a></li>
                        <li><a href="#">bottoms</a></li>
                        <li><a href="#">footwear</a></li>
                    </ul> -->
                    <!-- <div class="filter-single">
                        <div class="fs-title">
                            <form action="/action_page.php" class="pt-3">
                                <label for="size">Sort By</label>
                                <select id="size" name="size">
                                    <option value="volvo">Recommended Price</option>
                                    <option value="saab">Newest</option>
                                    <option value="fiat">Lowest price</option>
                                    <option value="audi">Highest Price</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="filter-single">
                        <div class="fs-title">
                            <form action="/action_page.php" class="pt-3">
                                <label for="size">Size</label>
                                <select id="size" name="size">
                                    <option value="volvo">SM</option>
                                    <option value="saab">M</option>
                                    <option value="fiat">XL</option>
                                    <option value="audi">XXL</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="filter-single">
                        <div class="fs-title">
                            <form action="/action_page.php" class="pt-3">
                                <label for="size">Color Option</label>
                                <select id="size" name="size">
                                    <option value="volvo">SM</option>
                                    <option value="saab">M</option>
                                    <option value="fiat">XL</option>
                                    <option value="audi">XXL</option>
                                </select>
                            </form>
                        </div>
                    </div> -->

                    <!-- FILTER BY BRAND -->
                    <div class="filter-single-check">
                        <div class="fsc-title">
                            <h6>Brand</h6>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Adidas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Kappa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Puma
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Kappa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Puma
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Kappa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Puma
                            </label>
                        </div>
                        <div class="read-more">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Puma
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Puma
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Puma
                                </label>
                            </div>
                        </div>
                        <button id="read_more_btn">Read More</button>
                    </div>

                    <!-- FILTER BY Color -->
                    <div class="filter-single-check">
                        <div class="fsc-title">
                            <h6>Color Option</h6>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Adidas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Kappa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Puma
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Kappa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Puma
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Kappa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Puma
                            </label>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card-product">
                            <a href="main-product.php">
                                <div class="cp-img">
                                    <img src="./images/dummy-1.png" alt="">
                                </div>
                                <ul class="shop-feature">
                                    <li><i class="fas fa-search"></i></li>
                                    <li><i class="fas fa-shopping-cart"></i></li>
                                    <li><i class="fas fa-heart"></i></li>
                                </ul>
                                <div class="cp-title">
                                    <h6>Winter Gloves</h6>
                                </div>
                                <div class="prices">
                                    <span class="discount">Rs.1700</span>
                                    <span class="new-price">Rs.1600</span>
                                </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-product">
                            <div class="cp-img">
                                <img src="./images/dummy-2.png" alt="">
                            </div>
                            <ul class="shop-feature">
                                <li><i class="fas fa-search"></i></li>
                                <li><i class="fas fa-shopping-cart"></i></li>
                                <li><i class="fas fa-heart"></i></li>
                            </ul>
                            <div class="cp-title">
                                <h6>Winter Gloves</h6>
                            </div>
                            <div class="prices">
                                <!-- <span class="discount">Rs.1700</span> -->
                                <span class="new-price">Rs.1600</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-product">
                            <div class="cp-img">
                                <img src="./images/dummy-3.png" alt="">
                            </div>
                            <ul class="shop-feature">
                                <li><i class="fas fa-search"></i></li>
                                <li><i class="fas fa-shopping-cart"></i></li>
                                <li><i class="fas fa-heart"></i></li>
                            </ul>
                            <div class="cp-title">
                                <h6>Winter Gloves</h6>
                            </div>
                            <div class="prices">
                                <!-- <span class="discount">Rs.1700</span> -->
                                <span class="new-price">Rs.1600</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-product">
                            <div class="cp-img">
                                <img src="./images/dummy-4.png" alt="">
                            </div>
                            <ul class="shop-feature">
                                <li><i class="fas fa-search"></i></li>
                                <li><i class="fas fa-shopping-cart"></i></li>
                                <li><i class="fas fa-heart"></i></li>
                            </ul>
                            <div class="cp-title">
                                <h6>Winter Gloves</h6>
                            </div>
                            <div class="prices">
                                <!-- <span class="discount">Rs.1700</span> -->
                                <span class="new-price">Rs.1600</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-product">
                            <div class="cp-img">
                                <img src="./images/dummy-1.png" alt="">
                            </div>
                            <ul class="shop-feature">
                                <li><i class="fas fa-search"></i></li>
                                <li><i class="fas fa-shopping-cart"></i></li>
                                <li><i class="fas fa-heart"></i></li>
                            </ul>
                            <div class="cp-title">
                                <h6>Winter Gloves</h6>
                            </div>
                            <div class="prices">
                                <span class="discount">Rs.1700</span>
                                <span class="new-price">Rs.1600</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-product">
                            <div class="cp-img">
                                <img src="./images/dummy-2.png" alt="">
                            </div>
                            <ul class="shop-feature">
                                <li><i class="fas fa-search"></i></li>
                                <li><i class="fas fa-shopping-cart"></i></li>
                                <li><i class="fas fa-heart"></i></li>
                            </ul>
                            <div class="cp-title">
                                <h6>Winter Gloves</h6>
                            </div>
                            <div class="prices">
                                <!-- <span class="discount">Rs.1700</span> -->
                                <span class="new-price">Rs.1600</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-product">
                            <div class="cp-img">
                                <img src="./images/dummy-3.png" alt="">
                            </div>
                            <ul class="shop-feature">
                                <li><i class="fas fa-search"></i></li>
                                <li><i class="fas fa-shopping-cart"></i></li>
                                <li><i class="fas fa-heart"></i></li>
                            </ul>
                            <div class="cp-title">
                                <h6>Winter Gloves</h6>
                            </div>
                            <div class="prices">
                                <!-- <span class="discount">Rs.1700</span> -->
                                <span class="new-price">Rs.1600</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-product">
                            <div class="cp-img">
                                <img src="./images/dummy-4.png" alt="">
                            </div>
                            <ul class="shop-feature">
                                <li><i class="fas fa-search"></i></li>
                                <li><i class="fas fa-shopping-cart"></i></li>
                                <li><i class="fas fa-heart"></i></li>
                            </ul>
                            <div class="cp-title">
                                <h6>Winter Gloves</h6>
                            </div>
                            <div class="prices">
                                <!-- <span class="discount">Rs.1700</span> -->
                                <span class="new-price">Rs.1600</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-product">
                            <div class="cp-img">
                                <img src="./images/dummy-1.png" alt="">
                            </div>
                            <ul class="shop-feature">
                                <li><i class="fas fa-search"></i></li>
                                <li><i class="fas fa-shopping-cart"></i></li>
                                <li><i class="fas fa-heart"></i></li>
                            </ul>
                            <div class="cp-title">
                                <h6>Winter Gloves</h6>
                            </div>
                            <div class="prices">
                                <span class="discount">Rs.1700</span>
                                <span class="new-price">Rs.1600</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-product">
                            <div class="cp-img">
                                <img src="./images/dummy-2.png" alt="">
                            </div>
                            <ul class="shop-feature">
                                <li><i class="fas fa-search"></i></li>
                                <li><i class="fas fa-shopping-cart"></i></li>
                                <li><i class="fas fa-heart"></i></li>
                            </ul>
                            <div class="cp-title">
                                <h6>Winter Gloves</h6>
                            </div>
                            <div class="prices">
                                <!-- <span class="discount">Rs.1700</span> -->
                                <span class="new-price">Rs.1600</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-product">
                            <div class="cp-img">
                                <img src="./images/dummy-3.png" alt="">
                            </div>
                            <ul class="shop-feature">
                                <li><i class="fas fa-search"></i></li>
                                <li><i class="fas fa-shopping-cart"></i></li>
                                <li><i class="fas fa-heart"></i></li>
                            </ul>
                            <div class="cp-title">
                                <h6>Winter Gloves</h6>
                            </div>
                            <div class="prices">
                                <!-- <span class="discount">Rs.1700</span> -->
                                <span class="new-price">Rs.1600</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card-product">
                            <div class="cp-img">
                                <img src="./images/dummy-4.png" alt="">
                            </div>
                            <ul class="shop-feature">
                                <li><i class="fas fa-search"></i></li>
                                <li><i class="fas fa-shopping-cart"></i></li>
                                <li><i class="fas fa-heart"></i></li>
                            </ul>
                            <div class="cp-title">
                                <h6>Winter Gloves</h6>
                            </div>
                            <div class="prices">
                                <!-- <span class="discount">Rs.1700</span> -->
                                <span class="new-price">Rs.1600</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>