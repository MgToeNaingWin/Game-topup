<?php $cartCount = array_sum($_SESSION['cart'] ?? []); ?>
<header class="topbar">
    <div class="container-fluid px-lg-5">
        <div class="d-flex align-items-center gap-3 py-3">
            <a class="brand" href="index.php">Game<span>TopUp</span></a>
            <form class="search-box flex-grow-1" action="index.php" method="get">
                <i class="bi bi-search"></i>
                <input name="search" value="<?= htmlspecialchars($_GET['search'] ?? '') ?>" placeholder="Search">
            </form>
            <a class="header-icon d-none d-sm-flex m-2" href="#" title="Messages"><i class="bi bi-chat-dots ms-3"></i></a>
            <a class="header-icon position-relative" href="cart.php" title="Cart">
                <i class="bi bi-cart3"></i>
                <?php if ($cartCount): ?><span class="cart-count"><?= $cartCount ?></span><?php endif; ?>
            </a>
        </div>
    </div>
</header>
