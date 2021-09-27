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
<section class="cart-items sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Checkout</h2>
            <h3>Checkout</h3>
        </div>
        <div class="billing-detail">
            <div class="row">
                <div class="col-lg-7">
                    <div class="bd-title">
                        <h4>Billing Details</h4>
                    </div>
                    <div class="bd-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Full Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter your full name" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Phone Number</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter your Phone Number" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Full Address</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter your Full Address" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Email Address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter your Email Address" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Shipping Location</label>
                                    <input list="brow" type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter your Shipping Location" required>
                                    <datalist id="brow">
                                        <option value="Baneshwor">
                                        <option value="Chabahil">
                                        <option value="Bouddha">
                                        <option value="Sukedhara">
                                        <option value="New Road">
                                    </datalist>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"> Order Notes (optional)</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bd-table-product">
                        <div class="bd-title">
                            <h4>Your Order</h4>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Erke Shoes</td>
                                    <td>1</td>
                                    <td>32000</td>
                                </tr>
                                <tr>
                                    <td>Erke Shoes</td>
                                    <td>1</td>
                                    <td>32000</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>Rs.14400</td>
                                </tr>
                                <tr>
                                    <td>Total weight of all product</td>
                                    <td>0.5 kg</td>
                                </tr>
                                <tr>
                                    <td>Shipping Cost</td>
                                    <td>Rs.3000</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>360000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="bd-payment">
                        <div class="bd-title">
                            <h4>Payment</h4>
                        </div>

                        <div class="cash-on-delivery">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Cash on delivery
                                </label>
                            </div>
                        </div>

                        <div class="terms">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    I have read and agree to the websites <a href="dynamic.php">Terms & Conditions</a>
                                </label>
                            </div>
                        </div>

                        <div class="learn-more">
                            <a href="#">place Order</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php' ?>