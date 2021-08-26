<?php include 'header.php' ?>

<section class="breadcrumb">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
            <!-- <li class="breadcrumb-item"><a href="#">Library</a></li> -->
            <li class="breadcrumb-item active" aria-current="page">Wind Cheater</li>
        </ol>
    </nav>
</section>

<section class="main-product sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mp-img">
                    <div uk-lightbox>
                        <a class="uk-button uk-button-default my-lighbox-class" href="./images/main-prod-dummy.png">
                            <img class="myImage" src="./images/main-prod-dummy.png" alt="product"></a>
                    </div>
                    <div class="note">
                        <p><span>Note:</span>click on the image to view full picture</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 cus-pad-0">
                <div class="mposd-title">
                    <h6>Combo pack</h6>
                </div>
                <div class="mpos-desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis repellat
                        laboriosam
                        facere iste,
                        at eos totam commodi tempore quae reprehenderit fuga. Soluta voluptate </p>
                </div>
                <div class="color-option">
                    <div class="co-title">
                        <h6>color option</h6>
                    </div>
                    <div class="co-wear">
                        <input class="co-wear-input" type="image" src="./images/main-prod-dummy.png" alt="Submit"
                            width="50" height="50">
                        <input class="co-wear-input" type="image" src="./images/brown.png.png" alt="Submit" width="50"
                            height="50">
                        <input class="co-wear-input" type="image" src="./images/orange.png.png" alt="Submit" width="50"
                            height="50">
                    </div>

                </div>


                <div class="prices">
                    <span class="discount">Rs.1700</span>
                    <span class="new-price">Rs.1600</span>
                </div>
                <div class="learn-more">
                    <a href="#">Buy now</a>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'footer.php' ?>