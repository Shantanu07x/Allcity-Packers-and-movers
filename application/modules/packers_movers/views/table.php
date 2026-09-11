<?php
$pricingCity = (isset($city) && trim($city) !== '') ? trim($city) : 'your city';
$pricingCityEsc = htmlspecialchars($pricingCity, ENT_QUOTES, 'UTF-8');
$pricingOffers = array(
    array(
        'type' => '1BHK Local',
        'distance' => 'Within City',
        'min' => 3000,
        'max' => 6000,
        'summary' => 'Best for compact household shifting within the same city.'
    ),
    array(
        'type' => '2BHK Intercity',
        'distance' => '200-500 km',
        'min' => 8000,
        'max' => 15000,
        'summary' => 'Suitable for medium household moves between nearby cities.'
    ),
    array(
        'type' => '3BHK Long Distance',
        'distance' => '500+ km',
        'min' => 15000,
        'max' => 30000,
        'summary' => 'For larger home relocation and longer route handling.'
    ),
    array(
        'type' => 'Office Move',
        'distance' => 'Any Distance',
        'min' => 20000,
        'max' => 50000,
        'summary' => 'For office goods, workstations, files, equipment and planned business shifting.'
    ),
);
$pricingSchemaOffers = array();
foreach ($pricingOffers as $offer) {
    $pricingSchemaOffers[] = array(
        '@type' => 'Offer',
        'name' => $offer['type'] . ' moving charges in ' . $pricingCity,
        'description' => $offer['summary'],
        'priceCurrency' => 'INR',
        'priceSpecification' => array(
            '@type' => 'PriceSpecification',
            'minPrice' => $offer['min'],
            'maxPrice' => $offer['max'],
            'priceCurrency' => 'INR'
        )
    );
}
$pricingSchema = array(
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'All City Movers Packers Pricing',
    'serviceType' => 'Packers and Movers',
    'areaServed' => $pricingCity,
    'provider' => array(
        '@type' => 'Organization',
        'name' => 'All City Movers Packers'
    ),
    'offers' => array(
        '@type' => 'AggregateOffer',
        'priceCurrency' => 'INR',
        'lowPrice' => 3000,
        'highPrice' => 50000,
        'offerCount' => count($pricingOffers),
        'offers' => $pricingSchemaOffers
    )
);
?>
<section id="moving-price-calculator" class="ac-pricing-section py-5"
    itemscope
    itemtype="https://schema.org/Service">
    <style>
        .ac-pricing-section {
            background: #f6f9fc;
        }

        .ac-pricing-wrap {
            max-width: 1120px;
            margin: 0 auto;
        }

        .ac-pricing-head {
            max-width: 760px;
            margin: 0 auto 24px;
            text-align: center;
        }

        .ac-pricing-kicker {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #0b6f7c;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .ac-pricing-head h2,
        .ac-calculator-head h3 {
            color: #14213d;
            font-weight: 800;
            margin-bottom: 10px;
            letter-spacing: 0;
        }

        .ac-pricing-head p,
        .ac-calculator-head p,
        .ac-price-note {
            color: #5d6b7c;
            margin-bottom: 0;
        }

        .ac-pricing-table-frame,
        .ac-calculator-panel {
            background: #fff;
            border: 1px solid #dce8f2;
            border-radius: 8px;
            box-shadow: 0 14px 34px rgba(21, 61, 94, .08);
            overflow: hidden;
        }

        .ac-pricing-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0;
        }

        .ac-pricing-table caption {
            caption-side: top;
            padding: 14px 18px;
            color: #31536b;
            font-weight: 700;
            text-align: left;
            background: #eef7fb;
            border-bottom: 1px solid #dce8f2;
        }

        .ac-pricing-table th,
        .ac-pricing-table td {
            padding: 15px 18px;
            border-bottom: 1px solid #e7eef5;
            vertical-align: middle;
        }

        .ac-pricing-table thead th {
            color: #fff;
            background: #0b7285;
            font-size: 15px;
            text-align: left;
        }

        .ac-pricing-table tbody th {
            color: #172b4d;
            font-weight: 800;
        }

        .ac-pricing-table tbody tr:last-child th,
        .ac-pricing-table tbody tr:last-child td {
            border-bottom: 0;
        }

        .ac-move-type {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .ac-move-badge {
            flex: 0 0 auto;
            display: inline-flex;
            width: 42px;
            height: 42px;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: #e8f7f8;
            color: #075c66;
            font-size: 13px;
            font-weight: 800;
        }

        .ac-move-copy small {
            display: block;
            color: #6b7b8c;
            font-weight: 500;
            line-height: 1.4;
            margin-top: 4px;
        }

        .ac-price-range {
            color: #0c5f2f;
            font-weight: 800;
            white-space: nowrap;
        }

        .ac-price-rules {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
            padding: 18px;
            background: #fbfdff;
            border-top: 1px solid #dce8f2;
        }

        .ac-price-rule {
            border-left: 4px solid #0b7285;
            padding-left: 12px;
        }

        .ac-price-rule strong {
            display: block;
            color: #14213d;
            margin-bottom: 6px;
        }

        .ac-price-rule ul {
            padding-left: 18px;
            margin: 0;
        }

        .ac-price-rule li {
            color: #5d6b7c;
            list-style: disc;
            margin-bottom: 4px;
        }

        .ac-calculator-panel {
            padding: 24px;
            margin-top: 24px;
        }

        .ac-calculator-head {
            margin-bottom: 18px;
        }

        .ac-calc-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
        }

        .ac-calc-field label {
            display: block;
            color: #243b53;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .ac-calc-field input,
        .ac-calc-field select {
            width: 100%;
            height: 46px;
            border: 1px solid #cbd8e5;
            border-radius: 6px;
            padding: 9px 12px;
            color: #18283a;
            background: #fff;
            outline: none;
        }

        .ac-calc-field input:focus,
        .ac-calc-field select:focus {
            border-color: #0b7285;
            box-shadow: 0 0 0 3px rgba(11, 114, 133, .14);
        }

        .ac-calc-actions {
            display: flex;
            gap: 12px;
            align-items: flex-end;
        }

        .ac-calc-btn {
            min-height: 46px;
            border: 0;
            border-radius: 6px;
            padding: 10px 20px;
            background: #0b7285;
            color: #fff;
            font-weight: 800;
            cursor: pointer;
            transition: background .2s ease, transform .2s ease;
        }

        .ac-calc-btn:hover {
            background: #075c66;
            transform: translateY(-1px);
        }

        .ac-calc-result {
            display: grid;
            grid-template-columns: 1.2fr 2fr;
            gap: 16px;
            align-items: center;
            margin-top: 20px;
            padding: 16px;
            border: 1px solid #d7efe7;
            border-radius: 8px;
            background: #f1fbf6;
        }

        .ac-result-label {
            color: #20593a;
            font-weight: 800;
        }

        .ac-result-price {
            display: block;
            color: #0c5f2f;
            font-size: 24px;
            font-weight: 900;
            line-height: 1.2;
        }

        .ac-result-detail {
            display: block;
            color: #4d665a;
            margin-top: 4px;
            line-height: 1.5;
        }

        .ac-price-note {
            margin-top: 12px;
            font-size: 14px;
        }

        @media (max-width: 991px) {
            .ac-calc-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 767px) {
            .ac-pricing-section {
                padding-left: 12px;
                padding-right: 12px;
            }

            .ac-pricing-table thead {
                display: none;
            }

            .ac-pricing-table,
            .ac-pricing-table tbody,
            .ac-pricing-table tr,
            .ac-pricing-table th,
            .ac-pricing-table td {
                display: block;
                width: 100%;
            }

            .ac-pricing-table tr {
                border-bottom: 1px solid #e7eef5;
                padding: 12px 0;
            }

            .ac-pricing-table tbody tr:last-child {
                border-bottom: 0;
            }

            .ac-pricing-table th,
            .ac-pricing-table td {
                border-bottom: 0;
                padding: 8px 16px;
            }

            .ac-pricing-table td::before {
                content: attr(data-label);
                display: block;
                color: #64748b;
                font-size: 12px;
                font-weight: 800;
                margin-bottom: 3px;
                text-transform: uppercase;
            }

            .ac-price-rules,
            .ac-calc-grid,
            .ac-calc-result {
                grid-template-columns: 1fr;
            }

            .ac-calc-actions {
                align-items: stretch;
            }

            .ac-calc-btn {
                width: 100%;
            }
        }
    </style>
    <meta itemprop="name" content="All City Movers Packers Charges">
    <meta itemprop="serviceType" content="Packers and Movers">
    <meta itemprop="areaServed" content="<?= $pricingCityEsc ?>">
    <div itemprop="provider" itemscope itemtype="https://schema.org/Organization">
        <meta itemprop="name" content="All City Movers Packers">
    </div>
    <script type="application/ld+json"><?= json_encode($pricingSchema); ?></script>

    <div class="container ac-pricing-wrap">
        <div class="ac-pricing-head">
            <span class="ac-pricing-kicker">Structured Pricing</span>
            <h3>All City Movers Packers Price Table in <?= $pricingCityEsc ?></h3>
            <p>Clear moving cost ranges by move type and distance, shown in an easy-to-read table.</p>
        </div>

        <div class="ac-pricing-table-frame" itemprop="hasOfferCatalog" itemscope itemtype="https://schema.org/OfferCatalog">
            <meta itemprop="name" content="Movers and Packers Price List in <?= $pricingCityEsc ?>">
            <div class="table-responsive">
                <table class="ac-pricing-table">
                    <thead>
                        <tr>
                            <th scope="col">Move Type</th>
                            <th scope="col">Distance</th>
                            <th scope="col">Cost Range (INR)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pricingOffers as $offer) {
                            $shortLabel = preg_replace('/[^A-Za-z0-9]/', '', $offer['type']);
                            $shortLabel = substr($shortLabel, 0, 4);
                            ?>
                            <tr itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                                <th scope="row" itemprop="name">
                                    <span class="ac-move-type">
                                        <span class="ac-move-badge"><?= htmlspecialchars($shortLabel, ENT_QUOTES, 'UTF-8') ?></span>
                                        <span class="ac-move-copy text-dark">
                                            <?= htmlspecialchars($offer['type'], ENT_QUOTES, 'UTF-8') ?>
                                            <small class="ac-move-copy text-dark"><?= htmlspecialchars($offer['summary'], ENT_QUOTES, 'UTF-8') ?></small>
                                        </span>
                                    </span>
                                </th>
                                <td data-label="Distance"><?= htmlspecialchars($offer['distance'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td data-label="Cost Range (INR)">
                                    <span class="ac-price-range" itemprop="priceSpecification" itemscope itemtype="https://schema.org/PriceSpecification">
                                        <meta itemprop="minPrice" content="<?= (int) $offer['min'] ?>">
                                        <meta itemprop="maxPrice" content="<?= (int) $offer['max'] ?>">
                                        <meta itemprop="priceCurrency" content="INR">
                                        Rs. <?= number_format($offer['min']) ?> - <?= number_format($offer['max']) ?>
                                    </span>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="ac-price-rules" aria-label="Pricing inclusions and exclusions">
                <div class="ac-price-rule">
                    <strong>Included in estimate</strong>
                    <ul>
                        <li>Packing material, loading and unloading.</li>
                        <li>Transport route planning based on distance.</li>
                        <li>Basic handling support for household or office goods.</li>
                    </ul>
                </div>
                <div class="ac-price-rule">
                    <strong>Shown separately when applicable</strong>
                    <ul>
                        <li>GST, insurance, storage and special handling.</li>
                        <li>Lift, floor, vehicle access and route permit charges.</li>
                        <li>Extra items added after survey or booking.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="ac-calculator-panel" aria-labelledby="acPriceCalculatorTitle">
            <div class="ac-calculator-head">
                <h3 id="acPriceCalculatorTitle">Moving Price Calculator</h3>
                <p>Enter cities and distance to get an instant estimated range from the table above.</p>
            </div>

            <form class="ac-price-calculator-form" data-ac-price-calculator>
                <div class="ac-calc-grid">
                    <div class="ac-calc-field">
                        <label for="acFromCity">From City</label>
                        <input type="text" id="acFromCity" name="from_city" value="<?= ($pricingCity !== 'All India' && $pricingCity !== 'your city') ? $pricingCityEsc : '' ?>" placeholder="Pickup city">
                    </div>
                    <div class="ac-calc-field">
                        <label for="acToCity">To City</label>
                        <input type="text" id="acToCity" name="to_city" placeholder="Delivery city">
                    </div>
                    <div class="ac-calc-field">
                        <label for="acMoveSize">Move Type</label>
                        <select id="acMoveSize" name="move_size">
                            <option value="1bhk">1BHK Local</option>
                            <option value="2bhk">2BHK Intercity</option>
                            <option value="3bhk">3BHK Long Distance</option>
                            <option value="office">Office Move</option>
                        </select>
                    </div>
                    <div class="ac-calc-field">
                        <label for="acDistance">Distance (KM)</label>
                        <input type="number" id="acDistance" name="distance" min="1" max="5000" step="1" value="30" required>
                    </div>
                </div>
                <div class="ac-calc-actions mt-3">
                    <button type="submit" class="ac-calc-btn">Calculate Price</button>
                </div>
                <div class="ac-calc-result" aria-live="polite">
                    <div class="ac-result-label">Estimated Price</div>
                    <div>
                        <span class="ac-result-price" data-ac-result-price>Rs. 3,000 - Rs. 6,000</span>
                        <span class="ac-result-detail" data-ac-result-detail>Within city 1BHK local shifting estimate.</span>
                    </div>
                </div>
                <p class="ac-price-note">Final price can change after item survey, packing volume, floor level, vehicle access and insurance choice.</p>
            </form>
        </div>
    </div>

    <script>
        (function () {
            var calculators = document.querySelectorAll('[data-ac-price-calculator]');
            if (!calculators.length) {
                return;
            }

            var priceMatrix = {
                '1bhk': {
                    name: '1BHK Local',
                    slabs: [
                        { maxKm: 50, min: 3000, max: 6000, label: 'within city' },
                        { maxKm: 500, min: 8000, max: 15000, label: '200-500 km intercity' },
                        { maxKm: Infinity, min: 15000, max: 30000, label: '500+ km long distance' }
                    ]
                },
                '2bhk': {
                    name: '2BHK Intercity',
                    slabs: [
                        { maxKm: 50, min: 6000, max: 10000, label: 'within city' },
                        { maxKm: 500, min: 8000, max: 15000, label: '200-500 km intercity' },
                        { maxKm: Infinity, min: 15000, max: 30000, label: '500+ km long distance' }
                    ]
                },
                '3bhk': {
                    name: '3BHK Long Distance',
                    slabs: [
                        { maxKm: 50, min: 9000, max: 15000, label: 'within city' },
                        { maxKm: 500, min: 12000, max: 22000, label: '200-500 km intercity' },
                        { maxKm: Infinity, min: 15000, max: 30000, label: '500+ km long distance' }
                    ]
                },
                'office': {
                    name: 'Office Move',
                    slabs: [
                        { maxKm: Infinity, min: 20000, max: 50000, label: 'office move' }
                    ]
                }
            };

            var metroCities = [
                'delhi',
                'new delhi',
                'mumbai',
                'navi mumbai',
                'bengaluru',
                'bangalore',
                'chennai',
                'hyderabad',
                'pune',
                'kolkata',
                'ahmedabad',
                'gurgaon',
                'gurugram',
                'noida'
            ];

            function normalizeCity(value) {
                return (value || '').toString().trim().toLowerCase();
            }

            function roundToHundred(value) {
                return Math.round(value / 100) * 100;
            }

            function formatPrice(value) {
                return 'Rs. ' + Number(value).toLocaleString('en-IN');
            }

            function findSlab(moveType, distance) {
                var slabs = priceMatrix[moveType].slabs;
                for (var i = 0; i < slabs.length; i += 1) {
                    if (distance <= slabs[i].maxKm) {
                        return slabs[i];
                    }
                }
                return slabs[slabs.length - 1];
            }

            function isMetroRoute(fromCity, toCity) {
                return metroCities.indexOf(normalizeCity(fromCity)) !== -1 || metroCities.indexOf(normalizeCity(toCity)) !== -1;
            }

            calculators.forEach(function (calculator) {
                var moveInput = calculator.querySelector('[name="move_size"]');
                var distanceInput = calculator.querySelector('[name="distance"]');
                var fromInput = calculator.querySelector('[name="from_city"]');
                var toInput = calculator.querySelector('[name="to_city"]');
                var priceOutput = calculator.querySelector('[data-ac-result-price]');
                var detailOutput = calculator.querySelector('[data-ac-result-detail]');

                function updateEstimate() {
                    var moveType = moveInput.value;
                    var distance = parseInt(distanceInput.value, 10);
                    var fromCity = fromInput.value;
                    var toCity = toInput.value;
                    var routeText = '';
                    var slab;
                    var minPrice;
                    var maxPrice;

                    if (!distance || distance < 1) {
                        distance = 1;
                        distanceInput.value = distance;
                    }

                    slab = findSlab(moveType, distance);
                    minPrice = slab.min;
                    maxPrice = slab.max;

                    if (isMetroRoute(fromCity, toCity)) {
                        minPrice = roundToHundred(minPrice * 1.1);
                        maxPrice = roundToHundred(maxPrice * 1.1);
                        routeText = ' Metro city handling is included in this estimate.';
                    }

                    if (normalizeCity(fromCity) && normalizeCity(toCity)) {
                        routeText = ' Route: ' + fromCity.trim() + ' to ' + toCity.trim() + '.' + routeText;
                    } else if (normalizeCity(fromCity)) {
                        routeText = ' Pickup city: ' + fromCity.trim() + '.' + routeText;
                    }

                    priceOutput.textContent = formatPrice(minPrice) + ' - ' + formatPrice(maxPrice);
                    detailOutput.textContent = priceMatrix[moveType].name + ' estimate for ' + distance + ' km (' + slab.label + ').' + routeText;
                }

                calculator.addEventListener('submit', function (event) {
                    event.preventDefault();
                    updateEstimate();
                });

                ['change', 'input'].forEach(function (eventName) {
                    moveInput.addEventListener(eventName, updateEstimate);
                    distanceInput.addEventListener(eventName, updateEstimate);
                    fromInput.addEventListener(eventName, updateEstimate);
                    toInput.addEventListener(eventName, updateEstimate);
                });

                updateEstimate();
            });
        }());
    </script>
</section>

