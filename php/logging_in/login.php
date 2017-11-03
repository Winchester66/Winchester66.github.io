<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <!--
    Modified from the Debian original for Ubuntu
    Last updated: 2014-03-19
    See: https://launchpad.net/bugs/1288690
  -->
  <head>

    <?php include '/var/www/html/php/head_imports.php';?>
  </head>
  <body>

    <?php include '/var/www/html/php/header.php';?>
    <?php include '/var/www/html/php/nav_and_social.php';?>
    
    <main>
		<section id="buying_person_info">
		    <h2>Логування</h2>
		    <hr class="horizontal_line">
		    <form id="form" action="/php/handlers/handler_checking_logging_in_person_info.php" method="get">
				Логін: <input type="text" name="name"><br>
				Пароль: <input type="text" name="email"><br>
				<input type="submit">
			</form>
		  </section>
    </main>

    <?php include '/var/www/html/php/nav_with_logo_of_companies.php' ;?>
    <?php include '/var/www/html/php/footer.php';?>

  </body>
</html>