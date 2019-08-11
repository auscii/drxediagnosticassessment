<?php

$reportFetchAll = "SELECT * FROM drxassessment_assessment_history";

$reportFetchDomains = "SELECT DISTINCT t1.user_id AS hid, t1.user_name, t1.user_email, t1.start_at, t1.end_at, 
                                  t1.overall_score AS h_overall_score,
                                  t2.user_id, t2.drxassessment_id AS rid, t2.overall_score AS r_overall_score, t2.number_sense, 
                                  t2.memorization_of_arithmetic_facts, t2.user_id AS rid, t2.accurate_calculation, 
                                  t2.fluent_calculation, t2.mathematical_reasoning_and_applications, t2.date_created
                  FROM drxassessment_assessment_history AS t1
                  INNER JOIN drxassessment_domain_result AS t2
                  ON t1.user_id = t2.user_id
                  WHERE t1.overall_score = t2.overall_score";

if (!empty($_SESSION['drxassessmentname'])) {
    $drxassessmentname = $_SESSION['drxassessmentname'];
} else {
    $drxassessmentname = "";
}

if (isset($_POST['report_type'])) {
    $report_type = $_POST['report_type'];
} else {
    $report_type = "";
}

if ($report_type == 1)
{
    $reportQuery = "SELECT * FROM drxassessment_assessment_history ORDER BY created_at DESC";
    $reportTitle = "Overall Student Assessment";
}
else if ($report_type == 9)
{
    $reportQuery = "SELECT * FROM drxassessment_assessment_history WHERE overall_score >= 75";
    $reportTitle = "Highest Score in Assessment";
}
else if ($report_type == 6)
{
    $reportQuery = "SELECT * FROM drxassessment_assessment_history WHERE overall_score <= 75";
    $reportTitle = "Lowest Score in Assessment";
}
else if ($report_type === "Number Sense")
{
    $reportQuery = "SELECT * FROM drxassessment_assessment_history WHERE domain_name = 'Number Sense'";
    $reportTitle = "Assessment - Number Sense";
}
else if ($report_type === "Memorization of Arithmetic Facts")
{
    $reportQuery = "SELECT * FROM drxassessment_assessment_history WHERE domain_name = 'Memorization of Arithmetic Facts'";
    $reportTitle = "Assessment - Memorization of Arithmetic Facts";
}
else if ($report_type === "Accurate Calculation")
{
    $reportQuery = "SELECT * FROM drxassessment_assessment_history WHERE domain_name = 'Accurate Calculation'";
    $reportTitle = "Assessment - Accurate Calculation";
}
else if ($report_type === "Fluent Calculation")
{
    $reportQuery = "SELECT * FROM drxassessment_assessment_history WHERE domain_name = 'Fluent Calculation'";
    $reportTitle = "Assessment - Fluent Calculation";
}
else if ($report_type === "Mathematical Reasoning and Application")
{
    $reportQuery = "SELECT * FROM drxassessment_assessment_history WHERE domain_name = 'Mathematical Reasoning and Application'";
    $reportTitle = "Assessment - Mathematical Reasoning and Application";
}
else if ($report_type === "All Domains")
{
    $reportQuery = "SELECT * FROM drxassessment_assessment_history ORDER BY created_at DESC";
    $reportTitle = "Overall Student Assessment";
}
?>
