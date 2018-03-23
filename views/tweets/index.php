<h2>The tweets are:</h2>
<table>
  <tr>
    <th>Test</th>
    <th>Selection</th>
  </tr>
<?php foreach($this->tweets as $algorithm) { ?>
  <tr>
    <td><?=$algorithm['algorithm']?></td>
    <td><a href='?controller=users&action=show&id=<?=$algorithm['id']?>'>Check Ranking</a></td>
  </tr>
<?php } ?>
</table>