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

class PlayOK{


  ## Playing music
  use Game, Music{
    //將 Game 的 play 別名成 gamePlay
    Game::play as gamePlay;      ## 無

    //使用 Music 的 play 功能，取消 Game 的 play 功能！
    Music::play insteadof Game;  ## Playing music
  }
}


###### Playing musicPlaying a game
$player = new PlayOK();

## Playing music
$player->play();
## Playing a game
$player->gamePlay();
?>