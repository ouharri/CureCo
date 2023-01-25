<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

    <div class="d-flex flex-column justify-content-center align-content-center"
         style="min-height: calc(100vh - 60px );">
        <div class="container-fluid py-4">
            <!--    category TABLE  -->
            <div class="row" id="Navire">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Category table</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Libel
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            description
                                        </th>
                                        <th class="text-secondary opacity-7"></th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (isset($category)) {
                                        foreach ($category as $ca) : ?>
                                            <tr>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0 ps-3"><?= $ca['libel'] ?></p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-truncate font-weight-bold m-0"
                                                       style="min-width: 453px;max-width: 628px"><?= $ca['desc'] ?></p>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="<?= url('dashboard/editcategory/' . $ca['id']) ?>"
                                                       class="text-secondary font-weight-bold text-xs"
                                                       data-toggle="tooltip" data-original-title="Edit user">
                                                        Edit
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <a onclick="deletItem('<?= url('dashboard/deletcategory/' . $ca['id']) ?>')"
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