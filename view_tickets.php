<?php
// Connect to your MySQL database here

// Assuming you have fetched the tickets from the database and stored them in the $tickets array
// Here, $tickets is just a placeholder; replace it with the actual database retrieval logic
$tickets = [];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Tickets</title>
</head>
<body>
    <h1>Your Tickets</h1>
    <table>
        <tr>
            <th>Subject</th>
            <th>Description</th>
            <th>Status</th>
        </tr>
        <?php
        // Check if there are tickets to display
        if (!empty($tickets)) {
            // Loop through and display the tickets retrieved from the database
            foreach ($tickets as $ticket) {
                echo "<tr>";
                echo "<td>{$ticket['subject']}</td>";
                echo "<td>{$ticket['description']}</td>";
                echo "<td>{$ticket['status']}</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No tickets found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
