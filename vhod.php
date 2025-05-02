<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./vars.css">
  <link rel="stylesheet" href="./vhod.css">
  
  
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
  <title>Вход</title>
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
    <div class="div2">Вход</div>
    <div class="group-110">
      <div class="rectangle-60"></div>
      <div class="div3">
        <input type="text" name="name" placeholder="Электронная почта" id="inp">
      </div>
    </div>
    <div class="group-111">
      <div class="rectangle-60"></div>
      <div class="div3">
      <input type="password" name="password" placeholder="Пароль" id="inp">
      </div>
    </div>
    <div class="fill-main-normal">
      <div class="rectangle-2"></div>
      <div class="div5">
      <input type="submit" value="Войти" name="vhod1" id="but">
      </div>
    </div>
    <div class="group-250">
      <div class="group-2512">
        <div class="group-252">
          <div class="group-60">
            <div class="rectangle-4"></div>
            <div class="div7"><a href="oformlenie 1.php" style="text-decoration: none; color: #446b80;">Оплата и доставка</a></div>
            <div class="div10"></div>
            <div class="div11"><a href="kontakti.php" style="text-decoration: none; color: #446b80;">Контакты</a></div>
            <div class="component-7">
              <div class="rectangle-1"></div>
              <img class="search" src="images/vhod/search0.svg" />
              <div class="div12">Я хочу купить...</div>
              <div class="component-5">
                <div class="rectangle-22"></div>
                <div class="div13">Найти</div>
              </div>
            </div>
            <div class="component-2">
              <div class="rectangle-3"></div>
              <img class="menu" src="images/vhod/menu0.svg" />
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
            <img class="shopping-cart" src="images/vhod/shopping-cart0.svg" />
            <div class="div15"><a href="korzina.php" style="text-decoration: none; color: #446b80;">Корзина</a></div>
            <img class="user" src="images/vhod/user0.svg" />
            <div class="div16"><a href="registrasia.php" style="text-decoration: none; color: #7fc9f0;">Зарегестрироваться</a></div>
            <div class="div17">
              Онлайн маркет
              <br />
              одежды для детей
            </div>
            <img class="vector-2" src="images/vhod/vector-20.svg" />
            <img class="mask-group2" src="images/vhod/mask-group1.svg" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    include_once 'bd.php';
    $mysqli = mysqli_connect($hostname, $name, $password, $bd);
    
    $sql = mysqli_query($mysqli, 'SELECT `id`, `name`, `password`, `mail@`, `phon` FROM `klienti`'); 
    $result = mysqli_query($mysqli, $sql);
    while ($result1 = mysqli_fetch_array($result)) {
        if(isset($_POST['name']) & isset($_POST['password'])){
        if(isset($_POST['vhod1'])){
            session_start();
            if($result['name'] == $_POST['name'] && $result['password'] == $_POST['password']){
                $_SESSION['name'] = $_POST['name'];
                setcookie('test', 'q');
                header("Location: lichniy kabinet.php");
            } elseif ($result['name'] != $_POST['name'] && $result['password'] != $_POST['password']) {
                $sql1 = mysqli_query($mysqli, 'SELECT `id`, `name`, `password` FROM `Admin`');
                while ($result = mysqli_fetch_array($sql1)) {
                    if($result['name'] == $_POST['name'] && $result['password'] == $_POST['password']){
                $_SESSION['name'] = $_POST['name'];
                setcookie('tes', 'w');
                header("Location: admin.php");
                    }
                }
            } 
        } 
    }
}

    

    ?>
</body>
</html>