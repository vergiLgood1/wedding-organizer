<?php 
include('security.php');
$data_bulan = mysqli_query($connection, "SELECT bulan FROM rincian_waktu GROUP BY bulan");
$data_jumlah = mysqli_query($connection, "SELECT SUM(total_pesanan) AS sold FROM rincian_waktu GROUP BY bulan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');
        var linechart = new Chart(ctx, {
                type: 'line',
                data: {
                labels: [<?php while($row = mysqli_fetch_array($data_bulan)){echo '"'.$row['bulan'].'",';}?>],
                datasets: [{
                    label: '# of Votes',
                    lineTension: 0.3,
                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                    borderColor: "rgba(78, 115, 223, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(78, 115, 223, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: [<?php while($row = mysqli_fetch_array($data_jumlah)){echo '"'.$row['sold'].'",';}?>],
                    borderWidth: 1
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
                
                }
            }
        });
    </script>
</body>
</html>

<?php
include('includes/scripts.php');

?>
