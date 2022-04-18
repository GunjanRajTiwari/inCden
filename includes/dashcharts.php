
<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("highhPieChart");
var highhPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["High", "Remaining"],
    datasets: [{
      data: [
        <?php
          require 'dbc.php';

          $sev = 3;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $query = "SELECT * FROM register WHERE NOT senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
    ],
      backgroundColor: ['#CC0000', '#A0A0A0'],
      hoverBackgroundColor: ['#990000', '#A0A0A0'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 50,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 70,
  },
});
</script>









<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("criticalPieChart");
var criticalPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Critical", "Remaining"],
    datasets: [{
      data: [
        <?php
          require 'dbc.php';

          $sev = 4;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $sev = 4;
          $query = "SELECT * FROM register WHERE NOT senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
    ],
      backgroundColor: ['#FF3333', '#A0A0A0'],
      hoverBackgroundColor: ['#CC0000', '#A0A0A0'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 50,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 70,
  },
});
</script>









<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("medPieChart");
var medPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Medium", "Remaining"],
    datasets: [{
      data: [
        <?php
          require 'dbc.php';

          $sev = 5;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $sev = 5;
          $query = "SELECT * FROM register WHERE NOT senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
    ],
      backgroundColor: ['#CCCC00', '#A0A0A0'],
      hoverBackgroundColor: ['#999900', '#A0A0A0'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 50,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 70,
  },
});
</script>


















<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("lowPieChart");
var lowPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Low", "Remaining"],
    datasets: [{
      data: [
        <?php
          require 'dbc.php';

          $sev = 1;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $sev = 1;
          $query = "SELECT * FROM register WHERE NOT senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
    ],
      backgroundColor: ['#36b9cc', '#A0A0A0'],
      hoverBackgroundColor: ['#2c9faf', '#A0A0A0'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 50,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 70,
  },
});
</script>









<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("infoPieChart");
var infoPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Informational", "Remaining"],
    datasets: [{
      data: [
        <?php
          require 'dbc.php';

          $sev = 2;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $sev = 2;
          $query = "SELECT * FROM register WHERE NOT senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
    ],
      backgroundColor: ['#4e73df', '#A0A0A0'],
      hoverBackgroundColor: ['#2e59d9', '#A0A0A0'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 50,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 70,
  },
});
</script>









<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("openPieChart");
var openPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Open", "Closed"],
    datasets: [{
      data: [
        <?php
          require 'dbc.php';

          $stat = 1;
          $query = "SELECT * FROM register WHERE status=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $stat);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $stat = 1;
          $query = "SELECT * FROM register WHERE NOT status=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $stat);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
    ],
      backgroundColor: ['#FF3333', '#A0A0A0'],
      hoverBackgroundColor: ['#CC0000', '#A0A0A0'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 50,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 70,
  },
});
</script>









<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("closePieChart");
var closePieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Closed", "Open"],
    datasets: [{
      data: [
        <?php
          require 'dbc.php';

          $stat = 0;
          $query = "SELECT * FROM register WHERE status=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $stat);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $stat = 0;
          $query = "SELECT * FROM register WHERE NOT status=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $stat);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
    ],
      backgroundColor: ['#1cc88a', '#A0A0A0'],
      hoverBackgroundColor: ['#17a673', '#A0A0A0'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 50,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 70,
  },
});
</script>









<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("totalPieChart");
var totalPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Critical", "High", "Medium", "Low", "Informational"],
    datasets: [{
      data: [
        <?php
          require 'dbc.php';

          $sev = 4;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $sev = 3;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $sev = 5;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $sev = 1;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $sev = 2;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>

    ],
      backgroundColor: ['#FF3333', '#CC0000', '#CCCC00', '#36b9cc', '#4e73df'],
      hoverBackgroundColor: ['#CC0000', '#990000', '#999900', '#2c9faf', '#2e59d9'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: true,
      position: 'right'
    },
    cutoutPercentage: 70,
  },
});
</script>









