var current_url = window.location.href;

$(document).ready(function(){
  $.ajax({
    url: current_url + "/" + "chart_data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var user_name = [];
      // var score = [];
      var number_sense = [];
      var memorization_of_arithmetic_facts = [];
      var accurate_calculation = [];
      var fluent_calculation = [];
      var mathematical_reasoning_and_applications = [];

      for(var i in data) {
        user_name.push("Student Name: " + data[i].user_name);
        // score.push(data[i].overall_score);
        number_sense.push(data[i].number_sense);
        memorization_of_arithmetic_facts.push(data[i].memorization_of_arithmetic_facts);
        accurate_calculation.push(data[i].accurate_calculation);
        fluent_calculation.push(data[i].fluent_calculation);
        mathematical_reasoning_and_applications.push(data[i].mathematical_reasoning_and_applications);
      }

      var chartdata = {
        labels: user_name,
        datasets : [
          // {
          //   label: 'Overall Assessment Score',
          //   backgroundColor: 'rgba(235, 64, 52, 0.75)',
          //   borderColor: 'rgba(235, 64, 52, 0.75)',
          //   hoverBackgroundColor: 'rgba(235, 64, 52, 0.75)',
          //   hoverBorderColor: 'rgba(235, 64, 52, 0.75)',
          //   data: score
          // },
          {
            label: 'Number Sense',
            backgroundColor: 'rgba(50, 168, 78, 0.75)',
            borderColor: 'rgba(50, 168, 78, 0.75)',
            hoverBackgroundColor: 'rgba(50, 168, 78, 0.75)',
            hoverBorderColor: 'rgba(50, 168, 78, 0.75)',
            data: number_sense,
          },
          {
            label: 'Memorization of Arithmethic Facts',
            backgroundColor: 'rgba(52, 235, 177)',
            borderColor: 'rgba(52, 235, 177)',
            hoverBackgroundColor: 'rgba(52, 235, 177)',
            hoverBorderColor: 'rgba(52, 235, 177)',
            data: memorization_of_arithmetic_facts,
          },
          {
            label: 'Accurate Calculation',
            backgroundColor: 'rgba(192, 235, 52, 0.75)',
            borderColor: 'rgba(192, 235, 52, 0.75)',
            hoverBackgroundColor: 'rgba(192, 235, 52, 0.75)',
            hoverBorderColor: 'rgba(192, 235, 52, 0.75)',
            data: accurate_calculation,
          },
          {
            label: 'Fluent Calculation',
            backgroundColor: 'rgba(214, 52, 235, 0.75)',
            borderColor: 'rgba(214, 52, 235, 0.75)',
            hoverBackgroundColor: 'rgba(214, 52, 235, 0.75)',
            hoverBorderColor: 'rgba(214, 52, 235, 0.75)',
            data: fluent_calculation,
          },
          {
            label: 'Mathematical Reasoning and Application',
            backgroundColor: 'rgba(235, 162, 52, 0.75)',
            borderColor: 'rgba(235, 162, 52, 0.75)',
            hoverBackgroundColor: 'rgba(235, 162, 52, 0.75)',
            hoverBorderColor: 'rgba(235, 162, 52, 0.75)',
            data: mathematical_reasoning_and_applications,
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
