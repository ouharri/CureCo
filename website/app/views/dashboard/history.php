<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

<div class="container-fluid py-4">
    <!--    Product TABLE  -->
    <div class="d-flex flex-column justify-content-center align-content-center"
         style="min-height: calc(100vh - 60px );">
        <div class="row" id="Cuirses">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-2">
                        <div class="d-flex flex-wrap justify-content-between float-right">
                            <div>
                                <h6 class="text-center">Product table</h6>
                            </div>
                            <div class="d-flex flex-wrap align-items-start justify-content-center">
                                <div>
                                    <h6 class="m-0">Sort By :</h6>
                                </div>
                                <div class="d-flex">
                                    <select class="mx-3 px-1 border-radius-2xl d-flex align-items-center"
                                            id="sortBy" style="height: 25px;opacity: 70%;">
                                        <option value="users"> admin</option>
                                        <option value="action"> action</option>
                                        <option value="role"> role</option>
                                        <option value="item"> item</option>
                                        <option value="date"> date</option>
                                    </select>
                                    <div class="opacity-4 cursor-pointer" style="color: var(--blue)" id="sortByDir">
                                        <i class='bx bx-sort-up bx-sm'></i>
                                    </div>
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
                                        admin
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        action
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        role
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        item
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        date
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="tbodyProduct">
                                <?php if (isset($history)) {
                                    foreach ($history as $c) : ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="<?=$c['img']?>"
                                                             class="avatar avatar-sm me-3" alt="user1"
                                                             style="position: relative;">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $c['name'] ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 text-center"><?= $c['action'] ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 text-center"><?= $c['role'] ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0 text-center"><?= $c['item'] ?></p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold text-center mb-1"><?= $c['date'] ?></p>
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

<script src="<?= url('js/dashboard/history.js') . '?v=' . time() ?>"></script>
