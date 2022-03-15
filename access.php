<!DOCTYPE html>
<html>
    <head>
        <title>
            Accessibility Features
        </title>
        <style>
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}
</style>
    </head>
<body>
    <div id="overlay" onClick="off()">
</div>

<div style="padding:20px">
<button onClick="on()">Overlay</button>
</div>
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>

</body>
</html>