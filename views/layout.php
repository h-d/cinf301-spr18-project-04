<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>

	<table>
		<tr>
			<th><a href='?controller=main&action=home'>Home</a></th>
		<tr>
        <tr>
            <th><a href='?controller=users&action=index'>Tweets by User</a></th>
        <tr>
        <tr>
            <th><a href='?controller=tweets&action=index'>Tweets</a></th>
        <tr>
        <tr>
            <th><a href='?controller=hashtags&action=index'>Hashtags</a></th>
        <tr>
	</table>
	<?php require_once('routes.php'); ?>
  <body>
</html>
