<?php
session_start();
require __DIR__ . '/includes/data.php';

if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

if (isset($_GET['remove'])) {
    unset($_SESSION['cart'][(int)$_GET['remove']]);
    header('Location: cart.php');
    exit;
}
if (isset($_GET['clear'])) {
    $_SESSION['cart'] = [];
    header('Location: cart.php');
    exit;
}

$total = 0;
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cart — GameTopUp</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include __DIR__ . '/includes/header.php'; ?>
<main class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Shopping Cart</h1>
        <?php if ($_SESSION['cart']): ?><a href="?clear=1" class="btn btn-outline-danger">Clear cart</a><?php endif; ?>
    </div>

    <?php if (!$_SESSION['cart']): ?>
        <div class="empty-cart text-center py-5">
            <i class="bi bi-cart-x display-1"></i>
            <h3 class="mt-3">Your cart is empty</h3>
            <a href="index.php" class="btn btn-primary rounded-pill px-4 mt-2">Continue Shopping</a>
        </div>
    <?php else: ?>
        <div class="row g-4">
            <div class="col-lg-8">
                <?php foreach ($_SESSION['cart'] as $id => $qty):
                    if (!isset($products[$id])) continue;
                    $p = $products[$id];
                    $subtotal = $p['price'] * $qty;
                    $total += $subtotal;
                ?>
                    <div class="cart-item">
                        <div class="cart-thumb <?= $p['imageClass'] ?>"><?= htmlspecialchars($p['value']) ?></div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1"><?= htmlspecialchars($p['name']) ?></h5>
                            <small class="text-secondary">Qty: <?= $qty ?></small>
                        </div>
                        <strong>$<?= number_format($subtotal, 2) ?></strong>
                        <a href="?remove=<?= $id ?>" class="btn btn-sm btn-light ms-3"><i class="bi bi-trash"></i></a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-lg-4">
                <div class="summary-box">
                    <h4>Order Summary</h4>
                    <div class="d-flex justify-content-between my-3"><span>Subtotal</span><strong>$<?= number_format($total, 2) ?></strong></div>
                    <hr>
                    <div class="d-flex justify-content-between fs-5"><span>Total</span><strong>$<?= number_format($total, 2) ?></strong></div>
                    <button class="btn btn-primary w-100 rounded-pill py-3 mt-4">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>
</body>
</html>
