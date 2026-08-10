<?php
/* =====================================================================
 * Español (es)
 * Claves de traducción del sitio web.
 * Estructura requerida: ui, sections, descs, items.
 * ===================================================================== */

return [

    /* --- Interfaz --- */
    'ui' => [
        'document_title'   => 'Thalasso Nazaré - Tarifas',
        'page_title'       => 'Tarifas',
        'selector_aria'    => 'Seleccionar idioma',
        'toggle_aria'      => 'Seleccionar categoría de tarifas',
        'toggle_wellness'  => 'Bienestar',
        'toggle_cure'      => 'Cura termal',
        'tax_note_wellness' => 'Precios con IVA incluido al tipo legal del 23 %.',
        'tax_note_cure'     => 'Precios con IVA incluido al tipo legal del 6 %.',
        'logo_alt'          => 'Thalasso Nazaré - La cura que viene del mar.',
        'footer_tagline'    => 'Centro de talasoterapia',
        'back_to_top'       => 'Volver arriba',
        'duration_title'    => 'Duración aproximada: %d minutos',
    ],

    /* --- Títulos de sección (bandas grises) --- */
    'sections' => [
        'section_balneoterapia'        => ['title' => 'BALNEOTERAPIA'],
        'section_terapia_respiratoria' => ['title' => 'TERAPIA RESPIRATORIA', 'duration' => '15 min.'],
        'section_massagens'            => ['title' => 'MASAJES'],
        'section_tratamentos_corporais' => ['title' => 'TRATAMIENTOS CORPORALES'],
        'section_tratamentos_faciais'   => ['title' => 'TRATAMIENTOS FACIALES'],
        'section_rituais'              => ['title' => 'RITUALES'],
        'section_hidroterapia'         => ['title' => 'HIDROTERAPIA'],
        'section_termoterapia'         => ['title' => 'TERMOTERAPIA'],
        'section_massoterapia'         => ['title' => 'MASOTERAPIA'],
        'section_fisioterapia'         => ['title' => 'FISIOTERAPIA'],
        'section_programas_7'          => ['title' => 'PROGRAMAS TERAPÉUTICOS', 'duration' => '7 días'],
        'section_programas_14'         => ['title' => 'PROGRAMAS TERAPÉUTICOS', 'duration' => '14 días'],
    ],

    /* --- Descripciones sueltas (fuera de las líneas de precio) --- */
    'descs' => [
        'desc_terapia_respiratoria' => 'Ducha nasal, nebulización o aerosol.',
    ],

    /* --- Líneas de servicio (nombre, duración, descripción) --- */
    'items' => [
        /* ---- Bienestar ---- */
        'item_circuito_thalasso' => [
            'name'     => 'Circuito thalasso',
            'duration' => '60 min.',
            'desc'     => 'Piscina dinámica con agua de mar caliente, contracorriente, pasillo de marcha, baño turco, duchas de contraste, fuente de hielo y relajación.',
        ],
        'item_pack_3_circuitos' => [
            'name' => 'Pack 3 sesiones Circuito thalasso',
        ],
        'item_pack_5_circuitos' => [
            'name' => 'Pack 5 sesiones Circuito thalasso',
        ],
        'item_pack_10_circuitos' => [
            'name' => 'Pack 10 sesiones Circuito thalasso',
        ],
        'item_thalasso_experience' => [
            'name'     => 'Thalasso Experience',
            'duration' => '120 min.',
            'desc'     => 'Circuito thalasso + envoltura de barro marino o algas + crema hidratante o aceite',
        ],
        'item_duche_vichy_massagem' => [
            'name'     => 'Ducha Vichy con masaje completo',
            'duration' => '25 min.',
        ],
        'item_hidromassagem_banheira' => [
            'name'     => 'Hidromasaje en bañera individual',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_algas' => [
            'name'     => 'Hidromasaje con algas',
            'duration' => '15 min.',
        ],
        'item_thalaxion' => [
            'name'     => 'Thalaxion',
            'duration' => '20 min.',
        ],
        'item_phlebotone' => [
            'name'     => 'Flebotone',
            'duration' => '15 min.',
        ],
        'item_pack_3_terapia_respiratoria' => [
            'name' => 'Pack 3 sesiones Terapia respiratoria',
        ],
        'item_massagem_localizada' => [
            'name'     => 'Masaje localizado',
            'duration' => '30 min.',
        ],
        'item_massagem_relaxamento_40' => [
            'name'     => 'Masaje de relajación corporal',
            'duration' => '40 min.',
        ],
        'item_massagem_relaxamento_60' => [
            'name'     => 'Masaje de relajación corporal',
            'duration' => '60 min.',
        ],
        'item_massagem_casal' => [
            'name'     => 'Masaje de relajación en pareja',
            'duration' => '60 min.',
        ],
        'item_massagem_terapeutica' => [
            'name'     => 'Masaje terapéutico',
            'duration' => '30 min.',
        ],
        'item_drenagem_linfatica' => [
            'name'     => 'Drenaje linfático manual',
            'duration' => '60 min.',
        ],
        'item_envolvimento_algas' => [
            'name'     => 'Envoltura corporal de algas',
            'duration' => '50 min.',
        ],
        'item_envolvimento_lamas' => [
            'name'     => 'Envoltura corporal de barro marino',
            'duration' => '50 min.',
        ],
        'item_envolvimento_drenante' => [
            'name'     => 'Envoltura drenante con extractos marinos',
            'duration' => '45 min.',
        ],
        'item_envolvimento_redutor' => [
            'name'     => 'Envoltura reductora',
            'duration' => '60 min.',
        ],
        'item_envolvimento_crioterapia' => [
            'name'     => 'Envoltura de crioterapia',
            'duration' => '45 min.',
            'desc'     => 'Problemas circulatorios.',
        ],
        'item_esfoliacao_sal_marinho' => [
            'name'     => 'Exfoliación con sal marina',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_geleia_aquatica' => [
            'name'     => 'Exfoliación hidratante con gel acuoso',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_lamas_sais' => [
            'name'     => 'Exfoliación con barro y sales marinas',
            'duration' => '60 min.',
        ],
        'item_tratamento_pes_pernas' => [
            'name'     => 'Tratamiento pies y piernas',
            'duration' => '45 min.',
            'desc'     => 'Baño, exfoliación y masaje.',
        ],
        'item_mini_facial_hidratante' => [
            'name'     => 'Mini-facial hidratante',
            'duration' => '30 min.',
        ],
        'item_limpeza_pele' => [
            'name'     => 'Limpieza de cutis',
            'duration' => '90 min.',
            'desc'     => 'Con extracción.',
        ],
        'item_facial_desintoxicante_algas' => [
            'name'     => 'Tratamiento facial desintoxicante con algas',
            'duration' => '60 min.',
        ],
        'item_facial_personalizado' => [
            'name'     => 'Tratamiento facial personalizado',
            'duration' => '60 min.',
        ],
        'item_ritual_polinesia' => [
            'name'     => 'Ritual thalasso antiestrés — Polinesia',
            'duration' => '120 min.',
            'desc'     => 'Exfoliación, hidromasaje y masaje corporal.',
        ],
        'item_renaissance' => [
            'name'     => 'Renaissance',
            'duration' => '60 min.',
            'desc'     => 'Exfoliación y masaje.',
        ],
        'item_oceano_profundo_120' => [
            'name'     => 'Océano profundo',
            'duration' => '120 min.',
            'desc'     => 'Exfoliación, hidromasaje y masaje temático.',
        ],
        'item_oceano_profundo_90' => [
            'name'     => 'Océano profundo',
            'duration' => '90 min.',
            'desc'     => 'Exfoliación y masaje temático.',
        ],
        'item_pure_relax_homem' => [
            'name'     => 'Pure relax hombre',
            'duration' => '90 min.',
            'desc'     => 'Exfoliación y masaje temático.',
        ],

        /* ---- Cura termal ---- */
        'item_hidrocinesio_individual_60' => [
            'name'     => 'Hidrocinesioterapia individual en piscina',
            'duration' => '60 min.',
        ],
        'item_5_hidrocinesio' => [
            'name'     => '5 sesiones de hidrocinesioterapia',
            'duration' => '60 min.',
        ],
        'item_10_hidrocinesio' => [
            'name'     => '10 sesiones de hidrocinesioterapia',
            'duration' => '60 min.',
        ],
        'item_hidrocinesio_terapeuta_50' => [
            'name'     => 'Hidrocinesioterapia individual en piscina',
            'duration' => '50 min.',
            'desc'     => 'Con terapeuta.',
        ],
        'item_5_hidrocinesio_terapeuta' => [
            'name' => '5 sesiones de hidrocinesioterapia individual en piscina (con terapeuta)',
        ],
        'item_10_hidrocinesio_terapeuta' => [
            'name' => '10 sesiones de hidrocinesioterapia individual en piscina (con terapeuta)',
        ],
        'item_duche_vichy_cura' => [
            'name'     => 'Ducha Vichy con masaje completo',
            'duration' => '25 min.',
        ],
        'item_duche_jato' => [
            'name'     => 'Ducha de chorro',
            'duration' => '5–8 min.',
        ],
        'item_duche_escoces' => [
            'name'     => 'Ducha escocesa',
            'duration' => '8 min.',
        ],
        'item_duche_subaquatico' => [
            'name'     => 'Ducha subacuática',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_banheira_cura' => [
            'name'     => 'Hidromasaje en bañera individual',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_algas_cura' => [
            'name'     => 'Hidromasaje con algas',
            'duration' => '15 min.',
        ],
        'item_thalaxion_cura' => [
            'name'     => 'Thalaxion (o hidropresión)',
            'duration' => '20 min.',
        ],
        'item_phlebotone_cura' => [
            'name'     => 'Flebotone',
            'duration' => '15 min.',
        ],
        'item_terapia_respiratoria_cura' => [
            'name'     => 'Terapia respiratoria',
            'duration' => '15 min.',
            'desc'     => 'Ducha nasal, nebulización o aerosol.',
        ],
        'item_pack_5_terapia_respiratoria' => [
            'name' => 'Pack 5 sesiones Terapia respiratoria',
        ],
        'item_pack_10_terapia_respiratoria' => [
            'name' => 'Pack 10 sesiones Terapia respiratoria',
        ],
        'item_aplicacao_algas_local' => [
            'name'     => 'Aplicación de algas local',
            'duration' => '40 min.',
        ],
        'item_aplicacao_algas_geral' => [
            'name'     => 'Aplicación de algas general',
            'duration' => '60 min.',
        ],
        'item_aplicacao_lamas_local' => [
            'name'     => 'Aplicación de barro marino local',
            'duration' => '40 min.',
        ],
        'item_aplicacao_lamas_geral' => [
            'name'     => 'Aplicación de barro marino general',
            'duration' => '60 min.',
        ],
        'item_massagem_terapeutica_cura' => [
            'name'     => 'Masaje terapéutico',
            'duration' => '30 min.',
        ],
        'item_sessao_fisioterapia' => [
            'name'     => 'Sesión de fisioterapia',
            'duration' => '50 min.',
        ],
        'item_pack_3_fisioterapia' => [
            'name' => 'Pack 3 sesiones de fisioterapia',
        ],
        'item_pack_5_fisioterapia' => [
            'name' => 'Pack 5 sesiones de fisioterapia',
        ],
        'item_pack_10_fisioterapia' => [
            'name' => 'Pack 10 sesiones de fisioterapia',
        ],
        'item_programa_respiratoria_7' => [
            'name' => 'Terapia respiratoria',
            'desc' => '7 circuitos de piscina y 14 sesiones de inhalación (irrigaciones, nebulizaciones).',
        ],
        'item_programa_circulatoria_7' => [
            'name' => 'Terapia circulatoria',
            'desc' => '7 circuitos de piscina, 3 pediluvios, 2 hidromasajes y 2 thalaxion.',
        ],
        'item_programa_antistress_7' => [
            'name' => 'Terapia antiestrés',
            'desc' => '7 circuitos de piscina, 3 hidromasajes, 2 masajes corporales y 2 duchas Vichy con masaje completo.',
        ],
        'item_programa_psoriase_7' => [
            'name' => 'Psoriasis y problemas dermatológicos',
            'desc' => '7 circuitos de piscina, 3 aplicaciones de algas corporales y 4 hidromasajes.',
        ],
        'item_programa_reumatismo_7' => [
            'name' => 'Reumatismo y problemas osteoarticulares',
            'desc' => '7 circuitos de piscina, 1 hidromasaje, 2 aplicaciones de algas corporales, 1 ducha Vichy con masaje completo y 3 sesiones de fisioterapia.',
        ],
        'item_programa_neurologicas_7' => [
            'name' => 'Secuelas neurológicas',
            'desc' => '7 circuitos de piscina, 4 sesiones de fisioterapia/hidroterapia y 3 thalaxion.',
        ],
        'item_programa_respiratoria_14' => [
            'name' => 'Terapia respiratoria',
            'desc' => '14 circuitos de piscina y 28 sesiones de inhalación (irrigaciones, nebulizaciones).',
        ],
        'item_programa_circulatoria_14' => [
            'name' => 'Terapia circulatoria',
            'desc' => '14 circuitos de piscina, 4 pediluvios, 5 hidromasajes y 5 thalaxion.',
        ],
        'item_programa_antistress_14' => [
            'name' => 'Terapia antiestrés',
            'desc' => '14 circuitos de piscina, 5 hidromasajes, 4 masajes corporales y 5 duchas Vichy con masaje completo.',
        ],
        'item_programa_psoriase_14' => [
            'name' => 'Psoriasis y problemas dermatológicos',
            'desc' => '14 circuitos de piscina, 7 aplicaciones de algas corporales y 7 hidromasajes.',
        ],
        'item_programa_reumatismo_14' => [
            'name' => 'Reumatismo y problemas osteoarticulares',
            'desc' => '14 circuitos de piscina, 2 hidromasajes, 4 aplicaciones de algas corporales, 2 duchas Vichy con masaje completo y 6 sesiones de fisioterapia.',
        ],
        'item_programa_neurologicas_14' => [
            'name' => 'Secuelas neurológicas',
            'desc' => '14 circuitos de piscina, 7 sesiones de fisioterapia/hidroterapia y 7 thalaxion.',
        ],
    ],
];
