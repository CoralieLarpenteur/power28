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
    <div class="row noMargin justify-content-center" style="margin-top: 30px">
      <div class="col-10">
        <h3>Participez a la création de nouvelle question pour la FAQ</h3>
      </div>
    </div>
    <div class="row noMargin justify-content-center">
      <div class="col-10">
        <form action="FAQ.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="fristname" aria-describedby="emailHelp" placeholder="Votre prénom">
          </div>
          <div class="form-group">
              <textarea class="form-control" id="message" rows="3" placeholder="Votre question"></textarea>
          </div>
          <button type="submit" class="btn btn-primary right">envoyer</button>
        </form>
      </div>
    </div>







<?php require_once 'tools/footer.php'; ?>
  </body>
</html>
