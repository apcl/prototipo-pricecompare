$(function () {
    var data = {
    labels: ["Ago", "Sep", "Oct", "Nov"],
    datasets: [
        {
            label: "Sodimac",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [199990, 189990, 189990, 189990]
        },
        {
            label: "Easy",
            fillColor: "rgba(215, 139, 102, 0.2)",
            strokeColor: "rgba(215, 139, 102, 1)",
            pointColor: "rgba(215, 139, 102, 1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(215, 139, 102,1)",
            data: [220000, 220000, 199990, 199990]
        }
        ]
    };
   
    var option = {
    responsive: false,
    };
   
    // Get the context of the canvas element we want to select
    var ctx = document.getElementById("Chart").getContext('2d');
    var myLineChart = new Chart(ctx).Line(data, option); //'Line' defines type of the chart.
});
