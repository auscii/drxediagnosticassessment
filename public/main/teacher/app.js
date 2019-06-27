var current_url = window.location.href;

$(document).ready(function(){
  $.ajax({
    url: current_url + "/" + "chart_data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var drxassessment_id = [];
      var score = [];

      for(var i in data) {
        drxassessment_id.push("Scores " + data[i].drxassessment_id);
        score.push(data[i].overall_score);
      }

      var chartdata = {
        labels: drxassessment_id,
        datasets : [
          {
            label: 'Assessment Score',
            backgroundColor: 'rgba(200, 200, 200, 0.75)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: score
          }
        ]
      };

      var ctx = $("#report_chart");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
