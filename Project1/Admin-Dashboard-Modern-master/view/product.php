<?php include('../model/product_class.php') ?>
<?php include('../compoment/sidebar.php') ?>
<div class="main-content">

    <?php include('../compoment/header.php') ?>


    <main>

        <div class="page-header">
            <h1>Home</h1>
            <!-- <small>Home / Dashboard</small> -->
        </div>

        <div class="page-content">

            <?php include('../compoment/analytics.php') ?>


            <div class="records table-responsive">
                <!-- Insert -->
                <div class="record-header">
                    <div class="add">
                        <a href="insert/insert_product.php" class="btn1">Insert</a>
                    </div>
                <!-- ////////// -->
                    <div class="browse">
                        <input type="search" placeholder="Search" class="record-search">
                        <select name="" id="">
                            <option value="">Status</option>
                        </select>
                    </div>
                </div>

                <div>
                    <table width="100%">
                        <!-- Title -->
                        <thead>
                            <tr>

                                <th><span class="las la-sort"></span> ID</th>
                                <th><span class="las la-sort"></span> NAME</th>
                                <th><span class="las la-sort"></span> PRICE</th>
                                <th><span class="las la-sort"></span> DESCRIPTION</th>
                                <th><span class="las la-sort"></span> CATEGORY_ID</th>
                                <th><span class="las la-sort"></span> IMG</th>
                                <th><span class="las la-sort"></span> func</th>

                            </tr>
                        </thead>
                        <!-- //// -->
                        <?php
                        $product = new Product();
                        $result = $product->get_all_product();

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['product_id'] ?></td>
                                    <td>
                                        <div class="client">
                                            <!-- <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div> -->
                                            <div class="client-info">
                                                <h4><?php echo $row['product_name'] ?></h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    <small><?php echo $row['product_price'] ?></small>
                                    </td>
                                    <td>
                                        <?php echo $row['description'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['category_id'] ?>
                                    </td>
                                    <td>
                                        <img src="../../img/<?php echo $row['img'] ?>" alt="" style="width:200px ">
                                    </td>
                                    <!-- <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td> -->
                                    <!-- <td></td> -->
                                    <td>
                                        <a href="update/update_product.php?product_id=<?php echo $row['product_id'] ?>">UPDATE</a>
                                        <a href="../controller/product/delete.php?product_id=<?php echo $row['product_id'] ?>">DELETE</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            <!-- <tr>
                                    <td>#5033</td>
                                    <td>
                                        <div class="client">
                                            <div class="client-img bg-img" style="background-image: url(img/1.jpeg)"></div>
                                            <div class="client-info">
                                                <h4>Exty Bruno</h4>
                                                <small>exty@crossover.org</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $3171
                                    </td>
                                    <td>
                                        19 April, 2022
                                    </td>
                                    <td>
                                        -$205
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5033</td>
                                    <td>
                                        <div class="client">
                                            <div class="client-img bg-img" style="background-image: url(img/1.jpeg)"></div>
                                            <div class="client-info">
                                                <h4>Exty Bruno</h4>
                                                <small>exty@crossover.org</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $2171
                                    </td>
                                    <td>
                                        19 April, 2022
                                    </td>
                                    <td>
                                        <span class="paid">Paid</span>
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5033</td>
                                    <td>
                                        <div class="client">
                                            <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                                            <div class="client-info">
                                                <h4>Andrew Bruno</h4>
                                                <small>bruno@crossover.org</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $3171
                                    </td>
                                    <td>
                                        19 April, 2022
                                    </td>
                                    <td>
                                        -$205
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5033</td>
                                    <td>
                                        <div class="client">
                                            <div class="client-img bg-img" style="background-image: url(img/1.jpeg)"></div>
                                            <div class="client-info">
                                                <h4>Exty Bruno</h4>
                                                <small>exty@crossover.org</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $3171
                                    </td>
                                    <td>
                                        19 April, 2022
                                    </td>
                                    <td>
                                        <span class="paid">Paid</span>
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5033</td>
                                    <td>
                                        <div class="client">
                                            <div class="client-img bg-img" style="background-image: url(img/1.jpeg)"></div>
                                            <div class="client-info">
                                                <h4>Exty Bruno</h4>
                                                <small>exty@crossover.org</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $2171
                                    </td>
                                    <td>
                                        19 April, 2022
                                    </td>
                                    <td>
                                        <span class="paid">Paid</span>
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5033</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                                            <div class="client-info">
                                                <h4>Andrew Bruno</h4>
                                                <small>bruno@crossover.org</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $3171
                                    </td>
                                    <td>
                                        19 April, 2022
                                    </td>
                                    <td>
                                        -$205
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5033</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(img/1.jpeg)"></div>
                                           <div class="client-info">
                                               <h4>Exty Bruno</h4>
                                                <small>exty@crossover.org</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $3171
                                    </td>
                                    <td>
                                        19 April, 2022
                                    </td>
                                    <td>
                                        -$205
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5033</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(img/1.jpeg)"></div>
                                            <div class="client-info">
                                                <h4>Exty Bruno</h4>
                                                <small>exty@crossover.org</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        $2171
                                    </td>
                                    <td>
                                        19 April, 2022
                                    </td>
                                    <td>
                                        <span class="paid">Paid</span>
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="lab la-telegram-plane"></span>
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr> -->

                            </tbody>

                    </table>
                </div>

            </div>

        </div>

    </main>

</div>
</body>

</html>