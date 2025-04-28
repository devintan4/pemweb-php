<?php
// 1. Connect (reuse your working connection)
$host   = "localhost";
$dbUser = "devintan";
$dbPass = "devintan";
$dbName = "pemweb";

$conn = mysqli_connect($host, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 2. Create a table
$sql = <<<SQL
CREATE TABLE IF NOT EXISTS users (
  id    INT AUTO_INCREMENT PRIMARY KEY,
  name  VARCHAR(50)  NOT NULL,
  email VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
SQL;

if (!mysqli_query($conn, $sql)) {
    die("Table creation failed: " . mysqli_error($conn));
}

// 3. Insert a row with mysqli_query
$insert1 = "INSERT INTO users (name,email)
            VALUES ('Bob','bob@example.com')";
if (!mysqli_query($conn, $insert1)) {
    die("Insert1 failed: " . mysqli_error($conn));
}

// 4. Insert a row with a prepared statement
$stmt = mysqli_prepare(
    $conn,
    "INSERT INTO users (name,email) VALUES (?,?)"
);
$name  = "Carol";
$email = "carol@example.com";
mysqli_stmt_bind_param($stmt, "ss", $name, $email);
if (!mysqli_stmt_execute($stmt)) {
    die("Prepared insert failed: " . mysqli_stmt_error($stmt));
}
mysqli_stmt_close($stmt);

// 5. Select & display
echo "<h2>Users before update/delete:</h2><ul>";
$result = mysqli_query($conn, "SELECT id,name,email FROM users");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>#{$row['id']} – {$row['name']} ({$row['email']})</li>";
}
mysqli_free_result($result);
echo "</ul>";

// 6. Update Carol’s email
$updateSql = "UPDATE users SET email = ? WHERE name = ?";
$stmt = mysqli_prepare($conn, $updateSql);
$newEmail = "carol@newdomain.test";
$userName = "Carol";
mysqli_stmt_bind_param($stmt, "ss", $newEmail, $userName);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

// 7. Delete Bob
$stmt = mysqli_prepare($conn, "DELETE FROM users WHERE name = ?");
$userName = "Bob";
mysqli_stmt_bind_param($stmt, "s", $userName);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

// 8. Show final state
echo "<h2>Users after update/delete:</h2><ul>";
$result = mysqli_query($conn, "SELECT id,name,email FROM users");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>#{$row['id']} – {$row['name']} ({$row['email']})</li>";
}
mysqli_free_result($result);
echo "</ul>";

// 9. Clean up (if you want)
// mysqli_query($conn, "DROP TABLE users");

mysqli_close($conn);

?>