<?php

  define('ACCESS_TOKEN',        "");
  define('ACCESS_TOKEN_SECRET', "");
  define('CONSUMER_KEY',        "");
  define('CONSUMER_SECRET',     "");

  require_once('EasyTweets.php');

  $twitterUsername = 'username';
  $numTweets = 10;

  $twitter = new EasyTweets($twitterUsername, $numTweets);
  $tweets = $twitter->getTweets();

  echo '<pre>';
  print_r($tweets);
  echo '</pre>';