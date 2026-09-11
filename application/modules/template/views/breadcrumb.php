<?php
$segments = array_values($this->uri->segment_array());
$breadcrumbSegments = $segments;

if (!empty($breadcrumbSegments) && ctype_digit((string) end($breadcrumbSegments))) {
    array_pop($breadcrumbSegments);
}

$formatBreadcrumbLabel = function ($segment) {
    return ucfirst(str_replace('-', ' ', urldecode((string) $segment)));
};

if (!empty($breadcrumb_title)) {
    $pageTitle = $breadcrumb_title;
} elseif (isset($query) && is_array($query) && !empty($query[0]->title)) {
    $pageTitle = $query[0]->title;
} elseif (!empty($breadcrumbSegments)) {
    $pageTitle = $formatBreadcrumbLabel(end($breadcrumbSegments));
} else {
    $pageTitle = 'Home';
}
?>
<!-- Breadcrumb Section with Animated Background -->
<section class="breadcrumb-section">
    <div class="container text-center">
        <!-- Animated floating elements -->
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>
        <div class="floating-shape shape-4"></div>

        <h1 class="breadcrumb-title text-white">
            <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item text-white">
                    <a href="<?= base_url() ?>">Home</a>
                </li>

                <?php foreach ($breadcrumbSegments as $key => $segment): ?>
                    <?php $isLast = ($key === count($breadcrumbSegments) - 1); ?>
                    <?php if ($isLast): ?>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= htmlspecialchars($formatBreadcrumbLabel($segment), ENT_QUOTES, 'UTF-8') ?>
                        </li>
                    <?php else: ?>
                        <li class="breadcrumb-item text-white">
                                <?= htmlspecialchars($formatBreadcrumbLabel($segment), ENT_QUOTES, 'UTF-8') ?>
                            
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>

            </ol>
        </nav>
    </div>
    </section>
