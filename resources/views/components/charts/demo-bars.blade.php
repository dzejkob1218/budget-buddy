<!-- Demo bar chart to display on homepage as decoration -->

<!-- Chart's container -->
<div id="chart" {{ $attributes }}></div>
<!-- Charting library -->
<script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

<!-- Your application script -->
<script>
    let data = {
        chart: {labels: ['Fruit & Veggies', 'Dairy', 'Bread', 'Candy']},
        datasets: [
            {name: 'John', values: [9, 3, 7, 5]},
            {name: 'Jane', values: [1, 6, 2, 4]},
        ],
    };

    const chart = new Chartisan({
        el: '#chart',
        data: data,
        hooks: new ChartisanHooks()
            .beginAtZero()
            .colors(),

    });

    function randomData() {
        return [Math.floor(Math.random() * 10), Math.floor(Math.random() * 10), Math.floor(Math.random() * 10), Math.floor(Math.random() * 10)];
    }

    function myLoop() {
        setTimeout(function () {
            data.datasets[0].values = randomData();
            data.datasets[1].values = randomData();
            chart.update({background: true, data: data});
            myLoop();
        }, 1000)
    }

    myLoop();

</script>
