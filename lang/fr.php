<?php
/* =====================================================================
 * Français (fr)
 * Clés de traduction du site.
 * Structure requise : ui, sections, descs, items.
 * ===================================================================== */

return [

    /* --- Interface --- */
    'ui' => [
        'document_title'   => 'Thalasso Nazaré - Tarifs',
        'page_title'       => 'Tarifs',
        'selector_aria'    => 'Choisir la langue',
        'toggle_aria'      => 'Choisir une catégorie de tarifs',
        'toggle_wellness'  => 'Bien-être',
        'toggle_cure'      => 'Cure Thermale',
        'tax_note_wellness' => 'Prix TTC au taux légal de 23 %.',
        'tax_note_cure'     => 'Prix TTC au taux légal de 6 %.',
        'logo_alt'          => 'Thalasso Nazaré - Le soin qui vient de la mer.',
        'footer_tagline'    => 'Centre de Thalassothérapie',
        'back_to_top'       => 'Retour en haut',
        'duration_title'    => 'Durée approximative : %d minutes',
    ],

    /* --- Titres de section (bandeaux gris) --- */
    'sections' => [
        'section_balneoterapia'        => ['title' => 'BALNÉOTHÉRAPIE'],
        'section_terapia_respiratoria' => ['title' => 'THÉRAPIE RESPIRATOIRE', 'duration' => '15 min.'],
        'section_massagens'            => ['title' => 'MASSAGES'],
        'section_tratamentos_corporais' => ['title' => 'SOINS CORPS'],
        'section_tratamentos_faciais'   => ['title' => 'SOINS VISAGE'],
        'section_rituais'              => ['title' => 'RITUELS'],
        'section_hidroterapia'         => ['title' => 'HYDROTHÉRAPIE'],
        'section_termoterapia'         => ['title' => 'THERMOTHÉRAPIE'],
        'section_massoterapia'         => ['title' => 'MASSOTHÉRAPIE'],
        'section_fisioterapia'         => ['title' => 'KINÉSITHÉRAPIE'],
        'section_programas_7'          => ['title' => 'PROGRAMMES THÉRAPEUTIQUES', 'duration' => '7 jours'],
        'section_programas_14'         => ['title' => 'PROGRAMMES THÉRAPEUTIQUES', 'duration' => '14 jours'],
    ],

    /* --- Descriptions isolées (hors lignes de prix) --- */
    'descs' => [
        'desc_terapia_respiratoria' => 'Douche nasale, nébulisation ou aérosol.',
    ],

    /* --- Lignes de service (nom, durée, description) --- */
    'items' => [
        /* ---- Bien-être ---- */
        'item_circuito_thalasso' => [
            'name'     => 'Circuit thalasso',
            'duration' => '60 min.',
            'desc'     => 'Piscine dynamique à eau de mer chauffée, contre-courant, couloir de marche, hammam, douches à contraste, fontaine de glace et relaxation.',
        ],
        'item_pack_3_circuitos' => [
            'name' => 'Pack 3 séances Circuit thalasso',
        ],
        'item_pack_5_circuitos' => [
            'name' => 'Pack 5 séances Circuit thalasso',
        ],
        'item_pack_10_circuitos' => [
            'name' => 'Pack 10 séances Circuit thalasso',
        ],
        'item_thalasso_experience' => [
            'name'     => 'Thalasso Experience',
            'duration' => '120 min.',
            'desc'     => 'Circuit thalasso + enveloppement de boue marine ou d\'algues + crème hydratante ou huile',
        ],
        'item_duche_vichy_massagem' => [
            'name'     => 'Douche Vichy avec massage complet',
            'duration' => '25 min.',
        ],
        'item_hidromassagem_banheira' => [
            'name'     => 'Bain à hydromassage individuel',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_algas' => [
            'name'     => 'Hydromassage aux algues',
            'duration' => '15 min.',
        ],
        'item_thalaxion' => [
            'name'     => 'Thalaxion',
            'duration' => '20 min.',
        ],
        'item_phlebotone' => [
            'name'     => 'Phlébotone',
            'duration' => '15 min.',
        ],
        'item_pack_3_terapia_respiratoria' => [
            'name' => 'Pack 3 séances Thérapie respiratoire',
        ],
        'item_massagem_localizada' => [
            'name'     => 'Massage localisé',
            'duration' => '30 min.',
        ],
        'item_massagem_relaxamento_40' => [
            'name'     => 'Massage de relaxation du corps entier',
            'duration' => '40 min.',
        ],
        'item_massagem_relaxamento_60' => [
            'name'     => 'Massage de relaxation du corps entier',
            'duration' => '60 min.',
        ],
        'item_massagem_casal' => [
            'name'     => 'Massage de relaxation en duo',
            'duration' => '60 min.',
        ],
        'item_massagem_terapeutica' => [
            'name'     => 'Massage thérapeutique',
            'duration' => '30 min.',
        ],
        'item_drenagem_linfatica' => [
            'name'     => 'Drainage lymphatique manuel',
            'duration' => '60 min.',
        ],
        'item_envolvimento_algas' => [
            'name'     => 'Enveloppement corporel aux algues',
            'duration' => '50 min.',
        ],
        'item_envolvimento_lamas' => [
            'name'     => 'Enveloppement corporel à la boue marine',
            'duration' => '50 min.',
        ],
        'item_envolvimento_drenante' => [
            'name'     => 'Enveloppement drainant aux extraits marins',
            'duration' => '45 min.',
        ],
        'item_envolvimento_redutor' => [
            'name'     => 'Enveloppement amincissant',
            'duration' => '60 min.',
        ],
        'item_envolvimento_crioterapia' => [
            'name'     => 'Enveloppement de cryothérapie',
            'duration' => '45 min.',
            'desc'     => 'Problèmes circulatoires.',
        ],
        'item_esfoliacao_sal_marinho' => [
            'name'     => 'Gommage au sel marin',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_geleia_aquatica' => [
            'name'     => 'Gommage hydratant à la gelée aquatique',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_lamas_sais' => [
            'name'     => 'Gommage à la boue et aux sels marins',
            'duration' => '60 min.',
        ],
        'item_tratamento_pes_pernas' => [
            'name'     => 'Soin pieds et jambes',
            'duration' => '45 min.',
            'desc'     => 'Bain, gommage et massage.',
        ],
        'item_mini_facial_hidratante' => [
            'name'     => 'Mini-facial hydratant',
            'duration' => '30 min.',
        ],
        'item_limpeza_pele' => [
            'name'     => 'Nettoyage de peau',
            'duration' => '90 min.',
            'desc'     => 'Avec extraction.',
        ],
        'item_facial_desintoxicante_algas' => [
            'name'     => 'Soin visage détox aux algues',
            'duration' => '60 min.',
        ],
        'item_facial_personalizado' => [
            'name'     => 'Soin visage personnalisé',
            'duration' => '60 min.',
        ],
        'item_ritual_polinesia' => [
            'name'     => 'Rituel thalasso anti-stress — Polynésie',
            'duration' => '120 min.',
            'desc'     => 'Gommage, hydromassage et massage corporel.',
        ],
        'item_renaissance' => [
            'name'     => 'Renaissance',
            'duration' => '60 min.',
            'desc'     => 'Gommage et massage.',
        ],
        'item_oceano_profundo_120' => [
            'name'     => 'Océan profond',
            'duration' => '120 min.',
            'desc'     => 'Gommage, hydromassage et massage thématique.',
        ],
        'item_oceano_profundo_90' => [
            'name'     => 'Océan profond',
            'duration' => '90 min.',
            'desc'     => 'Gommage et massage thématique.',
        ],
        'item_pure_relax_homem' => [
            'name'     => 'Pure relax homme',
            'duration' => '90 min.',
            'desc'     => 'Gommage et massage thématique.',
        ],

        /* ---- Cure thermale ---- */
        'item_hidrocinesio_individual_60' => [
            'name'     => 'Hydrokinésithérapie individuelle en piscine',
            'duration' => '60 min.',
        ],
        'item_5_hidrocinesio' => [
            'name'     => '5 séances d\'hydrokinésithérapie',
            'duration' => '60 min.',
        ],
        'item_10_hidrocinesio' => [
            'name'     => '10 séances d\'hydrokinésithérapie',
            'duration' => '60 min.',
        ],
        'item_hidrocinesio_terapeuta_50' => [
            'name'     => 'Hydrokinésithérapie individuelle en piscine',
            'duration' => '50 min.',
            'desc'     => 'Avec thérapeute.',
        ],
        'item_5_hidrocinesio_terapeuta' => [
            'name' => '5 séances d\'hydrokinésithérapie individuelle en piscine (avec thérapeute)',
        ],
        'item_10_hidrocinesio_terapeuta' => [
            'name' => '10 séances d\'hydrokinésithérapie individuelle en piscine (avec thérapeute)',
        ],
        'item_duche_vichy_cura' => [
            'name'     => 'Douche Vichy avec massage complet',
            'duration' => '25 min.',
        ],
        'item_duche_jato' => [
            'name'     => 'Douche à jet',
            'duration' => '5–8 min.',
        ],
        'item_duche_escoces' => [
            'name'     => 'Douche écossaise',
            'duration' => '8 min.',
        ],
        'item_duche_subaquatico' => [
            'name'     => 'Douche sous-marine',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_banheira_cura' => [
            'name'     => 'Bain à hydromassage individuel',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_algas_cura' => [
            'name'     => 'Hydromassage aux algues',
            'duration' => '15 min.',
        ],
        'item_thalaxion_cura' => [
            'name'     => 'Thalaxion (ou hydropression)',
            'duration' => '20 min.',
        ],
        'item_phlebotone_cura' => [
            'name'     => 'Phlébotone',
            'duration' => '15 min.',
        ],
        'item_terapia_respiratoria_cura' => [
            'name'     => 'Thérapie respiratoire',
            'duration' => '15 min.',
            'desc'     => 'Douche nasale, nébulisation ou aérosol.',
        ],
        'item_pack_5_terapia_respiratoria' => [
            'name' => 'Pack 5 séances Thérapie respiratoire',
        ],
        'item_pack_10_terapia_respiratoria' => [
            'name' => 'Pack 10 séances Thérapie respiratoire',
        ],
        'item_aplicacao_algas_local' => [
            'name'     => 'Application d\'algues localisée',
            'duration' => '40 min.',
        ],
        'item_aplicacao_algas_geral' => [
            'name'     => 'Application d\'algues sur tout le corps',
            'duration' => '60 min.',
        ],
        'item_aplicacao_lamas_local' => [
            'name'     => 'Application de boue marine localisée',
            'duration' => '40 min.',
        ],
        'item_aplicacao_lamas_geral' => [
            'name'     => 'Application de boue marine sur tout le corps',
            'duration' => '60 min.',
        ],
        'item_massagem_terapeutica_cura' => [
            'name'     => 'Massage thérapeutique',
            'duration' => '30 min.',
        ],
        'item_sessao_fisioterapia' => [
            'name'     => 'Séance de kinésithérapie',
            'duration' => '50 min.',
        ],
        'item_pack_3_fisioterapia' => [
            'name' => 'Pack 3 séances de kinésithérapie',
        ],
        'item_pack_5_fisioterapia' => [
            'name' => 'Pack 5 séances de kinésithérapie',
        ],
        'item_pack_10_fisioterapia' => [
            'name' => 'Pack 10 séances de kinésithérapie',
        ],
        'item_programa_respiratoria_7' => [
            'name' => 'Thérapie respiratoire',
            'desc' => '7 circuits piscine et 14 séances d\'inhalation (irrigations, nébulisations).',
        ],
        'item_programa_circulatoria_7' => [
            'name' => 'Thérapie circulatoire',
            'desc' => '7 circuits piscine, 3 pédiluves, 2 hydromassages et 2 thalaxion.',
        ],
        'item_programa_antistress_7' => [
            'name' => 'Thérapie anti-stress',
            'desc' => '7 circuits piscine, 3 hydromassages, 2 massages corporels et 2 douches Vichy avec massage complet.',
        ],
        'item_programa_psoriase_7' => [
            'name' => 'Psoriasis et problèmes dermatologiques',
            'desc' => '7 circuits piscine, 3 applications d\'algues sur tout le corps et 4 hydromassages.',
        ],
        'item_programa_reumatismo_7' => [
            'name' => 'Rhumatisme et troubles ostéo-articulaires',
            'desc' => '7 circuits piscine, 1 hydromassage, 2 applications d\'algues sur tout le corps, 1 douche Vichy avec massage complet et 3 séances de kinésithérapie.',
        ],
        'item_programa_neurologicas_7' => [
            'name' => 'Séquelles neurologiques',
            'desc' => '7 circuits piscine, 4 séances de kinésithérapie/hydrothérapie et 3 thalaxion.',
        ],
        'item_programa_respiratoria_14' => [
            'name' => 'Thérapie respiratoire',
            'desc' => '14 circuits piscine et 28 séances d\'inhalation (irrigations, nébulisations).',
        ],
        'item_programa_circulatoria_14' => [
            'name' => 'Thérapie circulatoire',
            'desc' => '14 circuits piscine, 4 pédiluves, 5 hydromassages et 5 thalaxion.',
        ],
        'item_programa_antistress_14' => [
            'name' => 'Thérapie anti-stress',
            'desc' => '14 circuits piscine, 5 hydromassages, 4 massages corporels et 5 douches Vichy avec massage complet.',
        ],
        'item_programa_psoriase_14' => [
            'name' => 'Psoriasis et problèmes dermatologiques',
            'desc' => '14 circuits piscine, 7 applications d\'algues sur tout le corps et 7 hydromassages.',
        ],
        'item_programa_reumatismo_14' => [
            'name' => 'Rhumatisme et troubles ostéo-articulaires',
            'desc' => '14 circuits piscine, 2 hydromassages, 4 applications d\'algues sur tout le corps, 2 douches Vichy avec massage complet et 6 séances de kinésithérapie.',
        ],
        'item_programa_neurologicas_14' => [
            'name' => 'Séquelles neurologiques',
            'desc' => '14 circuits piscine, 7 séances de kinésithérapie/hydrothérapie et 7 thalaxion.',
        ],
    ],
];
