<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./vars.css">
  <link rel="stylesheet" href="./katalog 1 god 1 str.css">
  
  
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
  <title>Каталог</title>
  <?php
  include_once "bd.php";
  $link=mysqli_connect($hostname, $name, $password, $bd);
  $query=mysqli_query($link, "SELECT name, name_id, cena, photo FROM tovari");
  
  ?>
</head>
<body>
  <div class="_1">
    <div class="_12">Малышам до 1 года</div>
    <div class="component-10">
      <div class="rectangle-29"></div>
      <img class="heart" src="images/katalog 1 god 1 str/heart0.svg" />
      <div class="group-35">
        <div class="frame-10">
          <div class="_580-00">580,00 ₽</div>
        </div>
      </div>
      <div class="_114001">114001, Боди для мальчика, интерлок</div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
    </div>
    <img class="image" src="images/katalog 1 god 1 str/image0.png" />
    <div class="component-102">
      <div class="rectangle-29"></div>
      <img class="heart2" src="images/katalog 1 god 1 str/heart1.svg" />
      <div class="group-352">
        <div class="frame-102">
          <div class="_522-00-580-00">522,00 ₽ – 580,00 ₽</div>
        </div>
      </div>
      <div class="_214001">214001, Боди для девочки, интерлок</div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
    </div>
    <img class="image2" src="images/katalog 1 god 1 str/image1.png" />
    <div class="component-103">
      <div class="rectangle-29"></div>
      <img class="heart3" src="images/katalog 1 god 1 str/heart2.svg" />
      <div class="group-353">
        <div class="frame-103">
          <div class="_52-000">640,00 ₽</div>
        </div>
      </div>
      <div class="group-36"></div>
      <div class="riko-basic">112004, Комбинезон для мальчика, интерлок</div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
    </div>
    <img class="image3" src="images/katalog 1 god 1 str/image2.png" />
    <div class="component-104">
      <div class="rectangle-29"></div>
      <img class="heart4" src="images/katalog 1 god 1 str/heart3.svg" />
      <div class="group-35">
        <div class="frame-104">
          <div class="_52-000">540,00 ₽ – 600,00 ₽</div>
        </div>
      </div>
      <div class="_215001">215001, Песочник для девочки, интерлок</div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
    </div>
    <img class="image4" src="images/katalog 1 god 1 str/image3.png" />
    <div class="component-105">
      <div class="rectangle-29"></div>
      <img class="heart5" src="images/katalog 1 god 1 str/heart4.svg" />
      <div class="group-352">
        <div class="frame-105">
          <div class="_52-000">1800,00 ₽</div>
        </div>
      </div>
      <div class="_312001">312001, Комбинезон для малышей, футер начес</div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
    </div>
    <img class="image5" src="images/katalog 1 god 1 str/image4.png" />
    <div class="standart">
      <div class="rectangle-29"></div>
      <img class="heart6" src="images/katalog 1 god 1 str/heart5.svg" />
      <div class="group-354">
        <div class="frame-103">
          <div class="_52-000">640,00 ₽</div>
        </div>
      </div>
      <img class="image6" src="images/katalog 1 god 1 str/image5.png" />
      <div class="_112002">112002, Комбинезон слип для мальчика, интерлок</div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
    </div>
    <div class="component-9">
      <div class="rectangle-29"></div>
      <img class="heart7" src="images/katalog 1 god 1 str/heart6.svg" />
      <div class="group-354">
        <div class="frame-103">
          <div class="_52-000">600,00 ₽</div>
        </div>
      </div>
      <img class="image7" src="images/katalog 1 god 1 str/image6.png" />
      <div class="_115001">115001, Песочник для мальчика, интерлок</div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
    </div>
    <div class="component-12">
      <div class="rectangle-29"></div>
      <img class="heart8" src="images/katalog 1 god 1 str/heart7.svg" />
      <div class="group-354">
        <div class="frame-10">
          <div class="_52-000">690,00 ₽</div>
        </div>
      </div>
      <img class="image8" src="images/katalog 1 god 1 str/image7.png" />
      <div class="_221001">
        221001, Комплект для девочки (брюки+футболка), интерлок
      </div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
    </div>
    <div class="component-20">
      <div class="rectangle-29"></div>
      <img class="heart9" src="images/katalog 1 god 1 str/heart8.svg" />
      <div class="group-354">
        <div class="frame-106">
          <div class="_52-000">250,00 ₽</div>
        </div>
      </div>
      <img class="image9" src="images/katalog 1 god 1 str/image8.png" />
      <div class="_308001-17-7">308001 (17.7), Штанишки детские, кулирка</div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
    </div>
    <div class="component-13">
      <div class="rectangle-29"></div>
      <img class="heart10" src="images/katalog 1 god 1 str/heart9.svg" />
      <div class="group-354">
        <div class="frame-107">
          <div class="_52-000">52 000</div>
          <img class="xmlid-449" src="images/katalog 1 god 1 str/xmlid-4490.svg" />
        </div>
      </div>
      <img class="pram-png-17895-1" src="images/katalog 1 god 1 str/pram-png-17895-10.png" />
      <div class="riko-basic">Коляска Riko Basic, Польша</div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
    </div>
    <div class="new">
      <div class="rectangle-29"></div>
      <img class="heart11" src="images/katalog 1 god 1 str/heart10.svg" />
      <div class="group-354">
        <div class="frame-108">
          <div class="_52-000">648,00 ₽ – 720,00 ₽</div>
        </div>
      </div>
      <img class="image10" src="images/katalog 1 god 1 str/image9.png" />
      <div class="_121001">
        121001, Комплект для мальчика (брюки и футболка), интерлок
      </div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
      <div class="group-58">
        <div class="rectangle-42"></div>
        <div class="new2">NEW</div>
      </div>
    </div>
    <div class="component-11">
      <div class="rectangle-29"></div>
      <img class="heart12" src="images/katalog 1 god 1 str/heart11.svg" />
      <div class="group-354">
        <div class="frame-109">
          <div class="_52-000">576,00 ₽ – 640,00 ₽</div>
        </div>
      </div>
      <img class="image11" src="images/katalog 1 god 1 str/image10.png" />
      <div class="_212002">212002, Комбинезон слип для девочки, интерлок</div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
      <div class="group-58">
        <div class="rectangle-42"></div>
        <div class="new2">NEW</div>
      </div>
    </div>
    <img class="vector-2" src="images/katalog 1 god 1 str/vector-20.svg" />
    <div class="component-15">
      <div class="_13"><a href="katalog 1 god 1 str.html" style="text-decoration: none; color: #446b80;">1</a></div>
      <div class="rectangle-45"></div>
    </div>
    <div class="component-16">
      <div class="_2"><a href="katalog 1 god 2 ctr.html" style="text-decoration: none; color: #446b80;">2</a></div>
    </div>
    <div class="component-17">
      <div class="_3"><a href="katalog 1 god 3 ctr.html" style="text-decoration: none; color: #446b80;">3</a></div>
    </div>
    <div class="group-134">
      <div class="div3"><a href="katalog 1 god 3 ctr.html" style="text-decoration: none; color: #446b80;">Дальше</a></div>
      <img class="chevron-right" src="images/katalog 1 god 1 str/chevron-right0.svg" />
    </div>
    <div class="component-18">
      <div class="div4">
        <span>
          <span class="div-4-span">Сортировать по:</span>
          <span class="div-4-span2">популярности</span>
        </span>
      </div>
      <img class="sorting" src="images/katalog 1 god 1 str/sorting0.svg" />
    </div>
    <div class="div5">Боди, песочники</div>
    <div class="div6">Головные уборы</div>
    <div class="div7">Комбинезоны</div>
    <div class="rectangle-43"></div>
    <div class="standart2">
      <div class="rectangle-29"></div>
      <img class="heart13" src="images/katalog 1 god 1 str/heart12.svg" />
      <div class="group-354">
        <div class="frame-1010">
          <div class="_52-000">400,00 ₽</div>
        </div>
      </div>
      <img class="image6" src="images/katalog 1 god 1 str/image11.png" />
      <div class="_112001">112001, Комбинезон слип для мальчика, кулирка</div>
      <div class="component-4">
        <div class="rectangle-2"></div>
        <div class="div">В корзину</div>
      </div>
      <div class="text-normal">
        <div class="div2">Купить в один клик</div>
      </div>
    </div>
    <div class="div8">Каталог</div>
    <div class="_14">Малышам до 1 года</div>
    <img class="vector" src="images/katalog 1 god 1 str/vector0.svg" />
    <div class="div9">Комплекты, носочки, штаны</div>
    <div class="footer">
      <img class="vector-3" src="images/katalog 1 god 1 str/vector-30.svg" />
      <img class="mask-group" src="images/katalog 1 god 1 str/mask-group0.svg" />
      <div class="div10">
        Онлайн маркет
              <br />
              одежды для детей
      </div>
      <div class="div11"><a href="oformlenie 1.html" style="text-decoration: none; color: #446b80;">Оплата и доставка</a></div>
      <div class="div12"><a href="oformlenie 1.html" style="text-decoration: none; color: #446b80;">Возврвт и гарантия</a></div>
      <div class="div13">О нас</div>
      <div class="div14"><a href="kontakti.html" style="text-decoration: none; color: #446b80;">Контакты</a></div>
      <div class="div15">Мы в социальных сетях</div>
      <img
        class="ant-design-instagram-outlined"
        src="images/katalog 1 god 1 str/ant-design-instagram-outlined0.svg"
      />
      <a href="https://web.whatsapp.com/"><img class="bx-bxl-whatsapp" src="images/katalog 1 god 1 str/bx-bxl-whatsapp0.svg" /></a>
      <a href="https://vk.com/feed"><img class="vk" src="images/katalog 1 god 1 str/vk0.svg" /></a>
      <img class="fb" src="images/katalog 1 god 1 str/fb0.svg" />
      <div class="div16">
        Пользовательское соглашение / политика конфиденциальности
      </div>
      <div class="_2020-karapuz-05-ru">© 2021,Lemive  - Москва г. Ногинск</div>
    </div>
    <div class="group-250">
      <div class="group-2512">
        <div class="group-252">
          <div class="group-60">
            <div class="rectangle-4"></div>
            <div class="div17"><a href="oformlenie 1.html" style="text-decoration: none; color: #446b80;">Оплата и доставка</a></div>
            <div class="div18">О нас</div>
            <div class="div19"></div>
            <div class="div20"><a href="kontakti.html" style="text-decoration: none; color: #446b80;">Контакты</a></div>
            <div class="component-7">
              <div class="rectangle-1"></div>
              <img class="search" src="images/katalog 1 god 1 str/search0.svg" />
              <div class="div21">Я хочу купить...</div>
              <div class="component-5">
                <div class="rectangle-22"></div>
                <div class="div">Найти</div>
              </div>
            </div>
            <div class="component-2">
              <div class="rectangle-3"></div>
              <img class="menu" src="images/katalog 1 god 1 str/menu0.svg" />
              <div class="div22"><a href="katalog ot 1 goda do 10 let 1 str.html"style="text-decoration: none; color: #fff;">Каталог товаров</a></div>
            </div>
            <img class="shopping-cart" src="images/katalog 1 god 1 str/shopping-cart0.svg" />
            <div class="div23"><a href="korzina.html" style="text-decoration: none; color: #446b80;">Корзина</a></div>
            <img class="user" src="images/katalog 1 god 1 str/user0.svg" />
            <div class="div24"><a href="vhod.html" style="text-decoration: none; color: #7fc9f0;">Войти в личный кабинет</a></div>
            <div class="div25">
              Онлайн маркет
              <br />
              одежды для детей
            </div>
            <div class="div26">Город:</div>
            <div class="div27">Москва</div>
            <img class="map-pin" src="images/katalog 1 god 1 str/map-pin0.svg" />
            <img class="vector-22" src="images/katalog 1 god 1 str/vector-21.svg" />
            <img class="mask-group2" src="images/katalog 1 god 1 str/mask-group1.svg" />
            <img class="mask-group3" src="images/katalog 1 god 1 str/mask-group2.svg" />
            <div class="div28"><a href="katalog 1 god 1 str.html" style="text-decoration: none; color: #446b80;">Каталог</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>