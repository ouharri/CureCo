<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>
<div class="d-flex flex-column justify-content-center align-content-center"
     style="min-height: calc(100vh - 60px );">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form class="form px-3 py-1" method="post" enctype="multipart/form-data"
                                  action="<?= url('dashboard/addProduct') ?>">
                                <div class="card-header px-0 pb-0 d-flex align-items-center">
                                    <h6>add Product</h6>
                                </div>
                                <div id="addNewProductBox">
                                    <div class="border-radius-2xl addProductBox p-3" id="productContainer"
                                         style="border:0.001rem solid #00CC0032">
                                        <div class="form-group">
                                            <label for="Libel" class="form-control-label">
                                                Libel :
                                                <input class="Libel form-control" type="text" placeholder="Product name"
                                                       name="Libel[]"
                                                       id="Libel">
                                            </label>
                                            <i class="ion-ios-checkmark"></i>
                                            <i class="ion-android-alert"></i>
                                            <span></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="Image" class="form-control-label">
                                                Image :
                                                <input class="image form-control" type="file" id="image"
                                                       accept="image/png, image/jpg, image/gif, image/jpeg"
                                                       name="image[]">
                                            </label>
                                            <i class="ion-ios-checkmark"></i>
                                            <i class="ion-android-alert"></i>
                                            <span></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="desc">
                                                Description :
                                                <textarea class="desc form-control" id="desc" rows="1"
                                                          placeholder="Add description for this product"
                                                          name="desc[]"></textarea>
                                            </label>
                                            <i class="ion-ios-checkmark"></i>
                                            <i class="ion-android-alert"></i>
                                            <span></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="qty" class="form-control-label">
                                                Quantity :
                                                <input class="qty form-control" name="qty[]" type="number"
                                                       placeholder="how many products do we have in stock?" min=1
                                                       id="qty">
                                            </label>
                                            <i class="ion-ios-checkmark"></i>
                                            <i class="ion-android-alert"></i>
                                            <span></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="category" class="form-control-label">
                                                Category :
                                                <select class="form-control" name="category[]" id="category">
                                                    <?php if (isset($category)) {
                                                        foreach ($category as $ca) : ?>
                                                            <option value="<?= $ca['id'] ?>"> <?= $ca['libel'] ?> </option>
                                                        <?php endforeach;
                                                    } ?>
                                                </select>
                                            </label>
                                            <i class="ion-ios-checkmark"></i>
                                            <i class="ion-android-alert"></i>
                                            <span></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="price" class="form-control-label">
                                                Price :
                                                <input class="price form-control" name="price[]" type="number"
                                                       placeholder="how mush night in this product" min=1 step="0.1"
                                                       id="price">
                                            </label>
                                            <i class="ion-ios-checkmark"></i>
                                            <i class="ion-android-alert"></i>
                                            <span></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="barCode" class="form-control-label">
                                                Bar code :
                                                <input class="barCode form-control" name="barCode[]" type="number"
                                                       placeholder="how mush night in this product" min=1 step="1"
                                                       id="barCode">
                                            </label>
                                            <i class="ion-ios-checkmark"></i>
                                            <i class="ion-android-alert"></i>
                                            <span></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="company" class="form-control-label">
                                                Company :
                                                <input class="company form-control" type="text"
                                                       placeholder="Product Company"
                                                       name="company[]"
                                                       id="company">
                                            </label>
                                            <i class="ion-ios-checkmark"></i>
                                            <i class="ion-android-alert"></i>
                                            <span></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="expirationDate" class="form-control-label">
                                                Expiration date :
                                                <input class="form-control" type="date" id="expirationDate"
                                                       name="expirationDate[]">
                                            </label>
                                            <i class="ion-ios-checkmark"></i>
                                            <i class="ion-android-alert"></i>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header px-0 pb-0 d-flex justify-content-end">
                                    <button type="button" class="btn btn-sm" id="addNewProduct"
                                            style="background: rgba(89,95,114,0.62) !important;">
                                        add New Product
                                    </button>
                                    <button type="submit" class="btn btn-sm ms-2">
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
</div>
<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'footer.php'; ?>

<script src="<?= url('js/dashboard/addProduct.js') . '?v=' . time() ?>"></script>
