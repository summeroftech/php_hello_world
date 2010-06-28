<?php

$dbname = 'soc_hello';
$dbuser = 'webuser';
$dbpassword = ''; // TODO: fill-in your password

// Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=$dbname user=$dbuser password=$dbpassword")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT * FROM message';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "<tr>\n";
    foreach ($line as $col_value) {
        echo "<td>$col_value</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
