<?php
$conn = new mysqli("localhost", "root", "", "complaints");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $complaint = $_POST["complaint"];
  $conn->query("INSERT INTO complaints (name, complaint) VALUES ('$name', '$complaint')");
}
?>
<form method="POST">
  <input type="text" name="name" placeholder="Your Name" required>
  <textarea name="complaint" placeholder="Your Complaint" required></textarea>
  <button type="submit">Submit</button>
</form>
