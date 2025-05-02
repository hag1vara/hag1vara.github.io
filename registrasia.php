<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./vars.css">
  <link rel="stylesheet" href="./registrasia.css">
  
  
  <style>
   a,
   button,
   input,
   select,
   h1,
   h2,
   h3,
   h4,
   h5,
   * {
       box-sizing: border-box;
       margin: 0;
       padding: 0;
       border: none;
       text-decoration: none;
       background: none;
   
       -webkit-font-smoothing: antialiased;
   }
   
   menu, ol, ul {
       list-style-type: none;
       margin: 0;
       padding: 0;
   }
   </style>
  <title>Регистрация</title>
  <script>
        function toggleDropdown() {
            var dropdownContent = document.getElementById("myDropdown");
            dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display === 'block') {
                        openDropdown.style.display = 'none';
                    }
                }
            }
        }
    </script>
</head>
<body>
  <div class="div">
  <div class=reg>Регистрация</div>
    <div class="div2">
    <input type="text" name="login" placeholder="Логин" id="inp">
    </div>
    <div class="namber">
      <input type="text" name="Phon" placeholder="Phon" id="inp">
      </div>
      <div class="div3">
      <input type="email" name="Email" placeholder="Email" id="inp">
      </div>
    </div>
      <div class="div333">
        <input type="password" name="password" placeholder="Пароль" id="inp">
      </div>
    </div>
      <div class="div444">
      <input type="password" name="repeat_password" placeholder="Повторить пароль" id="inp">
      </div>
    </div>
    <div class="fill-main-normal">
      <div class="div7"><input type="submit" value="Зарегистрироваться" name="reg" id="but"></div>
    </div>
    <div class="div8">
    <input type="checkbox" name="sogl"><p style="font-size: 18px;">Согласие на обработку персональных данных</p>
    </div>
    <div class="group-2502">
      <div class="group-251">
        <div class="group-252">
          <div class="group-60">
            <div class="rectangle-4"></div>
            <div class="div9"><a href="oformlenie 1.php" style="text-decoration: none; color: #446b80;">Оплата и доставка</a></div>
            <div class="div12"></div>
            <div class="div13"><a href="kontakti.php" style="text-decoration: none; color: #446b80;">Контакты</a></div>
            <div class="component-7">
              <div class="rectangle-1"></div>
              <img class="search" src="images/registrasia/search0.svg" />
              <div class="div14">Я хочу купить...</div>
              <div class="component-5">
                <div class="rectangle-22"></div>
                <div class="div15">Найти</div>
              </div>
            </div>
            <div class="component-2">
              <div class="rectangle-3"></div>
              <img class="menu" src="images/registrasia/menu0.svg" />
              <div class="dropdown">
    <button class="dropbtn" onclick="toggleDropdown()">Каталог товаров</button>
    <div id="myDropdown" class="dropdown-content">
        <div class="has-submenu">
            <a href="katalog 1 god 1 str.php">Малыши до 1 года</a>
            <div class="submenu">
                <a href="bodi pesochniki 1 god.php">Боди, песочники</a>
                <a href="golovnoi ubor 1 god.php">Головные уборы</a>
                <a href="kombinezoni 1 str 1 god.php">Комбинезоны</a>
                <a href="komplekti 1 god.php">Комплекты, носочки, штаны</a>
            </div>
        </div>
        <div class="has-submenu">
            <a href="katalog ot 1 goda do 10 let 1 str.php">Дети до 10 лет</a>
            <div class="submenu">
                <a href="verhnaya odeda 10 let.php">Верхняя одежда, комбинезоны</a>
                <a href="golovnie ybori aksesyari 10let.php">Головные уборы, аксессуары</a>
                <a href="shtani horti 10 let.php">Штаны, шорты, юбки</a>
                <a href="futbolki kofti 10 let 1 str.php">Футболки, кофты</a>
                <a href="kostumi platia.php">Костюмы, платья, сарафаны</a>
                <a href="pizhami nosochki.php">Пижамы, нижнее бельё, носочки</a>
            </div>
        </div>
    </div>
</div>
            </div>
            <img class="shopping-cart" src="images/registrasia/shopping-cart0.svg" />
            <div class="div17"><a href="korzina.php" style="text-decoration: none; color: #446b80;">Корзина</a></div>
            <img class="user" src="images/registrasia/user0.svg" />
            <div class="div18"><a href="vhod.php" style="text-decoration: none; color: #7fc9f0;">Войти в личный кабинет</a></div>
            <div class="div19">
              Онлайн маркет
              <br />
              одежды для детей
            </div>
            <img class="vector-2" src="images/registrasia/vector-20.svg" />
            <img class="mask-group2" src="images/registrasia/mask-group1.svg" />
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>