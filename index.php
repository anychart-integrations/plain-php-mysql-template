<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AnyChart PHP template</title>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-data-adapter.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-vml.min.js"></script>
    <link rel="stylesheet" href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" />
    <link rel="stylesheet" href="https://cdn.anychart.com/releases/v8/fonts/css/anychart.min.css"/>
    <link rel="stylesheet" href="static/css/style.css"/>
</head>
<body>
<div id="container"></div>
<script>
    anychart.data.loadJsonFile("/data.php", function (data) {  // init and draw chart
        var chart = anychart.pie(data);
        chart.title("Top 5 fruits");
        chart.container("container");
        chart.draw();

        // update chart from server every 5 seconds
        setInterval(function(){
            // make request to server
            // to use loadJsonFile function you must include data-adapter.min.js to your page
            anychart.data.loadJsonFile("/data.php", function (data) {
                chart.data(data);
            })
        }, 5000);
    });
</script>
</body>
</html>


