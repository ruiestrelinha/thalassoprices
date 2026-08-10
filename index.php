<?php

declare(strict_types=1);

/* =====================================================================
 * Language selection
 * Priority: ?lang= > cookie > default (pt)
 * ===================================================================== */
$supportedLangs = ['pt', 'en'];
$defaultLang = 'pt';

/* URL structure: "/" serves the default language (pt), "/en/" serves English.
 * The /en/ rewrite (see .htaccess) sets ?lang=en; direct ?lang= requests also
 * keep working as a fallback. No cookies needed — the language is in the URL. */
$lang = $_GET['lang'] ?? $defaultLang;

if (!in_array($lang, $supportedLangs, true)) {
    $lang = $defaultLang;
}

$t = require __DIR__ . '/lang/' . $lang . '.php';

/* App path prefix: "" at the domain root, e.g. "/app" inside a subfolder.
 * Used for the <base> tag and clean per-language URLs.
 * Note: dirname() may return "\" on Windows — normalize separators. */
$basePath = str_replace('\\', '/', rtrim((string) dirname($_SERVER['SCRIPT_NAME'] ?? '/index.php'), '/\\'));

/* Absolute base URL, used for the hreflang alternates. */
$https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
$baseUrl = ($https ? 'https' : 'http') . '://'
    . ($_SERVER['HTTP_HOST'] ?? 'localhost')
    . $basePath;

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/* Clean per-language URLs: "/" for pt, "/en/" for en. */
function langUrl(string $target): string
{
    global $basePath;
    return $target === 'en' ? $basePath . '/en/' : $basePath . '/';
}

/* =====================================================================
 * Price catalogue — structure & prices (language-neutral).
 * Translatable strings live in lang/{lang}.php.
 *
 * Block types:
 *   ['type' => 'row',     'item' => KEY, 'price' => '30€', 'mins' => 60]
 *   ['type' => 'section', 'section' => KEY]
 *   ['type' => 'desc',    'desc' => KEY]
 * ===================================================================== */
