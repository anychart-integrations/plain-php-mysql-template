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
        // init and draw chart
    	var chart = anychart.pie(<?php include 'data.php';?>);
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


