<!-- Demo pie chart to display on homepage as decoration -->

<!-- Chart's container -->
<div id="chart2" {{ $attributes }}></div>
<!-- Charting library -->
<script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

<!-- Your application script -->
<script>
    let data2 = {
        chart: {labels: ['Fruit & Veggies', 'Dairy', 'Bread', 'Candy']},
        datasets: [
            {name: 'John', values: [9, 3, 7, 5]},
            {name: 'Jane', values: [1, 6, 2, 4]},
        ],
    };

    const chart2 = new Chartisan({
        el: '#chart2',
        data: data2,
        hooks: new ChartisanHooks()
            .datasets('doughnut')
            .pieColors(),

    });

    function randomData() {
        return [Math.floor(Math.random() * 10), Math.floor(Math.random() * 10), Math.floor(Math.random() * 10), Math.floor(Math.random() * 10)];
    }

    function myLoop2() {
        setTimeout(function () {
            data2.datasets[0].values = randomData();
            data2.datasets[1].values = randomData();
            chart2.update({background: true, data: data2});
            myLoop();
        }, 1000)
    }

    myLoop();

</script>
