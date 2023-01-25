<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>
<!--<link rel="stylesheet" href="--><?php //= url('css/connection.css?v=') . time() ?><!--" type="text/css" media="all"/>-->

<div class="d-flex flex-column justify-content-center align-content-center"
     style="min-height: calc(100vh - 60px );">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form class="px-3 py-1 form" id="formBox" method="post" enctype="multipart/form-data"
                                  action="<?= url('dashboard/addCategory') ?>">
                                <div class="card-header px-0 pb-0 d-flex align-items-center">
                                    <h6>add Category</h6>
                                </div>
                                <div id="addBox">
                                    <div class="box-border addCategoryBox border-radius-2xl p-3">
                                        <div class="form-group">
                                            <label for="category" class="form-control-label">
                                                Libel
                                                <input class="category form-control" type="text"
                                                       placeholder="Type Product Name"
                                                       name="productType[]"
                                                       id="category">
                                            </label>
                                            <i class="ion-ios-checkmark"></i>
                                            <i class="ion-android-alert"></i>
                                            <span></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="desc">
                                                Description :
                                                <textarea class="desc form-control" id="desc" rows="1"
                                                          placeholder="Add description for this Type"
                                                          name="desc[]"></textarea>
                                            </label>
                                            <i class="ion-ios-checkmark"></i>
                                            <i class="ion-android-alert"></i>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header px-0 pb-0 d-flex justify-content-end">
                                    <input type="hidden" name="submitBtn">
                                    <button type="button" class="btn btn-sm" id="addNewType"
                                            style="background: rgba(89,95,114,0.62) !important;">
                                        add New Category
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
<script src="<?= url('js/dashboard/addCategory.js') . '?v=' . time() ?>"></script>

