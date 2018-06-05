      <?php foreach ($tutos as $key => $tuto): ?>
        <div class="row noMargin tuto<?php echo $tuto['reverse'] ?>">
          <div class="col-8">
            <img style="width:100%" src="assets/img/tuto/<?php echo $tuto['img']; ?>" alt="<?php echo $tuto['img']; ?>">
          </div>
          <div class="col-4">
            <?php echo $tuto['explanation']; ?>
          </div>
        </div>

      <?php endforeach; ?>

    <?php require_once 'tools/footer.php'; ?>
