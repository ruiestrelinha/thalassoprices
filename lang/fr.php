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
        'toggle_cure'      => 'Cure',
        'tax_note_wellness' => 'Prix TTC au taux légal de 23 %.',
        'tax_note_cure'     => 'Prix TTC au taux légal de 6 %.',
        'vat_legend_wellness' => 'Les prix avec TVA à 23 % concernent les services de bien-être et de relaxation.',
        'vat_legend_cure'     => 'Les prix avec TVA à 6 % concernent les services à caractère thérapeutique, sur prescription médicale (au titre de l\'article 9 du CIVA).',
        'logo_alt'          => 'Thalasso Nazaré - Le soin qui vient de la mer.',
        'footer_tagline'    => 'Centre de Thalassothérapie',
        'back_to_top'       => 'Retour en haut',
        'duration_title'    => 'Durée approximative : %d minutes',
        'buy_button'        => 'Acheter',
    ],

    /* --- Titres de section (bandeaux gris) --- */
    'sections' => [
        'section_balneoterapia'        => ['title' => 'BALNÉOTHÉRAPIE'],
        'section_terapia_respiratoria' => ['title' => 'THÉRAPIE RESPIRATOIRE', 'duration' => '15 min.'],
        'section_massagens'            => ['title' => 'MASSAGES'],
        'section_tratamentos_corporais' => ['title' => 'SOINS CORPORELS'],
        'section_tratamentos_faciais'   => ['title' => 'SOINS DU VISAGE'],
        'section_rituais'              => ['title' => 'RITUELS CORPORELS'],
        'section_hidroterapia'         => ['title' => 'HYDROTHÉRAPIE'],
        'section_termoterapia'         => ['title' => 'THERMOTHÉRAPIE'],
        'section_massoterapia'         => ['title' => 'MASSOTHÉRAPIE'],
        'section_fisioterapia'         => ['title' => 'PHYSIOTHÉRAPIE'],
        'section_programas_7'          => ['title' => 'PROGRAMMES THÉRAPEUTIQUES', 'duration' => '7 jours'],
        'section_programas_14'         => ['title' => 'PROGRAMMES THÉRAPEUTIQUES', 'duration' => '14 jours'],
    ],

    /* --- Descriptions isolées (hors lignes de prix) --- */
    'descs' => [
        'desc_terapia_respiratoria' => 'Inhalation, nébulisation ou aérosol.',
    ],

    /* --- Bienfaits (infobulles des services techniques) --- */
    'tips' => [
        'item_thalaxion'               => 'Stimule la circulation sanguine et soulage les tensions musculaires grâce à des jets d\'eau pressurisés.',
        'item_thalaxion_cura'          => 'Stimule la circulation sanguine et soulage les tensions musculaires grâce à des jets d\'eau pressurisés.',
        'item_phlebotone'              => 'Traitement pour les jambes fatiguées et la mauvaise circulation, à effet tonifiant et drainant.',
        'item_phlebotone_cura'         => 'Traitement pour les jambes fatiguées et la mauvaise circulation, à effet tonifiant et drainant.',
        'item_duche_subaquatico'       => 'Massage aux jets d\'eau tiède appliqués directement sur le corps, idéal contre les douleurs musculaires.',
        'item_hidromassagem_banheira'  => 'Relaxation profonde dans un bain individuel à hydromassage, qui soulage les tensions musculaires et combat le stress.',
        'item_hidromassagem_banheira_cura' => 'Relaxation profonde dans un bain individuel à hydromassage, qui soulage les tensions musculaires et combat le stress.',
        'item_hidromassagem_algas'     => 'Allie l\'action relaxante des jets aux propriétés reminéralisantes des algues marines.',
        'item_hidromassagem_algas_cura' => 'Allie l\'action relaxante des jets aux propriétés reminéralisantes des algues marines.',
        'item_hidrocinesio_individual_60' => 'Thérapie en piscine d\'eau thermale qui facilite le mouvement et renforce les muscles, utile en rééducation.',
    ],

    /* --- Lignes de service (nom, durée, description) --- */
    'items' => [
        /* ---- Bien-être ---- */
        'item_circuito_thalasso' => [
            'name'     => 'Parcours aquatique thalasso',
            'duration' => '60 min.',
            'desc'     => 'Piscine dynamique d\'eau de mer chauffée, bain bouillonnant, contrecourant, hammam, douches de contraste et fontaine de glace.',
        ],
        'item_pack_3_circuitos' => [
            'name' => 'Pack 3 Séances Parcours Aquatique Thalasso',
        ],
        'item_pack_5_circuitos' => [
            'name' => 'Pack 5 Séances Parcours Aquatique Thalasso',
        ],
        'item_pack_10_circuitos' => [
            'name' => 'Pack 10 Séances Parcours Aquatique Thalasso',
        ],
        'item_thalasso_experience' => [
            'name'     => 'Thalasso Experience',
            'duration' => '120 min.',
            'desc'     => 'Parcours aquatique thalasso + enveloppement corporel d\'algues ou de boues marines + hydratation',
        ],
        'item_duche_vichy_massagem' => [
            'name'     => 'Massage corporel sous douche d\'affusion',
            'duration' => '25 min.',
        ],
        'item_hidromassagem_banheira' => [
            'name'     => 'Hydromassage en baignoire individuelle',
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
            'name'     => 'Phlebotone',
            'duration' => '15 min.',
        ],
        'item_pack_3_terapia_respiratoria' => [
            'name' => 'Pack 3 Séances Thérapie Respiratoire',
        ],
        'item_massagem_localizada' => [
            'name'     => 'Massage localisé',
            'duration' => '30 min.',
        ],
        'item_massagem_relaxamento_40' => [
            'name'     => 'Massage détente corporel',
            'duration' => '40 min.',
        ],
        'item_massagem_relaxamento_60' => [
            'name'     => 'Massage détente corporel',
            'duration' => '60 min.',
        ],
        'item_massagem_casal' => [
            'name'     => 'Massage détente couple',
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
            'name'     => 'Enveloppement corporel d\'algues',
            'duration' => '50 min.',
        ],
        'item_envolvimento_lamas' => [
            'name'     => 'Enveloppement corporel avec des boues marines',
            'duration' => '50 min.',
        ],
        'item_envolvimento_drenante' => [
            'name'     => 'Enveloppement drainant avec extraits marins',
            'duration' => '45 min.',
        ],
        'item_envolvimento_redutor' => [
            'name'     => 'Enveloppement minceur',
            'duration' => '60 min.',
        ],
        'item_envolvimento_crioterapia' => [
            'name'     => 'Enveloppement de cryothérapie',
            'duration' => '45 min.',
            'desc'     => 'Problèmes circulatoires.',
        ],
        'item_esfoliacao_sal_marinho' => [
            'name'     => 'Gommage corporel au sel marin',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_geleia_aquatica' => [
            'name'     => 'Gommage corporel avec gelée aquatique',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_lamas_sais' => [
            'name'     => 'Gommage avec boues et sels marins',
            'duration' => '60 min.',
        ],
        'item_tratamento_pes_pernas' => [
            'name'     => 'Soin drainant pour les pieds et les jambes',
            'duration' => '45 min.',
            'desc'     => 'Bain, gommage et massage.',
        ],
        'item_mini_facial_hidratante' => [
            'name'     => 'Soin hydratant',
            'duration' => '30 min.',
        ],
        'item_limpeza_pele' => [
            'name'     => 'Nettoyage du visage',
            'duration' => '90 min.',
            'desc'     => 'Avec extraction.',
        ],
        'item_facial_desintoxicante_algas' => [
            'name'     => 'Soin détox aux algues',
            'duration' => '60 min.',
        ],
        'item_facial_personalizado' => [
            'name'     => 'Soin personnalisé',
            'duration' => '60 min.',
        ],
        'item_ritual_polinesia' => [
            'name'     => 'Rituel thalasso anti-stress — Polynésie',
            'duration' => '120 min.',
            'desc'     => 'Gommage, bain hydromassant et massage corporel avec des sachets de sable chaud.',
        ],
        'item_renaissance' => [
            'name'     => 'Renaissance',
            'duration' => '60 min.',
            'desc'     => 'Gommage et massage.',
        ],
        'item_oceano_profundo_120' => [
            'name'     => 'Océan profond',
            'duration' => '120 min.',
            'desc'     => 'Gommage, bain hydromassant et massage thématique.',
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
            'name'     => 'Hydro-kinésithérapie en piscine',
            'duration' => '60 min.',
        ],
        'item_5_hidrocinesio' => [
            'name'     => '5 séances d\'hydro-kinésithérapie',
            'duration' => '60 min.',
        ],
        'item_10_hidrocinesio' => [
            'name'     => '10 séances d\'hydro-kinésithérapie',
            'duration' => '60 min.',
        ],
        'item_hidrocinesio_terapeuta_50' => [
            'name'     => 'Hydro-kinésithérapie individuelle dans la piscine',
            'duration' => '50 min.',
            'desc'     => 'Avec thérapeute.',
        ],
        'item_5_hidrocinesio_terapeuta' => [
            'name' => '5 séances d\'hydro-kinésithérapie individuelle dans la piscine (avec thérapeute)',
        ],
        'item_10_hidrocinesio_terapeuta' => [
            'name' => '10 séances d\'hydro-kinésithérapie individuelle dans la piscine (avec thérapeute)',
        ],
        'item_duche_vichy_cura' => [
            'name'     => 'Massage corporel sous douche d\'affusion',
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
            'name'     => 'Hydro massage en baignoire individuelle',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_algas_cura' => [
            'name'     => 'Hydro massage aux algues',
            'duration' => '15 min.',
        ],
        'item_thalaxion_cura' => [
            'name'     => 'Thalaxion (ou hydropressothérapie)',
            'duration' => '20 min.',
        ],
        'item_phlebotone_cura' => [
            'name'     => 'Phlebotone',
            'duration' => '15 min.',
        ],
        'item_terapia_respiratoria_cura' => [
            'name'     => 'Thérapie respiratoire',
            'duration' => '15 min.',
            'desc'     => 'Inhalation, nébulisation ou aérosol.',
        ],
        'item_pack_5_terapia_respiratoria' => [
            'name' => 'Pack 5 Séances Thérapie Respiratoire',
        ],
        'item_pack_10_terapia_respiratoria' => [
            'name' => 'Pack 10 Séances Thérapie Respiratoire',
        ],
        'item_aplicacao_algas_local' => [
            'name'     => 'Application d\'algues localisée',
            'duration' => '40 min.',
        ],
        'item_aplicacao_algas_geral' => [
            'name'     => 'Application d\'algues complète',
            'duration' => '60 min.',
        ],
        'item_aplicacao_lamas_local' => [
            'name'     => 'Application de boues marines localisée',
            'duration' => '40 min.',
        ],
        'item_aplicacao_lamas_geral' => [
            'name'     => 'Application de boues marines complète',
            'duration' => '60 min.',
        ],
        'item_massagem_terapeutica_cura' => [
            'name'     => 'Massage thérapeutique',
            'duration' => '30 min.',
        ],
        'item_sessao_fisioterapia' => [
            'name'     => 'Séance de physiothérapie',
            'duration' => '50 min.',
        ],
        'item_pack_3_fisioterapia' => [
            'name' => 'Pack 3 Séances de Physiothérapie',
        ],
        'item_pack_5_fisioterapia' => [
            'name' => 'Pack 5 Séances de Physiothérapie',
        ],
        'item_pack_10_fisioterapia' => [
            'name' => 'Pack 10 Séances de Physiothérapie',
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
            'desc' => '7 circuits piscine, 3 hydromassages, 2 massages corporels et 2 douches d\'affusion avec massage complet.',
        ],
        'item_programa_psoriase_7' => [
            'name' => 'Psoriasis et Problèmes Dermatologiques',
            'desc' => '7 circuits piscine, 3 applications d\'algues corporelles et 4 hydromassages.',
        ],
        'item_programa_reumatismo_7' => [
            'name' => 'Rhumatisme et Squelettique',
            'desc' => '7 circuits piscine, 1 hydromassage, 2 applications d\'algues corporelles, 1 douche d\'affusion avec massage complet et 3 séances de physiothérapie.',
        ],
        'item_programa_neurologicas_7' => [
            'name' => 'Séquelles neurologiques',
            'desc' => '7 circuits piscine, 4 séances de physiothérapie/hydrothérapie et 3 thalaxion.',
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
            'desc' => '14 circuits piscine, 5 hydromassages, 4 massages corporels et 5 douches d\'affusion avec massage complet.',
        ],
        'item_programa_psoriase_14' => [
            'name' => 'Psoriasis et Problèmes Dermatologiques',
            'desc' => '14 circuits piscine, 7 applications d\'algues corporelles et 7 hydromassages.',
        ],
        'item_programa_reumatismo_14' => [
            'name' => 'Rhumatisme et Squelettique',
            'desc' => '14 circuits piscine, 2 hydromassages, 4 applications d\'algues corporelles, 2 douches d\'affusion avec massage complet et 6 séances de physiothérapie.',
        ],
        'item_programa_neurologicas_14' => [
            'name' => 'Séquelles neurologiques',
            'desc' => '14 circuits piscine, 7 séances de physiothérapie/hydrothérapie et 7 thalaxion.',
        ],
    ],
];
