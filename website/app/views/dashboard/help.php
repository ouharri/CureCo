<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

<div class="d-flex flex-column justify-content-center align-content-center"
     style="min-height: calc(100vh - 60px );">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form class="px-3 py-1 form" id="formBox" method="post" enctype="multipart/form-data"
                                  action="<?= url('dashboard/help') ?>">
                                <div class="card-header px-0 pb-0 d-flex align-items-center">
                                    <h6>Send Mail to Super admin for Helping :</h6>
                                </div>
                                <div id="addBox">
                                    <div class="box-border border-radius-2xl p-3">
                                        <div class="form-group">
                                            <label for="desc">
<!--                                                Description :-->
                                                <textarea class="sendMail form-control" id="desc" rows="10"
                                                          placeholder="write your mail here and make sure we take care of it !"
                                                          name="mail" required></textarea>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header px-0 pb-0 d-flex justify-content-end">
                                    <button type="submit" name="send" class="btn btn-sm ms-2">
                                        send
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
