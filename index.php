<?php
include('../db.php');
global $db;

$sql = "SELECT commands FROM users";
$result = $db->query($sql);

var_dump($result->commands);

$db->close();
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header class="menu buttons">
    <a class="button" href="">osu!coffee</a>
    <a class="button" target="_blank" href="./docs">Docs</a>
    <a class="button" target="_blank" href="https://discord.com/oauth2/authorize?client_id=698424159520161823&scope=bot&permissions=8">Invite</a>
  </header>

  <div class="main">
    <div class="status-wrapper">
      <div class="status-head status-row">
        <div class="status-col">
          <h4>Commands</h4>
        </div>
        <div class="status-col">
          <h4>Server</h4>
        </div>
        <div class="status-col">
          <h4>Users</h4>
        </div>
      </div>
      <div class="status-item status-row">
        <div class="status-col">
          <p><?php echo $result?></p>
        </div>
        <div class="status-col">
          <p>Lorem ipsum</p>
        </div>
        <div class="status-col">
          <p>Lorem ipsum</p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <h6>osu!coffee &copy; 2020</h6>
  </footer>
  <img src="./rsc/coffee3.png" class="background-logo">
</body>

</html>
