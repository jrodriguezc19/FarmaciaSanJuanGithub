<?php //error_reporting(1); 
?>
<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>

<?php


$lowStockSql = "SELECT * FROM product WHERE status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$lowStockSql1 = "SELECT * FROM brands WHERE brand_status = 1";
$lowStockQuery1 = $connect->query($lowStockSql1);
$countLowStock1 = $lowStockQuery1->num_rows;

$date = date('Y-m-d');
$lowStockSql3 = "SELECT * FROM product WHERE  expdate<'" . $date . "' AND status = 1";
//echo "SELECT * FROM product WHERE  expdate<='".$date."' AND status = 1" ;exit;
$lowStockQuery3 = $connect->query($lowStockSql3);
$countLowStock3 = $lowStockQuery3->num_rows;

$lowStockSql2 = "SELECT * FROM orders WHERE delete_status =0";
$lowStockQuery2 = $connect->query($lowStockSql2);
$countLowStock2 = $lowStockQuery2->num_rows;

//$connect->close();




?>

<style type="text/css">
    .ui-datepicker-calendar {
        display: none;
    }
</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>




    <!--     color     -->


<div   class="page-wrapper">
            <div>

<h1 style="color:#45B39D; 
padding-top:30px;
text-align:center;  
font-size: calc(1em + 1vw);
"

>Gestor de inventario</h1>
</div>


    <div class="container-fluid ">
    <div class="col-md-12">
    <div class="card">

</div>
        </div>
        <div class="row" style="background-image: url('assets/uploadImage/Logo/fondo.jpg'); 
        background-repeat: no-repeat;
        background-size: cover;">
        <div class="col-md-6 dashboard">

                <div class="card" style="background: #66FF46">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle"
                       
                        
                        >
                            <span><i class="ti-support"></i></span>
                        </div>






                            
                        <div class="media-body media-text-right">
                            <h2><?php echo $countLowStock; ?></h2>
                            <a href="product.php" rel="noopener">
                                <p class="m-b-0" style= 
                                "text-align: center; 
                                font-size: calc(1em + 1vw);
                                font-family:courier,arial,helvética;
                                padding-area:20px;
                                padding-left: 90px;
                                padding-right: 170px;
                                padding-bottom: 48px;
                                ">Medicinas</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                <div class="col-md-6 dashboard">
                    <div class="card" style="    background-color: #F56FB9 ">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-agenda"></i></span>
                            </div>
                            <div class="media-body media-text-right">

                                <h2><?php echo $countLowStock3; ?></h2>
                                <a href="product.php" rel="noopener">
                                    <p class="m-b-0" style= 
                                "text-align: center; 
                                font-size: calc(1em + 1vw);
                                font-family:courier,arial,helvética;
                                padding-bottom: 48px;
                                ">Medicinas Vencidas</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } 
            
            ?>
            <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
            <?php } ?>

            <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                <div class="col-md-6 dashboard">
                    <div class="card" style="background:#65c8db ">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-rss"></i></span>
                            </div>
                            <div class="media-body media-text-right">

                                <h2><?php echo $countLowStock1; ?></h2>
                                <a href="categories.php" rel="noopener">
                                    <p class="m-b-0"
                                    style= 
                                "text-align: center; 
                                font-size: calc(1em + 1vw);
                                font-family:courier,arial,helvética;
                                padding-area:20px;
                                padding-left: 90px;
                                padding-right: 170px;
                                padding-bottom: 48px;
                                ">Proveedores</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>




        </div>


        <?php
        //error_reporting(0);
        //require_once('../constant/connect.php');
        $qqq = "SELECT * FROM product WHERE  status ='1' ";
        $result = $connect->query($qqq);
        //print_r($result);exit;
        foreach ($result as $row) {

            //print_r($row);
            $a .= $row["product_name"] . ',';
            $b .= $row["quantity"] . ',';
        }
        $am = explode(",", $a, -1);
        $amm = explode(",", $b, -1);
        //print_r($a);
        //print_r($b);

        $cnt = count($am);

        $datavalue1 = '';
        for ($i = 0; $i < $cnt; $i++) {
            $datavalue1 .= "['" . $am[$i] . "'," . $amm[$i] . "],";
        }
        //echo 

        $datavalue1; //used this $data variable in js
        ?>



    </div>
</div>
</div>


<?php include('./constant/layout/footer.php'); ?>
<script>
    $(function() {
        $(".preloader").fadeOut();
    })
</script>
<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Contry', 'Mhl'], <?php echo $datavalue1; ?>
        ]);

        var options = {
            title: 'World Wide Wine Production',
            is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);

        var chart = new google.visualization.BarChart(document.getElementById('myChart1'));
        chart.draw(data, options);
    }
</script>


</div>