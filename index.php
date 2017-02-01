<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AnyChart PHP template</title>
    <script src="https://cdn.anychart.com/js/latest/anychart-bundle.min.js"></script>
    <script src="http://cdn.anychart.com/js/latest/data-adapter.min.js"></script>
    <link rel="stylesheet" href="https://cdn.anychart.com/css/latest/anychart-ui.min.css"/>
    <link rel="stylesheet" href="static/css/style.css"/>
</head>
<body>
<div id="container"></div>
<script>
    anychart.onDocumentReady(function() {
        anychart.data.loadJsonFile("/data.php", function (data) {
            var chart = anychart.pie(data);
            chart.title("Top 5 fruits");
            chart.container("container");
		    chart.draw();
        });
    });
</script>
</body>
</html>


