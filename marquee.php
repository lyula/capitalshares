<?php
// Include the connection file
include 'backend/lib.php';

// Query to fetch data from the companies table
$query = "SELECT name, share_price FROM companies";
$eo = array('echo'=>0); // Error handler array

// Execute the query
$result = sql($query, $eo);

// Check if query execution was successful
if ($result) {
    // Define the color sequence array
    $colors = array('darkgreen', 'red', 'rgb(217, 161, 18)');
    $color_index = 0; // Initialize color index

    // Initialize variable to store generated HTML content
    $marquee_content = '';

    // Loop through each row and generate HTML content for marquee
    foreach ($result as $row) {
        $company = $row['name'];
        $share_price = $row['share_price'];
        $color = $colors[$color_index]; // Get color from the color sequence array
        $color_index = ($color_index + 1) % count($colors); // Move to the next color in the sequence

        // Generate HTML for each company
        $marquee_content .= "<span style='color: $color; font-weight: bold;'>$company : $share_price</span>&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    // Output the generated HTML content within the <marquee> element
    echo "<marquee style='width: 100%; background-color: black; word-spacing: 5px;height:45px;'>$marquee_content</marquee>";
} else {
    // Handle the case when the query fails
    echo "Error executing the query.";
}
?>
