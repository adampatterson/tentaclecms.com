<script type="text/javascript">
    var stb = {
        hascolsed: false,
        cookieLife: 30,
        triggerHeight: 80,
        stbElement: ""
    };
</script >

<script type='text/javascript' src='<?= THEME ?>/assets/js/scroll-trigger.min.js'></script>

<div id="scrolltriggered" style="width: 300px;right: 10px;">
    <div id="the_box">
        <a href="#close" id="closebox">x</a><h3>Keep in touch!</h3>

        <form method="post" id="newsletter" action="http://www.industrymailout.com/Industry/SubscribeRedirect.aspx" >

            <input type="hidden" name="mailinglistid" value="27205" />
            <input type="hidden" name="success" value="<?= BASE_URL.URI ?>" />
            <input type="hidden" name="errorparm" value="error" />

            <div class="control-group">
                <label for="firstname">First Name</label>
                <div class="controls">
                    <input type="text" name="givenname" maxlength="50" class="span3 input-xlarge input-small" id="firstname" >
                </div>

                <label for="lastname">Last Name</label>
                <div class="controls">
                    <input type="text" name="familyname" maxlength="50" class="span3 input-xlarge" id="lastname" >
                </div>

                <label for="email">Email</label>
                <div class="controls">
                    <input type="text" name="email" required="required" value="" class="email span3 input-xlarge" id="email">
                </div>
            </div>

            <?php if($note = note::get('session')): ?>
                <input type='hidden' name='history' value="<?= $note['content'];?> " />
            <?php endif;?>

            <input type="submit" value="Join" class="btn btn-primary" onClick="_gaq.push(['_trackEvent', 'Download Page', 'Button', 'Mailing List']);" />

        </form>

        <p id="stbMsgArea"></p>
    </div>
</div>