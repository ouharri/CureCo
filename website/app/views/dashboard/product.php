<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

<div class="container-fluid py-4">
    <!--    Product TABLE  -->
    <div class="d-flex flex-column justify-content-center align-content-center"
         style="min-height: calc(100vh - 60px );">
        <div class="row" id="Cuirses">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-2">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6>Product table</h6>
                            </div>
                            <div class="d-flex align-items-start justify-content-center">
                                <h6 class="m-0">Sort By :</h6>
                                <select class="mx-3 px-1 border-radius-2xl d-flex align-items-center"
                                        id="sortBy" style="height: 25px;opacity: 70%">
                                    <option value="libel"> libel</option>
                                    <option value="qnt"> Quantity</option>
                                    <option value="price"> price</option>
                                    <option value="desc"> Description</option>
                                    <option value="codeBar"> code Bar</option>
                                    <option value="expirationDate"> expiration Date</option>
                                    <option value="company"> company</option>
                                </select>
                                <div class="opacity-4 cursor-pointer" style="color: var(--blue)" id="sortByDir">
                                    <i class='bx bx-sort-up bx-sm'></i>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        libel
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        category
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        quantity
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        price
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        description
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        codeBar
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        expirationDate
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        company
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody id="tbodyProduct">
                                <?php if (isset($products)) {
                                    foreach ($products as $c) : ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($c['img']) ?>"
                                                             class="avatar avatar-sm me-3" alt="user1"
                                                             style="position: relative;">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $c['libel'] ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 text-center"><?= $c['category'] ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 text-center"><?= $c['qnt'] ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold text-center mb-1"
                                                   style="min-width: 100px;max-width: 150px"><?= $c['price'] ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold text-center mb-1 text-truncate"
                                                   style="min-width: 100px;max-width: 150px"><?= $c['desc'] ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 text-center"><?= $c['codeBar'] ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 text-center mb-1"><?= $c['expirationDate'] ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-secondary text-center mb-0"><?= $c['company'] ?></p>
                                            </td>
                                            <td class="align-middle">
                                                <a href="<?= url('dashboard/editproduct/' . $c['id']) ?>"
                                                   class="text-secondary font-weight-bold text-xs">
                                                    Edit
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a onclick="deletItem('<?= url('dashboard/deletproduct/' . $c['id']) ?>')"
                                                   class="text-secondary font-weight-bold text-xs cursor-pointer"
                                                   data-toggle="tooltip" data-original-title="Edit user">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach;
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'footer.php'; ?>
<script src="<?= url('js/dashboard/Product.js') . '?v=' . time() ?>"></script>
