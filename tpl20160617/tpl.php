
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php if($i<=1){ ?>
	 <h1>1111</h1>
	<?php } ?>

	<?php if($i<=1): ?>
	<h1>1111</h1>
	<?php endif; ?>

{if $name eq "Fred"}
	Welcome Sir.
{elseif $name eq "Wilma"}
	Welcome Ma'am.
{else}
	Welcome, whatever you are.
{/if}
	
</body>
</html>