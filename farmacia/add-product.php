<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>




<div   class="page-wrapper"
style="background-image: url('assets/uploadImage/Logo/fondo.jpg'); 
        background-repeat: no-repeat;
        background-size: cover;"

>

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"
            
            >Farmacia San Juan</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php" rel="noopener">Inicio</a></li>
                <li class="breadcrumb-item active">Agregar Medicamento</li>
            </ol>
        </div>
    </div>

<div>
<h1 style="    color: blue;
    padding: 10px;
    text-align: center;
    font-family: inherit;">Agregar Medicamento</h1>
</div>


    <div  class="container-fluid">




        <div  class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card"
                style="background-image: url('assets/images/segundimgs.webp'); 
        background-repeat: no-repeat;
        background-size: cover;"
                
                >
                    <div class="card-title">

                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body" style="color:#2471A3">


                        <div class="input-states">
                            <form class="row" method="POST" id="submitProductForm" action="php_action/createProduct.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="currnt_date" class="form-control">

                                <div class="form-group col-md-6">
                                    <label class="control-label">Agregue una imagen del Medicamento:</label>
                                    <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>
                                    <div class="kv-avatar center-block">
                                        <input type="file" class="form-control" id="MedicineImage" placeholder="Nombre Medicina" name="Medicine" class="file-loading">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="ontrol-label">Nombre Medicina</label>
                                    <input type="text" class="form-control" id="productName" placeholder="Nombre Medicina" name="productName" autocomplete="off" required="" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Cantidad a ingresar</label>
                                    <input type="text" class="form-control" id="quantity" placeholder="Cantidad" name="quantity" autocomplete="off" required="" pattern="^[0-9]+$" />
                                </div>
                                <div class="form-group col-md-6">

                                






                                <label  class="control-label">precio Producto</label>
                                    <input type="text" class="form-control" id="rate" placeholder="Precio" name="rate" autocomplete="off" required="" pattern="^[0-9]+$" />
                                </div>
                                






                                <div class="form-group col-md-6">
                                    <label class="ontrol-label">Descripcion del Producto</label>
                                    <input type="text" class="form-control" id="idDescripcionProducto" placeholder="descripcion" name="bno" autocomplete="off" required="" />
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="control-label">Fecha Expiración</label>
                                    <input type="date" class="form-control" id="expdate" placeholder="Expiry Date" name="expdate" autocomplete="off" required="" pattern="^[0-9]+$" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Nombre Proveedor</label>
                                    <select class="form-control" id="brandName" name="brandName">
                                        <option value="">Elegir</option>
                                        <?php
                                        $sql = "SELECT brand_id, brand_name, brand_active, brand_status FROM brands WHERE brand_status = 1 AND brand_active = 1";
                                        $result = $connect->query($sql);

                                        while ($row = $result->fetch_array()) {
                                            echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                        } // while

                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">

                                    <label class="control-label">Nombre de la Categoría</label>
                                    <select type="text" class="form-control" id="categoryName" name="categoryName">
                                        <option value="">Elegir</option>
                                        <?php
                                        $sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1 AND categories_active = 1";
                                        $result = $connect->query($sql);

                                        while ($row = $result->fetch_array()) {
                                            echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                        } // while

                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Estado</label>
                                    <select class="form-control" id="productStatus" name="productStatus">
                                        <option value="">Elegir</option>
                                        <option value="1">Producto Disponible</option>
                                        <option value="2">Producto No disponible</option>
                                    </select>
                                </div>

                                <div class="col-md-1 mx-auto">
                                    <button type="submit" name="create" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30"
                                    style="    background: #61b2e3;"
                                    >Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>






        <?php include('./constant/layout/footer.php'); ?>



        