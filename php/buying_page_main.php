<!-- TODO: write code to get info about choosed products -->
<section id="your_choise_plus_buying_person_info">

  <section id="your_choise">

    <h2>Ваш вибір</h2>
    <hr class="horizontal_line">
    <section id="choised_products">

      <!-- TODO: import information from sql! -->

      <article class="choised_product">
        <img src="../pictures/kid.jpg" width="60%" height="60%">
        <article class="choised_product_info">
          <p>Коляска-тростинка</p>
          <p>Babyhit Handy</p>
          <p>Вартість 1шт.: 1900.00 грн.</p>
          <p>Кількість: 1</p>
        </article>
        <button>x</button>
      </article>

      <article class="choised_product">
        <img src="../pictures/kid.jpg" width="60%" height="60%">
        <article class="choised_product_info">
          <p>Коляска-тростинка</p>
          <p>Babyhit Handy</p>
          <p>Вартість 1шт.: 1900.00 грн.</p>
          <p>Кількість: 1</p>
        </article>
        <button>x</button>
      </article>
    </section>

  </section>
  <section id="buying_person_info">
    <h2>Разом</h2>
    <hr class="horizontal_line">
    <form id="form" action="handler_buying_person_info.php" method="get">
      <h3>Оплата і доставка</h3>
      <p>
        Ім'я*        <input required type="text" name="name"><br>
        Прізвище*    <input required type="text" name="surname"><br>
        Email*       <input required type="Email" name="email"><br>
        Телефон*     <input required type="tel" name="phone">
      </p>
      <h3>Доставка</h3>
      <p>
        Самовивіз    <input type="radio" name="dostavka" value="1"><br>
        Нова Пошта   <input type="radio" name="dostavka" value="1">
      </p>
      <p>
        Місто*       <input required type="text" name="city"><br>
        Область*     <input required type="text" name="suburbs"><br>
        Склад*       <input required type="text" name="storage">
      </p>
      <p>
        Номер картки*         <input required type="number" name="city"><br>
        Термін дії картки*    <input required type="text" name="suburbs"><br>
        CVV2/CVC2*            <input required type="number" name="storage">
      </p>
      <p>Разом: 3200.00 грн. </p>
      <input type="submit">
     </form>
     
  </section>

</section>
