<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>

<?php include('./constant/connect');
$sql = "SELECT brand_id, brand_name, brand_active, brand_status FROM brands WHERE brand_status = 1";
$result = $connect->query($sql);
//echo $sql;exit;

?>
<div class="page-wrapper" style="background-image: url('assets/uploadImage/Logo/contenedorAdentro.jpg'); 
        background-repeat: no-repeat;
        background-size: cover;">

    <div class="row page-titles"
    >
        <div class="col-md-5 align-self-center">
            <h3 style="color:#45B39D; 
                padding-left:270px;  
                font-size: calc(1em + 1vw);
                ">  Gestion Proveedores</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php" rel="noopener">Inicio</a></li>
                <li class="breadcrumb-item active">Ver Proveedor</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="card" style="background-image: url('assets/uploadImage/Logo/contenedorAdentro.jpg'); 
        background-repeat: no-repeat;
        background-size: cover;" >
            <div class="card-body">

                <a href="add-brand.php" rel="noopener"><button class="btn btn-primary">Agregar Proveedor</button></a>

                <div class="table-responsive m-t-40"    >
                    <table style="background-color: ghostwhite;
                    font-size: large;
                    
                    
                    " id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nombre Proveedor</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $row['brand_id'] ?></td>
                                    <td><?php echo $row['brand_name'] ?></td>
                                    <td><?php if ($row['brand_active'] == 1) {

                                            $activeBrands = "<label class='label label-success' ><h4>Disponible</h4></label>";
                                            echo $activeBrands;
                                        } else {
                                            $activeBrands = "<label class='label label-danger'><h4>No disponible</h4></label>";
                                            echo $activeBrands;
                                        } ?></td>
                                    <td>

                                        <a rel="noopener"  href="editbrand.php?id=<?php echo $row['brand_id'] ?>"><button type="button" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></button></a>



                                        <a rel="noopener" href="php_action/removeBrand.php?id=<?php echo $row['brand_id'] ?>"><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Deseas eliminar este registro?')"><i class="fa fa-trash"></i></button></a>


                                    </td>
                                </tr>

                        </tbody>
                    <?php
                            }
                    ?>
                    </table>
                </div>
            </div>
        </div>


        <?php include('./constant/layout/footer.php'); ?>