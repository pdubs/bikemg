<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="/img/bicycle.ico" />
        <title>bikeMg</title>

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>

        <script type="text/javascript" src="/js/main.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/main.css">

        <script type="text/javascript">
        /*$(document).ready(function() {
            $(".part-container select").each(function() {
                initParts($(this).attr('name'));
                WAT I DO
            });
        });*/
        </script>

    </head>
    <body>
        <div class="app-container">
            <div id="header">
                <h1 id="headerTitle">bikeMg</h1>
            </div>

            <div class="part-container" id="Frames-container">
                <span class='part-type' id='frame-type'>Frame:</span>

                <select name="Frames" onchange="getWeight(this.value, this.name)">
                    <option value>Select Frame</option>
                    <option value="Covert Carbon 26">Transition Covert Carbon 26</option>
                </select>

                <div class="part-weight" id="Frames-weight"></div>

            </div>

            <div class="part-container" id="Forks-container">
                <span class='part-type' id='fork-type'>Fork:</span>

                <select name="Forks" onchange="getWeight(this.value, this.name)">
                    <option value>Select Fork</option>
                    <option value="Pike RCT3 26">Rock Shox Pike RCT3 26</option>
                </select>

                <div class="part-weight" id="Forks-weight"></div>
            </div>

            <div class="part-container" id="Wheelsets-container">
                <span class='part-type' id='wheelset-type'>Wheelset:</span>

                <select name="Wheelsets" onchange="getWeight(this.value, this.name)">
                    <option value>Select Wheelset</option>
                    <option value="ZTR Flow EX 26">Stan's ZTR Flow EX 26</option>
                </select>

                <div class="part-weight" id="Wheelsets-weight"></div>
            </div>

            <div class="part-container" id="Brakesets-container">
                <span class='part-type' id='brakeset-type'>Brakeset:</span>

                <select name="Brakesets" onchange="getWeight(this.value, this.name)">
                    <option value>Select Brakeset</option>
                    <option value="XT">Shimano XT</option>
                </select>

                <div class="part-weight" id="Brakesets-weight"></div>
            </div>

            <div class="part-container" id="Seatposts-container">
                <span class='part-type' id='seatpost-type'>Seatpost:</span>

                <select name="Seatposts" onchange="getWeight(this.value, this.name)">
                    <option value>Select Seatpost</option>
                    <option value="Lev">KS Lev</option>
                </select>

                <div class="part-weight" id="Seatposts-weight"></div>
            </div>

            <div class="total-container">
                <form>
                    <input class="calculateBtn" type="button" value="Calculate" onclick="calcWeight()" />
                    <div class="weight-display"><div id="totalWeight"></div> grams</div> &nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="weight-display"><div id="totalWeightLbs"></div> pounds</div>
                </form>
            </div>

        </div>

    </body>
</html>
