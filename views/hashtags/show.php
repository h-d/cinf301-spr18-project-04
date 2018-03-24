<!--Hudson DeVoe
    Show tweets for given hashtag-->

<div class="input-group">
    <input type="text" class="form-control" placeholder="#tbt, #newprofilepic, etc." name="srch-term" id="srch-term">
    <div class="input-group-btn">
        <a class="nav-link" href="?controller=hashtags&action=show"><button class="btn btn-default" type="submit" id="button">Search Hashtags</button></a>
    </div>
</div>
<h2>Tweets using  #<?=$_COOKIE['Search']?>:</h2>
<hr>
<?php
//Creates cards for each tweet in the hashtags array
if (count($this->hashtags) > 10)
{
    foreach($this->hashtags as $hashtag) {
        if (is_array($hashtag)) { ?>
            <div class="card">
                <div class="card-body">
                    <img src="<?php echo htmlspecialchars((string)$hashtag['user']['profile_image_url'])?>" alt="test"/>
                    <h3 class="card-title"><?= '@' . $hashtag['user']['screen_name'] ?></h3>
                    <h4 class="card-title"><?= $hashtag['user']['name'] ?></h4>
                    <h5 class="card-text"><?= $hashtag['text'] ?></h5>
                    <p><?= $hashtag['created_at'] ?></p>
                </div>
            </div>
        <?php }
    }
} else {
    echo 'No Tweets found.';
}?>