<div class="input-group">
    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
    <div class="input-group-btn">
        <a class="nav-link" href="?controller=users&action=show"><button class="btn btn-default" type="submit" id="button">Users</button></a>
    </div>
</div>
<h2>Tweets from <?=$_COOKIE['Search']?>:</h2>
<hr>
<?php
    if (count($this->users) > 1)
    {
        foreach($this->users as $users) {
            if (is_array($users)) { ?>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><?= '@' . $users['user']['screen_name'] ?></h3>
                        <h4 class="card-title"><?= $users['user']['name'] ?></h4>
                        <h5 class="card-text"><?= $users['text'] ?></h5>
                        <p><?= $users['created_at'] ?></p>
                    </div>
                </div>
            <?php }
        }
    } else {
        echo 'No Tweets found.';
    }?>