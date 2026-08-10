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
        'toggle_cure'      => 'Thermalkur',
        'tax_note_wellness' => 'Preise inkl. MwSt. zum gesetzlichen Satz von 23 %.',
        'tax_note_cure'     => 'Preise inkl. MwSt. zum gesetzlichen Satz von 6 %.',
        'logo_alt'          => 'Thalasso Nazaré - Die Heilung aus dem Meer.',
        'footer_tagline'    => 'Zentrum für Thalassotherapie',
        'back_to_top'       => 'Nach oben',
        'duration_title'    => 'Ungefähre Dauer: %d Minuten',
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
        'section_massoterapia'         => ['title' => 'MASSAGETHERAPIE'],
        'section_fisioterapia'         => ['title' => 'PHYSIOTHERAPIE'],
        'section_programas_7'          => ['title' => 'THERAPIEPROGRAMME', 'duration' => '7 Tage'],
        'section_programas_14'         => ['title' => 'THERAPIEPROGRAMME', 'duration' => '14 Tage'],
    ],

    /* --- Eigenständige Beschreibungen (ausserhalb der Preiszeilen) --- */
    'descs' => [
        'desc_terapia_respiratoria' => 'Nasendusche, Vernebelung oder Aerosol.',
    ],

    /* --- Servicezeilen (Name, Dauer, Beschreibung) --- */
    'items' => [
        /* ---- Wellness ---- */
        'item_circuito_thalasso' => [
            'name'     => 'Thalasso-Kreislauf',
            'duration' => '60 Min.',
            'desc'     => 'Dynamisches Becken mit erwärmtem Meerwasser, Gegenstrom, Gehstrecke, türkisches Bad, Kontrastduschen, Eisbrunnen und Entspannung.',
        ],
        'item_pack_3_circuitos' => [
            'name' => 'Pack 3 Sitzungen Thalasso-Kreislauf',
        ],
        'item_pack_5_circuitos' => [
            'name' => 'Pack 5 Sitzungen Thalasso-Kreislauf',
        ],
        'item_pack_10_circuitos' => [
            'name' => 'Pack 10 Sitzungen Thalasso-Kreislauf',
        ],
        'item_thalasso_experience' => [
            'name'     => 'Thalasso-Erlebnis',
            'duration' => '120 Min.',
            'desc'     => 'Thalasso-Kreislauf + Algen- oder Meeresschlammwickel + Feuchtigkeitscreme oder Öl',
        ],
        'item_duche_vichy_massagem' => [
            'name'     => 'Vichy-Dusche mit Ganzkörpermassage',
            'duration' => '25 Min.',
        ],
        'item_hidromassagem_banheira' => [
            'name'     => 'Whirlpool in Einzelbadewanne',
            'duration' => '15 Min.',
        ],
        'item_hidromassagem_algas' => [
            'name'     => 'Whirlpool-Massage mit Algen',
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
            'name'     => 'Lokale Massage',
            'duration' => '30 Min.',
        ],
        'item_massagem_relaxamento_40' => [
            'name'     => 'Ganzkörper-Entspannungsmassage',
            'duration' => '40 Min.',
        ],
        'item_massagem_relaxamento_60' => [
            'name'     => 'Ganzkörper-Entspannungsmassage',
            'duration' => '60 Min.',
        ],
        'item_massagem_casal' => [
            'name'     => 'Entspannungsmassage für Paare',
            'duration' => '60 Min.',
        ],
        'item_massagem_terapeutica' => [
            'name'     => 'Therapeutische Massage',
            'duration' => '30 Min.',
        ],
        'item_drenagem_linfatica' => [
            'name'     => 'Manuelle Lymphdrainage',
            'duration' => '60 Min.',
        ],
        'item_envolvimento_algas' => [
            'name'     => 'Algenwickel für den Körper',
            'duration' => '50 Min.',
        ],
        'item_envolvimento_lamas' => [
            'name'     => 'Meeresschlammwickel für den Körper',
            'duration' => '50 Min.',
        ],
        'item_envolvimento_drenante' => [
            'name'     => 'Entschlackender Wickel mit Meeresextrakten',
            'duration' => '45 Min.',
        ],
        'item_envolvimento_redutor' => [
            'name'     => 'Straffender Wickel',
            'duration' => '60 Min.',
        ],
        'item_envolvimento_crioterapia' => [
            'name'     => 'Kryotherapie-Wickel',
            'duration' => '45 Min.',
            'desc'     => 'Kreislaufprobleme.',
        ],
        'item_esfoliacao_sal_marinho' => [
            'name'     => 'Peeling mit Meersalz',
            'duration' => '30 Min.',
        ],
        'item_esfoliacao_geleia_aquatica' => [
            'name'     => 'Feuchtigkeitsspendendes Peeling mit Wassergel',
            'duration' => '30 Min.',
        ],
        'item_esfoliacao_lamas_sais' => [
            'name'     => 'Peeling mit Meeresschlamm und Salzen',
            'duration' => '60 Min.',
        ],
        'item_tratamento_pes_pernas' => [
            'name'     => 'Fuss- und Beinbehandlung',
            'duration' => '45 Min.',
            'desc'     => 'Bad, Peeling und Massage.',
        ],
        'item_mini_facial_hidratante' => [
            'name'     => 'Feuchtigkeitsspendendes Mini-Gesichtsritual',
            'duration' => '30 Min.',
        ],
        'item_limpeza_pele' => [
            'name'     => 'Gesichtsreinigung',
            'duration' => '90 Min.',
            'desc'     => 'Mit Extraktion.',
        ],
        'item_facial_desintoxicante_algas' => [
            'name'     => 'Entgiftende Gesichtsbehandlung mit Algen',
            'duration' => '60 Min.',
        ],
        'item_facial_personalizado' => [
            'name'     => 'Individuelle Gesichtsbehandlung',
            'duration' => '60 Min.',
        ],
        'item_ritual_polinesia' => [
            'name'     => 'Anti-Stress-Thalasso-Ritual — Polynesien',
            'duration' => '120 Min.',
            'desc'     => 'Peeling, Whirlpool-Massage und Körpermassage.',
        ],
        'item_renaissance' => [
            'name'     => 'Renaissance',
            'duration' => '60 Min.',
            'desc'     => 'Peeling und Massage.',
        ],
        'item_oceano_profundo_120' => [
            'name'     => 'Tiefer Ozean',
            'duration' => '120 Min.',
            'desc'     => 'Peeling, Whirlpool-Massage und thematische Massage.',
        ],
        'item_oceano_profundo_90' => [
            'name'     => 'Tiefer Ozean',
            'duration' => '90 Min.',
            'desc'     => 'Peeling und thematische Massage.',
        ],
        'item_pure_relax_homem' => [
            'name'     => 'Pure relax für Männer',
            'duration' => '90 Min.',
            'desc'     => 'Peeling und thematische Massage.',
        ],

        /* ---- Thermalkur ---- */
        'item_hidrocinesio_individual_60' => [
            'name'     => 'Individuelle Hydrokinesiotherapie im Becken',
            'duration' => '60 Min.',
        ],
        'item_5_hidrocinesio' => [
            'name'     => '5 Sitzungen Hydrokinesiotherapie',
            'duration' => '60 Min.',
        ],
        'item_10_hidrocinesio' => [
            'name'     => '10 Sitzungen Hydrokinesiotherapie',
            'duration' => '60 Min.',
        ],
        'item_hidrocinesio_terapeuta_50' => [
            'name'     => 'Individuelle Hydrokinesiotherapie im Becken',
            'duration' => '50 Min.',
            'desc'     => 'Mit Therapeut.',
        ],
        'item_5_hidrocinesio_terapeuta' => [
            'name' => '5 individuelle Sitzungen Hydrokinesiotherapie im Becken (mit Therapeut)',
        ],
        'item_10_hidrocinesio_terapeuta' => [
            'name' => '10 individuelle Sitzungen Hydrokinesiotherapie im Becken (mit Therapeut)',
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
            'name'     => 'Unterwasserdusche',
            'duration' => '15 Min.',
        ],
        'item_hidromassagem_banheira_cura' => [
            'name'     => 'Whirlpool in Einzelbadewanne',
            'duration' => '15 Min.',
        ],
        'item_hidromassagem_algas_cura' => [
            'name'     => 'Whirlpool-Massage mit Algen',
            'duration' => '15 Min.',
        ],
        'item_thalaxion_cura' => [
            'name'     => 'Thalaxion (oder Hydropressurtherapie)',
            'duration' => '20 Min.',
        ],
        'item_phlebotone_cura' => [
            'name'     => 'Phlebotone',
            'duration' => '15 Min.',
        ],
        'item_terapia_respiratoria_cura' => [
            'name'     => 'Atemtherapie',
            'duration' => '15 Min.',
            'desc'     => 'Nasendusche, Vernebelung oder Aerosol.',
        ],
        'item_pack_5_terapia_respiratoria' => [
            'name' => 'Pack 5 Sitzungen Atemtherapie',
        ],
        'item_pack_10_terapia_respiratoria' => [
            'name' => 'Pack 10 Sitzungen Atemtherapie',
        ],
        'item_aplicacao_algas_local' => [
            'name'     => 'Lokale Algenanwendung',
            'duration' => '40 Min.',
        ],
        'item_aplicacao_algas_geral' => [
            'name'     => 'Ganzkörper-Algenanwendung',
            'duration' => '60 Min.',
        ],
        'item_aplicacao_lamas_local' => [
            'name'     => 'Lokale Meeresschlamm-Anwendung',
            'duration' => '40 Min.',
        ],
        'item_aplicacao_lamas_geral' => [
            'name'     => 'Ganzkörper-Meeresschlamm-Anwendung',
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
            'desc' => '7 Beckenkreisläufe und 14 Inhalationssitzungen (Spülungen, Vernebelungen).',
        ],
        'item_programa_circulatoria_7' => [
            'name' => 'Kreislauftherapie',
            'desc' => '7 Beckenkreisläufe, 3 Fussbäder, 2 Whirlpool-Massagen und 2 Thalaxion.',
        ],
        'item_programa_antistress_7' => [
            'name' => 'Anti-Stress-Therapie',
            'desc' => '7 Beckenkreisläufe, 3 Whirlpool-Massagen, 2 Körpermassagen und 2 Vichy-Duschen mit Ganzkörpermassage.',
        ],
        'item_programa_psoriase_7' => [
            'name' => 'Psoriasis und dermatologische Probleme',
            'desc' => '7 Beckenkreisläufe, 3 Ganzkörper-Algenanwendungen und 4 Whirlpool-Massagen.',
        ],
        'item_programa_reumatismo_7' => [
            'name' => 'Rheuma und Skeletterkrankungen',
            'desc' => '7 Beckenkreisläufe, 1 Whirlpool-Massage, 2 Ganzkörper-Algenanwendungen, 1 Vichy-Dusche mit Ganzkörpermassage und 3 Physiotherapie-Sitzungen.',
        ],
        'item_programa_neurologicas_7' => [
            'name' => 'Neurologische Folgeerscheinungen',
            'desc' => '7 Beckenkreisläufe, 4 Physiotherapie-/Hydrotherapie-Sitzungen und 3 Thalaxion.',
        ],
        'item_programa_respiratoria_14' => [
            'name' => 'Atemtherapie',
            'desc' => '14 Beckenkreisläufe und 28 Inhalationssitzungen (Spülungen, Vernebelungen).',
        ],
        'item_programa_circulatoria_14' => [
            'name' => 'Kreislauftherapie',
            'desc' => '14 Beckenkreisläufe, 4 Fussbäder, 5 Whirlpool-Massagen und 5 Thalaxion.',
        ],
        'item_programa_antistress_14' => [
            'name' => 'Anti-Stress-Therapie',
            'desc' => '14 Beckenkreisläufe, 5 Whirlpool-Massagen, 4 Körpermassagen und 5 Vichy-Duschen mit Ganzkörpermassage.',
        ],
        'item_programa_psoriase_14' => [
            'name' => 'Psoriasis und dermatologische Probleme',
            'desc' => '14 Beckenkreisläufe, 7 Ganzkörper-Algenanwendungen und 7 Whirlpool-Massagen.',
        ],
        'item_programa_reumatismo_14' => [
            'name' => 'Rheuma und Skeletterkrankungen',
            'desc' => '14 Beckenkreisläufe, 2 Whirlpool-Massagen, 4 Ganzkörper-Algenanwendungen, 2 Vichy-Duschen mit Ganzkörpermassage und 6 Physiotherapie-Sitzungen.',
        ],
        'item_programa_neurologicas_14' => [
            'name' => 'Neurologische Folgeerscheinungen',
            'desc' => '14 Beckenkreisläufe, 7 Physiotherapie-/Hydrotherapie-Sitzungen und 7 Thalaxion.',
        ],
    ],
];
