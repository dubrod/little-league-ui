<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Little League UI</title>
    <?php include_once('inc/head.php'); ?>

</head>
<body>
<?php include_once('inc/header.php'); ?>
<main>

    <section id="registration" class="py2">
        <h1>Register for the Fall Season</h1>
        <p>The fall season is from October 2016 to February 2017</p>

        <div class="flex--container flex--dir-row flex--jc-between">
            <div class="flex--col-6">

                <form class="form-stacked form-light">
                    <label for="">Guardian Name</label>
                    <input type="text">
                    <label for="">Email</label>
                    <input type="text">
                    <label for="">Phone</label>
                    <input type="text">
                    <label for="">Address</label>
                    <input type="text">
                    <hr>
                    <div class="flex--container flex--dir-row flex--jc-around">
                        <div class="flex--col-6">
                            <label for="">Player Name</label>
                            <input type="text">
                        </div>
                        <div class="flex--col-6">
                            <label for="">Player Gender</label>
                            <select name="" id="">
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>

                        <div class="flex--col-6">
                            <label for="">Birth Date</label>
                            <select name="" id="birthMonth" class="inline">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <select name="" id="birthDay" class="inline">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select name="" id="birthYear" class="inline">
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                            </select>
                        </div>
                        <div class="flex--col-6">
                            <p class="text-primary"><br><span id="calcAge"></span><br><span id="calcGroup"></span></p>
                        </div>
                    </div>

                    <hr>

                    <div class="flex--container flex--dir-row flex--jc-around">
                        <div class="flex--col-3">
                            <label>Jersey:</label>
                            <select name="" id="">
                                <option value="YS">YS</option>
                                <option value="YM">YM</option>
                                <option value="YL">YL</option>
                                <option value="YXL">YXL</option>
                                <option value="AS">AS</option>
                                <option value="AM">AM</option>
                                <option value="AL">AL</option>
                                <option value="AXL">AXL</option>
                            </select>
                        </div>
                        <div class="flex--col-3">
                            <label>Tee:</label>
                            <select name="" id="">
                                <option value="YS">YS</option>
                                <option value="YM">YM</option>
                                <option value="YL">YL</option>
                                <option value="YXL">YXL</option>
                                <option value="AS">AS</option>
                                <option value="AM">AM</option>
                                <option value="AL">AL</option>
                                <option value="AXL">AXL</option>
                            </select>
                        </div>
                        <div class="flex--col-3">
                            <label>Shorts:</label>
                            <select name="" id="">
                                <option value="YS">YS</option>
                                <option value="YM">YM</option>
                                <option value="YL">YL</option>
                                <option value="YXL">YXL</option>
                                <option value="AS">AS</option>
                                <option value="AM">AM</option>
                                <option value="AL">AL</option>
                                <option value="AXL">AXL</option>
                            </select>
                        </div>
                        <div class="flex--col-3">
                            <label>Socks:</label>
                            <select name="" id="">
                                <option value="YS">YS</option>
                                <option value="YM">YM</option>
                                <option value="YL">YL</option>
                            </select>
                        </div>
                    </div>

                    <hr>
                    <label><input type="checkbox"> <span>I have read and understand this consent form, and I volunteer to participate</span></label>
                    <hr>
                    <button type="submit" class="button button-primary">REGISTER</button>

                </form>

            </div>
            <div class="flex--col-6">
                <aside class="p2">
                    <h3>League Policy</h3>
                    <p>The league reserves the right to cancel any registration due to player misconduct without a refund.</p>
                    <p>The league will not sell or share your contact information with any 3rd party business or association. <br>
                        <small>Exceptions being governing Soccer Associations.</small>
                    </p>
                    <p>FYSA RECOMMENDS THAT PLAYERS NOT REGISTER TO "A TEAM WHO'S AGE GROUP EXCEEDS THE PLAYER'S NORMAL AGE."
                        It is FYSA's policy that all players compete at a level they are capable of both physically and developmentally.
                        For a player to move up more than one normal age grouping will require approval from the affiliate's director of coaching
                        or agent of record, and the FYSA Director of Coaching.
                    </p>
                    <p>
                        <strong>INSURANCE NOTICE:</strong> All injuires must be reported within 90 days of the date of the injury.
                    </p>
                    <p>
                        <strong>INFORMED CONSENT:</strong> I, the parent/guardian of the registrant, agree that we will abide by the rules of CU Soccer Club Inc.,
                        the state association (FYSA) and all its affiliated organizations. My/our child wishes to participate in soccer
                        during the season of this registration. We realize risks are involved in my/our child's participation. I/we understand that the
                        risk to my/our child includes full range of injuries from minor to severe, and the result could be death, paralysis, or other serious,
                        permanent disability. I/we accept this risk as a condition of my/our child's participation.
                    </p>
                </aside>
            </div>

    </section>

</main>
<?php include_once('inc/footer.php'); ?>
</body>
</html>
