<?php 
// START UCLA MOD CCLE-2802
// Display a fontpage banner (for users not logged in)
// To display this page, must set this config:
// $CFG->customfrontpageinclude = "theme/uclashared/layout/frontpage.php";

?>

<div class="ribbon">
    <h3>Login and...</h3>
    <ul>
        <li><a href="<?php echo $CFG->wwwroot;?>/my/index.php">View your sites</a></li>
        <li><a target="_blank" href="https://archive.ccle.ucla.edu/">View sites created prior to Summer 2012</a></li>
        <li><a href="<?php echo $CFG->wwwroot;?>/course/request.php">Request a collaboration site</a></li>
    </ul>
</div>

<div class="ribbon">
    <h3>Help & Feedback</h3>
    <ul>
        <li><a href="<?php echo $CFG->wwwroot;?>/blocks/ucla_help/index.php">Submit a help request</a></li>
        <li><a target="_blank" href="http://docs.ccle.ucla.edu/index.php/Main_Page">View self-help articles</a></l
    </ul>
</div>