<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("vulnPieChart");
var vulnPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Closed", "Open"],
    datasets: [{
      data: [
        <?php
          require 'dbc.php';

          $stat = 0;
          $query = "SELECT * FROM register WHERE status=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $stat);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $stat = 1;
          $query = "SELECT * FROM register WHERE status=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $stat);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
    ],
      backgroundColor: ['#1cc88a', '#FF3333'],
      hoverBackgroundColor: ['#17a673', '#CC0000'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: true,
      position: 'right'
    },
    cutoutPercentage: 70,
  },
});
</script>











<script>
  //Bar Chart Example
var ctx = document.getElementById("totalBarChart");
var totalBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Critical", "High", "Medium", "Low", "Informational"],
    datasets: [{
      label: "Severities",
      backgroundColor: ['#FF3333', '#CC0000', '#CCCC00', '#36b9cc', '#4e73df'],
      hoverBackgroundColor: ['#CC0000', '#990000', '#999900', '#2c9faf', '#2e59d9'],
      borderColor: "#4e73df",
      data: [
        <?php
          require 'dbc.php';

          $sev = 4;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $sev = 3;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $sev = 5;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $sev = 1;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $sev = 2;
          $query = "SELECT * FROM register WHERE senofk=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $sev);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
      ],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 35,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          maxTicksLimit: 5,
          padding: 10,
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
  }
});
</script>











<script>
  //Bar Chart Example
var ctx = document.getElementById("vulnBarChart");
var vulnBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Closed", "Open"],
    datasets: [{
      label: "Vulnerabilities",
      backgroundColor: ['#1cc88a', '#FF3333'],
      hoverBackgroundColor: ['#17a673', '#CC0000'],
      borderColor: "#4e73df",
      data: [
        <?php
          require 'dbc.php';

          $stat = 0;
          $query = "SELECT * FROM register WHERE status=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $stat);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $stat = 1;
          $query = "SELECT * FROM register WHERE status=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $stat);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
      ],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 55,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          maxTicksLimit: 5,
          padding: 10,
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
  }
});
</script>









<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("testPieChart");
var testPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: [ "HTTP.sys remote code execution vulnera...",
              "An unsupported software framework is i...",
              "The version of the .NET Framework inst...",
              "The version of Adobe Reader installed ...",
              "The remote Windows host is affected by..."],
    datasets: [{
      data: [
        <?php
          require 'dbc.php';

          $vuln = "HTTP.sys remote code execution vulnerability";
          $query = "SELECT * FROM register WHERE vuln=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $vuln);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $vuln = "The Internet Explorer installation on the remote host is affected by multiple vulnerabilities.";
          $query = "SELECT * FROM register WHERE vuln=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $vuln);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $vuln = "The remote host is affected by multiple vulnerabilities.";
          $query = "SELECT * FROM register WHERE vuln=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $vuln);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $vuln = "Compliance checks for Windows systems.";
          $query = "SELECT * FROM register WHERE vuln=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $vuln);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
        ,
        <?php
          require 'dbc.php';

          $vuln = "The remote Windows host is affected by multiple vulnerabilities.";
          $query = "SELECT * FROM register WHERE vuln=?";
          $stmt = mysqli_stmt_init($connection);
          mysqli_stmt_prepare($stmt, $query);
          mysqli_stmt_bind_param($stmt, "s", $vuln);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $row = mysqli_num_rows($result);
          echo $row;
        ?>
    ],
      backgroundColor: ['#FF3333', '#CC0000', '#CCCC00', '#36b9cc', '#4e73df', '#1cc88a'],
      hoverBackgroundColor: ['#CC0000', '#990000', '#999900', '#2c9faf', '#2e59d9', '#17a673'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: true,
      position: 'bottom',
      align: "start"
    },
    cutoutPercentage: 0,
  },
});
</script>

