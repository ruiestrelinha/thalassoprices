<?php
/* =====================================================================
 * Português (pt)
 * Chaves de tradução do website.
 * Estrutura exigida: ui, sections, descs, items.
 * ===================================================================== */

return [

    /* --- Interface --- */
    'ui' => [
        'document_title'   => 'Thalasso Nazaré - Preçário',
        'page_title'       => 'Preçário',
        'selector_aria'    => 'Selecionar idioma',
        'toggle_aria'      => 'Selecionar categoria de preçário',
        'toggle_wellness'  => 'Bem-Estar',
        'toggle_cure'      => 'Cura',
        'tax_note_wellness' => 'Preços com IVA incluído à taxa legal de 23%.',
        'tax_note_cure'     => 'Preços com IVA incluído à taxa legal de 6%.',
        'vat_legend_wellness' => 'Os preços com IVA a 23% correspondem a serviços de bem-estar e relaxamento.',
        'vat_legend_cure'     => 'Os preços com IVA a 6% correspondem a serviços de caráter terapêutico, mediante prescrição médica (ao abrigo do artigo 9.º do CIVA).',
        'logo_alt'          => 'Thalasso Nazaré - A cura que vem do mar.',
        'footer_tagline'    => 'Centro de Talassoterapia',
        'back_to_top'       => 'Voltar ao topo',
        'duration_title'    => 'Duração aproximada: %d minutos',
        'buy_button'        => 'Comprar',
    ],

    /* --- Títulos de secção (bandas cinzentas) --- */
    'sections' => [
        'section_balneoterapia'        => ['title' => 'BALNEOTERAPIA'],
        'section_terapia_respiratoria' => ['title' => 'TERAPIA RESPIRATÓRIA', 'duration' => '15 min.'],
        'section_massagens'            => ['title' => 'MASSAGENS'],
        'section_tratamentos_corporais' => ['title' => 'TRATAMENTOS CORPORAIS'],
        'section_tratamentos_faciais'   => ['title' => 'TRATAMENTOS FACIAIS'],
        'section_rituais'              => ['title' => 'RITUAIS'],
        'section_hidroterapia'         => ['title' => 'HIDROTERAPIA'],
        'section_termoterapia'         => ['title' => 'TERMOTERAPIA'],
        'section_massoterapia'         => ['title' => 'MASSOTERAPIA'],
        'section_fisioterapia'         => ['title' => 'FISIOTERAPIA'],
        'section_programas_7'          => ['title' => 'PROGRAMAS TERAPÊUTICOS', 'duration' => '7 dias'],
        'section_programas_14'         => ['title' => 'PROGRAMAS TERAPÊUTICOS', 'duration' => '14 dias'],
    ],

    /* --- Descrições soltas (fora das linhas de preço) --- */
    'descs' => [
        'desc_terapia_respiratoria' => 'Duche nasal, nebulização ou aerossol.',
    ],

    /* --- Benefícios (tooltips de serviços técnicos) --- */
    'tips' => [
        'item_thalaxion'               => 'Banheira parcialmente coberta em que os jatos são dirigidos à região do abdómen, coxas e pernas sequencialmente, em pressões e temperaturas variáveis. Efeito: ativador da circulação sanguínea venosa, drenagem veno-linfática e anti-edema.',
        'item_thalaxion_cura'          => 'Banheira parcialmente coberta em que os jatos são dirigidos à região do abdómen, coxas e pernas sequencialmente, em pressões e temperaturas variáveis. Efeito: ativador da circulação sanguínea venosa, drenagem veno-linfática e anti-edema.',
        'item_phlebotone'              => 'Tina para imersão dos pés e das pernas num banho simples ou com bolha de ar, alternadamente em água do mar quente e fria. Efeito relaxante, tonificante, anti-inflamatório e ativador da circulação sanguínea.',
        'item_phlebotone_cura'         => 'Tina para imersão dos pés e das pernas num banho simples ou com bolha de ar, alternadamente em água do mar quente e fria. Efeito relaxante, tonificante, anti-inflamatório e ativador da circulação sanguínea.',
        'item_duche_subaquatico'       => 'Hidromassagem manual em banheira, realizada a jacto e direccionada a uma determinada região ou articulação do corpo. Proporciona um efeito relaxante e activa localmente a circulação.',
        'item_hidromassagem_banheira'  => 'Realizada em banheira com água do mar (36º-38ºC), o cliente é submetido a uma massagem alternada dos membros inferiores, coluna, bacia       e região escapular, através de finos jatos de água sob pressão, associada à emulsão de bolhas de ar. Efeitos: descontração muscular, tonificação dos tecidos, penetração dos oligoelementos, vasodilatação.',
        'item_hidromassagem_banheira_cura' => 'Realizada em banheira com água do mar (36º-38ºC), o cliente é submetido a uma massagem alternada dos membros inferiores, coluna, bacia       e região escapular, através de finos jatos de água sob pressão, associada à emulsão de bolhas de ar. Efeitos: descontração muscular, tonificação dos tecidos, penetração dos oligoelementos, vasodilatação.',
        'item_hidromassagem_algas'     => 'Banho de imersão em água do mar quente a que se adiciona algas microfragmentadas (em pó) e que, através de jatos dirigidos sequencialmente a diferentes partes do corpo, favorece a circulação sanguinea, relaxa os músculos, remineraliza os tecidos e hidrata a pele.',
        'item_hidromassagem_algas_cura' => 'Banho de imersão em água do mar quente a que se adiciona algas microfragmentadas (em pó) e que, através de jatos dirigidos sequencialmente a diferentes partes do corpo, favorece a circulação sanguinea, relaxa os músculos, remineraliza os tecidos e hidrata a pele.',
        'item_hidrocinesio_individual_60' => 'Piscina dinâmica com água do mar aquecida, contra-corrente, corredor pedonal, Banho Turco, duches de contraste, fonte de gelo e relaxamento.',
    ],

    /* --- Linhas de serviço (nome, duração, descrição) --- */
    'items' => [
        /* ---- Bem-Estar ---- */
        'item_circuito_thalasso' => [
            'name'     => 'Circuito Thalasso',
            'duration' => '60 min.',
            'desc'     => 'Piscina dinâmica com água do mar aquecida, contra-corrente, corredor pedonal, banho turco, duches de contraste, fonte de gelo e relaxamento.',
        ],
        'item_pack_3_circuitos' => [
            'name' => 'Pack 3 Sessões Circuito Thalasso',
        ],
        'item_pack_5_circuitos' => [
            'name' => 'Pack 5 Sessões Circuito Thalasso',
        ],
        'item_pack_10_circuitos' => [
            'name' => 'Pack 10 Sessões Circuito Thalasso',
        ],
        'item_thalasso_experience' => [
            'name'     => 'Thalasso Experience',
            'duration' => '120 min.',
            'desc'     => 'Circuito thalasso + envolvimento de lamas ou algas marinhas + creme hidratante ou óleo',
        ],
        'item_duche_vichy_massagem' => [
            'name'     => 'Duche Vichy c/ massagem completa',
            'duration' => '25 min.',
        ],
        'item_hidromassagem_banheira' => [
            'name'     => 'Hidromassagem em banheira individual',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_algas' => [
            'name'     => 'Hidromassagem com algas',
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
            'name' => 'Pack 3 Sessões Terapia Respiratória',
        ],
        'item_massagem_localizada' => [
            'name'     => 'Massagem localizada',
            'duration' => '30 min.',
        ],
        'item_massagem_relaxamento_40' => [
            'name'     => 'Massagem de relaxamento corporal',
            'duration' => '40 min.',
        ],
        'item_massagem_relaxamento_60' => [
            'name'     => 'Massagem de relaxamento corporal',
            'duration' => '60 min.',
        ],
        'item_massagem_casal' => [
            'name'     => 'Massagem de relaxamento de casal',
            'duration' => '60 min.',
        ],
        'item_massagem_terapeutica' => [
            'name'     => 'Massagem terapêutica',
            'duration' => '30 min.',
        ],
        'item_drenagem_linfatica' => [
            'name'     => 'Drenagem linfática manual',
            'duration' => '60 min.',
        ],
        'item_envolvimento_algas' => [
            'name'     => 'Envolvimento corporal com algas',
            'duration' => '50 min.',
        ],
        'item_envolvimento_lamas' => [
            'name'     => 'Envolvimento corporal com lamas marinhas',
            'duration' => '50 min.',
        ],
        'item_envolvimento_drenante' => [
            'name'     => 'Envolvimento drenante com extratos marinhos',
            'duration' => '45 min.',
        ],
        'item_envolvimento_redutor' => [
            'name'     => 'Envolvimento redutor',
            'duration' => '60 min.',
        ],
        'item_envolvimento_crioterapia' => [
            'name'     => 'Envolvimento de crioterapia',
            'duration' => '45 min.',
            'desc'     => 'Problemas circulatórios.',
        ],
        'item_esfoliacao_sal_marinho' => [
            'name'     => 'Esfoliação com sal marinho',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_geleia_aquatica' => [
            'name'     => 'Esfoliação hidratante com geleia aquática',
            'duration' => '30 min.',
        ],
        'item_esfoliacao_lamas_sais' => [
            'name'     => 'Esfoliação com lamas e sais marinhos',
            'duration' => '60 min.',
        ],
        'item_tratamento_pes_pernas' => [
            'name'     => 'Tratamento pés e pernas',
            'duration' => '45 min.',
            'desc'     => 'Banho, esfoliação e massagem.',
        ],
        'item_mini_facial_hidratante' => [
            'name'     => 'Mini-facial hidratante',
            'duration' => '30 min.',
        ],
        'item_limpeza_pele' => [
            'name'     => 'Limpeza de pele',
            'duration' => '90 min.',
            'desc'     => 'Com extração.',
        ],
        'item_facial_desintoxicante_algas' => [
            'name'     => 'Tratamento facial desintoxicante com algas',
            'duration' => '60 min.',
        ],
        'item_facial_personalizado' => [
            'name'     => 'Tratamento de rosto personalizado',
            'duration' => '60 min.',
        ],
        'item_ritual_polinesia' => [
            'name'     => 'Ritual thalasso anti-stress — Polinésia',
            'duration' => '120 min.',
            'desc'     => 'Esfoliação, hidromassagem e massagem corporal.',
        ],
        'item_renaissance' => [
            'name'     => 'Renaissance',
            'duration' => '60 min.',
            'desc'     => 'Esfoliação e massagem.',
        ],
        'item_oceano_profundo_120' => [
            'name'     => 'Oceano profundo',
            'duration' => '120 min.',
            'desc'     => 'Esfoliação, hidromassagem e massagem temática.',
        ],
        'item_oceano_profundo_90' => [
            'name'     => 'Oceano profundo',
            'duration' => '90 min.',
            'desc'     => 'Esfoliação e massagem temática.',
        ],
        'item_pure_relax_homem' => [
            'name'     => 'Pure relax homem',
            'duration' => '90 min.',
            'desc'     => 'Esfoliação e massagem temática.',
        ],

        /* ---- Cura ---- */
        'item_hidrocinesio_individual_60' => [
            'name'     => 'Hidrocinesioterapia individual em piscina',
            'duration' => '60 min.',
        ],
        'item_5_hidrocinesio' => [
            'name'     => '5 sessões de hidrocinesioterapia',
            'duration' => '60 min.',
        ],
        'item_10_hidrocinesio' => [
            'name'     => '10 sessões de hidrocinesioterapia',
            'duration' => '60 min.',
        ],
        'item_hidrocinesio_terapeuta_50' => [
            'name'     => 'Hidrocinesioterapia individual em piscina',
            'duration' => '50 min.',
            'desc'     => 'Com terapeuta.',
        ],
        'item_5_hidrocinesio_terapeuta' => [
            'name' => '5 sessões de hidrocinesioterapia individual em piscina (com terapeuta)',
        ],
        'item_10_hidrocinesio_terapeuta' => [
            'name' => '10 sessões de hidrocinesioterapia individual em piscina (com terapeuta)',
        ],
        'item_duche_vichy_cura' => [
            'name'     => 'Duche Vichy com massagem completa',
            'duration' => '25 min.',
        ],
        'item_duche_jato' => [
            'name'     => 'Duche de jato',
            'duration' => '5–8 min.',
        ],
        'item_duche_escoces' => [
            'name'     => 'Duche escocês',
            'duration' => '8 min.',
        ],
        'item_duche_subaquatico' => [
            'name'     => 'Duche subaquático',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_banheira_cura' => [
            'name'     => 'Hidromassagem em banheira individual',
            'duration' => '15 min.',
        ],
        'item_hidromassagem_algas_cura' => [
            'name'     => 'Hidromassagem com algas',
            'duration' => '15 min.',
        ],
        'item_thalaxion_cura' => [
            'name'     => 'Thalaxion (ou hidropressoterapia)',
            'duration' => '20 min.',
        ],
        'item_phlebotone_cura' => [
            'name'     => 'Phlebotone',
            'duration' => '15 min.',
        ],
        'item_terapia_respiratoria_cura' => [
            'name'     => 'Terapia respiratória',
            'duration' => '15 min.',
            'desc'     => 'Duche nasal, nebulização ou aerossol.',
        ],
        'item_pack_5_terapia_respiratoria' => [
            'name' => 'Pack 5 Sessões Terapia Respiratória',
        ],
        'item_pack_10_terapia_respiratoria' => [
            'name' => 'Pack 10 Sessões Terapia Respiratória',
        ],
        'item_aplicacao_algas_local' => [
            'name'     => 'Aplicação de algas local',
            'duration' => '40 min.',
        ],
        'item_aplicacao_algas_geral' => [
            'name'     => 'Aplicação de algas geral',
            'duration' => '60 min.',
        ],
        'item_aplicacao_lamas_local' => [
            'name'     => 'Aplicação de lamas marinhas local',
            'duration' => '40 min.',
        ],
        'item_aplicacao_lamas_geral' => [
            'name'     => 'Aplicação de lamas marinhas geral',
            'duration' => '60 min.',
        ],
        'item_massagem_terapeutica_cura' => [
            'name'     => 'Massagem terapêutica',
            'duration' => '30 min.',
        ],
        'item_sessao_fisioterapia' => [
            'name'     => 'Sessão de fisioterapia',
            'duration' => '50 min.',
        ],
        'item_pack_3_fisioterapia' => [
            'name' => 'Pack 3 Sessões de Fisioterapia',
        ],
        'item_pack_5_fisioterapia' => [
            'name' => 'Pack 5 Sessões de Fisioterapia',
        ],
        'item_pack_10_fisioterapia' => [
            'name' => 'Pack 10 Sessões de Fisioterapia',
        ],
        'item_programa_respiratoria_7' => [
            'name' => 'Terapia Respiratória',
            'desc' => '7 circuitos piscina e 14 sessões de inalação (irrigações, nebulizações).',
        ],
        'item_programa_circulatoria_7' => [
            'name' => 'Terapia Circulatória',
            'desc' => '7 circuitos piscina, 3 pedilúvios, 2 hidromassagens e 2 thalaxion.',
        ],
        'item_programa_antistress_7' => [
            'name' => 'Terapia Anti-stress',
            'desc' => '7 circuitos piscina, 3 hidromassagens, 2 massagens corporais e 2 duches Vichy com massagem completa.',
        ],
        'item_programa_psoriase_7' => [
            'name' => 'Psoríase e Problemas Dermatológicos',
            'desc' => '7 circuitos piscina, 3 aplicações de algas corporais e 4 hidromassagens.',
        ],
        'item_programa_reumatismo_7' => [
            'name' => 'Reumatismo e Esquelética',
            'desc' => '7 circuitos piscina, 1 hidromassagem, 2 aplicações de algas corporais, 1 duche Vichy com massagem completa e 3 sessões de fisioterapia.',
        ],
        'item_programa_neurologicas_7' => [
            'name' => 'Sequelas Neurológicas',
            'desc' => '7 circuitos piscina, 4 sessões de fisioterapia/hidroterapia e 3 thalaxion.',
        ],
        'item_programa_respiratoria_14' => [
            'name' => 'Terapia Respiratória',
            'desc' => '14 circuitos piscina e 28 sessões de inalação (irrigações, nebulizações).',
        ],
        'item_programa_circulatoria_14' => [
            'name' => 'Terapia Circulatória',
            'desc' => '14 circuitos piscina, 4 pedilúvios, 5 hidromassagens e 5 thalaxion.',
        ],
        'item_programa_antistress_14' => [
            'name' => 'Terapia Anti-stress',
            'desc' => '14 circuitos piscina, 5 hidromassagens, 4 massagens corporais e 5 duches Vichy com massagem completa.',
        ],
        'item_programa_psoriase_14' => [
            'name' => 'Psoríase e Problemas Dermatológicos',
            'desc' => '14 circuitos piscina, 7 aplicações de algas corporais e 7 hidromassagens.',
        ],
        'item_programa_reumatismo_14' => [
            'name' => 'Reumatismo e Esquelética',
            'desc' => '14 circuitos piscina, 2 hidromassagens, 4 aplicações de algas corporais, 2 duches Vichy com massagem completa e 6 sessões de fisioterapia.',
        ],
        'item_programa_neurologicas_14' => [
            'name' => 'Sequelas Neurológicas',
            'desc' => '14 circuitos piscina, 7 sessões de fisioterapia/hidroterapia e 7 thalaxion.',
        ],
    ],
];
