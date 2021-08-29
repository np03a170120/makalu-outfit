<?php include 'header.php' ?>
<section class="cart-items sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Cart-Items</h2>
            <h3>Cart</h3>
        </div>
        <div class="cart-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row j-c-s">
                            <img src=" ./images/dummy-1.png" alt="">
                            <div class="product-title">
                                <h6>Winter jacket</h6>
                                <a href="main-product.php" target="_blank">View details</a>
                                <button>Remove</button>
                            </div>
                        </th>
                        <td>Rs 1000</td>
                        <td>
                            <div class="co-quantity">
                                <input required="" type="number" value="1" min="0" max="100">
                            </div>
                        </td>
                        <td>Rs 1000</td>
                    </tr>
                    <tr>
                        <th scope="row j-c-s">
                            <img src=" ./images/dummy-1.png" alt="">
                            <div class="product-title">
                                <h6>Winter jacket</h6>
                                <a href="main-product.php" target="_blank">View details</a>
                                <button>Remove</button>
                            </div>
                        </th>
                        <td>Rs 1000</td>
                        <td>
                            <div class="co-quantity">
                                <input required="" type="number" value="1" min="0" max="100">
                            </div>
                        </td>
                        <td>Rs 1000</td>
                    </tr>
                    <tr>
                        <th scope="row j-c-s">
                            <img src=" ./images/dummy-1.png" alt="">
                            <div class="product-title">
                                <h6>Winter jacket</h6>
                                <a href="main-product.php" target="_blank">View details</a>
                                <button>Remove</button>
                            </div>
                        </th>
                        <td>Rs 1000</td>
                        <td>
                            <div class="co-quantity">
                                <input required="" type="number" value="1" min="0" max="100">
                            </div>
                        </td>
                        <td>Rs 1000</td>
                    </tr>
                </tbody>
            </table>
            <div class="total-price">
                <h4>Total Price</h4>
                <span>Rs 3000</span>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>