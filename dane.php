<style>
    .div1 {
        width: 100%;
        padding: 50px;
        box-sizing: border-box;
        white-space: nowrap;
    }

    .div2 {
        width: calc(50% - .5em);
        height: 100px;
        float: left;
        margin-right: 1em;
        white-space: normal;
    }

    .div3 {
        margin-left: 50%;
        height: 100px;
        white-space: normal;
    }

    table {
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
        font-size: 18px;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #ddd}

    th {
        background-color: #FFB266;
        color: white;
    }
     
    h2 {
        text-align: center;
    }

    .brakwynikow {
        text-align: center;
    }
    
    h4 {
        text-align: center;
    }
</style>

<div class="div1">
<div class="div2">
<h2>Strona główna</h2>
<h4>ORDER BY id DESC LIMIT 10</h4>
<?php
$servername = "192.168.0.10";
$username = "www";
$password = "857E1OVAk233";
$dbname = "strony";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, ip, czas FROM glowna ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>IP</th><th>Czas</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["ip"]."</td><td>".$row["czas"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "<div class='brakwynikow'>Brak wyników</div>";
}
?>
</div>
<div class="div3">
<h2>VRCPL</h2>
<h4>ORDER BY id DESC LIMIT 10</h4>
<?php
$sql = "SELECT id, ip, czas FROM vrcpl ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>IP</th><th>Czas</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["ip"]."</td><td>".$row["czas"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "<div class='brakwynikow'>Brak wyników</div>";
}
$conn->close();
?>
</div>
</section>