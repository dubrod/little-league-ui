<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Schedules - Little League UI</title>
    <?php include_once('inc/head.php'); ?>

</head>
<body>
<?php include_once('inc/header.php'); ?>
<main>

    <section class="schedules py2">
        <h1>2016-2017 Fall Recreational Schedule</h1>
        <p>The fall season is from October 2016 to February 2017</p>

        <p>
            <button class="button button-small button-secondary">RECREATIONAL</button>
            <button class="button button-small button-primary">COMPETITIVE</button>
        </p>


                <section>
                    <article>
                        <div class="p1">
                            <h3>Under 6</h3>
                            <p>This Division is for Boys and Girls born before August 2011.</p>
                        </div>
                        <aside>
                            <a class="button button-small button-secondary" href="division-schedule.php">COED</a>
                        </aside>
                    </article>
                </section>

                <section>
                    <article>
                        <div class="p1">
                            <h3>Under 8</h3>
                        </div>
                        <aside>
                            <a class="button button-small button-secondary" href="division-schedule.php">COED</a>
                        </aside>
                    </article>
                </section>

                <section>
                    <article>
                        <div class="p1">
                            <h3>Under 10</h3>
                        </div>
                        <aside>
                            <a class="button button-small button-secondary" href="division-schedule.php">COED</a>
                            <a class="button button-small button-primary" href="division-schedule.php">BOYS</a>
                        </aside>
                    </article>
                </section>

                <section>
                    <article>
                        <div class="p1">
                            <h3>Under 12</h3>
                        </div>
                        <aside>
                            <a href="division-schedule.php" class="button button-small button-secondary">BOYS</a>
                            <a href="division-schedule.php" class="button button-small button-secondary">GIRLS</a>
                            <a href="division-schedule.php" class="button button-small button-primary">BOYS</a>
                            <a href="division-schedule.php" class="button button-small button-primary">GIRLS</a>
                        </aside>
                    </article>
                </section>

                <section>
                    <article>
                        <div class="p1">
                            <h3>Under 14</h3>
                        </div>    
                        <aside>
                            <a class="button button-small button-secondary" href="division-schedule.php">BOYS</a>
                            <a class="button button-small button-secondary" href="division-schedule.php">GIRLS</a>
                            <a href="division-schedule.php" class="button button-small button-primary">BOYS</a>
                            <a href="division-schedule.php" class="button button-small button-primary">GIRLS</a>
                        </aside>
                    </article>
                </section>


    </section>

</main>
<?php include_once('inc/footer.php'); ?>
</body>
</html>
