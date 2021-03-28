<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        How Did You Hear About Us?:<br />
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Choose How You Heard</option>
            <option value="Phone">Phone</option>
            <option value="Web">Web</option>
            <option value="Magazine">Magazine</option>
            <option value="Friend or Family">Friend or Family</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>

<div>	
    <label>
        Please describe your organization<br /><textarea name="organization_details" cols="36" rows="4" placeholder="" tabindex="60"></textarea>
    </label>
</div>	

<div>	
    <fieldset>
        <label>What Services Are You Interested In?</label>
        <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
        <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
    </fieldset>
</div>

<div>	
    <fieldset>
        <label>Do you need hosting and/or a new URL?</label><br />
        <input type="checkbox" name="Hosting_Or_Url[]" value="Hosting" tabindex="40" /> Hosting <br />
        <input type="checkbox" name="Hosting_Or_Url[]" value="New URL" /> New URL <br />
    </fieldset>
</div>

<div>	
    <label>
        What is your target audience?<br /><textarea name="audience_details" cols="36" rows="4" placeholder="" tabindex="60"></textarea>
    </label>
</div>

<div>	
    <label>
        If a redesign, what parts of your website to do want to change or improve?<br /><textarea name="redesign_details" cols="36" rows="4" placeholder="" tabindex="60"></textarea>
    </label>
</div>	

<div>	
    <label>
        If a new website, what features and (if any) third-party integrations will you need?<br /><textarea name="new_site_details" cols="36" rows="4" placeholder="" tabindex="60"></textarea>
    </label>
</div>		

<div>
    <label>What is your budget for this project?</label><br />
    <input type="text" name="budget_info" required="required" placeholder="" title="What is your budget for this project?" tabindex="20" size="44">
</div>

<div>
    <label>What is your deadline for completing the site?</label><br />
    <input type="text" name="deadline_info" required="required" placeholder="" title="What is  your deadline for completing the site?" tabindex="20" size="44">
</div>

<div>	
    <fieldset>
        <label>Would you like to join our mailing list?</label><br />
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Yes <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
    </fieldset>
</div>

<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="SUBMIT" />
</div>
</form>
<!-- END HTML FORM -->

