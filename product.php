<?php
session_start();
require __DIR__ . '/includes/data.php';
$id = (int)($_GET['id'] ?? 1);
if (!isset($products[$id])) {
    header('Location: index.php');
    exit;
}
$product = $products[$id];

if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
    header("Location: product.php?id=$id&added=1");
    exit;
}
$gameKey = $_GET['id'] ?? 'ml';
if (!isset($games_items[$gameKey])) {
    $gameKey = 'ml';
}
$currentGame = $games_items[$gameKey];

$cartCount = array_sum($_SESSION['cart'] ?? []);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($product['name']) ?> — GameTopUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main class="container-fluid px-lg-5 py-4">
        <div class="detail-page">
            <a href="index.php" class="back-link"><i class="bi bi-arrow-left"></i> Back</a>

            <?php if (isset($_GET['added'])): ?>
                <div class="alert alert-success mt-3">Product added to your cart.</div>
            <?php endif; ?>

            <div class="row g-4 align-items-start mt-1">
                <div class="col-lg-6">
                    <div class="detail-image <?= htmlspecialchars($product['imageClass']) ?>">
                        <div class="product-value huge"><?= htmlspecialchars($product['value']) ?></div>
                        <div class="product-brand huge-brand"><?= htmlspecialchars($product['brand']) ?></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="detail-content">
                        <!-- Tabs (per game) -->
                        <ul class="nav nav-pills mb-4 gap-2">
                            <?php foreach ($currentGame['tabs'] as $index => $tab): ?>
                                <li class="nav-item">
                                    <a class="nav-link <?= $index === 0 ? 'active bg-dark border border-secondary text-warning' : 'bg-dark border border-secondary text-white' ?>" href="#">
                                        <?= htmlspecialchars($tab) ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="row g-3">
                            <?php foreach ($currentGame['products'] as $item): ?>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="card bg-black border-secondary h-100">
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <p class="mb-3 text-white"><?= htmlspecialchars($item['name']) ?></p>
                                            <strong class="text-warning"><?= htmlspecialchars($item['price']) ?></strong>
                                            <a class="btn btn-sm btn-success add-btn p-1 m-2" href="?action=add&id=<?= $id ?>">
                                                <i class="bi bi-cart-plus "></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>