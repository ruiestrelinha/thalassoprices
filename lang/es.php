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
        'toggle_cure'      => 'Cura',
        'tax_note_wellness' => 'Precios con IVA incluido al tipo legal del 23 %.',
        'tax_note_cure'     => 'Precios con IVA incluido al tipo legal del 6 %.',
        'vat_legend_wellness' => 'Los precios con IVA del 23 % corresponden a servicios de bienestar y relajación.',
        'vat_legend_cure'     => 'Los precios con IVA del 6 % corresponden a servicios de carácter terapéutico, mediante prescripción médica (al amparo del artículo 9 del CIVA).',
        'logo_alt'          => 'Thalasso Nazaré - La cura que viene del mar.',
        'footer_tagline'    => 'Centro de Talasoterapia',
        'back_to_top'       => 'Volver arriba',
        'duration_title'    => 'Duración aproximada: %d minutos',
        'buy_button'        => 'Comprar',
        'theme_to_dark'     => 'Cambiar a modo noche',
        'theme_to_light'    => 'Cambiar a modo día',
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

    /* --- Beneficios (tooltips de servicios técnicos) --- */
    'tips' => [
        'item_thalaxion'               => 'Bañera parcialmente cubierta en la que los chorros se dirigen secuencialmente al abdomen, los muslos y las piernas, a presiones y temperaturas variables. Efecto: activa la circulación sanguínea venosa, drenaje venolinfático y antiedema.',
        'item_thalaxion_cura'          => 'Bañera parcialmente cubierta en la que los chorros se dirigen secuencialmente al abdomen, los muslos y las piernas, a presiones y temperaturas variables. Efecto: activa la circulación sanguínea venosa, drenaje venolinfático y antiedema.',
        'item_phlebotone'              => 'Tina para sumergir los pies y las piernas en un baño simple o con burbujas de aire, alternando agua de mar caliente y fría. Efecto relajante, tonificante, antiinflamatorio y activador de la circulación sanguínea.',
        'item_phlebotone_cura'         => 'Tina para sumergir los pies y las piernas en un baño simple o con burbujas de aire, alternando agua de mar caliente y fría. Efecto relajante, tonificante, antiinflamatorio y activador de la circulación sanguínea.',
        'item_duche_subaquatico'       => 'Hidromasaje manual en bañera, realizado a chorro y dirigido a una región o articulación concreta del cuerpo. Proporciona un efecto relajante y activa localmente la circulación.',
        'item_hidromassagem_banheira'  => 'Realizado en una bañera con agua de mar (36–38 ºC), el cliente recibe un masaje alterno de los miembros inferiores, la columna, la pelvis y la región escapular mediante finos chorros de agua a presión, asociados a una emulsión de burbujas de aire. Efectos: relajación muscular, tonificación de los tejidos, penetración de oligoelementos, vasodilatación.',
        'item_hidromassagem_banheira_cura' => 'Realizado en una bañera con agua de mar (36–38 ºC), el cliente recibe un masaje alterno de los miembros inferiores, la columna, la pelvis y la región escapular mediante finos chorros de agua a presión, asociados a una emulsión de burbujas de aire. Efectos: relajación muscular, tonificación de los tejidos, penetración de oligoelementos, vasodilatación.',
        'item_hidromassagem_algas'     => 'Baño de inmersión en agua de mar caliente a la que se añaden algas microfragmentadas (en polvo) y que, mediante chorros dirigidos secuencialmente a distintas partes del cuerpo, favorece la circulación sanguínea, relaja los músculos, remineraliza los tejidos e hidrata la piel.',
        'item_hidromassagem_algas_cura' => 'Baño de inmersión en agua de mar caliente a la que se añaden algas microfragmentadas (en polvo) y que, mediante chorros dirigidos secuencialmente a distintas partes del cuerpo, favorece la circulación sanguínea, relaja los músculos, remineraliza los tejidos e hidrata la piel.',
        'item_hidrocinesio_individual_60' => 'Piscina dinámica con agua de mar caliente, contracorriente, pasillo de marcha, baño turco, duchas de contraste, fuente de hielo y relajación.',
    ],

    /* --- Líneas de servicio (nombre, duración, descripción) --- */
    'items' => [
        /* ---- Bienestar ---- */
        'item_circuito_thalasso' => [
            'name'     => 'Circuito thalasso',
            'duration' => '60 min.',
            'desc'     => 'Piscina dinámica con agua del mar climatizada, nado a contra-corriente, corredor peatonal, baño turco, ducha de contraste, fuente de hielo y área de relajación.',
        ],
        'item_pack_3_circuitos' => [
            'name' => 'Pack 3 Sesiones Circuito Thalasso',
        ],
        'item_pack_5_circuitos' => [
            'name' => 'Pack 5 Sesiones Circuito Thalasso',
        ],
        'item_pack_10_circuitos' => [
            'name' => 'Pack 10 Sesiones Circuito Thalasso',
        ],
        'item_thalasso_experience' => [
            'name'     => 'Thalasso Experience',
            'duration' => '120 min.',
            'desc'     => 'Circuito thalasso + envoltura de algas y fangos marinos + crema hidratante o aceite',
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
            'name'     => 'Phlebotone',
            'duration' => '15 min.',
        ],
        'item_pack_3_terapia_respiratoria' => [
            'name' => 'Pack 3 Sesiones Terapia Respiratoria',
        ],
        'item_massagem_localizada' => [
            'name'     => 'Masaje localizado',
            'duration' => '30 min.',
        ],
        'item_massagem_relaxamento_40' => [
            'name'     => 'Masaje relajante',
            'duration' => '40 min.',
        ],
        'item_massagem_relaxamento_60' => [
            'name'     => 'Masaje relajante',
            'duration' => '60 min.',
        ],
        'item_massagem_casal' => [
            'name'     => 'Masaje relajante de pareja',
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
            'name'     => 'Envoltura corporal con algas',
            'duration' => '50 min.',
        ],
        'item_envolvimento_lamas' => [
            'name'     => 'Envoltura corporal con fangos marinos',
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
            'name'     => 'Esfoliación con sal marina',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_geleia_aquatica' => [
            'name'     => 'Esfoliación hidratante con jalea acuática',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_lamas_sais' => [
            'name'     => 'Esfoliación con lamas y sales marinas',
            'duration' => '60 min.',
        ],
        'item_tratamento_pes_pernas' => [
            'name'     => 'Tratamiento de pies y piernas',
            'duration' => '45 min.',
            'desc'     => 'Baño, exfoliación y masaje.',
        ],
        'item_mini_facial_hidratante' => [
            'name'     => 'Mini-facial hidratante',
            'duration' => '30 min.',
        ],
        'item_limpeza_pele' => [
            'name'     => 'Limpieza de piel',
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
            'desc'     => 'Esfoliación y masaje.',
        ],
        'item_oceano_profundo_120' => [
            'name'     => 'Océano profundo',
            'duration' => '120 min.',
            'desc'     => 'Esfoliación, hidromasaje y masaje temático.',
        ],
        'item_oceano_profundo_90' => [
            'name'     => 'Océano profundo',
            'duration' => '90 min.',
            'desc'     => 'Esfoliación y masaje temático.',
        ],
        'item_pure_relax_homem' => [
            'name'     => 'Pure relax homem',
            'duration' => '90 min.',
            'desc'     => 'Esfoliación y masaje temático.',
        ],

        /* ---- Cura termal ---- */
        'item_hidrocinesio_individual_60' => [
            'name'     => 'Hidrocinesioterapia individual en piscina',
            'duration' => '60 min.',
        ],
        'item_5_hidrocinesio' => [
            'name'     => '5 Sesiones de hidrocinesioterapia',
            'duration' => '60 min.',
        ],
        'item_10_hidrocinesio' => [
            'name'     => '10 Sesiones de hidrocinesioterapia',
            'duration' => '60 min.',
        ],
        'item_hidrocinesio_terapeuta_50' => [
            'name'     => 'Hidrocinesioterapia individual en piscina',
            'duration' => '50 min.',
            'desc'     => 'Con terapeuta.',
        ],
        'item_5_hidrocinesio_terapeuta' => [
            'name' => '5 Sesiones hidrocinesioterapia individual en piscina (con terapeuta)',
        ],
        'item_10_hidrocinesio_terapeuta' => [
            'name' => '10 Sesiones hidrocinesioterapia individual en piscina (con terapeuta)',
        ],
        'item_duche_vichy_cura' => [
            'name'     => 'Ducha Vichy con masaje completo',
            'duration' => '25 min.',
        ],
        'item_duche_jato' => [
            'name'     => 'Ducha con chorro',
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
            'name'     => 'Thalaxion (o Hidropresoterapia)',
            'duration' => '20 min.',
        ],
        'item_phlebotone_cura' => [
            'name'     => 'Phlebotone',
            'duration' => '15 min.',
        ],
        'item_terapia_respiratoria_cura' => [
            'name'     => 'Terapia respiratoria',
            'duration' => '15 min.',
            'desc'     => 'Ducha nasal, nebulización o aerosol.',
        ],
        'item_pack_5_terapia_respiratoria' => [
            'name' => 'Pack 5 Sesiones Terapia Respiratoria',
        ],
        'item_pack_10_terapia_respiratoria' => [
            'name' => 'Pack 10 Sesiones Terapia Respiratoria',
        ],
        'item_aplicacao_algas_local' => [
            'name'     => 'Aplicación local de algas',
            'duration' => '40 min.',
        ],
        'item_aplicacao_algas_geral' => [
            'name'     => 'Aplicación general de algas',
            'duration' => '60 min.',
        ],
        'item_aplicacao_lamas_local' => [
            'name'     => 'Aplicación local de fangos marinos',
            'duration' => '40 min.',
        ],
        'item_aplicacao_lamas_geral' => [
            'name'     => 'Aplicación general de fangos marinos',
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
            'name' => 'Pack 3 Sesiones de Fisioterapia',
        ],
        'item_pack_5_fisioterapia' => [
            'name' => 'Pack 5 Sesiones de Fisioterapia',
        ],
        'item_pack_10_fisioterapia' => [
            'name' => 'Pack 10 Sesiones de Fisioterapia',
        ],
        'item_programa_respiratoria_7' => [
            'name' => 'Terapia Respiratoria',
            'desc' => '7 circuitos piscina y 14 sesiones de inhalación (irrigación y nebulizaciones).',
        ],
        'item_programa_circulatoria_7' => [
            'name' => 'Terapia Circulatoria',
            'desc' => '7 circuitos piscina, 3 pedilúvios, 2 hidromasajes y 2 thalaxion.',
        ],
        'item_programa_antistress_7' => [
            'name' => 'Terapia Antiestrés',
            'desc' => '7 circuitos piscina, 3 hidromasajes, 2 masajes corporales y 2 duchas Vichy con masaje completo.',
        ],
        'item_programa_psoriase_7' => [
            'name' => 'Psoriasis y Problemas Dermatológicos',
            'desc' => '7 circuitos piscina, 3 aplicaciones con algas corporales y 4 hidromasajes.',
        ],
        'item_programa_reumatismo_7' => [
            'name' => 'Reumatismo y Esquelética',
            'desc' => '7 circuitos piscina, 1 hidromasaje, 2 aplicaciones con algas corporales, 1 ducha Vichy con masaje completo y 3 sesiones de fisioterapia.',
        ],
        'item_programa_neurologicas_7' => [
            'name' => 'Sequelas Neurológicas',
            'desc' => '7 circuitos piscina, 4 sesiones de fisioterapia/hidroterapia y 3 thalaxion.',
        ],
        'item_programa_respiratoria_14' => [
            'name' => 'Terapia Respiratoria',
            'desc' => '14 circuitos piscina y 28 sesiones de inhalación (irrigación y nebulizaciones).',
        ],
        'item_programa_circulatoria_14' => [
            'name' => 'Terapia Circulatoria',
            'desc' => '14 circuitos piscina, 4 pedilúvios, 5 hidromasajes y 5 thalaxion.',
        ],
        'item_programa_antistress_14' => [
            'name' => 'Terapia Antiestrés',
            'desc' => '14 circuitos piscina, 5 hidromasajes, 4 masajes corporales y 5 duchas Vichy con masaje completo.',
        ],
        'item_programa_psoriase_14' => [
            'name' => 'Psoriasis y Problemas Dermatológicos',
            'desc' => '14 circuitos piscina, 7 aplicaciones con algas corporales y 7 hidromasajes.',
        ],
        'item_programa_reumatismo_14' => [
            'name' => 'Reumatismo y Esquelética',
            'desc' => '14 circuitos piscina, 2 hidromasajes, 4 aplicaciones con algas corporales, 2 duchas Vichy con masaje completo y 6 sesiones de fisioterapia.',
        ],
        'item_programa_neurologicas_14' => [
            'name' => 'Sequelas Neurológicas',
            'desc' => '14 circuitos piscina, 7 sesiones de fisioterapia/hidroterapia y 7 thalaxion.',
        ],
    ],
];
