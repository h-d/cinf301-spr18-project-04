<h2>The users are:</h2>
<table>
  <tr>
    <th>Test</th>
    <th>Selection</th>
  </tr>
<?php foreach($this->users as $users) { ?>
  <tr>
      <td><?=$users['user']['screen_name'] ?></td>
      <td><?=$users['text']?></td>
      <td><?=$users['created_at']?></td>
  </tr>
<?php } ?>
</table>