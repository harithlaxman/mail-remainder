<?php
 ?>
<html>
<head>
  <title>Reminder Application</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id="form">
    <h2>Set Reminder</h2>
    <form action="session.php" method="POST">
      <p>
        <label>Email ID :</label>
        <input type="text" id="email_id" name="email_id" />
      </p>
      <p>
        <label>Reminder Message :</label>
        <input type="text" id="r_msg" name="r_msg" />
      </p>
      <p>
        <label>Set reminder date</label>
        <input type="date" id="date" name="r_date" />
      </p>
      <p>
        <label>Set reminder time</label>
        <input type="time" id="time" name="r_time" />
      </p>
      <p>
        <input type="submit" id="btn" value="Submit" />
      </p>
    </form>
  </div>
</body>
</html>
