<?php
         $server = 'localhost'; // ИМЯ СЕРВЕРА
         $user = 'root'; // ПОЛЬЗОВАТЕЛЬ - НЕ ИСПОЛЬЗУЙТЕ ROOT ДЛЯ ВАШЕЙ ЖЕ БЕЗОПАСНОСТИ
         $pass = 'qwerty123'; // ПАРОЛЬ ПОЛЬЗОВАТЕЛЯ

         $db = 'bulka_shop_db'; // БАЗА ДАННЫХ
         $table = 'Carriages_Trostunku_carts'; // НАЗВАНИЕ ТАБЛИЦЫ

         $chislo = 2; // ЧИСЛО СООБЩЕНИЙ НА СТРАНИЦЕ

         // ДЛЯ УДОБСТВА ОБОЗНАЧИМ ПЕРЕМЕННУЮ С ТЕКСТОМ ОШИБКИ
         $text_error = '<br />Ошибочка вышла!';

         // СОЕДЕНИМСЯ С MySQL
         $connect = mysql_connect ($server, $user, $pass, $db);
         mysqli_set_charset($connect, "utf8");
         if (!$connect) {
            echo $text_error;
            exit;
         }

         // СОЕДЕНИЯЕМСЯ С БАЗОЙ ДАННЫХ
         $select = mysql_select_db($db);
         if (!$select) {
            echo $text_error;
            exit;
         }

         // СОЗДАЁМ ЗАПРОС
         $result = mysql_query("SELECT * from $table ORDER by id desc");
         // СЧИТАЕМ КОЛЛИЧЕСТВО ЗАПИСЕЙ В ТАБЛИЦЕ - У МЕНЯ ИХ 20
         $num_rows = mysql_num_rows($result);

         // А ТЕПЕРЬ СЧИТАЕМ НА СКОЛЬКО СТРАНИЦ НАМ РАЗБИТЬ ЗАПИСИ И ВЫДЕЛЯЕМ ЦЕЛОЕ ЧИСЛО
         $num_rows = round($num_rows/$chislo); // 20 ДЕЛИМ НА 5. СКОЛЬКО? :)


         // ЗДЕСЬ МЫ ПРОВЕРЯЕМ НА КАКОЙ СТРАНИЦЕ СЕЙЧАС ПОЛЬЗОВАТЕЛЬ
         if (isset($_GET['str'])) {
            $nav = $_GET['str'];
         }
         else {
            $nav = 0;
         }
         $nav = intval($nav); // ДЛЯ ЗАЩИТЫ ОТ НЕХОРОШИХ ДЯДЕНЕК МЫ ВЫДЕЛИМ ЦЕЛУЮ ЧАСТЬ $GET['str']

         // А ТЕПЕРЬ ВЫВОДИМ НОМЕРА СТРАНЦ
         

//         echo '<hr />'; // ОТДЕЛИМ НАВИГАЦЮ ОТ КОНТЕНТА ДЛЯ НАГЛЯДНОСТИ

         // НАЧИНАЕМ ВЫВОДИТЬ САМУ ИНФОРМАЦИЮ ПОСТРАНИЧНО :)
         if (!isset($_GET['str'])) {
            $str = 0;
         }
         else {
            $str = $_GET['str']*$chislo - $chislo;
         }
         $nomer = $chislo;//$str + $chislo;
         // ФОРМИРУЕМ ЗАПРОС НУЖНОЙ НАМ ЧАСТИ ИНФОРМАЦИИ
         $result = mysql_query("SELECT * from $table ORDER by id asc limit $str, $nomer");
         // ИНАЧЕ ВЫВОДИМ ОШИБКУ
         if (!$result) {
            echo $text_error;
            exit;
         }
         echo '<div id="all_items">';

         while ($row = mysql_fetch_array($result)) {

                  echo '<section class="four_items_in_row">';
                     if($row){
                     echo '<article class="category_page_item_info">'.
                     '<img src="/pictures/' . $row["image"] . '" width="100%" height="100%">' .
                     '<a>' . $row["name_of_company"] . '</a>' .
                     '<p>' . $row["price"] . ' грн.' .  '</p>' . 
                     '</article>';
                     } 
                     $row = mysql_fetch_array($result);
                     if($row){
                     echo '<article class="category_page_item_info">'.
                     '<img src="/pictures/' . $row["image"] . '" width="100%" height="100%">' .
                     '<a>' . $row["name_of_company"] . '</a>' .
                     '<p>' . $row["price"] . ' грн.' .  '</p>' . 
                     '</article>';
                     }
                     $row = mysql_fetch_array($result);
                     if($row){
                     echo '<article class="category_page_item_info">'.
                     '<img src="/pictures/' . $row["image"] . '" width="100%" height="100%">' .
                     '<a>' . $row["name_of_company"] . '</a>' .
                     '<p>' . $row["price"] . ' грн.' .  '</p>' . 
                     '</article>';
                     }
                     $row = mysql_fetch_array($result);
                     if($row){
                     echo '<article class="category_page_item_info">'.
                     '<img src="/pictures/' . $row["image"] . '" width="100%" height="100%">' .
                     '<a>' . $row["name_of_company"] . '</a>' .
                     '<p>' . $row["price"] . ' грн.' .  '</p>' . 
                     '</article>';
                     }
                  echo '</section>';
            }
           
         
         echo '</div>';

         echo '<article id="number_of_pages">';
         for ($i=1; $i<=$num_rows; $i++) {
            if ($i != $nav) {
               echo '<a href="'.$PHP_SELF.'?str='.$i.'">'.$i.'<p>'.'...'.'</p>'.'</a> ';
            }
            else {
               // АКТИВНУЮ СТРАНИЦУ ДЕЛАЕМ НЕ ГИПЕРССЫЛКОЙ
               echo '<span>'.$i.'...'.'</span> ';
            }
         }
         echo '</article>';
         mysql_close($connect);

        ?>