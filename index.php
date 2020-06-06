<?php require_once('view-comp/header.php'); ?>

<section>
  <div class="container">
    <div class="jumbotron" style="background-color: #eae2b7;">
      <h1 class="display-3">HELLO THERE!</h1>
      <p class="lead">Disclaimer lang noh, this website is exclusively made for storing the <strong>PROTS</strong> documents.
        That includes all of our photos, videos, writings, and many more. - Boi Prots
      </p>
      <hr class="my-2" style="border-color: black;">
      <p>Lalagyan ko rin tong part na to ng content.</p>
    </div>
  </div>
</section>

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

          <div class="tab-content" style="padding: 20px;">
             <div id="hello-there" class="tab-pane fade in active">
               <h1>HELLO THERE</h1>
               <hr class="my-3" style="border-color: black;">
               <p style="font-size: 18px;">Labyuu Prots! Hehehehehehe~ :>.</p>
             </div>
             <div id="prots-mission" class="tab-pane fade">
               <h1>PROTS MISSION</h1>
               <hr class="my-3" style="border-color: black;">
               <p style="font-size: 18px;">A godly relationship that aims to worship and give glory to the Lord.</p>
             </div>
             <div id="prots-vision" class="tab-pane fade">
               <h1>PROTS VISION</h1>
               <hr class="my-3" style="border-color: black;">
               <p style="font-size: 18px;">To be a couple that everybody will be blessed to witness, and who will be an example that can be followed.</p>
             </div>
             <div id="prots-core-values" class="tab-pane fade">
               <h1>PROTS CORE VALUES</h1>
               <hr class="my-3" style="border-color: black;">
               <p style="font-size: 18px;">Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                   <div id="accordion" role="tablist">
                      <div class="card" style="border-radius: 10px;">
                        <div class="card-header" role="tab" id="faith" style="background-color: #d62828; border-radius: 10px; padding: 10px;">
                          <h4 class="mb-0">
                            <a data-toggle="collapse" href="#faith-accordion" aria-expanded="false" aria-controls="faith-accordion" style="color: white;">
                              FAITH
                            </a>
                          </h4>
                        </div>

                        <div id="faith-accordion" class="collapse" role="tabpanel" aria-labelledby="faith">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                          </div>
                        </div>
                      </div>
                      <br>

                      <div class="card" style="border-radius: 10px;">
                        <div class="card-header" role="tab" id="fidelity" style="background-color: #d62828; border-radius: 10px; padding: 10px;">
                          <h4 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#fidelity-accordion" aria-expanded="false" aria-controls="fidelity-accordion" style="color: white;">
                              FIDELITY
                            </a>
                          </h4>
                        </div>
                        <div id="fidelity-accordion" class="collapse" role="tabpanel" aria-labelledby="fidelity">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                          </div>
                        </div>
                      </div>
                      <br>

                      <div class="card" style="border-radius: 10px;">
                        <div class="card-header" role="tab" id="love" style="background-color: #d62828; border-radius: 10px; padding: 10px;">
                          <h4 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#love-accordion" aria-expanded="false" aria-controls="love-accordion" style="color: white;">
                              LOVE
                            </a>
                          </h4>
                        </div>
                        <div id="love-accordion" class="collapse" role="tabpanel" aria-labelledby="love">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                          </div>
                        </div>
                      </div>
                    </div>

             </div>
           </div>
          </div>
      </div>

</section>


<?php require_once('view-comp/footer.php') ?>
