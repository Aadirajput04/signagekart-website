<header>
    <nav class='navbar page-width side-padding'>

        <?php
function isCurrentPage($pageName)
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    return $currentPage === $pageName;
}
?>
        <a href="./index.php">
            <img class="main-logo" src="./imgs/navlogo.png" alt=""></a>
        <img class='burger-btn' src="./imgs/burger-btn.png" alt="burger-manu">
        <ul class='nav-list '>
            <li><a <?php if (isCurrentPage('index.php')) echo 'class="active-nav"' ; ?> href="./index.php"> Home</a>
            </li>
            <li><a <?php if (isCurrentPage('about-us.php')) echo 'class="active-nav"' ; ?> href="./about-us.php"> About
                    us</a></li>
            <li><a <?php if (isCurrentPage('products.php')) echo 'class="active-nav"' ; ?> href="./products.php">
                    Products</a></li>
            <li><a <?php if (isCurrentPage('reviews.php')) echo 'class="active-nav"' ; ?> href="./reviews.php">
                    Reviews</a></li>
            <li><a <?php if (isCurrentPage('contact-us.php')) echo 'class="active-nav"' ; ?> href="./contact-us.php">
                    Contact Us</a></li>

        </ul>


        <p> <a class="get-consult" href="./contact-us.php">Get Quote >></a></p>

    </nav>
    <div class="menu hidden page-width">
        <ul>
            <li><a <?php if (isCurrentPage('index.php')) echo 'class="active-nav"' ; ?> href="./index.php"> Home</a>
            </li>
            <li><a <?php if (isCurrentPage('About-us.php')) echo 'class="active-nav"' ; ?> href="./About-us.php"> About
                    us</a></li>
            <li><a <?php if (isCurrentPage('products.php')) echo 'class="active-nav"' ; ?> href="./Products.php">
                    Products</a></li>
            <li><a <?php if (isCurrentPage('Reviews.php')) echo 'class="active-nav"' ; ?> href="./Reviewsphp">
                    Reviews</a></li>
            <li><a <?php if (isCurrentPage('contact-us.php')) echo 'class="active-nav"' ; ?> href="./contact-us.php">
                    Contact Us</a></li>
        </ul>
    </div>
</header>
<script>

    const btn = document.querySelector('.burger-btn');
    const menu = document.querySelector('.menu');
    const navbar = document.querySelector('.navbar');

    if (window.innerWidth > 740) {
        menu.style.height = 0;
        menu.style.opacity = 0;
    };

    btn.addEventListener('click', function () {
        if (menu.style.height == '0px') {
            menu.style.height = '140px';
            navbar.style.boxShadow = 'none';
            menu.style.opacity = 1;
        } else {
            menu.style.height = 0;
            menu.style.opacity = 0;

        }
    })


</script>