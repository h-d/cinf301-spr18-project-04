 <!-- Hudson DeVoe
 Navigation Bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
          <a class="navbar-brand" href="?controller=main&action=home">
              <img src="https://cdn3.iconfinder.com/data/icons/social-icons-5/607/Twitterbird.png" width="50" height="50">
          </a>
          <ul class="navbar-nav">
                  <a class="nav-link" href="?controller=main&action=home">Twitter Search Tool</a>
          </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">

                  <li class="nav-item">
                      <a class="nav-link" href="?controller=users&action=index">Tweets by User</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="?controller=hashtags&action=index">Tweets by Hashtag</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="?controller=followers&action=index">Followers by User</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
 <div class="container">
  <?php require_once('routes.php'); ?>
 </div>