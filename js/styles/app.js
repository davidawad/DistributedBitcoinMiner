jQuery(document).ready(function(){

  $('#webgl').hide();

  // Get context with jQuery - using jQuery's .get() method.
  var ctx = $("#myChart").get(0).getContext("2d");
  // This will get the first returned node in the jQuery collection.

  var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: {
            label: "Hashes per Second",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56, 55, 40]
        }
  };

  var myLineChart = new Chart(ctx).Line(data);

});
