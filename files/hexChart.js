// 메인 페이지 영화 목록 2, 상세 페이지 Score
// 육각형 그래프

$(document).ready(function(){
  function generateData(movieId){
    $.ajax({
      url: "score.php",
      type: "GET",
      success: function(data){
  
        var userData = [];
  
        for(var i in data[movieId]){
          userData.push(data[movieId][i].avg1);
          userData.push(data[movieId][i].avg2);
          userData.push(data[movieId][i].avg3);
          userData.push(data[movieId][i].avg4);
          userData.push(data[movieId][i].avg5);
          userData.push(data[movieId][i].avg6);
        }
  
        var chartData = {
          labels: ["S", "M", "V", "A", "G", "E"],
          datasets: [
                {
                    label: "User",
                    data: userData,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)"
                    ],
                    borderWidth: 1,
                },
                {
                    label: "Critic",
                    data: [6, 7, 1, 3, 9, 9],
                    backgroundColor: [
                        "rgba(75, 192, 192, 0.2)"
                    ],
                    borderColor: [
                        "rgba(75, 192, 192, 1)"
                    ],
                    borderWidth: 1,
                },
          ],
        };
  
        return chartData;
      },
      error: function(data){}
    });
  };
  
  // 모든 차트 공통 옵션
  var options = {
    scale: {
        angleLines: {
        display: false,
        },
        ticks: {
        suggestedMin: 0,
        suggestedMax: 10,
        }
    }
  };
  
  var ctx1 = document.getElementById("myChart1");
  var ctx2 = document.getElementById("myChart2");
  var ctx3 = document.getElementById("myChart3");
  var ctx4 = document.getElementById("myChart4");
  
  new Chart(ctx1, {
    type:"radar",
    data: generateData(9),
    options: options
  });
  new Chart(ctx2, {
    type:"radar",
    data: generateData(6),
    options: options
  });
  new Chart(ctx3, {
    type:"radar",
    data: generateData(10),
    options: options
  });
  new Chart(ctx4, {
    type:"radar",
    data: generateData(11),
    options: options
  });
});
