<h2>The followers are:</h2>
<table>
  <tr>
    <th>Test</th>
    <th>Selection</th>
  </tr>
    <?php foreach($this->followers as $follower) { ?>
        <tr>
            <td><?=$follower['name'] ?></td>
            <td><?=$follower['screen_name']?></td>
            <td><?=$follower['profile_image_url_https']?></td>
        </tr>
    <?php } ?>
</table>