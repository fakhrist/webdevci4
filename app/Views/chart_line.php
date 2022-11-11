<div id="chart"></div>


<!-- online -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    var options = {
        series: [{
        name: "Jumlah Buku",
        data: [<?php foreach ($list as $row):?><?= $row['stok']?>,<?php endforeach ?>]
    }],
        chart: {
        height: 350,
        type: 'line',
        zoom: {
        enabled: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    title: {
        text: 'Jumlah Stok Buku per Judul',
        align: 'left'
    },
    grid: {
        row: {
        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
        opacity: 0.5
        },
    },
    xaxis: {
        categories: [<?php foreach ($list as $row):?>"<?= $row['judul']?>",<?php endforeach ?>],
    }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>