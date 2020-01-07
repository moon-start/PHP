<?php
trait Game{
  function play() {
    echo "Playing a game";
  }
}
trait Music{
  function play() {
    echo "Playing music";
  }
}

class Play{
  use Game, Music;
}


$player = new Play();
$player->play();
?>