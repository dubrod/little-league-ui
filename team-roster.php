<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team Roster - Little League UI</title>
    <?php include_once('inc/head.php'); ?>

</head>
<body>
<?php include_once('inc/header.php'); ?>
<div id="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="schedules.php">SCHEDULES</a></li>
            <li><a href="division-schedule.php">U10 SCHEDULE</a></li>
            <li>TEAM ROSTER</li>
        </ul>
    </div>
</div>
<main>

    <section class="division-schedule py2">
        <h1>2016-2017 - Under 10 - Team 10A</h1>
        <p>
            <strong>Coach:</strong> Wayne R<br>
            <strong>Color:</strong> Green<br>
        </p>

        <section>
            <h2>Roster</h2>
            <ul>
                <li>Kadin R</li>
                <li>Dakota S</li>
                <li>Aiden C</li>
                <li>Aaron D</li>
                <li>Lana W</li>
                <li>Naomi G</li>
            </ul>
        </section>

        <section>
            <h2>October</h2>
            <table class="border highlight" cellspacing="0" cellpadding="0">
                  <thead>
                      <tr>
                          <th>Date</th>
                          <th>Game</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td data-label="DATE">Oct 9th</td>
                          <td data-label="TIME">9am vs <span class="yellow">10B</span></td>
                      </tr>
                      <tr>
                          <td data-label="DATE">Oct 18th</td>
                          <td data-label="TIME">1pm vs <span class="purple">10D</span></td>
                      </tr>
                      <tr>
                          <td data-label="DATE">Oct 29th</td>
                          <td data-label="TIME">10am vs <span class="blue">10F</span></td>
                      </tr>

                  </tbody>
              </table>

        </section>



    </section>

</main>
<?php include_once('inc/footer.php'); ?>
</body>
</html>
