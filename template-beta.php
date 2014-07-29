<?
 /*
Name: Beta Download
URI: http://tcms.me/
Description: This is the Tentacle default theme.
Author: Tentacle
Version: 1.0
License: GNU General Public License
License URI: license.txt
*/

theme::part( 'partials/header',array( 'title'=>'Thanks for downloading Tentacle CMS', 'assets'=>'marketing', 'beta'=>true) ); ?>

<div class="container">
    <div class="bump">&nbsp;</div>

        <div class="row">

            <div class="span6">
                <h1>Thanks!</h1>

                <p class="lead">Click <a href="http://api.tentaclecms.com/get/download"  onClick="mixpanel.track('Content', { 'link': 'Download', 'version': 'release_version()' });">here</a> if your download does not automatically start.</p>
                <p class="lead">Tentacle CMS is a new, and with that we rely of your feedback. If you have any issues at all please contact ups, or Submit an issue buy following <a href="https://github.com/adampatterson/Tentacle/wiki/Reporting-a-bug">these steps</a>.</p>


            </div>
            <div class="span5 offset1">
                <h1>Keep in touch</h1>
                <p class="lead">Get the lowdown on announcements and cool new features.</p>

                <!-- Begin MailChimp Signup Form -->
                <div id="mc_embed_signup">
                    <form action="//adampatterson.us1.list-manage.com/subscribe/post?u=c21d0f4a99a90fdf9c412e45a&amp;id=8b21ce6336" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                        <div class="mc-field-group">
                            <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                            </label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-MMERGE1">First Name </label>
                            <input type="text" value="" name="MMERGE1" class="" id="mce-MMERGE1">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-MMERGE2">Last Name </label>
                            <input type="text" value="" name="MMERGE2" class="" id="mce-MMERGE2">
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_c21d0f4a99a90fdf9c412e45a_8b21ce6336" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </form>
                </div>
                <!--End mc_embed_signup-->

            </div>
        </div>

    </div>
</div>

<? theme::part( 'partials/footer', array('track' => 'Download') ); ?>
