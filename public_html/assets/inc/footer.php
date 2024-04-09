<footer class="fixed-menu">
  <ul class="menu-list">
    <li>
      <a href="/">
        <i class="fa-solid fa-house"></i>
      </a>
    </li>
    <!--<li>
      <a href="https://soapland.love<?php echo $_SERVER["REQUEST_URI"]; ?>">
        <i class="fa-solid fa-rotate-right"></i>
      </a>
    </li>-->
    <li>
      <a class="page-top" id="js-button">
        <i class="fa-solid fa-up"></i>
      </a>
    </li>
  </ul>
</footer>
<script src="https://kit.fontawesome.com/c9e6893f52.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js"></script>
<script>function redirectTo(o){window.location.href=o}</script>
<script>
MicroModal.init({
  disableScroll: true,
  awaitOpenAnimation: true,
});
</script>
<script>scrollTop('js-button', 300);

function scrollTop(elem,duration) {
  let target = document.getElementById(elem);
  target.addEventListener('click', function() {
    let currentY = window.pageYOffset;
    let step = duration/currentY > 1 ? 10 : 100;
    let timeStep = duration/currentY * step;
    let intervalID = setInterval(scrollUp, timeStep);

    function scrollUp(){
      currentY = window.pageYOffset;
      if(currentY === 0) {
          clearInterval(intervalID);
      } else {
          scrollBy( 0, -step );
      }
    }
  });
}</script>
</body>
</html>
