<?php
$con = mysql_connect("mysql.nerdheroes.com","cit480_system","numFEM8R") or die("Failed to connect with database!!!!");
mysql_select_db("cit480", $con); 
$sth = mysql_query("SELECT * FROM cit480_test");

$rows = array();
//flag is not needed
$flag = true;
$table = array();
$table['cols'] = array(
 
    // Labels for your chart, these represent the column titles
    // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
    array('label' => 'Item', 'type' => 'string'),
    array('label' => 'Cost', 'type' => 'number')
 
);
 
$rows = array();
while($r = mysql_fetch_assoc($sth)) {
    $temp = array();
    // the following line will be used to slice the Pie chart
    $temp[] = array('v' => (string) $r['Item']); 
 
    // Values of each slice
    $temp[] = array('v' => (int) $r['Cost']); 
    $rows[] = array('c' => $temp);
}
 
$table['rows'] = $rows;
$jsonTable = json_encode($table);
//echo $jsonTable;
?>
 
<html>
  <head>
    <!--Load the Ajax API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">
 
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});
 
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
 
    function drawChart() {
 
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(<?=$jsonTable?>);
      var options = {
           title: 'Monthly Expense Breakdown'
        };
      // Instantiate and draw our chart, passing in some options.
      // Do not forget to check your div ID
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
    </script>
  </head>
 
  <body>
    <!--this is the div that will hold the pie chart-->
    <div id="piechart"></div>
  </body>
</html>
