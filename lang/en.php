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
        'toggle_cure'      => 'Thermal Cure',
        'tax_note_wellness' => 'Prices include VAT at the legal rate of 23%.',
        'tax_note_cure'     => 'Prices include VAT at the legal rate of 6%.',
        'logo_alt'          => 'Thalasso Nazaré - The cure that comes from the sea.',
        'footer_tagline'    => 'Thalassotherapy Centre',
        'back_to_top'       => 'Back to top',
        'duration_title'    => 'Approximate duration: %d minutes',
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
        'section_massoterapia'         => ['title' => 'MASSAGE THERAPY'],
        'section_fisioterapia'         => ['title' => 'PHYSIOTHERAPY'],
        'section_programas_7'          => ['title' => 'THERAPEUTIC PROGRAMMES', 'duration' => '7 days'],
        'section_programas_14'         => ['title' => 'THERAPEUTIC PROGRAMMES', 'duration' => '14 days'],
    ],

    /* --- Standalone descriptions (outside price rows) --- */
    'descs' => [
        'desc_terapia_respiratoria' => 'Nasal shower, nebulisation or aerosol.',
    ],

    /* --- Service rows (name, duration, description) --- */
    'items' => [
        /* ---- Wellness ---- */
        'item_circuito_thalasso' => [
            'name'     => 'Thalasso Circuit',
            'duration' => '60 min.',
            'desc'     => 'Dynamic pool with heated sea water, counter-current, walking lane, Turkish bath, contrast showers, ice fountain and relaxation.',
        ],
        'item_pack_3_circuitos' => [
            'name' => '3-Session Thalasso Circuit Pack',
        ],
        'item_pack_5_circuitos' => [
            'name' => '5-Session Thalasso Circuit Pack',
        ],
        'item_pack_10_circuitos' => [
            'name' => '10-Session Thalasso Circuit Pack',
        ],
        'item_thalasso_experience' => [
            'name'     => 'Thalasso Experience',
            'duration' => '120 min.',
            'desc'     => 'Thalasso circuit + marine mud or seaweed wrap + moisturising cream or oil',
        ],
        'item_duche_vichy_massagem' => [
            'name'     => 'Vichy shower with full massage',
            'duration' => '25 min.',
        ],
        'item_hidromassagem_banheira' => [
            'name'     => 'Hydro-massage in a private bathtub',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_algas' => [
            'name'     => 'Hydro-massage with seaweed',
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
            'name' => '3-Session Respiratory Therapy Pack',
        ],
        'item_massagem_localizada' => [
            'name'     => 'Localised massage',
            'duration' => '30 min.',
        ],
        'item_massagem_relaxamento_40' => [
            'name'     => 'Full-body relaxation massage',
            'duration' => '40 min.',
        ],
        'item_massagem_relaxamento_60' => [
            'name'     => 'Full-body relaxation massage',
            'duration' => '60 min.',
        ],
        'item_massagem_casal' => [
            'name'     => 'Couples relaxation massage',
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
            'name'     => 'Seaweed body wrap',
            'duration' => '50 min.',
        ],
        'item_envolvimento_lamas' => [
            'name'     => 'Marine mud body wrap',
            'duration' => '50 min.',
        ],
        'item_envolvimento_drenante' => [
            'name'     => 'Draining body wrap with marine extracts',
            'duration' => '45 min.',
        ],
        'item_envolvimento_redutor' => [
            'name'     => 'Slimming body wrap',
            'duration' => '60 min.',
        ],
        'item_envolvimento_crioterapia' => [
            'name'     => 'Cryotherapy wrap',
            'duration' => '45 min.',
            'desc'     => 'Circulatory problems.',
        ],
        'item_esfoliacao_sal_marinho' => [
            'name'     => 'Sea salt scrub',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_geleia_aquatica' => [
            'name'     => 'Hydrating scrub with aqua jelly',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_lamas_sais' => [
            'name'     => 'Scrub with marine mud and sea salts',
            'duration' => '60 min.',
        ],
        'item_tratamento_pes_pernas' => [
            'name'     => 'Feet and legs treatment',
            'duration' => '45 min.',
            'desc'     => 'Bath, scrub and massage.',
        ],
        'item_mini_facial_hidratante' => [
            'name'     => 'Hydrating mini-facial',
            'duration' => '30 min.',
        ],
        'item_limpeza_pele' => [
            'name'     => 'Facial cleansing',
            'duration' => '90 min.',
            'desc'     => 'With extraction.',
        ],
        'item_facial_desintoxicante_algas' => [
            'name'     => 'Detoxifying seaweed facial treatment',
            'duration' => '60 min.',
        ],
        'item_facial_personalizado' => [
            'name'     => 'Customised facial treatment',
            'duration' => '60 min.',
        ],
        'item_ritual_polinesia' => [
            'name'     => 'Anti-stress thalasso ritual — Polynesia',
            'duration' => '120 min.',
            'desc'     => 'Scrub, hydro-massage and body massage.',
        ],
        'item_renaissance' => [
            'name'     => 'Renaissance',
            'duration' => '60 min.',
            'desc'     => 'Scrub and massage.',
        ],
        'item_oceano_profundo_120' => [
            'name'     => 'Deep ocean',
            'duration' => '120 min.',
            'desc'     => 'Scrub, hydro-massage and themed massage.',
        ],
        'item_oceano_profundo_90' => [
            'name'     => 'Deep ocean',
            'duration' => '90 min.',
            'desc'     => 'Scrub and themed massage.',
        ],
        'item_pure_relax_homem' => [
            'name'     => 'Pure relax for men',
            'duration' => '90 min.',
            'desc'     => 'Scrub and themed massage.',
        ],

        /* ---- Thermal Cure ---- */
        'item_hidrocinesio_individual_60' => [
            'name'     => 'Individual hydrokinesiotherapy in the pool',
            'duration' => '60 min.',
        ],
        'item_5_hidrocinesio' => [
            'name'     => '5 hydrokinesiotherapy sessions',
            'duration' => '60 min.',
        ],
        'item_10_hidrocinesio' => [
            'name'     => '10 hydrokinesiotherapy sessions',
            'duration' => '60 min.',
        ],
        'item_hidrocinesio_terapeuta_50' => [
            'name'     => 'Individual hydrokinesiotherapy in the pool',
            'duration' => '50 min.',
            'desc'     => 'With therapist.',
        ],
        'item_5_hidrocinesio_terapeuta' => [
            'name' => '5 individual pool hydrokinesiotherapy sessions (with therapist)',
        ],
        'item_10_hidrocinesio_terapeuta' => [
            'name' => '10 individual pool hydrokinesiotherapy sessions (with therapist)',
        ],
        'item_duche_vichy_cura' => [
            'name'     => 'Vichy shower with full massage',
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
            'name'     => 'Hydro-massage in a private bathtub',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_algas_cura' => [
            'name'     => 'Hydro-massage with seaweed',
            'duration' => '15 min.',
        ],
        'item_thalaxion_cura' => [
            'name'     => 'Thalaxion (or hydropressure therapy)',
            'duration' => '20 min.',
        ],
        'item_phlebotone_cura' => [
            'name'     => 'Phlebotone',
            'duration' => '15 min.',
        ],
        'item_terapia_respiratoria_cura' => [
            'name'     => 'Respiratory therapy',
            'duration' => '15 min.',
            'desc'     => 'Nasal shower, nebulisation or aerosol.',
        ],
        'item_pack_5_terapia_respiratoria' => [
            'name' => '5-Session Respiratory Therapy Pack',
        ],
        'item_pack_10_terapia_respiratoria' => [
            'name' => '10-Session Respiratory Therapy Pack',
        ],
        'item_aplicacao_algas_local' => [
            'name'     => 'Localised seaweed application',
            'duration' => '40 min.',
        ],
        'item_aplicacao_algas_geral' => [
            'name'     => 'Full-body seaweed application',
            'duration' => '60 min.',
        ],
        'item_aplicacao_lamas_local' => [
            'name'     => 'Localised marine mud application',
            'duration' => '40 min.',
        ],
        'item_aplicacao_lamas_geral' => [
            'name'     => 'Full-body marine mud application',
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
            'name' => '3-Session Physiotherapy Pack',
        ],
        'item_pack_5_fisioterapia' => [
            'name' => '5-Session Physiotherapy Pack',
        ],
        'item_pack_10_fisioterapia' => [
            'name' => '10-Session Physiotherapy Pack',
        ],
        'item_programa_respiratoria_7' => [
            'name' => 'Respiratory Therapy',
            'desc' => '7 pool circuits and 14 inhalation sessions (irrigations, nebulisations).',
        ],
        'item_programa_circulatoria_7' => [
            'name' => 'Circulatory Therapy',
            'desc' => '7 pool circuits, 3 foot baths, 2 hydro-massages and 2 thalaxion.',
        ],
        'item_programa_antistress_7' => [
            'name' => 'Anti-stress Therapy',
            'desc' => '7 pool circuits, 3 hydro-massages, 2 body massages and 2 Vichy showers with full massage.',
        ],
        'item_programa_psoriase_7' => [
            'name' => 'Psoriasis and Dermatological Conditions',
            'desc' => '7 pool circuits, 3 seaweed applications and 4 hydro-massages.',
        ],
        'item_programa_reumatismo_7' => [
            'name' => 'Rheumatism and Skeletal Conditions',
            'desc' => '7 pool circuits, 1 hydro-massage, 2 seaweed applications, 1 Vichy shower with full massage and 3 physiotherapy sessions.',
        ],
        'item_programa_neurologicas_7' => [
            'name' => 'Neurological After-effects',
            'desc' => '7 pool circuits, 4 physiotherapy/hydrotherapy sessions and 3 thalaxion.',
        ],
        'item_programa_respiratoria_14' => [
            'name' => 'Respiratory Therapy',
            'desc' => '14 pool circuits and 28 inhalation sessions (irrigations, nebulisations).',
        ],
        'item_programa_circulatoria_14' => [
            'name' => 'Circulatory Therapy',
            'desc' => '14 pool circuits, 4 foot baths, 5 hydro-massages and 5 thalaxion.',
        ],
        'item_programa_antistress_14' => [
            'name' => 'Anti-stress Therapy',
            'desc' => '14 pool circuits, 5 hydro-massages, 4 body massages and 5 Vichy showers with full massage.',
        ],
        'item_programa_psoriase_14' => [
            'name' => 'Psoriasis and Dermatological Conditions',
            'desc' => '14 pool circuits, 7 seaweed applications and 7 hydro-massages.',
        ],
        'item_programa_reumatismo_14' => [
            'name' => 'Rheumatism and Skeletal Conditions',
            'desc' => '14 pool circuits, 2 hydro-massages, 4 seaweed applications, 2 Vichy showers with full massage and 6 physiotherapy sessions.',
        ],
        'item_programa_neurologicas_14' => [
            'name' => 'Neurological After-effects',
            'desc' => '14 pool circuits, 7 physiotherapy/hydrotherapy sessions and 7 thalaxion.',
        ],
    ],
];
