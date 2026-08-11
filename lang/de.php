<?php
/* =====================================================================
 * Deutsch (de)
 * Übersetzungsschlüssel der Website.
 * Erforderliche Struktur: ui, sections, descs, items.
 * ===================================================================== */

return [

    /* --- Oberfläche --- */
    'ui' => [
        'document_title'   => 'Thalasso Nazaré - Preisliste',
        'page_title'       => 'Preisliste',
        'selector_aria'    => 'Sprache wählen',
        'toggle_aria'      => 'Preislisten-Kategorie wählen',
        'toggle_wellness'  => 'Wellness',
        'toggle_cure'      => 'Heilung',
        'tax_note_wellness' => 'Preise inkl. MwSt. zum gesetzlichen Satz von 23 %.',
        'tax_note_cure'     => 'Preise inkl. MwSt. zum gesetzlichen Satz von 6 %.',
        'vat_legend_wellness' => 'Die Preise mit 23 % MwSt. gelten für Wellness- und Entspannungsdienstleistungen.',
        'vat_legend_cure'     => 'Die Preise mit 6 % MwSt. gelten für therapeutische Leistungen auf ärztliche Verordnung (gemäß Artikel 9 des CIVA).',
        'logo_alt'          => 'Thalasso Nazaré - Die Heilung aus dem Meer.',
        'footer_tagline'    => 'Zentrum für Thalassotherapie',
        'back_to_top'       => 'Nach oben',
        'duration_title'    => 'Ungefähre Dauer: %d Minuten',
        'buy_button'        => 'Kaufen',
    ],

    /* --- Abschnittstitel (graue Bänder) --- */
    'sections' => [
        'section_balneoterapia'        => ['title' => 'BALNEOTHERAPIE'],
        'section_terapia_respiratoria' => ['title' => 'ATEMTHERAPIE', 'duration' => '15 Min.'],
        'section_massagens'            => ['title' => 'MASSAGEN'],
        'section_tratamentos_corporais' => ['title' => 'KÖRPERBEHANDLUNGEN'],
        'section_tratamentos_faciais'   => ['title' => 'GESICHTSBEHANDLUNGEN'],
        'section_rituais'              => ['title' => 'RITUALE'],
        'section_hidroterapia'         => ['title' => 'HYDROTHERAPIE'],
        'section_termoterapia'         => ['title' => 'THERMOTHERAPIE'],
        'section_massoterapia'         => ['title' => 'MASSAGE-THERAPIE'],
        'section_fisioterapia'         => ['title' => 'KRANKENGYMNASTIK'],
        'section_programas_7'          => ['title' => 'THERAPEUTISCHE PROGRAMME', 'duration' => '7 Tage'],
        'section_programas_14'         => ['title' => 'THERAPEUTISCHE PROGRAMME', 'duration' => '14 Tage'],
    ],

    /* --- Eigenständige Beschreibungen (ausserhalb der Preiszeilen) --- */
    'descs' => [
        'desc_terapia_respiratoria' => 'Nasendusche, Vernebelung und Aerosol.',
    ],

    /* --- Vorteile (Tooltips für technische Dienstleistungen) --- */
    'tips' => [
        'item_thalaxion'               => 'Regt die Blutzirkulation an und löst Muskelverspannungen durch Druckwasserstrahlen.',
        'item_thalaxion_cura'          => 'Regt die Blutzirkulation an und löst Muskelverspannungen durch Druckwasserstrahlen.',
        'item_phlebotone'              => 'Behandlung für müde Beine und schlechte Durchblutung mit straffender und entwässernder Wirkung.',
        'item_phlebotone_cura'         => 'Behandlung für müde Beine und schlechte Durchblutung mit straffender und entwässernder Wirkung.',
        'item_duche_subaquatico'       => 'Massage mit warmen Wasserstrahlen direkt auf den Körper, ideal bei Muskelschmerzen.',
        'item_hidromassagem_banheira'  => 'Tiefenentspannung in einem Einzel-Whirlpool, der Muskelverspannungen löst und Stress abbaut.',
        'item_hidromassagem_banheira_cura' => 'Tiefenentspannung in einem Einzel-Whirlpool, der Muskelverspannungen löst und Stress abbaut.',
        'item_hidromassagem_algas'     => 'Verbindet die entspannende Wirkung der Strahlen mit den remineralisierenden Eigenschaften der Meeresalgen.',
        'item_hidromassagem_algas_cura' => 'Verbindet die entspannende Wirkung der Strahlen mit den remineralisierenden Eigenschaften der Meeresalgen.',
        'item_hidrocinesio_individual_60' => 'Therapie in einem Thermalwasserbecken, die die Bewegung erleichtert und die Muskeln stärkt – nützlich in der Rehabilitation.',
    ],

    /* --- Servicezeilen (Name, Dauer, Beschreibung) --- */
    'items' => [
        /* ---- Wellness ---- */
        'item_circuito_thalasso' => [
            'name'     => 'Thalassopool Schwimmen',
            'duration' => '60 Min.',
            'desc'     => 'Dynamisches Innenbecken mit erwärmtem Meerwasser, Fußgängerflur, türkisches Bad, Kontrastduschen, Eisbrunnen und Entspannungsraum.',
        ],
        'item_pack_3_circuitos' => [
            'name' => 'Pack 3 Sitzungen Thalassopool Schwimmen',
        ],
        'item_pack_5_circuitos' => [
            'name' => 'Pack 5 Sitzungen Thalassopool Schwimmen',
        ],
        'item_pack_10_circuitos' => [
            'name' => 'Pack 10 Sitzungen Thalassopool Schwimmen',
        ],
        'item_thalasso_experience' => [
            'name'     => 'Thalasso-Erlebnis',
            'duration' => '120 Min.',
            'desc'     => 'Thalassopool Schwimmen + Meeresalgen- oder Meeresschlamm-Packung + feuchtigkeitsspendende Creme oder Öl',
        ],
        'item_duche_vichy_massagem' => [
            'name'     => 'Vichy-Dusche mit Ganzkörpermassage',
            'duration' => '25 Min.',
        ],
        'item_hidromassagem_banheira' => [
            'name'     => 'Whirlpoolbad in der Badewanne',
            'duration' => '15 Min.',
        ],
        'item_hidromassagem_algas' => [
            'name'     => 'Algen-Hydromassage',
            'duration' => '15 Min.',
        ],
        'item_thalaxion' => [
            'name'     => 'Thalaxion',
            'duration' => '20 Min.',
        ],
        'item_phlebotone' => [
            'name'     => 'Phlebotone',
            'duration' => '15 Min.',
        ],
        'item_pack_3_terapia_respiratoria' => [
            'name' => 'Pack 3 Sitzungen Atemtherapie',
        ],
        'item_massagem_localizada' => [
            'name'     => 'Lokalisierte Massage',
            'duration' => '30 Min.',
        ],
        'item_massagem_relaxamento_40' => [
            'name'     => 'Entspannungsmassage',
            'duration' => '40 Min.',
        ],
        'item_massagem_relaxamento_60' => [
            'name'     => 'Entspannungsmassage',
            'duration' => '60 Min.',
        ],
        'item_massagem_casal' => [
            'name'     => 'Entspannungsmassage für Paare',
            'duration' => '60 Min.',
        ],
        'item_massagem_terapeutica' => [
            'name'     => 'Massage-Therapie',
            'duration' => '30 Min.',
        ],
        'item_drenagem_linfatica' => [
            'name'     => 'Manuelle Lymphdrainage',
            'duration' => '60 Min.',
        ],
        'item_envolvimento_algas' => [
            'name'     => 'Körperpackung mit Algen',
            'duration' => '50 Min.',
        ],
        'item_envolvimento_lamas' => [
            'name'     => 'Körperpackung mit Meeresschlamm',
            'duration' => '50 Min.',
        ],
        'item_envolvimento_drenante' => [
            'name'     => 'Entwässerungspackung mit Meeresextrakten',
            'duration' => '45 Min.',
        ],
        'item_envolvimento_redutor' => [
            'name'     => 'Intensive Entwässerungspackung',
            'duration' => '60 Min.',
        ],
        'item_envolvimento_crioterapia' => [
            'name'     => 'Kryotherapie-Packung',
            'duration' => '45 Min.',
            'desc'     => 'Gegen Kreislaufprobleme.',
        ],
        'item_esfoliacao_sal_marinho' => [
            'name'     => 'Peeling mit Meersalz',
            'duration' => '30 Min.',
        ],
        'item_esfoliacao_geleia_aquatica' => [
            'name'     => 'Feuchtigkeitspeeling mit Wassergelee',
            'duration' => '30 Min.',
        ],
        'item_esfoliacao_lamas_sais' => [
            'name'     => 'Peeling mit Meeresschlamm und Salzen',
            'duration' => '60 Min.',
        ],
        'item_tratamento_pes_pernas' => [
            'name'     => 'Fuß- und Beinbehandlung',
            'duration' => '45 Min.',
            'desc'     => 'Bad, Peeling und Massage.',
        ],
        'item_mini_facial_hidratante' => [
            'name'     => 'Mini-Feuchtigkeitscreme',
            'duration' => '30 Min.',
        ],
        'item_limpeza_pele' => [
            'name'     => 'Hautreinigung',
            'duration' => '90 Min.',
            'desc'     => 'Mit Extraktion.',
        ],
        'item_facial_desintoxicante_algas' => [
            'name'     => 'Reinigende Algenbehandlung',
            'duration' => '60 Min.',
        ],
        'item_facial_personalizado' => [
            'name'     => 'Personalisierte Gesichtsbehandlung',
            'duration' => '60 Min.',
        ],
        'item_ritual_polinesia' => [
            'name'     => 'Thalasso-Ritual Anti-Stress — Polynesien',
            'duration' => '120 Min.',
            'desc'     => 'Peeling, Hydromassage und Körpermassage.',
        ],
        'item_renaissance' => [
            'name'     => 'Renaissance (Urwasser)',
            'duration' => '60 Min.',
            'desc'     => 'Peeling und Massage.',
        ],
        'item_oceano_profundo_120' => [
            'name'     => 'Tiefer Ozean',
            'duration' => '120 Min.',
            'desc'     => 'Peeling, Hydromassage und thematische Massage.',
        ],
        'item_oceano_profundo_90' => [
            'name'     => 'Tiefer Ozean',
            'duration' => '90 Min.',
            'desc'     => 'Peeling und thematische Massage.',
        ],
        'item_pure_relax_homem' => [
            'name'     => 'Pure Entspannung',
            'duration' => '90 Min.',
            'desc'     => 'Peeling und manuelle Massage.',
        ],

        /* ---- Thermalkur ---- */
        'item_hidrocinesio_individual_60' => [
            'name'     => 'Individuelle Hydrotherapie im Schwimmbad',
            'duration' => '60 Min.',
        ],
        'item_5_hidrocinesio' => [
            'name'     => '5 Sitzungen Hydrotherapie',
            'duration' => '60 Min.',
        ],
        'item_10_hidrocinesio' => [
            'name'     => '10 Sitzungen Hydrotherapie',
            'duration' => '60 Min.',
        ],
        'item_hidrocinesio_terapeuta_50' => [
            'name'     => 'Individuelle Hydrotherapie im Schwimmbad',
            'duration' => '50 Min.',
            'desc'     => 'Mit Therapeut.',
        ],
        'item_5_hidrocinesio_terapeuta' => [
            'name' => '5 Sitzungen individuelle Hydrotherapie im Schwimmbad (mit Therapeut)',
        ],
        'item_10_hidrocinesio_terapeuta' => [
            'name' => '10 Sitzungen individuelle Hydrotherapie im Schwimmbad (mit Therapeut)',
        ],
        'item_duche_vichy_cura' => [
            'name'     => 'Vichy-Dusche mit Ganzkörpermassage',
            'duration' => '25 Min.',
        ],
        'item_duche_jato' => [
            'name'     => 'Strahl-Dusche',
            'duration' => '5–8 Min.',
        ],
        'item_duche_escoces' => [
            'name'     => 'Schottische Dusche',
            'duration' => '8 Min.',
        ],
        'item_duche_subaquatico' => [
            'name'     => 'Runddusche',
            'duration' => '15 Min.',
        ],
        'item_hidromassagem_banheira_cura' => [
            'name'     => 'Whirlpoolbad in der Badewanne',
            'duration' => '15 Min.',
        ],
        'item_hidromassagem_algas_cura' => [
            'name'     => 'Algen-Hydromassage',
            'duration' => '15 Min.',
        ],
        'item_thalaxion_cura' => [
            'name'     => 'Thalaxion (oder Hydropressotherapie)',
            'duration' => '20 Min.',
        ],
        'item_phlebotone_cura' => [
            'name'     => 'Phlebotone',
            'duration' => '15 Min.',
        ],
        'item_terapia_respiratoria_cura' => [
            'name'     => 'Atemtherapie',
            'duration' => '15 Min.',
            'desc'     => 'Nasendusche, Vernebelung und Aerosol.',
        ],
        'item_pack_5_terapia_respiratoria' => [
            'name' => 'Pack 5 Sitzungen Atemtherapie',
        ],
        'item_pack_10_terapia_respiratoria' => [
            'name' => 'Pack 10 Sitzungen Atemtherapie',
        ],
        'item_aplicacao_algas_local' => [
            'name'     => 'Anwendung von lokalisierten Algen',
            'duration' => '40 Min.',
        ],
        'item_aplicacao_algas_geral' => [
            'name'     => 'Allgemeine Algenanwendung',
            'duration' => '60 Min.',
        ],
        'item_aplicacao_lamas_local' => [
            'name'     => 'Anwendung von lokalisiertem Meeresschlamm',
            'duration' => '40 Min.',
        ],
        'item_aplicacao_lamas_geral' => [
            'name'     => 'Allgemeine Meeresschlamm-Anwendung',
            'duration' => '60 Min.',
        ],
        'item_massagem_terapeutica_cura' => [
            'name'     => 'Therapeutische Massage',
            'duration' => '30 Min.',
        ],
        'item_sessao_fisioterapia' => [
            'name'     => 'Physiotherapie-Sitzung',
            'duration' => '50 Min.',
        ],
        'item_pack_3_fisioterapia' => [
            'name' => 'Pack 3 Sitzungen Physiotherapie',
        ],
        'item_pack_5_fisioterapia' => [
            'name' => 'Pack 5 Sitzungen Physiotherapie',
        ],
        'item_pack_10_fisioterapia' => [
            'name' => 'Pack 10 Sitzungen Physiotherapie',
        ],
        'item_programa_respiratoria_7' => [
            'name' => 'Atemtherapie',
            'desc' => '7 Bäder im Thalasso-Becken und 14 Salzwasser-Behandlungen (Ausspülung und Inhalieren mit Zerstäuber).',
        ],
        'item_programa_circulatoria_7' => [
            'name' => 'Kreislauftherapie',
            'desc' => '7 Bäder im Thalasso-Becken, 3 Fußbäder, 2 Hydromassagen und 2 Thalaxion.',
        ],
        'item_programa_antistress_7' => [
            'name' => 'Anti-Stress-Therapie',
            'desc' => '7 Bäder im Thalasso-Becken, 3 Hydromassagen, 2 Körpermassagen und 2 Vichy-Duschen.',
        ],
        'item_programa_psoriase_7' => [
            'name' => 'Psoriasis und Hautprobleme',
            'desc' => '7 Bäder im Thalasso-Becken, 3 Algenbäder und 4 Hydromassagen.',
        ],
        'item_programa_reumatismo_7' => [
            'name' => 'Rheuma und muskulo-skelettale Erkrankungen',
            'desc' => '7 Bäder im Thalasso-Becken, 1 Hydromassage, 2 Algenbäder, 1 Vichy-Dusche und 3 physiotherapeutische Sitzungen.',
        ],
        'item_programa_neurologicas_7' => [
            'name' => 'Neurologische Erkrankungen',
            'desc' => '7 Bäder im Thalasso-Becken, 4 Physiotherapie-/Hydrotherapie-Sitzungen und 3 Thalaxion.',
        ],
        'item_programa_respiratoria_14' => [
            'name' => 'Atemtherapie',
            'desc' => '14 Bäder im Thalasso-Becken und 28 Salzwasser-Behandlungen (Ausspülung und Inhalieren mit Zerstäuber).',
        ],
        'item_programa_circulatoria_14' => [
            'name' => 'Kreislauftherapie',
            'desc' => '14 Bäder im Thalasso-Becken, 4 Fußbäder, 5 Hydromassagen und 5 Thalaxion.',
        ],
        'item_programa_antistress_14' => [
            'name' => 'Anti-Stress-Therapie',
            'desc' => '14 Bäder im Thalasso-Becken, 5 Hydromassagen, 4 Körpermassagen und 5 Vichy-Duschen.',
        ],
        'item_programa_psoriase_14' => [
            'name' => 'Psoriasis und Hautprobleme',
            'desc' => '14 Bäder im Thalasso-Becken, 7 Algenbäder und 7 Hydromassagen.',
        ],
        'item_programa_reumatismo_14' => [
            'name' => 'Rheuma und muskulo-skelettale Erkrankungen',
            'desc' => '14 Bäder im Thalasso-Becken, 2 Hydromassagen, 4 Algenbäder, 2 Vichy-Duschen und 6 physiotherapeutische Sitzungen.',
        ],
        'item_programa_neurologicas_14' => [
            'name' => 'Neurologische Erkrankungen',
            'desc' => '14 Bäder im Thalasso-Becken, 7 Physiotherapie-/Hydrotherapie-Sitzungen und 7 Thalaxion.',
        ],
    ],
];
