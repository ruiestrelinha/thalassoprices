<?php
/* =====================================================================
 * English (en)
 * Translation keys for the website.
 * Required structure: ui, sections, descs, items.
 * ===================================================================== */

return [

    /* --- Interface --- */
    'ui' => [
        'document_title'   => 'Thalasso Nazaré - Price List',
        'page_title'       => 'Price List',
        'selector_aria'    => 'Select language',
        'toggle_aria'      => 'Select price list category',
        'toggle_wellness'  => 'Wellness',
        'toggle_cure'      => 'Cure',
        'tax_note_wellness' => 'Prices include VAT at the legal rate of 23%.',
        'tax_note_cure'     => 'Prices include VAT at the legal rate of 6%.',
        'vat_legend_wellness' => 'Prices with 23% VAT apply to wellness and relaxation services.',
        'vat_legend_cure'     => 'Prices with 6% VAT apply to therapeutic services, subject to a medical prescription (under Article 9 of the CIVA).',
        'logo_alt'          => 'Thalasso Nazaré - The cure that comes from the sea.',
        'footer_tagline'    => 'Thalassotherapy Centre',
        'back_to_top'       => 'Back to top',
        'duration_title'    => 'Approximate duration: %d minutes',
        'buy_button'        => 'Buy',
        'theme_to_dark'     => 'Switch to dark mode',
        'theme_to_light'    => 'Switch to light mode',
    ],

    /* --- Section titles (grey bands) --- */
    'sections' => [
        'section_balneoterapia'        => ['title' => 'BALNEOTHERAPY'],
        'section_terapia_respiratoria' => ['title' => 'RESPIRATORY THERAPY', 'duration' => '15 min.'],
        'section_massagens'            => ['title' => 'MASSAGES'],
        'section_tratamentos_corporais' => ['title' => 'BODY TREATMENTS'],
        'section_tratamentos_faciais'   => ['title' => 'FACIAL TREATMENTS'],
        'section_rituais'              => ['title' => 'RITUALS'],
        'section_hidroterapia'         => ['title' => 'HYDROTHERAPY'],
        'section_termoterapia'         => ['title' => 'THERMOTHERAPY'],
        'section_massoterapia'         => ['title' => 'MASSOTHERAPY'],
        'section_fisioterapia'         => ['title' => 'PHYSIOTHERAPY'],
        'section_programas_7'          => ['title' => 'THERAPEUTIC PROGRAMS', 'duration' => '7 days'],
        'section_programas_14'         => ['title' => 'THERAPEUTIC PROGRAMS', 'duration' => '14 days'],
    ],

    /* --- Standalone descriptions (outside price rows) --- */
    'descs' => [
        'desc_terapia_respiratoria' => 'Nasal shower, nebulisation or aerosol.',
    ],

    /* --- Benefits (tooltips for technical services) --- */
    'tips' => [
        'item_thalaxion'               => 'Partially covered bath in which jets are directed sequentially at the abdomen, thighs and legs at varying pressures and temperatures. Effect: stimulates venous blood circulation, veno-lymphatic drainage and reduces swelling.',
        'item_thalaxion_cura'          => 'Partially covered bath in which jets are directed sequentially at the abdomen, thighs and legs at varying pressures and temperatures. Effect: stimulates venous blood circulation, veno-lymphatic drainage and reduces swelling.',
        'item_phlebotone'              => 'Tub for soaking the feet and legs in a simple bath or with air bubbles, alternating between warm and cold sea water. Relaxing, toning and anti-inflammatory effect that also activates blood circulation.',
        'item_phlebotone_cura'         => 'Tub for soaking the feet and legs in a simple bath or with air bubbles, alternating between warm and cold sea water. Relaxing, toning and anti-inflammatory effect that also activates blood circulation.',
        'item_duche_subaquatico'       => 'Manual hydro-massage in a bath, applied as a jet directed at a specific area or joint of the body. Provides a relaxing effect and locally activates circulation.',
        'item_hidromassagem_banheira'  => 'Performed in a bath of sea water (36–38 ºC), the client receives an alternating massage of the lower limbs, spine, pelvis and shoulder area through fine pressurised water jets combined with a swirl of air bubbles. Effects: muscle relaxation, tissue toning, penetration of trace elements, vasodilation.',
        'item_hidromassagem_banheira_cura' => 'Performed in a bath of sea water (36–38 ºC), the client receives an alternating massage of the lower limbs, spine, pelvis and shoulder area through fine pressurised water jets combined with a swirl of air bubbles. Effects: muscle relaxation, tissue toning, penetration of trace elements, vasodilation.',
        'item_hidromassagem_algas'     => 'Immersive bath in warm sea water with added micro-fragmented (powdered) algae which, through jets directed sequentially at different parts of the body, improves blood circulation, relaxes the muscles, remineralises tissues and hydrates the skin.',
        'item_hidromassagem_algas_cura' => 'Immersive bath in warm sea water with added micro-fragmented (powdered) algae which, through jets directed sequentially at different parts of the body, improves blood circulation, relaxes the muscles, remineralises tissues and hydrates the skin.',
        'item_hidrocinesio_individual_60' => 'Dynamic pool with heated sea water, counter-current, walking lane, Turkish bath, contrast showers, ice fountain and relaxation.',
    ],

    /* --- Service rows (name, duration, description) --- */
    'items' => [
        /* ---- Wellness ---- */
        'item_circuito_thalasso' => [
            'name'     => 'Thalasso Circuit',
            'duration' => '60 min.',
            'desc'     => 'Dynamic pool with heated seawater, counter-current jets, foot bath, hammam, temperature showers, ice fountain and relaxation area.',
        ],
        'item_pack_3_circuitos' => [
            'name' => 'Pack 3 Sessions Thalasso Circuit',
        ],
        'item_pack_5_circuitos' => [
            'name' => 'Pack 5 Sessions Thalasso Circuit',
        ],
        'item_pack_10_circuitos' => [
            'name' => 'Pack 10 Sessions Thalasso Circuit',
        ],
        'item_thalasso_experience' => [
            'name'     => 'Thalasso Experience',
            'duration' => '120 min.',
            'desc'     => 'Thalasso circuit + seaweed or sea mud body wrap + moisturizing cream or oil',
        ],
        'item_duche_vichy_massagem' => [
            'name'     => 'Vichy Shower with full body massage',
            'duration' => '25 min.',
        ],
        'item_hidromassagem_banheira' => [
            'name'     => 'Whirlpool in individual bath',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_algas' => [
            'name'     => 'Whirlpool with algae',
            'duration' => '15 min.',
        ],
        'item_thalaxion' => [
            'name'     => 'Thalaxion',
            'duration' => '20 min.',
        ],
        'item_phlebotone' => [
            'name'     => 'Phlebotone',
            'duration' => '15 min.',
        ],
        'item_pack_3_terapia_respiratoria' => [
            'name' => 'Pack 3 Sessions Respiratory Therapy',
        ],
        'item_massagem_localizada' => [
            'name'     => 'Localized massage',
            'duration' => '30 min.',
        ],
        'item_massagem_relaxamento_40' => [
            'name'     => 'Body relaxation massage',
            'duration' => '40 min.',
        ],
        'item_massagem_relaxamento_60' => [
            'name'     => 'Body relaxation massage',
            'duration' => '60 min.',
        ],
        'item_massagem_casal' => [
            'name'     => 'Couple relaxation massage',
            'duration' => '60 min.',
        ],
        'item_massagem_terapeutica' => [
            'name'     => 'Therapeutic massage',
            'duration' => '30 min.',
        ],
        'item_drenagem_linfatica' => [
            'name'     => 'Manual lymphatic drainage',
            'duration' => '60 min.',
        ],
        'item_envolvimento_algas' => [
            'name'     => 'Algae body wrap',
            'duration' => '50 min.',
        ],
        'item_envolvimento_lamas' => [
            'name'     => 'Sea mud body wrap',
            'duration' => '50 min.',
        ],
        'item_envolvimento_drenante' => [
            'name'     => 'Draining body wrap with marine extracts',
            'duration' => '45 min.',
        ],
        'item_envolvimento_redutor' => [
            'name'     => 'Wrap reducer',
            'duration' => '60 min.',
        ],
        'item_envolvimento_crioterapia' => [
            'name'     => 'Cryotherapy wrapping',
            'duration' => '45 min.',
            'desc'     => 'Circulatory problems.',
        ],
        'item_esfoliacao_sal_marinho' => [
            'name'     => 'Exfoliation with sea salt',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_geleia_aquatica' => [
            'name'     => 'Moisturizing exfoliation with water jelly',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_lamas_sais' => [
            'name'     => 'Exfoliation with mud and marine salts',
            'duration' => '60 min.',
        ],
        'item_tratamento_pes_pernas' => [
            'name'     => 'Foot and leg treatment',
            'duration' => '45 min.',
            'desc'     => 'Bath, exfoliation and massage.',
        ],
        'item_mini_facial_hidratante' => [
            'name'     => 'Mini-facial moisturizer',
            'duration' => '30 min.',
        ],
        'item_limpeza_pele' => [
            'name'     => 'Skin cleansing',
            'duration' => '90 min.',
            'desc'     => 'With extraction.',
        ],
        'item_facial_desintoxicante_algas' => [
            'name'     => 'Detoxifying facial treatment with algae',
            'duration' => '60 min.',
        ],
        'item_facial_personalizado' => [
            'name'     => 'Custom face treatment',
            'duration' => '60 min.',
        ],
        'item_ritual_polinesia' => [
            'name'     => 'Anti-stress thalasso ritual — Polynesia',
            'duration' => '120 min.',
            'desc'     => 'Exfoliation, hydromassage and body massage.',
        ],
        'item_renaissance' => [
            'name'     => 'Renaissance',
            'duration' => '60 min.',
            'desc'     => 'Exfoliation and massage.',
        ],
        'item_oceano_profundo_120' => [
            'name'     => 'Deep ocean',
            'duration' => '120 min.',
            'desc'     => 'Exfoliation, hydromassage and themed massage.',
        ],
        'item_oceano_profundo_90' => [
            'name'     => 'Deep ocean',
            'duration' => '90 min.',
            'desc'     => 'Exfoliation and themed massage.',
        ],
        'item_pure_relax_homem' => [
            'name'     => 'Pure relax man',
            'duration' => '90 min.',
            'desc'     => 'Exfoliation and themed massage.',
        ],

        /* ---- Thermal Cure ---- */
        'item_hidrocinesio_individual_60' => [
            'name'     => 'Individual hydrokinesiotherapy in the pool',
            'duration' => '60 min.',
        ],
        'item_5_hidrocinesio' => [
            'name'     => '5 Hydrokinesiotherapy sessions',
            'duration' => '60 min.',
        ],
        'item_10_hidrocinesio' => [
            'name'     => '10 Hydrokinesiotherapy sessions',
            'duration' => '60 min.',
        ],
        'item_hidrocinesio_terapeuta_50' => [
            'name'     => 'Individual hydrokinesiotherapy in the pool',
            'duration' => '50 min.',
            'desc'     => 'With therapist.',
        ],
        'item_5_hidrocinesio_terapeuta' => [
            'name' => '5 Sessions individual hydrokinesiotherapy in the pool (with therapist)',
        ],
        'item_10_hidrocinesio_terapeuta' => [
            'name' => '10 Sessions individual hydrokinesiotherapy in the pool (with therapist)',
        ],
        'item_duche_vichy_cura' => [
            'name'     => 'Vichy Shower with full body massage',
            'duration' => '25 min.',
        ],
        'item_duche_jato' => [
            'name'     => 'Jet shower',
            'duration' => '5–8 min.',
        ],
        'item_duche_escoces' => [
            'name'     => 'Scottish shower',
            'duration' => '8 min.',
        ],
        'item_duche_subaquatico' => [
            'name'     => 'Underwater shower',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_banheira_cura' => [
            'name'     => 'Whirlpool in individual bath',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_algas_cura' => [
            'name'     => 'Whirlpool with algae',
            'duration' => '15 min.',
        ],
        'item_thalaxion_cura' => [
            'name'     => 'Thalaxion (or Hydropressotherapy)',
            'duration' => '20 min.',
        ],
        'item_phlebotone_cura' => [
            'name'     => 'Phlebotone',
            'duration' => '15 min.',
        ],
        'item_terapia_respiratoria_cura' => [
            'name'     => 'Respiratory therapy',
            'duration' => '15 min.',
            'desc'     => 'Nasal shower, nebulization or aerosol.',
        ],
        'item_pack_5_terapia_respiratoria' => [
            'name' => 'Pack 5 Sessions Respiratory therapy',
        ],
        'item_pack_10_terapia_respiratoria' => [
            'name' => 'Pack 10 Sessions Respiratory therapy',
        ],
        'item_aplicacao_algas_local' => [
            'name'     => 'Local algae application',
            'duration' => '40 min.',
        ],
        'item_aplicacao_algas_geral' => [
            'name'     => 'Full algae application',
            'duration' => '60 min.',
        ],
        'item_aplicacao_lamas_local' => [
            'name'     => 'Local sea mud application',
            'duration' => '40 min.',
        ],
        'item_aplicacao_lamas_geral' => [
            'name'     => 'Full sea mud application',
            'duration' => '60 min.',
        ],
        'item_massagem_terapeutica_cura' => [
            'name'     => 'Therapeutic massage',
            'duration' => '30 min.',
        ],
        'item_sessao_fisioterapia' => [
            'name'     => 'Physiotherapy session',
            'duration' => '50 min.',
        ],
        'item_pack_3_fisioterapia' => [
            'name' => 'Pack 3 Sessions Physiotherapy',
        ],
        'item_pack_5_fisioterapia' => [
            'name' => 'Pack 5 Sessions Physiotherapy',
        ],
        'item_pack_10_fisioterapia' => [
            'name' => 'Pack 10 Sessions Physiotherapy',
        ],
        'item_programa_respiratoria_7' => [
            'name' => 'Respiratory Therapy',
            'desc' => '7 pool circuits and 14 inhalation sessions (irrigations, nebulisations).',
        ],
        'item_programa_circulatoria_7' => [
            'name' => 'Circulatory Therapy',
            'desc' => '7 pool circuits, 3 footbaths, 2 whirlpools and 2 thalaxion.',
        ],
        'item_programa_antistress_7' => [
            'name' => 'Anti-stress Therapy',
            'desc' => '7 pool circuits, 3 whirlpools, 2 body massages and 2 Vichy showers with full body massage.',
        ],
        'item_programa_psoriase_7' => [
            'name' => 'Psoriasis and Dermatological Problems',
            'desc' => '7 pool circuits, 3 algae body applications and 4 whirlpools.',
        ],
        'item_programa_reumatismo_7' => [
            'name' => 'Rheumatism and Skeletal',
            'desc' => '7 pool circuits, 1 whirlpool, 2 algae body applications, 1 Vichy shower with full body massage and 3 physiotherapy sessions.',
        ],
        'item_programa_neurologicas_7' => [
            'name' => 'Neurological Sequelae',
            'desc' => '7 pool circuits, 4 physiotherapy/hydrotherapy sessions and 3 thalaxion.',
        ],
        'item_programa_respiratoria_14' => [
            'name' => 'Respiratory Therapy',
            'desc' => '14 pool circuits and 28 inhalation sessions (irrigations, nebulisations).',
        ],
        'item_programa_circulatoria_14' => [
            'name' => 'Circulatory Therapy',
            'desc' => '14 pool circuits, 4 footbaths, 5 whirlpools and 5 thalaxion.',
        ],
        'item_programa_antistress_14' => [
            'name' => 'Anti-stress Therapy',
            'desc' => '14 pool circuits, 5 whirlpools, 4 body massages and 5 Vichy showers with full body massage.',
        ],
        'item_programa_psoriase_14' => [
            'name' => 'Psoriasis and Dermatological Problems',
            'desc' => '14 pool circuits, 7 algae body applications and 7 whirlpools.',
        ],
        'item_programa_reumatismo_14' => [
            'name' => 'Rheumatism and Skeletal',
            'desc' => '14 pool circuits, 2 whirlpools, 4 algae body applications, 2 Vichy showers with full body massage and 6 physiotherapy sessions.',
        ],
        'item_programa_neurologicas_14' => [
            'name' => 'Neurological Sequelae',
            'desc' => '14 pool circuits, 7 physiotherapy/hydrotherapy sessions and 7 thalaxion.',
        ],
    ],
];
