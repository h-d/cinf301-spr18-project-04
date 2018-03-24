<!--Hudson DeVoe
    Shows Followers of Given User-->


<div class="input-group">
    <input type="text" class="form-control" placeholder="@realDonaldTrump, @ClickHole, etc." name="srch-term" id="srch-term">
    <div class="input-group-btn">
        <a class="nav-link" href="?controller=hashtags&action=show"><button class="btn btn-default" type="submit" id="button">Search Followers</button></a>
    </div>
</div>

<h2>Some of @<?=$_COOKIE['Search']?>'s Followers:</h2>
<hr>
<?php
//Creates cards for each follower in the followers array
if (count($this->followers) > 5)
{
    foreach($this->followers as $follower) {
        if (is_array($follower)) { ?>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><?= '@' . $follower['name'] ?></h3>
                    <h4 class="card-title"><?= $follower['screen_name'] ?></h4>
                    <p><?= $follower['description'] ?></p>
                </div>
            </div>
        <?php }
    }
} else {
    echo 'No Followers found.';
}?>