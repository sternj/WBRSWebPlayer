<?php /* Template Name: player-template */ ?>
<html>
<style>
td input{
  vertical-align: center;
}
#pbutton{
    height:80px;
    width: 80px;
    border: none;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: center;
    float:left;
    outline:none;
}
.playing {
  background: url('http://www.wbrs.org/wp-content/uploads/2018/05/pause-button.png') no-repeat;
​
}
.paused {
  background: url('http://www.wbrs.org/wp-content/uploads/2018/05/play-button.png') no-repeat;
}
.slider {
    float:left;
    -webkit-appearance: none;
     background: #d3d3d3;
     border-radius: 5px;
     outline: none;
}
.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #000000;
    cursor: pointer;
}
.slider::-moz-range-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #000000;
  cursor: pointer;
}
table {
  width:300px;
}
</style>
<script>
  var src = "http://209.95.56.101:9004/;stream.mp3?nocache="
  //var win = window.open("", "Title", "toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=300,height=50,top="+(screen.height-400)+",left="+(screen.width-840));
  var on_play_callback = function() {
    var audio = document.getElementById("player");
    audio.src = src + Math.floor( Math.random() * 1000);
    audio.load();
    audio.play();
  }
​
  function toggle_play() {
    var audio = document.getElementById('player');
    if(audio.paused) {
      document.getElementById('pbutton').className = "";
      document.getElementById('pbutton').className = "playing";
      on_play_callback();
    } else {
      document.getElementById('pbutton').className = "";
      document.getElementById('pbutton').className = "paused";
      audio.pause();
    }
​
  }
​
function setVolume(i) {
  document.getElementById("player").volume = i;
}
//  win.document.write('<audio id="player" src="' src+Math.floor( Math.random() * 1000) + '"></audio> <div> <button onclick="document.getElementById(\'player\').play()">Play</button><button onclick="document.getElementById(\'player\').pause()">Pause</button><button onclick="document.getElementById(\'player\').volume+=0.1">Volume Up</button>	<button onclick="document.getElementById(\'player\').volume-=0.1">Volume Down</button></div> ')
//  win.document.write('<audio controls autoplay="autoplay"><source src="http://209.95.56.101:9004/;stream.mp3?nocache=' +Math.floor( Math.random() * 1000) + '" type="audio/mp3">Your browser does not support the audio element.</audio>');
</script>
<div style="width:375px; height:120px">
<div style="vertical-align:midddle; text-align:center;">
  WBRS 100.1FM
</div>
<audio id="player" src="http://209.95.56.101:9004/;stream.mp3"></audio>
<div>
  <table>
    <tr>
      <td>
          <button id="pbutton" class="paused" onclick="toggle_play()"></button>
      </td>
      <td>
          <input type="range" id="volume-bar" class="slider" min="0" max="1" step="0.01" value="1" oninput="setVolume(this.value)">
      </td>
​
    </tr>
​
​
​
​
​
​
<!--	<button onclick="on_play_callback()">Play</button>
	<button onclick="document.getElementById('player').pause()">Pause</button>
	<button onclick="document.getElementById('player').volume+=0.1">Volume Up</button>
	<button onclick="document.getElementById('player').volume-=0.1">Volume Down</button>-->
</div>
</div>
</html>
