<h2 class"page-header">Accueil</h2>
<br />
<ul class="nav nav-tabs">
<?php
$self = $_SERVER['PHP_SELF'];

function doprint($page, $self, $title) {
	if ($page == $self)
	      print("<li class='active'><a href=\"$page\" title=\"$title\">$title</a></li>");
	else
	      print("<li><a href=\"$page\" title=\"$title\">$title</a></li>");
}

doprint('/index.php', $self, "Login");
?>

</ul>
<br />
</header>
