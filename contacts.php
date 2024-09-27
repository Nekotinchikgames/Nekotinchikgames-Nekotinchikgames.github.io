<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title><?php echo $contactsName; ?> - <?php echo $siteName; ?></title>
</head>
<body class="contacts-page">

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

<h2>Наша локація в Харкові</h2>
<div class="contact-section">
    <div class="contact-info">
        <h2>Контактна інформація</h2>
        <p>Email: support@example.com</p>
        <p>Телефон: +7 (999) 123-45-67</p>
        <p>Адреса: м. Харків, вул. Прикладна, 1</p>
    </div>

    <div class="contact-map">
        <h2>Карта</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253709.23328077982!2d36.1972031459198!3d49.9935009847246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a261ffdf84ab%3A0x7e083fcbd2b440b5!2z0JDQstC70LjQu9C-0YDQvtC-0YHQuNC90YbQudC-0LvQu9C10YHQvdC-0L3QuNGP!5e0!3m2!1sru!2sua!4v1234567890" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

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
