<h2>The hashtags are:</h2>
<table>
  <tr>
    <th>Test</th>
    <th>Selection</th>
  </tr>
    <?php foreach($this->hashtags as $hashtag) { ?>
        <tr>
            <td><?=$hashtag['user']['screen_name'] ?></td>
            <td><?=$hashtag['text']?></td>
            <td><?=$hashtag['created_at']?></td>
        </tr>
    <?php } ?>
</table>