$catalog = [
    'bem-estar' => [
        'tax'    => 'tax_note_wellness',
        'blocks' => [
            ['type' => 'row', 'item' => 'item_circuito_thalasso', 'price' => '30€', 'mins' => 60],
            ['type' => 'row', 'item' => 'item_pack_3_circuitos', 'price' => '85,50€'],
            ['type' => 'row', 'item' => 'item_pack_5_circuitos', 'price' => '138,75€'],
            ['type' => 'row', 'item' => 'item_pack_10_circuitos', 'price' => '270€'],
            ['type' => 'row', 'item' => 'item_thalasso_experience', 'price' => '67€', 'mins' => 120],
            ['type' => 'section', 'section' => 'section_balneoterapia'],
            ['type' => 'row', 'item' => 'item_duche_vichy_massagem', 'price' => '42€', 'mins' => 25],
            ['type' => 'row', 'item' => 'item_hidromassagem_banheira', 'price' => '35€', 'mins' => 15],
            ['type' => 'row', 'item' => 'item_hidromassagem_algas', 'price' => '40€', 'mins' => 15],
            ['type' => 'row', 'item' => 'item_thalaxion', 'price' => '35€', 'mins' => 20],
            ['type' => 'row', 'item' => 'item_phlebotone', 'price' => '26€', 'mins' => 15],
            ['type' => 'section', 'section' => 'section_terapia_respiratoria'],
            ['type' => 'desc', 'desc' => 'desc_terapia_respiratoria'],
            ['type' => 'row', 'item' => 'item_pack_3_terapia_respiratoria', 'price' => '45€'],
            ['type' => 'section', 'section' => 'section_massagens'],
            ['type' => 'row', 'item' => 'item_massagem_localizada', 'price' => '40€', 'mins' => 30],
            ['type' => 'row', 'item' => 'item_massagem_relaxamento_40', 'price' => '50€', 'mins' => 40],
            ['type' => 'row', 'item' => 'item_massagem_relaxamento_60', 'price' => '65€', 'mins' => 60],
            ['type' => 'row', 'item' => 'item_massagem_casal', 'price' => '110€', 'mins' => 60],
            ['type' => 'row', 'item' => 'item_massagem_terapeutica', 'price' => '45€', 'mins' => 30],
            ['type' => 'row', 'item' => 'item_drenagem_linfatica', 'price' => '65€', 'mins' => 60],
            ['type' => 'section', 'section' => 'section_tratamentos_corporais'],
            ['type' => 'row', 'item' => 'item_envolvimento_algas', 'price' => '67€'],
            ['type' => 'row', 'item' => 'item_envolvimento_lamas', 'price' => '67€'],
            ['type' => 'row', 'item' => 'item_envolvimento_drenante', 'price' => '55€'],
            ['type' => 'row', 'item' => 'item_envolvimento_redutor', 'price' => '69€'],
            ['type' => 'row', 'item' => 'item_envolvimento_crioterapia', 'price' => '61€'],
            ['type' => 'row', 'item' => 'item_esfoliacao_sal_marinho', 'price' => '39€'],
            ['type' => 'row', 'item' => 'item_esfoliacao_geleia_aquatica', 'price' => '39€'],
            ['type' => 'row', 'item' => 'item_esfoliacao_lamas_sais', 'price' => '62€'],
            ['type' => 'row', 'item' => 'item_tratamento_pes_pernas', 'price' => '49€'],
            ['type' => 'section', 'section' => 'section_tratamentos_faciais'],
            ['type' => 'row', 'item' => 'item_mini_facial_hidratante', 'price' => '45€'],
            ['type' => 'row', 'item' => 'item_limpeza_pele', 'price' => '70€'],
            ['type' => 'row', 'item' => 'item_facial_desintoxicante_algas', 'price' => '80€'],
            ['type' => 'row', 'item' => 'item_facial_personalizado', 'price' => '95€'],
            ['type' => 'section', 'section' => 'section_rituais'],
            ['type' => 'row', 'item' => 'item_ritual_polinesia', 'price' => '115€'],
            ['type' => 'row', 'item' => 'item_renaissance', 'price' => '70€'],
            ['type' => 'row', 'item' => 'item_oceano_profundo_120', 'price' => '115€'],
            ['type' => 'row', 'item' => 'item_oceano_profundo_90', 'price' => '85€'],
            ['type' => 'row', 'item' => 'item_pure_relax_homem', 'price' => '85€'],
        ],
    ],
    'cura' => [
        'tax'    => 'tax_note_cure',
        'blocks' => [
            ['type' => 'section', 'section' => 'section_hidroterapia'],
            ['type' => 'row', 'item' => 'item_hidrocinesio_individual_60', 'price' => '25,85€'],
            ['type' => 'row', 'item' => 'item_5_hidrocinesio', 'price' => '119,57€'],
            ['type' => 'row', 'item' => 'item_10_hidrocinesio', 'price' => '232,68€'],
            ['type' => 'row', 'item' => 'item_hidrocinesio_terapeuta_50', 'price' => '43,09€'],
            ['type' => 'row', 'item' => 'item_5_hidrocinesio_terapeuta', 'price' => '183,13€'],
            ['type' => 'row', 'item' => 'item_10_hidrocinesio_terapeuta', 'price' => '344,72€'],
            ['type' => 'row', 'item' => 'item_duche_vichy_cura', 'price' => '36,20€'],
            ['type' => 'row', 'item' => 'item_duche_jato', 'price' => '18,96€'],
            ['type' => 'row', 'item' => 'item_duche_escoces', 'price' => '18,96€'],
            ['type' => 'row', 'item' => 'item_duche_subaquatico', 'price' => '30,16€'],
            ['type' => 'row', 'item' => 'item_hidromassagem_banheira_cura', 'price' => '30,16€'],
            ['type' => 'row', 'item' => 'item_hidromassagem_algas_cura', 'price' => '34,47€'],
            ['type' => 'row', 'item' => 'item_thalaxion_cura', 'price' => '30,16€'],
            ['type' => 'row', 'item' => 'item_phlebotone_cura', 'price' => '22,41€'],
            ['type' => 'row', 'item' => 'item_terapia_respiratoria_cura', 'price' => '15,51€'],
            ['type' => 'row', 'item' => 'item_pack_5_terapia_respiratoria', 'price' => '64,63€'],
            ['type' => 'row', 'item' => 'item_pack_10_terapia_respiratoria', 'price' => '119,32€'],
            ['type' => 'section', 'section' => 'section_termoterapia'],
            ['type' => 'row', 'item' => 'item_aplicacao_algas_local', 'price' => '38,78€'],
            ['type' => 'row', 'item' => 'item_aplicacao_algas_geral', 'price' => '57,74€'],
            ['type' => 'row', 'item' => 'item_aplicacao_lamas_local', 'price' => '38,78€'],
            ['type' => 'row', 'item' => 'item_aplicacao_lamas_geral', 'price' => '57,74€'],
            ['type' => 'section', 'section' => 'section_massoterapia'],
            ['type' => 'row', 'item' => 'item_massagem_terapeutica_cura', 'price' => '38,78€'],
            ['type' => 'section', 'section' => 'section_fisioterapia'],
            ['type' => 'row', 'item' => 'item_sessao_fisioterapia', 'price' => '27€'],
            ['type' => 'row', 'item' => 'item_pack_3_fisioterapia', 'price' => '76,95€'],
            ['type' => 'row', 'item' => 'item_pack_5_fisioterapia', 'price' => '124,88€'],
            ['type' => 'row', 'item' => 'item_pack_10_fisioterapia', 'price' => '229,50€'],
            ['type' => 'section', 'section' => 'section_programas_7'],
            ['type' => 'row', 'item' => 'item_programa_respiratoria_7', 'price' => '398,09€'],
            ['type' => 'row', 'item' => 'item_programa_circulatoria_7', 'price' => '368,82€'],
            ['type' => 'row', 'item' => 'item_programa_antistress_7', 'price' => '430,01€'],
            ['type' => 'row', 'item' => 'item_programa_psoriase_7', 'price' => '474,81€'],
            ['type' => 'row', 'item' => 'item_programa_reumatismo_7', 'price' => '443,79€'],
            ['type' => 'row', 'item' => 'item_programa_neurologicas_7', 'price' => '379,43€'],
            ['type' => 'section', 'section' => 'section_programas_14'],
            ['type' => 'row', 'item' => 'item_programa_respiratoria_14', 'price' => '796,18€'],
            ['type' => 'row', 'item' => 'item_programa_circulatoria_14', 'price' => '753,14€'],
            ['type' => 'row', 'item' => 'item_programa_antistress_14', 'price' => '866,06€'],
            ['type' => 'row', 'item' => 'item_programa_psoriase_14', 'price' => '977,20€'],
            ['type' => 'row', 'item' => 'item_programa_reumatismo_14', 'price' => '887,58€'],
            ['type' => 'row', 'item' => 'item_programa_neurologicas_14', 'price' => '762,02€'],
        ],
    ],
];

