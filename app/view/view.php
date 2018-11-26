<?php
include __DIR__.'./includes/header.php';
?>

<div id="mainContent">
<center><h1><?php echo $blog[0]['title'];?></h1>
<p><?php echo $blog[0]['body'];?></p>
<p><?php echo $blog[0]['datecreated'];?></p>
</center>
</div>

</body>
</html>