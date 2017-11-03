<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <!--
    Modified from the Debian original for Ubuntu
    Last updated: 2014-03-19
    See: https://launchpad.net/bugs/1288690
  -->
  <head>

    <?php include '/var/www/html/php/head_imports.php';?>

   
    <!--TODO: set that php code with sql conn to other file and include it-->
  </head>
  <body>

    <?php include '/var/www/html/php/header.php';?>
    <?php include '/var/www/html/php/nav_and_social.php';?>
    
    <main>
       <?php include '/var/www/html/php/main_left_menu.php' ;?>
       
      
        
      <aside id="main_aside">
        <section id="category_page_main">
          <section id="category_page_header_with_name_of_group">
            <h2>Аксесуари для візочків</h2>
          </section>
          <hr class="horizontal_line">
         
          <section id="category_page_all_columns_of_items">

              <?php include '/var/www/html/php/navigation_pages/Carriages/page_navigation_accessories_for_carts.php'; ?>

          </section>
            <article id="main_aside_bottom_advertising">
              <img src="/pictures/kid.jpg" width="100%" height="100%" />
            </article>
        </section>
      </aside>
    </main>

    <?php include '/var/www/html/php/nav_with_logo_of_companies.php' ;?>
    <?php include '/var/www/html/php/footer.php';?>

  </body>
</html>