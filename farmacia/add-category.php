<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>


<div class="page-wrapper"style="background-image: url('assets/images/categoriass.jpg'); 
        background-repeat: no-repeat;
        background-size: cover;
        ">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Agregar Categoría</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Agregar Categoria</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="row">
            <div class="col-lg-8" style="    margin-left: 10%;
            margin-bottom: 50px">
                <div class="card"
                
                style="
                margin: 15px 0;
    padding: 20px;
    border: 0 solid #e7e7e7;
    border-radius: 10px;
    margin-top: 150px;
    margin-left: 7px;
    margin-right: -67px;
    background: mintcream;
    color: mediumturquoise;
    font-size: larger;
    font-family: inherit;"
                
                >
                    <div class="card-title">

                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" method="POST" id="submitBrandForm" action="php_action/createCategories.php" enctype="multipart/form-data">


                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Nombre Categoría</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="categoriesName" placeholder="Categoría" name="categoriesName" required="" pattern="^[a-zA-z]+$" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Estado</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="categoriesStatus" name="categoriesStatus">
                                                <option value="">Elegir</option>
                                                <option value="1">Disponible</option>
                                                <option value="2">No disponible</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" name="create" id="createCategoriesBtn" class="btn btn-primary btn-flat m-b-30 m-t-30"
                                style="    background: #50c9ee;"
                                >Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <?php include('./constant/layout/footer.php'); ?>