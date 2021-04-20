<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Grafica </title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
            crossorigin="anonymous"
        >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/shards-ui/3.0.0/css/shards.css">
    </head>

    <body>
        <div class="container pt-4">
            <h4 class="font-weight-normal"><b>Gráficas </b></h4>
            <hr>
            <div>
                <canvas id="graph" class="w-100" height="400px"></canvas>
            </div>
        </div>
    </body>

</html>

<script
    data-require="chart.js@*"
    data-semver="1.0.2"
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
></script>

<script>
    var graficas = []
    @foreach($estudiante as $estudiante)
        graficas.push('{{$e->calificacion}}')
    @endforeach();
    var a = 0, b = 0, c = 0, d = 0, e = 0, f = 0;

    calificaciones.forEach(element => {
        console.log(element);
        switch (element) {
            case '10':
                a++
                break;
            case '9':
                b++
                break;
            case '8':
                c++
                break;
            case '7':
                d++
                break;
            case '6':
                e++
                break;
            default:
                f++
                break;
        }
    });
    var data = {
        datasets: [{
            data: [
                a, b, c, d, e, f
            ],
            backgroundColor: [
                '#85C1E9',
                '#FFA07A',
                '#009688',
                '#CDDC39',
                '#9C27B0',
                '#F44336'
            ],
            label: 'Dataset 1'
        }],
        labels: [
            '10',
            '9',
            '8',
            '7',
            '6',
            '5',
        ]
    }
    var ctx = document.getElementById('graph').getContext('2d');
    var options = {
        animation: true,
        animationSteps: 100,
        animationEasing: "easeOutQuart",
        scaleFontSize: 16,
        responsive: true,
        showTooltip: true,
        tooltipTemplate: "<%if (label){%>< <%}%><%= value %>",
        scaleShowGridLines: false,
        bezierCurve: false,
        pointDotRadius: 5,
    }
    var myLineChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });
</script>
