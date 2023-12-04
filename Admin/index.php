<?php 
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php');
include('adminonly.php');


?>

        

        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                        <h1 class="h3 mb-0 text-black-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Akun User Terdaftar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            
                                            <?php
                                            
                                            $query = "SELECT id FROM user ORDER BY id";
                                            $query_run = mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);
                                            echo $row;
                                            ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pendapatan
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php  
                                                $query = "SELECT packages.*, pemesanan.* 
                                                        FROM packages 
                                                        INNER JOIN pemesanan ON packages.id_paket = pemesanan.id_paket";
                                                $query_run = mysqli_query($connection, $query);

                                                $total = 0;

                                                while ($row = mysqli_fetch_assoc($query_run)) {
                                                    // Menambahkan harga ke total
                                                    $total += $row["harga"];
                                                }
                                                ?>
                                                Rp. <?php echo $total; ?>
                                            </div>
                                                                                    </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pesanan
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <?php
                                            
                                                    $query = "SELECT id_pesan FROM pemesanan ORDER BY id_pesan";
                                                    $query_run = mysqli_query($connection, $query);
                                                    $row = mysqli_num_rows($query_run);
                                                    echo $row;
                                                    ?>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <!-- <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Pemesanan Selesai</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $query = "SELECT id_pesan FROM pemesanan WHERE status = 'terkonfirmasi'";
                                            $query_run = mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);
                                            echo $row;
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Charts</h1> -->
                    <!-- <p class="mb-4"> Grafik Pemesanan <a
                            target="_blank" href="https://www.chartjs.org/docs/latest/">official Chart.js
                            documentation</a>.</p> -->

                    <!-- Content Row -->
                    <div class="row">
                                                
                        <div class="col-xl-8 col-lg-7">

                            <!-- Area Chart -->
                            <?php 
                            $data_bulan = mysqli_query($connection, "SELECT bulan FROM rincian_waktu GROUP BY bulan");
                            $data_jumlah = mysqli_query($connection, "SELECT SUM(total_pesanan) AS sold FROM rincian_waktu GROUP BY bulan");
                            ?>
                            <div class="card shadow mb-4">
                                <style>
                                        .text-primary {
                                        color: #ff8f9c !important;
                                        }
                                </style>
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Jumlah Pemesanan</h6>
                                </div>
                                <?php  ?>
                                <div class="card-body">
                                    <div class="chart-area">

                                        <canvas id="myChart"></canvas>
                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                        <script>
                                            const ctx = document.getElementById('myChart');
                                            
                                            var myLineChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: [<?php while($row = mysqli_fetch_array($data_bulan)){echo '"'.$row['bulan'].'",';}?>],
                                                datasets: [{
                                                label: "Pesanan",
                                                lineTension: 0.3,
                                                backgroundColor: "rgb(103, 114, 157)",
                                                borderColor: "rgb(231, 188, 222)",
                                                pointRadius: 3,
                                                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                                pointBorderColor: "rgb(103, 114, 157)",
                                                pointHoverRadius: 3,
                                                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                                pointHitRadius: 10,
                                                pointBorderWidth: 2,
                                                data: [<?php while($row = mysqli_fetch_array($data_jumlah)){echo '"'.$row['sold'].'",';}?>],
                                                }],
                                            },
                                            options: {
                                                maintainAspectRatio: false,
                                                layout: {
                                                padding: {
                                                    left: 10,
                                                    right: 25,
                                                    top: 25,
                                                    bottom: 0
                                                }
                                                },
                                                scales: {
                                                xAxes: [{
                                                    time: {
                                                    unit: 'date'
                                                    },
                                                    gridLines: {
                                                    display: false,
                                                    drawBorder: false
                                                    },
                                                    ticks: {
                                                    maxTicksLimit: 7
                                                    }
                                                }],
                                                yAxes: [{
                                                    ticks: {
                                                    maxTicksLimit: 5,
                                                    padding: 10,
                                                    // Include a dollar sign in the ticks
                                                    callback: function(value, index, values) {
                                                        return '$' + number_format(value);
                                                    }
                                                    },
                                                    gridLines: {
                                                    color: "rgb(234, 236, 244)",
                                                    zeroLineColor: "rgb(234, 236, 244)",
                                                    drawBorder: false,
                                                    borderDash: [2],
                                                    zeroLineBorderDash: [2]
                                                    }
                                                }],
                                                },
                                                legend: {
                                                display: false
                                                },
                                                tooltips: {
                                                backgroundColor: "rgb(255,255,255)",
                                                bodyFontColor: "#858796",
                                                titleMarginBottom: 10,
                                                titleFontColor: '#6e707e',
                                                titleFontSize: 14,
                                                borderColor: '#dddfeb',
                                                borderWidth: 1,
                                                xPadding: 15,
                                                yPadding: 15,
                                                displayColors: false,
                                                intersect: false,
                                                mode: 'index',
                                                caretPadding: 10,
                                                callbacks: {
                                                    label: function(tooltipItem, chart) {
                                                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                                    return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                                                    }
                                                }
                                                }
                                            }
                                            });
                                        </script>
                                    </div>
                                    <hr>
                                    <!-- Styling for the area chart can be found in the
                                    <code>/js/demo/chart-area-demo.js</code> file. -->
                                </div>
                            </div>

                            

                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Paket Terlaris</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        <canvas id="myPieChart2"></canvas>
                                    </div>
                                    <hr>
                                    <!-- Styling for the donut chart can be found in the
                                    <code>/js/demo/chart-pie-demo.js</code> file. -->
                                </div>
                            </div>
                        </div>
                    </div>




                    </div>
                    <?php 

                        $query = "SELECT * FROM packages
                        INNER JOIN pemesanan ON packages.id_paket = pemesanan.id_paket";
                        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                                                                
                    ?>
                    <div class="table-responsive">
                        <style>
                            h4{
                                color:#ff8f9c;
                            }
                        </style>
                    <h4>Tabel Jadwal Pernikahan</h4>
                
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                
                                <th>ID</th>
                                <th>Pengantin</th>
                                <th>Paket</th>
                                <th>Tempat</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                   
                            </tr>    
                        </thead>
                        <tbody>
                        <?php 
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                                <tr>
                                    
                                <td><?php echo $row['id_pesan']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['nama_paket']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td><?php echo $row['tanggal_penggunaan']; ?></td>
                                <td>
                                    
                                    
                                    <button type="submit" name="edit_data_paket" class="btn btn-info"><?php echo $row['status']; ?></button>
                                    
                                </td>
                                <!-- <td>
                                    <form action="code.php" method="post">
                                    <input type="hidden" name="id_deletepkt" value="">    
                                    <button type="submit" name="deletepaket" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td> -->
                            </tr>
                            <?php 
                        }
                        ?>   
                        </tbody> 

                    </table>
                            

                                    <?php  
                                    $nama_pkt = mysqli_query($connection, "SELECT nama_paket FROM paket_terpopuler GROUP BY id_paket");
                                    $jumlah_pkt = mysqli_query($connection, "SELECT SUM(jumlah_pemesanan) AS jum FROM paket_terpopuler GROUP BY id_paket");
                                    ?>
                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <script>
                                        var ctx2 = document.getElementById("myPieChart2");
                                        var myPieChart = new Chart(ctx2, {
                                        type: 'doughnut',
                                        data: {
                                            labels: [<?php while($row = mysqli_fetch_array($nama_pkt)){echo '"'.$row['nama_paket'].'",';}?>],
                                            datasets: [{
                                            data: [<?php while($row = mysqli_fetch_array($jumlah_pkt)){echo '"'.$row['jum'].'",';}?>],
                                            backgroundColor: ['#67729D', '#BB9CC0', '#E7BCDE', '#2B2A4C', '#B31312', '#EA906C'],
                                            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                                            hoverBorderColor: "rgba(234, 236, 244, 1)",
                                            }],
                                        },
                                        options: {
                                            maintainAspectRatio: false,
                                            tooltips: {
                                            backgroundColor: "rgb(255,255,255)",
                                            bodyFontColor: "#858796",
                                            borderColor: '#dddfeb',
                                            borderWidth: 1,
                                            xPadding: 15,
                                            yPadding: 15,
                                            displayColors: false,
                                            caretPadding: 10,
                                            },
                                            legend: {
                                            display: false
                                            },
                                            cutoutPercentage: 80,
                                        },
                                        });
                                    </script>
                    </div>
                </div>






<?php
include('includes/scripts.php');
include('includes/footer.php');
?>





