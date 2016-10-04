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
            data: [178990, 158990, 158990, 158990]
        },
        {
            label: "Easy",
            fillColor: "rgba(215, 139, 102, 0.2)",
            strokeColor: "rgba(215, 139, 102, 1)",
            pointColor: "rgba(215, 139, 102, 1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(215, 139, 102,1)",
            data: [169990, 169990, 159990, 159990]
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
