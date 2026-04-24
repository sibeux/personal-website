<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// ── Dummy data ────────────────────────────────────────────────────────────────
$data = [
    "H-P-212" => [
        [
            "Well"       => "H-P-212",
            "WellString" => "H-P-212-S2",
            "Pod"        => "HANDIL DEVELOPMENT",
            "Wpnb"       => "WS",
            "Rkap"       => "WS",
            "GainGas"    => 0,
            "GainOil"    => 0,
            "MainJob"    => "SL : DHSV Replacement",
            "WirNo"      => "WIR180629",
        ],
        [
            "Well"       => "H-P-212",
            "WellString" => "H-P-212-S2",
            "Pod"        => "HANDIL DEVELOPMENT",
            "Wpnb"       => "WS",
            "Rkap"       => "WS",
            "GainGas"    => 0,
            "GainOil"    => 50,
            "MainJob"    => "SL : Plugging",
            "WirNo"      => "WIR180515",
        ],
    ],
    "H-P-300" => [
        [
            "Well"       => "H-P-300",
            "WellString" => "H-P-300-S1",
            "Pod"        => "HANDIL DEVELOPMENT",
            "Wpnb"       => "WO",
            "Rkap"       => "WO",
            "GainGas"    => 10,
            "GainOil"    => 120,
            "MainJob"    => "WO : Stimulation",
            "WirNo"      => "WIR190101",
        ],
    ],
];

// ── Router ────────────────────────────────────────────────────────────────────
// Expected path: /wifis/public/wir/by-well/{WELLNAME}
$uri      = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = array_values(array_filter(explode('/', $uri)));

// cari pattern "by-well/{WELLNAME}" dimanapun di URI
preg_match('#/by-well/([^/?]+)#', $uri, $matches);
$wellName = isset($matches[1]) ? urldecode($matches[1]) : null;

if (!$wellName) {
    http_response_code(400);
    echo json_encode(["error" => "Well name is required."]);
    exit;
}

// URL-decode well name (handles e.g. H%2DP%2D212 → H-P-212)
$wellName = urldecode($wellName);

if (!isset($data[$wellName])) {
    http_response_code(404);
    echo json_encode(["error" => "Well '$wellName' not found."]);
    exit;
}

$items  = $data[$wellName];
$wirNo  = $_GET['wirNo'] ?? null;

if ($wirNo !== null) {
    // Filter to single record matching WirNo
    $filtered = array_values(array_filter($items, fn($item) => $item['WirNo'] === $wirNo));

    if (empty($filtered)) {
        http_response_code(404);
        echo json_encode(["error" => "WirNo '$wirNo' not found for well '$wellName'."]);
        exit;
    }

    // Return single item (still wrapped in Items array, consistent shape)
    echo json_encode(["Items" => [$filtered[0]]], JSON_PRETTY_PRINT);
} else {
    // Return all records for this well
    echo json_encode(["Items" => $items], JSON_PRETTY_PRINT);
}