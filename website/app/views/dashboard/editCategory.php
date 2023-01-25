<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

    <div class="d-flex flex-column justify-content-center align-content-center"
         style="min-height: calc(100vh - 60px );">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <form class="px-3 py-1" method="post" enctype="multipart/form-data"
                                      action="<?= url('dashboard/editCategory') ?>/<?= $id ?? '' ?>">
                                    <div class="card-header px-0 pb-0 d-flex align-items-center">
                                        <h6>add Product Type</h6>
                                    </div>
                                    <div id="addBox">
                                        <div class="box-border border-radius-2xl p-3">
                                            <div class="form-group">
                                                <label for="productType" class="form-control-label">Libel</label>
                                                <input class="form-control" type="text" placeholder="Type Product Name"
                                                       name="category" value="<?= $libel ?? '' ?>"
                                                       id="productType" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="desc">Description</label>
                                                <textarea class="form-control" id="desc" rows="auto"
                                                          placeholder="Add description for this Type"
                                                          name="desc"><?= $desc ?? '' ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header px-0 pb-0 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-sm ms-2" name="submit">
                                            edit
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