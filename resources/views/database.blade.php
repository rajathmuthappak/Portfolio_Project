<?php

$user_id = '';

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
}

$connection = MySQLi_Connect('localhost', 'rajathku_prtflio', 'Wordpress', 'rajathku_portfolio');
// contact_info 
$edit_contact_info = "SELECT * FROM user_info";

// Hire_me
$edit_hire_me = "SELECT * FROM hire_me";

// Job seeker
$edit_job_seeker = "SELECT * FROM job_seeker";

// Reference
$edit_references = "SELECT * FROM references_given";

// Resumes
$edit_resumes = "SELECT * FROM resumes";

// User 
$edit_user = "SELECT * FROM user";

// skills
$edit_skills = "SELECT * FROM skills";
