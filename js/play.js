$(function () {
    var data = {
    labels: ["Ago", "Sep", "Oct", "Nov"],
    datasets: [
        {
            label: "Ripley",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [340000, 320000, 320000, 299990]
        },
        {
            label: "Paris",
            fillColor: "rgba(215, 139, 102, 0.2)",
            strokeColor: "rgba(215, 139, 102, 1)",
            pointColor: "rgba(215, 139, 102, 1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(215, 139, 102,1)",
            data: [350000, 350000, 340000, 329990]
        },
        {
            label: "Falabella",
            fillColor: "rgba(86, 204, 102,0.2)",
            strokeColor: "rgba(86, 204, 102,1)",
            pointColor: "rgba(86, 204, 102,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(86, 204, 102,1)",
            data: [330000, 340000, 350000, 329990]
        },
        {
            label: "Pc Factory",
            fillColor: "rgba(226, 230, 45,0.2)",
            strokeColor: "rgba(226, 230, 45,1)",
            pointColor: "rgba(226, 230, 45,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(226, 230, 45,1)",
            data: [350000, 329990, 329990, 329990]
        }
        ]
    };
   
    var option = {
    responsive: true,
    };
   
    // Get the context of the canvas element we want to select
    var ctx = document.getElementById("Chart").getContext('2d');
    var myLineChart = new Chart(ctx).Line(data, option); //'Line' defines type of the chart.
});
