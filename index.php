<?php require_once('view-comp/header.php'); ?>

<section>
  <div class="container">
    <h1>HELLO THERE!</h1>
  </div>
</section>
<br>

<section>

      <div class="container">
        <ul class="nav nav-tabs">
          <li  class="active">
            <a data-toggle="tab" id="tabs" href="#hello-there">Hello there!</a>
          </li>
          <li>
            <a data-toggle="tab" id="tabs" href="#prots-mission">Mission</a>
          </li>
          <li>
            <a data-toggle="tab" id="tabs" href="#prots-vision">Vision</a>
          </li>
          <li>
            <a data-toggle="tab" id="tabs" href="#prots-core-values">Core Values</a>
          </li>
        </ul>


          <div class="tab-content">
             <div id="hello-there" class="tab-pane fade in active">
               <h3>HELLO THERE</h3>
               <p>Labyuu Prots! Hehehehehehe~ :>.</p>
             </div>
             <div id="prots-mission" class="tab-pane fade">
               <h3>PROTS MISSION</h3>
               <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
             </div>
             <div id="prots-vision" class="tab-pane fade">
               <h3>PROTS VISION</h3>
               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
             </div>
             <div id="prots-core-values" class="tab-pane fade">
               <h3>PROTS CORE VALUES</h3>
               <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
             </div>
           </div>
          </div>
      </div>

</section>


<?php require_once('view-comp/footer.php') ?>
