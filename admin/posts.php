<?php include "includes/admin_header.php" ?>

    <div id="wrapper">
        <!-- <?php if ($connection) {
            echo "connection";
        } ?> -->

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Posts
                        </h1>
                        <?php 
                        if (isset($_GET['source'])) {
                            $source = $_GET['source'];
                        }
                         ?>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>
