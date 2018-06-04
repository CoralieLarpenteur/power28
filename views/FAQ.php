<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'tools/head.php'; ?>
    <title>FAQ</title>
  </head>
  <body>
    <?php require_once 'tools/nav.php'; ?>

    <h2 class="center">FAQ</h2>

<div class="row noMargin justify-content-center">
  <div class="col-10">
    <div id="accordion">
      <?php foreach ($FAQs as $FAQ): ?>
        <div class="card" style="margin:10px 0px 10px 0px">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $FAQ['id']; ?>" aria-expanded="false" aria-controls="collapseOne">
                <?php echo $FAQ['question']; ?>
              </button>
            </h5>
          </div>
          <div id="collapse<?php echo $FAQ['id']; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <?php echo $FAQ['answer']; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>







<?php require_once 'tools/footer.php'; ?>
  </body>
</html>
