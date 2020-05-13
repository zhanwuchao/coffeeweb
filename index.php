<?php
include '../db.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT commands, guilds, users FROM stats";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    }
} else {
    echo "0 results";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>osu!coffee</title>
  <meta charset="UTF-8">
  <meta name="description" content="Official site of the osu!coffee Discord bot">
  <meta name="author" content="trq">
  <link rel='stylesheet' href='./style.css' />
  <meta name="keywords" content="osu, coffee, osu!cofffee, discord, bot, osu!coffee bot, osu coffee bot">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>

<body>
  <div class="buttons">
    <button type="button" name="coffee" onclick="location.href='./index.html'">osu!coffee</button>
    <button type="button" name="docs" onclick="window.open('./docs')">Docs</button>
    <button type="button" name="community" onclick="location.href='./coms.html'">Commuity</button>
    <button type="button" name="invite" onClick="location.href='https://discord.com/oauth2/authorize?client_id=698424159520161823&scope=bot&permissions=8'">Invite</button>
    <button type="button" name="team" onclick="location.href='./team.html'">Team</button>
    <button type="button" name="partners" onclick="location.href='./partners.html'">Partners</button>
  </div>
  <div id='img'>
    <img src='./rsc/coffee3.png' width="365" height="410"></div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="stats">
    <p>commands&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
    <p>servers</p>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspusers</p>
  </div>
  <div class="stats2">
  </div>
  <div class="ex1">
  </div><br>
  <div class="ex2">
  </div><br>
  <div class="ex3">
  </div><br>
  <div class="footer">
    <h6>osu!coffee &copy 2020</h6>
  </div><br>
</body>

</html>
