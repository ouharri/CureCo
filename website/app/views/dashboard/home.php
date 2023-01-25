<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'header.php'; ?>

<!-- ======================= Cards ================== -->
<div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers"><?=$total??0?></div>
            <div class="cardName">Total product</div>
        </div>

        <div class="iconBx">
            <ion-icon name="cart-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers"><?=$max??0?></div>
            <div class="cardName">Max Price</div>
        </div>

        <div class="iconBx">
            <ion-icon name="arrow-up-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers"><?=$min??0?></div>
            <div class="cardName">Min price</div>
        </div>

        <div class="iconBx">
            <ion-icon name="arrow-down-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">$<?=$avg??0?></div>
            <div class="cardName">AVERAGE</div>
        </div>

        <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
        </div>
    </div>
</div>

<!-- ================ Product List ================= -->
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Recent Product</h2>
            <a href="<?= url('dashboard/product') ?>" class="btn">View All</a>
        </div>

        <table>
            <thead>
            <tr>
                <td>Libel</td>
                <td>Price</td>
                <td>Code Bar</td>
                <td>Expiration Date</td>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($products)) {
                foreach ($products as $pr) :?>
                    <tr>
                        <td><?= $pr['libel'] ?></td>
                        <td><?= $pr['price'] ?></td>
                        <td><?= $pr['codeBar'] ?></td>
                        <td><?= $pr['expirationDate'] ?></td>
                    </tr>
                <?php endforeach;
            } ?>
            </tbody>
        </table>
    </div>

    <!-- ================= New Customers ================ -->
    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Recent Customers</h2>
        </div>

        <table>
            <?php if (isset($users)) {
                foreach ($users as $u) : ?>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="<?=$u['img']?>" alt=""></div>
                        </td>
                        <td>
                            <h4> <?=$u['firstName']?> <?=$u['lastName']?><br> <span> <?=$u['email']?> </span></h4>
                        </td>
                    </tr>
                <?php endforeach;
            } ?>
        </table>
    </div>
</div>

<?php include_once VIEWS . 'component' . DS . 'admin' . DS . 'footer.php'; ?>


