<?php
$cityName = !empty($city) ? trim((string) $city) : 'your city';
$stateName = !empty($state) ? trim((string) $state) : 'India';
$brandName = 'All City Movers Packers';

$choiceRows = [
    [
        'point' => 'Company verification',
        'all_city' => "Known relocation network with verified packers and movers support in $cityName.",
        'other_movers' => 'Often depends on single phone-number listings or unverified local contacts.',
    ],
    [
        'point' => 'City-wise move planning',
        'all_city' => "Move plan is prepared around local routes, floor access, parking and shifting timing in $cityName.",
        'other_movers' => 'Many movers give a generic plan without checking local shifting conditions.',
    ],
    [
        'point' => 'Clear estimate before booking',
        'all_city' => 'Written estimate can include packing material, labour, vehicle type and loading-unloading scope.',
        'other_movers' => 'Low starting quote may later change because service scope is not clearly explained.',
    ],
    [
        'point' => 'Packing material quality',
        'all_city' => 'Cartons, bubble wrap, stretch film and protective packing are suggested according to goods type.',
        'other_movers' => 'Basic packing may be used even for fragile, electronic or premium household goods.',
    ],
    [
        'point' => 'Home and office shifting support',
        'all_city' => "House shifting, office relocation, vehicle transport and local goods shifting in $cityName are handled through one request.",
        'other_movers' => 'Some movers handle only loading and transport, so customers arrange other work separately.',
    ],
    [
        'point' => 'Move coordination',
        'all_city' => 'Dedicated coordination helps with pickup timing, manpower updates, transport movement and delivery follow-up.',
        'other_movers' => 'Customers may need to call different people for packing, driver and delivery updates.',
    ],
    [
        'point' => 'Safety and handling',
        'all_city' => 'Goods are planned by size, weight and fragility to reduce scratches, breakage and loading mistakes.',
        'other_movers' => 'Handling quality may depend on available labour and last-minute vehicle arrangement.',
    ],
    [
        'point' => 'Better local decision',
        'all_city' => "Customers can compare packers and movers in $cityName with service scope, price range and trust signals.",
        'other_movers' => 'Comparison is harder when pricing, address, service details and reviews are unclear.',
    ],
];

$choiceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'ItemList',
    'name' => "Why choose $brandName in $cityName",
    'description' => "Comparison of $brandName packers and movers in $cityName with ordinary packers and movers for packing, loading, relocation support and move safety.",
    'itemListElement' => array_map(function ($row, $index) use ($brandName, $cityName) {
        return [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $row['point'],
            'description' => "$brandName in $cityName: " . $row['all_city'] . ' Other movers: ' . $row['other_movers'],
        ];
    }, $choiceRows, array_keys($choiceRows)),
];
?>
<section class="ac-city-choice-section py-5">
    <div class="container">
        <div class="ac-city-choice-card" itemscope itemtype="https://schema.org/Service">
            <meta itemprop="serviceType" content="Packers and Movers in <?= htmlspecialchars($cityName, ENT_QUOTES, 'UTF-8') ?>">
            <meta itemprop="areaServed" content="<?= htmlspecialchars($cityName . ', ' . $stateName, ENT_QUOTES, 'UTF-8') ?>">
            <div itemprop="provider" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="name" content="<?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="ac-city-choice-head">
                <h2>Why Anyone will Choose All City Packers and Movers in <?= htmlspecialchars($cityName, ENT_QUOTES, 'UTF-8') ?>?</h2>
                <p>
                    Moving to a new house or office? It's a ton of work. You've got to pack up every single thing, figure out transport, and then cross your fingers that nothing gets banged up along the way—and trying to pull all that off by yourself is a nightmare. That's where All City Movers Packers come in. They'll handle the whole grind, from wrapping your stuff and loading the truck, all the way to driving it over and carrying it inside. The best part? You can just sit down with them, talk through exactly what you need, and get all the straight answers before you even start planning your move.
                </p>
            </div>

            <div class="ac-city-choice-table-wrap">
                <table class="ac-city-choice-table">
                    <thead>
                        <tr>
                            <th scope="col">Selection Point</th>
                            <th scope="col"><?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?></th>
                            <th scope="col">Other Packers and Movers</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($choiceRows as $row) { ?>
                            <tr>
                                <td data-label="Selection Point">
                                    <strong><?= htmlspecialchars($row['point'], ENT_QUOTES, 'UTF-8') ?></strong>
                                </td>
                                <td data-label="<?= htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') ?>">
                                    <?= htmlspecialchars($row['all_city'], ENT_QUOTES, 'UTF-8') ?>
                                </td>
                                <td data-label="Other Packers and Movers">
                                    <?= htmlspecialchars($row['other_movers'], ENT_QUOTES, 'UTF-8') ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="ac-city-choice-note">
                A verified moving comparison helps customers choose safe, affordable and professional packers and movers in
                <?= htmlspecialchars($cityName, ENT_QUOTES, 'UTF-8') ?> for home shifting, office relocation, car transport and bike transport.
            </div>
        </div>
    </div>
    <script type="application/ld+json">
        <?= json_encode($choiceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
    </script>
</section>
