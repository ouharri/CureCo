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
    <div class="d-flex flex-column justify-content-center align-content-center"
         style="min-height: calc(100vh - 60px );">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <form class="px-3 py-1" method="post" enctype="multipart/form-data"
                                      action="<?= url('dashboard/addCategory') ?>">
                                    <div class="card-header px-0 pb-0 d-flex align-items-center">
                                        <h6>add Category</h6>
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
                                            add New Category
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
    </div>
</div>

<script>
    document.getElementById('addNewType').addEventListener('click', () => {
        const html = document.createElement('div');
        html.classList = 'box-border border-radius-2xl p-3 mt-4 position-relative';
        html.innerHTML = `
        <i class="removeCategory fa-solid fa-x cursor-pointer p-2 text-danger position-absolute" style="right:7px;top: 7px;z-index: 10 "></i>
        <div class="form-group">
            <div style="position: relative">
                <label for="productType" class="form-control-label">Libel</label>
            </div>
            <input class="form-control" type="text" placeholder="Type Product Name"
                   name="productType[]"
                   id="productType" required>
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <textarea class="form-control" id="desc" rows="1"
                      placeholder="Add description for this Type"
                      name="desc[]"></textarea>
        </div>`;
        const tmp = document.getElementById('addBox').appendChild(html);
        tmp.scrollIntoView();
        const category = document.getElementsByClassName('removeCategory');
        for (let i = 0; i < category.length; i++) {
            category[i].addEventListener('click', (e) => {
                const elem = e.target;
                const parent = elem.parentElement;
                parent.remove();
            });
        }
    });
</script>
<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'footer.php'; ?>

