<h2>The tweets are:</h2>
<table>
  <tr>
    <th>Test</th>
    <th>Selection</th>
  </tr>
    <?php foreach($this->hashtags as $status) {
        if (is_array($status)) {?>
        <tr>
            <td><?=$status['user']['screen_name'] ?></td>
            <td><?=$status['text']?></td>
            <td><?=$status['created_at']?></td>
        </tr>
    <?php }
    } ?>
</table>