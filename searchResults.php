<?php
include_once'FALC/connectionScript.php';


//This retrieves the search term, trims any whitespace off each end, and gets rid of any quote marks so
//bad guys can't plug SQL code in and mess up the database. It is all stored in the $search_term variable
$search_term = isset($_GET['q']) ? $_GET['q'] : '';
$search_term = trim($search_term);
$search_term = mysqli_real_escape_string($conn, $search_term);


//This is where SQL is used to check the tables for matches:
$sql = "SELECT DISTINCT i.intern_name, i.instagram_username, i.linkedin_username, i.canvas_username
FROM [dbo].[intern_profile] AS i
JOIN [dbo].[instagram_account] AS ia ON i.instagram_username = ia.instagram_username
JOIN [dbo].[canvas_account] AS ca ON i.canvas_username = ca.canvas_username
JOIN [dbo].[LinkedIn_Account] AS la ON i.linkedin_username = la.linkedin_username
JOIN [dbo].[instagram_post] AS ip ON ia.instagram_username = ip.posted_by
WHERE i.intern_name LIKE '%$search_term%'
   OR i.instagram_username LIKE '%$search_term%'
   OR i.linkedin_username LIKE '%$search_term%'
   OR i.canvas_username LIKE '%$search_term%'
   OR ca.name LIKE '%computer%'
   OR ca.enrollment_status LIKE '%$search_term%'
   OR ca.courses_enrolled LIKE '%$search_term%'
   OR ia.bio LIKE '%computer%'
   OR ia.profile_picture LIKE '%$search_term%'
   OR ip.caption LIKE '%$search_term%'
   OR ip.location LIKE '%$search_term%'
   OR ip.posted_by LIKE '%$search_term%'
   OR la.name LIKE '%$search_term%'
   OR la.current_job LIKE '%$search_term%'
   OR la.education LIKE '%$search_term%'
   OR la.interests LIKE '%$search_term%'
   OR la.skills LIKE '%$search_term%'
   OR la.affiliations LIKE '%$search_term%'
";

// Step 4: Execute the SQL query and save it in the $result variable
$result = mysqli_query($conn, $sql);

// Step 5: Store the results in a session variable
session_start();
$_SESSION['search_results'] = array();
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['search_results'][] = $row;
  }
}

// Step 6: Close the database connection
mysqli_close($conn);

// Step 7: Redirect the user to the search results page
header('Location: /Results.html');
exit;
?>