
<?php
include("header.php");
?>
<br>
<div id="page-wrapper">
    <h1><b>Welcome, <?php echo htmlspecialchars($_SESSION["SESSION_EMAIL"]); ?></b> </h1>
</div>
<?php	
include("footer.php");
?>