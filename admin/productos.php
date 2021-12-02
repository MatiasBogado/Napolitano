<?php
include_once  "db_ecommerce.php";
$con = mysqli_connect($host, $user, $password, $db);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Productos</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tablaProductos" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Existencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $query = "SELECT id, nombre, precio, existencia FROM productos; ";
                                $res = mysqli_query($con, $query);

                                while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                    <tr>
                                        <td><?php echo $_row['id'] ?></td>
                                        <td><?php echo $_row['nombre'] ?></td>
                                        <td><?php echo $_row['precio'] ?></td>
                                        <td><?php echo $_row['existencia'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>