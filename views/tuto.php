<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'tools/head.php'; ?>
    <title></title>
  </head>
  <body>
    <?php require_once 'tools/nav.php'; ?>
    <table>
      <tr>
        <th>image</th>
        <th>explication</th>
      </tr>
      <?php foreach ($tutos as $key => $tuto): ?>
        <tr id="tuto<?php echo $tuto['reverse'] ?>">
          <td><img src="assets/img/tuto/<?php echo $tuto['img']; ?>" alt="<?php echo $tuto['img']; ?>"></td>
          <td><?php echo $tuto['explanation']; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <?php require_once 'tools/footer.php'; ?>


  </body>
</html>
