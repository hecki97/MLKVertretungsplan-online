<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include(dirname(__FILE__)."/res/php/_registration.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <?php include(dirname(__FILE__)."/res/html/htmlHead.html"); ?>
    <title>Registrierung</title>
  </head>
  <body class="metro">
  <header>
    <nav class="navigation-bar dark fixed-top">
      <nav class="navigation-bar-content">
          <a href="./index.php" class="element"><span class="icon-arrow-left-5"></span> <?=$string['labels']['l.mlkvplan']; ?><sup><?=$lang; ?></sup></a>
   
          <span class="element-divider"></span>
          <button class="element brand no-phone no-tablet" onclick="window.location.reload();"><span class="icon-spin"></span></button>
          <span class="element-divider"></span>

          <a href="./info.php" class="element brand place-right no-phone no-tablet"><span class="icon-cog"></span></a>
          <span class="element-divider place-right"></span>
          <a class="element place-right no-phone no-tablet"><?=$version; ?></a>
          <span class="element-divider place-right"></span>
          <a href="./login.php" class="element place-right no-phone no-tablet"><span class="icon-key"></span> <?=$string['links']['a.menu.login']; ?></a>
          <span class="element-divider place-right"></span>
      </nav>
    </nav>
  </header>

  <div class="container" style="text-align: center;">
  <h1><?=$string['labels']['l.registration']; ?></h1>
    <form action="registration.php" method="post">
      <h3><?=$string['labels']['l.data']; ?></h3>
      
      <table cellpadding="2" align="center">
        <tr>
          <th><?=$string['labels']['l.username']; ?></th>
          <th><input type="text" name="username" /></th>
        </tr>
        <tr>
          <th><?=$string['labels']['l.password']; ?></th>
          <th><input type="password" name="passwort" /></th>
        </tr>
        <tr>
          <th><?=$string['labels']['l.password.rp']; ?></th>
          <th><input type="password" name="passwort2" /></th>
        </tr>
        <tr>
          <th><?=$string['labels']['l.invitation.code']; ?></th>
          <th><input type="text" name="einladungscode" /></th>
        </tr>
      </table>
      <br><input type="submit" name="registration" value="<?=$string['buttons']['b.registration']; ?>"><br/><?=@$return ?>
    </form>
  </div>
</body>
</html>