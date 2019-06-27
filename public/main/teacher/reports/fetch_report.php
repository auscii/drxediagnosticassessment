<?php
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
