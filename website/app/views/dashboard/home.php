<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>

        <div class="search">
            <label>
                <input type="text" placeholder="Search here">
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div>

        <div class="user">
            <img src="assets/imgs/customer01.jpg" alt="">
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form class="px-3 py-1" method="post" enctype="multipart/form-data"
                                  action="<?= url('dashboard/addCategory') ?>">
                                <div class="card-header px-0 pb-0 d-flex align-items-center">
                                    <h6>add Product Type</h6>
                                </div>
                                <div id="addBox">
                                    <div class="box-border border-radius-2xl p-3">
                                        <div class="form-group">
                                            <label for="productType" class="form-control-label">Libel</label>
                                            <input class="form-control" type="text" placeholder="Type Product Name"
                                                   name="productType[]"
                                                   id="productType" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="desc">Description</label>
                                            <textarea class="form-control" id="desc" rows="1"
                                                      placeholder="Add description for this Type"
                                                      name="desc[]"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header px-0 pb-0 d-flex justify-content-end">
                                    <button type="button" class="btn btn-sm" id="addNewType">
                                        add new Type
                                    </button>
                                    <button type="submit" class="btn btn-sm ms-2" name="submit">
                                        add
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form class="px-3 py-1" method="post" enctype="multipart/form-data"
                                  action="<?= url('dashboard/addCruises') ?>">
                                <div class="card-header px-0 pb-0 d-flex align-items-center">
                                    <h6>add Category</h6>
                                </div>
                                <div id="addNewProductBox">
                                    <div class="border-radius-2xl p-3" style="border:0.001rem solid #00CC0032">
                                        <div class="form-group">
                                            <label for="matricule" class="form-control-label">Product</label>
                                            <input class="form-control" type="number" step="any"
                                                   value="<?= $matricule ?>"
                                                   id="matricule" name="matricule" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="Libel" class="form-control-label">Libel</label>
                                            <input class="form-control" type="text" placeholder="Product name"
                                                   name="Libel"
                                                   id="Libel" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Image" class="form-control-label">Image</label>
                                            <p id="imageTextAlert" class="opacity-75 fst-italic fs-6 m-0 ms-2"
                                               style="color: red !important; font-size: 13px !important; opacity: 50% !important;"></p>
                                            <input class="form-control" type="file" id="image"
                                                   onchange="upload_image_check()"
                                                   accept="image/png, image/jpg, image/gif, image/jpeg" name="image"
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label for="desc">Description</label>
                                            <textarea class="form-control" id="desc" rows="1"
                                                      placeholder="Add description for this product"
                                                      name="desc"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="qty" class="form-control-label">Quantity</label>
                                            <input class="form-control" name="qty" type="number"
                                                   placeholder="how many products do we have in stock?" min=1 id="qty"
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label for="category" class="form-control-label">Category</label>
                                            <select class="form-control" name="category" id="category">
                                                <?php foreach ($Port as $a) : ?>
                                                    <option value="<?= $a['id'] ?>"> <?= $a['name'] ?> </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="price" class="form-control-label">Price</label>
                                            <input class="form-control" name="price" type="number"
                                                   placeholder="how mush night in this product" min=1 step="0.1" id="price"
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label for="expirationDate" class="form-control-label">Expiration
                                                date</label>
                                            <input class="form-control" type="date" id="expirationDate"
                                                   name="expirationDate" required>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card-header px-0 pb-0 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm" id="addNewType">
                                            add New Product
                                        </button>
                                        <button type="submit" class="btn btn-sm ms-2" name="submit">
                                            add
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================= Cards ================== -->
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">1,504</div>
                <div class="cardName">Daily Views</div>
            </div>

            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">80</div>
                <div class="cardName">Sales</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">284</div>
                <div class="cardName">Comments</div>
            </div>

            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">$7,842</div>
                <div class="cardName">Earning</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>

    <!-- ================ Order Details List ================= -->
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Recent Orders</h2>
                <a href="#" class="btn">View All</a>
            </div>

            <table>
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Payment</td>
                    <td>Status</td>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivered">Delivered</span></td>
                </tr>

                <tr>
                    <td>Dell Laptop</td>
                    <td>$110</td>
                    <td>Due</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>

                <tr>
                    <td>Apple Watch</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">Return</span></td>
                </tr>

                <tr>
                    <td>Addidas Shoes</td>
                    <td>$620</td>
                    <td>Due</td>
                    <td><span class="status inProgress">In Progress</span></td>
                </tr>

                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivered">Delivered</span></td>
                </tr>

                <tr>
                    <td>Dell Laptop</td>
                    <td>$110</td>
                    <td>Due</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>

                <tr>
                    <td>Apple Watch</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">Return</span></td>
                </tr>

                <tr>
                    <td>Addidas Shoes</td>
                    <td>$620</td>
                    <td>Due</td>
                    <td><span class="status inProgress">In Progress</span></td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- ================= New Customers ================ -->
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Recent Customers</h2>
            </div>

            <table>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>David <br> <span>Italy</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Amit <br> <span>India</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>David <br> <span>Italy</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Amit <br> <span>India</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>David <br> <span>Italy</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Amit <br> <span>India</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>David <br> <span>Italy</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Amit <br> <span>India</span></h4>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<script>
    document.getElementById('addNewType').addEventListener('click', () => {
        const html = document.createElement('div')
        html.classList = 'box-border border-radius-2xl p-3 mt-4'
        html.innerHTML = `
        <div class="form-group">
            <label for="productType" class="form-control-label">Libel</label>
            <input class="form-control" type="text" placeholder="Type Product Name"
                   name="productType[]"
                   id="productType" required>
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <textarea class="form-control" id="desc" rows="1"
                      placeholder="Add description for this Type"
                      name="desc[]"></textarea>
        </div>`
        document.getElementById('addBox').appendChild(html);
    });
</script>

<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'footer.php'; ?>


