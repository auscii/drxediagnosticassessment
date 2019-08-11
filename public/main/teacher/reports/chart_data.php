<?php
header('Content-Type: application/json');
include("../../../../config/common/asdasf9z09x0c90zx90123.php");

$mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}

$query = sprintf("SELECT DISTINCT t1.user_id AS hid, t1.user_name, t1.user_email, t1.start_at, t1.end_at, 
								  t1.overall_score AS h_overall_score,
			                      t2.user_id, t2.drxassessment_id AS rid, t2.overall_score AS r_overall_score, t2.number_sense, 
			                      t2.memorization_of_arithmetic_facts, t2.user_id AS rid, t2.accurate_calculation, 
			                      t2.fluent_calculation, t2.mathematical_reasoning_and_applications, t2.date_created
		          FROM drxassessment_assessment_history AS t1
		          INNER JOIN drxassessment_domain_result AS t2
		          ON t1.user_id = t2.user_id
		          WHERE t1.overall_score = t2.overall_score");

$result = $mysqli->query($query);
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

$result->close();
$mysqli->close();

print json_encode($data);
?>
