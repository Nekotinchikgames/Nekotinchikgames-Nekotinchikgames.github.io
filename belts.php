<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title><?php echo $beltsName; ?> - <?php echo $siteName; ?></title>
</head>
<body class="rems-page">
<header>  
	<div class="logo-container">
		<img src="images/logo.png" alt="Логотип" class="logo"> <!-- Добавлен логотип -->
	</div>
    <h1><span class="store-name"><?php echo $Name; ?></span><?php echo $header_text_mainName; ?></h1>
</header>

<nav class="navbar">
	<div class="burger" id="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <ul id="nav-list" class="nav-list">
        <li><a href="index">Головна</a></li>
        <li><a href="belts">Ремені</a></li>
        <li><a href="wallets">Гаманці</a></li>
        <li><a href="payment_delivery">Оплата і доставка</a></li>
        <li><a href="about">Про нас</a></li>
        <li><a href="contacts">Контакти</a></li>
        <li><a href="reviews">Відгуки</a></li>
    </ul>
</nav>

    <h2>Наші Ремені</h2>
    <div class="container"> <!-- Контейнер для продуктів -->
        <div class="product-section">
            <div class="product-item">
                <img src="images/belt.jpg" alt="Ремінь 1">
                <h3>Ремінь 1</h3>
                <p>Опис ременя 1.</p>
            </div>
            <div class="product-item">
                <img src="images/belt.jpg" alt="Ремінь 2">
                <h3>Ремінь 2</h3>
                <p>Опис ременя 2.</p>
            </div>
            <div class="product-item">
                <img src="images/belt.jpg" alt="Ремінь 3">
                <h3>Ремінь 3</h3>
                <p>Опис ременя 3.</p>
            </div>
            <div class="product-item">
                <img src="images/belt.jpg" alt="Ремінь 4">
                <h3>Ремінь 4</h3>
                <p>Опис ременя 4.</p>
            </div>
            <div class="product-item">
                <img src="images/belt.jpg" alt="Ремінь 5">
                <h3>Ремінь 5</h3>
                <p>Опис ременя 5.</p>
            </div>
            <div class="product-item">
                <img src="images/belt.jpg" alt="Ремінь 6">
                <h3>Ремінь 6</h3>
                <p>Опис ременя 6.</p>
            </div>
        </div>
    </div> <!-- Кінець контейнера -->

<footer>
    <div class="social-icons">
        <p class="social-text"><?php echo $footer_social_text; ?></p>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://t.me" target="_blank"><i class="fab fa-telegram-plane"></i></a>
    </div>
    <p class="footer-copyright"><?php echo $footer_copyright; ?></p>
</footer>

<script>
        // Ваш JavaScript-код
        const burger = document.getElementById('burger');
        const navList = document.getElementById('nav-list');

        burger.addEventListener('click', () => {
            navList.classList.toggle('active'); // Добавляем или удаляем класс для показа меню
            burger.classList.toggle('active'); // Меняем бургер на крестик
        });
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66f5d99d4cbc4814f7df8843/1i8o5k3l7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
