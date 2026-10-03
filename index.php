<?php
session_start();
require __DIR__ . '/includes/data.php';

if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

if (isset($_GET['action']) && $_GET['action'] === 'add' && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if (isset($products[$id])) {
        $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
    }
    header("Location: index.php?added=1");
    exit;
}

$search = trim($_GET['search'] ?? '');
$category = $_GET['category'] ?? 'All';

$filtered = array_filter($products, function($p) use ($search, $category) {
    $matchSearch = $search === '' ||
        stripos($p['name'], $search) !== false ||
        stripos($p['game'], $search) !== false;
    $matchCategory = $category === 'All' || $p['category'] === $category;
    return $matchSearch && $matchCategory;
});

$cartCount = array_sum($_SESSION['cart']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GameTopUp — Digital Game Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main class="container-fluid px-lg-5 py-4">
    <?php if (isset($_GET['added'])): ?>
        <div class="alert alert-success alert-dismissible fade show mx-auto max-width" role="alert">
            <i class="bi bi-check-circle me-2"></i>Product added to cart.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <section class="hero-wrap">
        <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#promoCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner rounded-4 overflow-hidden">
                <div class="carousel-item active">
                    <div class="promo promo-valorant">
                        <div>
                            <small class="text-uppercase fw-bold opacity-75">Limited Offer</small>
                            <h1 class="display-6 fw-bold mb-2">VALORANT</h1>
                            <p class="fs-4 mb-3">Get up to <strong>40% OFF</strong> Valorant Points</p>
                            <a href="?category=Valorant" class="btn btn-light rounded-pill px-4 fw-semibold">Shop Now</a>
                        </div>
                        <div class="promo-art">VAL<br><span>40%</span></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="promo promo-ml">
                        <div>
                            <small class="text-uppercase fw-bold opacity-75">Mobile Legends</small>
                            <h1 class="display-6 fw-bold mb-2">6004 Diamonds</h1>
                            <p class="fs-4 mb-3">Instant digital delivery</p>
                            <a href="?category=Mobile Legends" class="btn btn-light rounded-pill px-4 fw-semibold">View Deals</a>
                        </div>
                        <div class="promo-art diamond-art"><i class="bi bi-gem"></i></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="promo promo-rocket">
                        <div>
                            <small class="text-uppercase fw-bold opacity-75">Rocket League</small>
                            <h1 class="display-6 fw-bold mb-2">Credits & Items</h1>
                            <p class="fs-4 mb-3">Fast and secure delivery</p>
                            <a href="?category=Rocket League" class="btn btn-light rounded-pill px-4 fw-semibold">Explore</a>
                        </div>
                        <div class="promo-art"><i class="bi bi-controller"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-block">
        <div class="section-heading">
            <h2>Popular Game</h2>
            <a href="index.php">See All</a>
        </div>
        <div class="game-scroller">
            <?php foreach ($games as $game): ?>
                <a class="game-tile" href="?category=<?= urlencode($game['category']) ?>">
                    <div class="game-logo <?= $game['class'] ?>">
                        <?= $game['icon'] ?>
                    </div>
                    <span><?= htmlspecialchars($game['name']) ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section-block">
        <div class="section-heading">
            <h2>Most Sales</h2>
            <a href="index.php">See All</a>
        </div>

        <div class="row g-3">
            <?php if (!$filtered): ?>
                <div class="col-12">
                    <div class="empty-box">No products found.</div>
                </div>
            <?php endif; ?>

            <?php foreach ($filtered as $id => $product): ?>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <article class="product-card h-100">
                        <button class="heart-btn" onclick="toggleHeart(this)" aria-label="Favorite">
                            <i class="bi bi-heart"></i>
                        </button>
                        <a href="product.php?id=<?= $id ?>" class="text-decoration-none">
                            <div class="product-image <?= $product['imageClass'] ?>">
                                <div class="product-value"><?= htmlspecialchars($product['value']) ?></div>
                                <div class="product-brand"><?= htmlspecialchars($product['brand']) ?></div>
                                <div class="product-label"><?= htmlspecialchars($product['imageLabel']) ?></div>
                            </div>
                            <div class="product-info">
                                <h3><?= htmlspecialchars($product['name']) ?></h3>

                        </a>
                        
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script>
function toggleHeart(btn) {
    btn.classList.toggle('active');
    const icon = btn.querySelector('i');
    icon.classList.toggle('bi-heart');
    icon.classList.toggle('bi-heart-fill');
}
</script>
</body>
</html>