function renderPanel(array $panel, array $t): void
{
    echo '<p class="price-tax-note">', e($t['ui'][$panel['tax']]), "</p>\n";

    foreach ($panel['blocks'] as $block) {
        switch ($block['type']) {
            case 'section':
                $section = $t['sections'][$block['section']];
                echo '<div class="section-band">', e($section['title']);
                if (isset($section['duration'])) {
                    echo ' <span>◷ ', e($section['duration']), '</span>';
                }
                echo "</div>\n";
                break;

            case 'desc':
                echo '<p class="section-desc">', e($t['descs'][$block['desc']]), "</p>\n";
                break;

            case 'row':
                $item = $t['items'][$block['item']];
                echo "<div class=\"price-row\">\n";
                echo "  <div>\n";
                echo '    <div class="item-name">', e($item['name']), "</div>\n";
                if (isset($item['duration'])) {
                    $titleAttr = isset($block['mins'])
                        ? ' title="' . e(sprintf($t['ui']['duration_title'], $block['mins'])) . '"'
                        : '';
                    echo '    <div class="item-duration"', $titleAttr, '><span aria-hidden="true">◷</span> ', e($item['duration']), "</div>\n";
                }
                if (isset($item['desc'])) {
                    echo '    <div class="item-desc">', e($item['desc']), "</div>\n";
                }
                echo "  </div>\n";
                echo '  <div class="item-price">', e($block['price']), "</div>\n";
                echo "</div>\n";
                break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="<?= e($lang) ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Relative asset URLs resolve from the app root, even under /en/ -->
    <base href="<?= e($basePath) ?>/">

    <!-- CSS VENDOR -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS MAIN -->
    <link rel="stylesheet" href="assets/css/main.css">

    <title><?= e($t['ui']['document_title']) ?></title>

    <link rel="alternate" hreflang="pt" href="<?= e($baseUrl) ?>/">
    <link rel="alternate" hreflang="en" href="<?= e($baseUrl) ?>/en/">
    <link rel="alternate" hreflang="x-default" href="<?= e($baseUrl) ?>/">
</head>

<body>

    <!-- ======= Header Section ======= -->
    <header id="header">

        <div class="container text-center header-content">
            <div class="dropdown language-selector">
                <button class="language-selector__button" type="button" id="language-selector" data-bs-toggle="dropdown" aria-expanded="false" aria-label="<?= e($t['ui']['selector_aria']) ?>">
                    <svg class="language-selector__icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <circle cx="12" cy="12" r="8.5"></circle>
                        <path d="M3.5 12h17M12 3.5c2.25 2.32 3.5 5.25 3.5 8.5S14.25 18.18 12 20.5c-2.25-2.32-3.5-5.25-3.5-8.5S9.75 5.82 12 3.5Z"></path>
                    </svg>
                    <span class="language-selector__current"><?= e(strtoupper($lang)) ?></span>
                    <span class="language-selector__chevron" aria-hidden="true"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end language-selector__menu" aria-labelledby="language-selector">
                    <li><a class="dropdown-item<?= $lang === 'pt' ? ' active' : '' ?>" href="<?= e(langUrl('pt')) ?>" lang="pt" <?= $lang === 'pt' ? ' aria-current="true"' : '' ?>>PT <span>Português</span></a></li>
                    <li><a class="dropdown-item<?= $lang === 'en' ? ' active' : '' ?>" href="<?= e(langUrl('en')) ?>" lang="en" <?= $lang === 'en' ? ' aria-current="true"' : '' ?>>EN <span>English</span></a></li>
                </ul>
            </div>
            <div id="logo">
                <img src="assets/images/thalasso_logo.png" alt="<?= e($t['ui']['logo_alt']) ?>" class="img-fluid">
            </div>

        </div>

    </header> <!-- ======= end Header Section ======= -->

    <!-- ======= Main Section ======= -->
    <main class="container">
        <h1 class="page-title"><?= e($t['ui']['page_title']) ?></h1>

        <!-- Price Toggle -->
        <div class="toggle-wrap">
            <div class="price-toggle" role="tablist" aria-label="<?= e($t['ui']['toggle_aria']) ?>">
                <button type="button" id="btn-bem-estar" class="active" role="tab" aria-selected="true" aria-controls="painel-bem-estar"><?= e($t['ui']['toggle_wellness']) ?></button>
                <button type="button" id="btn-cura" role="tab" aria-selected="false" aria-controls="painel-cura"><?= e($t['ui']['toggle_cure']) ?></button>
            </div>
        </div>

        <!-- BEM-ESTAR PANEL -->
        <section class="price-panel" id="painel-bem-estar" role="tabpanel" aria-labelledby="btn-bem-estar">
            <?php renderPanel($catalog['bem-estar'], $t); ?>
        </section>

        <!-- CURA PANEL -->
        <section class="price-panel" id="painel-cura" role="tabpanel" aria-labelledby="btn-cura" hidden>
            <?php renderPanel($catalog['cura'], $t); ?>
        </section>
    </main> <!-- ======= end Main Section ======= -->

    <!-- ======= Footer Section ======= -->
    <footer id="footer">
        <p><?= e($t['ui']['footer_tagline']) ?></p>
        <p>262 560 450 | <a href="mailto:info@thalassonazare.com">info@thalassonazare.com</a></p>
        <p><a href="https://www.thalassonazare.com" target="_blank" rel="noopener">www.thalassonazare.com</a></p>
    </footer> <!-- ======= end Footer Section ======= -->

    <button class="back-to-top" type="button" aria-label="<?= e($t['ui']['back_to_top']) ?>" title="<?= e($t['ui']['back_to_top']) ?>">
        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="m6 14 6-6 6 6"></path>
        </svg>
    </button>

    <!-- JS VENDOR -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- JS MAIN -->
    <script src="assets/js/main.js"></script>

</body>

</html>