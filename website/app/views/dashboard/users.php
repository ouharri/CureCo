<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>
    <div class="d-flex flex-column justify-content-center align-content-center"
         style="min-height: calc(100vh - 60px );">
        <div class="container-fluid py-4">
            <!--    category TABLE  -->
            <div class="row" id="Navire">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Users table</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7">
                                            id
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            First Name
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Last Name
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Email
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Created At
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Role
                                        </th>
                                        <th class="text-secondary opacity-7"></th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (isset($users)) {
                                        foreach ($users as $u) : ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex py-1">
                                                        <div>
                                                            <img src="<?=$u['img'] ?>"
                                                                 class="avatar avatar-sm me-3" alt="user1"
                                                                 style="position: relative;">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm"><?= $u['id'] ?></h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0 text-center"><?= $u['firstName'] ?></p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0 text-center"><?= $u['lastName'] ?></p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0 text-center"><?= $u['email'] ?></p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0 text-center"><?= $u['created_at'] ?></p>
                                                </td>
                                                <td>
                                                    <?=$u['is_admin']? '
                                                        <p class="text-xs font-weight-bold mb-0 text-center">
                                                            <span class="badge badge-sm bg-gradient-success">Admin</span>
                                                        </p>
                                                    ' : '
                                                         <p class="text-xs font-weight-bold mb-0 text-center">
                                                            <span class="badge badge-sm bg-gradient-secondary">User</span>
                                                        </p>
                                                    '?>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="<?= url('dashboard/editUsers/' . $u['id']) ?>"
                                                       class="text-secondary font-weight-bold text-xs"
                                                       data-toggle="tooltip" data-original-title="Edit user">
                                                        Edit
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <a onclick="deletItem('<?= url('dashboard/deletUser/' . $u['id']) ?>')"
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