<html>
<body>
<center>
<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Payment details</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">First name</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Last name</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Permanent Address</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Contact No:</label>
            <div class="col-md-4">
                <input id="textinput" name="textinput" type="text" placeholder="0xx-xxxxxxx" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Multiple Checkboxes -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes"></label>
            <div class="col-md-4">
                <div class="checkbox">
                    <label for="checkboxes-0">
                        <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                        I have read the terms and conditions.
                    </label>
                </div>
                <div class="checkbox">
                    <label for="checkboxes-1">
                        <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                        I agree to the terms and conditions.
                    </label>
                </div>
            </div>
        </div>

    </fieldset>
</form>
    <?php

    include ('pay.php');

    ?>
</center>

</body>
</html>