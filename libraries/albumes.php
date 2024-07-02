<?php

    /* AGREGAR: precio, género, descripción? */

    function todos_los_discos() : array {
        return [
            [
                "id" => 1,
                "decada" => 70,
                "portada" => "artaud.webp",
                "titulo" => "Artaud",
                "artista" => "Pescado Rabioso",
                "lanzamiento" => "7 de mayo, 1973",
                "duracion" => "36 min, 20 s",
                "canciones" => [
                    "Todas las Hojas Son del Viento", "Cementerio Club", "Por", "Superchería", "La Sed Verdadera", "Cantata de Puentes Amarillos", "Bajan", "A Starosta, el Idiota", "Las Habladurías del Mundo"
                ],
                "destacado" => TRUE,
                "precio" => 36000
            ],
            [
                "id" => 2,
                "decada" => 70,
                "portada" => "almendra.webp",
                "titulo" => "Almendra",
                "artista" => "Almendra",
                "lanzamiento" => "1 de enero, 1970",
                "duracion" => "37 min, 3 s",
                "canciones" => [
                    "Muchacha (Ojos de Papel)", "Color Humano", "Figuración", "Ana no Duerme", "Fermín", "Plegaria para un Niño Dormido", "A Estos Hombres Tristes", "Que el Viento Borró tus Manos", "Laura Va"
                ],
                "destacado" => FALSE,
                "precio" => 37500
            ],
            [
                "id" => 3,
                "decada" => 70,
                "portada" => "treinta_minutos_de_vida.webp",
                "titulo" => "Treinta Minutos de Vida",
                "artista" => "Moris",
                "lanzamiento" => "27 de mayo, 1970",
                "duracion" => "32 in, 24 s",
                "canciones" => [
                    "El Oso", "Ayer Nomás", "Pato Trabaja en una Carnicería", "De Nada Sirve", "Esto Va para Atrás", "En una Tarde de Sol", "El Piano de Olivos", "Escúchame entre el Ruido"
                ],
                "destacado" => FALSE,
                "precio" => 44000
            ],
            [
                "id" => 4,
                "decada" => 70,
                "portada" => "pappos_blues_2.webp",
                "titulo" => "Pappo's Blues, Vol.2",
                "artista" => "Pappo's Blues",
                "lanzamiento" => "25 de noviembre, 1972",
                "duracion" => "30 min, 57 s",
                "canciones" => [
                    "El Tren de las 16", "Llegará la Paz", "Insoluble", "Tema I", "Desconfío", "Pobre Juan", "Blues de Santa Fe", "Tumba (Cementerio)"
                ],
                "destacado" => FALSE,
                "precio" => 31750
            ],
            [
                "id" => 5,
                "decada" => 70,
                "portada" => "la_grasa_de_las_capitales.webp",
                "titulo" => "La Grasa de las Capitales",
                "artista" => "Serú Girán",
                "lanzamiento" => "19 de agosto, 1979",
                "duracion" => "41 min, 31 s",
                "canciones" => [
                    "La Grasa de las Capitales", "San Francisco y el Lobo", "Perro Andaluz", "Frecuencia Modulada", "Viernes, 3AM", "Noche de Perros", "Los Sobrevivientes", "Paranoia y Soledad", "Canción de Hollywood"
                ],
                "destacado" => TRUE,
                "precio" => 29050
            ],
            [
                "id" => 6,
                "decada" => 70,
                "portada" => "pequenas_anecdotas_sobre_las_instituciones.webp",
                "titulo" => "Pequeñas Anécdotas sobre las Instituciones",
                "artista" => "Sui Generis",
                "lanzamiento" => "1 de enero, 1974",
                "duracion" => "48 min, 52 s",
                "canciones" => [
                    "Instituciones", "Tango en Segunda", "El Show de los Muertos", "Las Increíbles Aventuras del Señor Tijeras", "Pequeñas Delicias de la Vida Conyugal", "El Tuerto y los Ciegos", "Música de Fondo para Cualquier Fiesta Animada", "Tema de Natalio", "Para Quien Canto Yo Entonces", "Juan Represión", "Botas Locas"
                ],
                "destacado" => FALSE,
                "precio" => 42000
            ],
            [
                "id" => 7,
                "decada" => 80,
                "portada" => "clics_modernos.webp",
                "titulo" => "Clics Modernos",
                "artista" => "Charly García",
                "lanzamiento" => "5 de noviembre, 1983",
                "duracion" => "34 min, 15 s",
                "canciones" => [
                    "Nos Siguen Pegado Abajo", "No Soy Un Extraño", "Dos Cero Uno", "Nuevos Trapos", "Bancate ese Defecto", "No me Deja Salir", "Los Dinosaurios", "Plateado sobre Plateado (Huellas en el Mar)", "Ojos de Video Tape"
                ],
                "destacado" => TRUE,
                "precio" => 51000
            ],
            [
                "id" => 8,
                "decada" => 80,
                "portada" => "oktubre.webp",
                "titulo" => "Oktubre",
                "artista" => "Patricio Rey y sus Redonditos de Ricota",
                "lanzamiento" => "10 de enero, 1986",
                "duracion" => "41 min, 9 s",
                "canciones" => [
                    "Fuegos de Octubre", "Preso en mi Ciudad", "Música para Pastillas", "Semen-Up", "Divina Tv. Führer", "Motor Psico", "Ji Ji Ji", "Canción para Naufragios", "Ya Nadie Va a Escuchar tu Remera"
                ],
                "destacado" => FALSE,
                "precio" => 37800
            ],
            [
                "id" => 9,
                "decada" => 80,
                "portada" => "divididos_por_la_felicidad.webp",
                "titulo" => "Divididos por la Felicidad",
                "artista" => "Sumo",
                "lanzamiento" => "29 de abril, 1985",
                "duracion" => "38 min, 24 s",
                "canciones" => [
                    "La Rubia Tarada", "Mula Plateada", "No Acabes", "Regtest", "El Reggae de Paz y Amor", "Debede", "Mejor no Hablar de Ciertas Cosas", "Divididos por la Felicidad", "No Duermas Más", "Kaya"
                ],
                "destacado" => FALSE,
                "precio" => 28400
            ],
            [
                "id" => 10,
                "decada" => 80,
                "portada" => "kamikaze.webp",
                "titulo" => "Kamikaze",
                "artista" => "Luis Alberto Spinetta",
                "lanzamiento" => "8 de abril, 1982",
                "duracion" => "37 min, 5 s",
                "canciones" => [
                    "Kamikaze", "Ella También", "Águila de Trueno (Parte I)", "Águila de Trueno (Parte II)", "Almendra", "Barro Tal Vez", "¡Ah!... Basta de Pensar", "La Aventura de la Abeja Reina", "Y tu Amor es una Vieja Medalla", "Quedándote o Yéndote", "Cosas Marcadas"
                ],
                "destacado" => TRUE,
                "precio" => 34100
            ],
            [
                "id" => 11,
                "decada" => 80,
                "portada" => "locura.webp",
                "titulo" => "Locura",
                "artista" => "Virus",
                "lanzamiento" => "29 de abril, 1985",
                "duracion" => "33 min, 58 s",
                "canciones" => [
                    "Pronta Entrega", "Tomo lo que Encuentro", "Pecados para Dos", "Destino Circular", "Luna de Miel en la Mano", "Dicha Feliz", "Sin Disfraz", "Lugares Comunes"
                ],
                "destacado" => FALSE,
                "precio" => 55000
            ],
            [
                "id" => 12,
                "decada" => 80,
                "portada" => "vasos_y_besos.webp",
                "titulo" => "Vasos y Besos",
                "artista" => "Los Abuelos de la Nada",
                "lanzamiento" => "9 de diciembre, 1983",
                "duracion" => "37 min, 20 s",
                "canciones" => [
                    "No se Desesperen", "Así Es el Calor", "Yo Soy tu Bandera", "Sintonía Americana", "Espía de Dios", "Cucarachón de Tribunal" , "Vamos al Ruedo", "Mil Horas", "Hermana Teresa", "Chalamán", "Mundos in Mundos"
                ],
                "destacado" => FALSE,
                "precio" => 32900
            ],
            [
                "id" => 13,
                "decada" => 90,
                "portada" => "la_era_de_la_boludez.webp",
                "titulo" => "La Era de la Boludez",
                "artista" => "Divididos",
                "lanzamiento" => "1 de enero, 1993",
                "duracion" => "51 min, 24 s",
                "canciones" => [
                    "Salir a Asustar", "Ortega y Gases", "El Arriero", "Salir a Comprar", "¿Qué Ves?", "Pestaña de Camello", "Rasputin / Hey Jude", "Dame un Limón", "Paisano de Hurlingham", "Cristófolo Cacarnu", "Indio, Dejá el Mezcal", "Huelga de Amores", "Tajo C", "Pestaña de Camello"
                ],
                "destacado" => TRUE,
                "precio" => 26350
            ],
            [
                "id" => 14,
                "decada" => 90,
                "portada" => "cancion_animal.webp",
                "titulo" => "Canción Animal",
                "artista" => "Soda Stereo",
                "lanzamiento" => "9 de octubre, 1990",
                "duracion" => "41 min, 23 s",
                "canciones" => [
                    "(En) El Séptimo Día", "Un Millón de Años Luz", "Canción Animal", "1990 (Mil Nueve Noventa)", "Sueles Dejarme Solo", "De Música Ligera", "Hombre al Agua", "Entre Caníbales", "Té para 3", "Cae el Sol"
                ],
                "destacado" => FALSE,
                "precio" => 24700
            ],
            [
                "id" => 15,
                "decada" => 90,
                "portada" => "alta_suciedad.webp",
                "titulo" => "Alta Suciedad",
                "artista" => "Andrés Calamaro",
                "lanzamiento" => "1 de enero, 1997",
                "duracion" => "55 min, 3 s",
                "canciones" => [
                    "Alta Suciedad", "Todo lo Demás También", "Donde Manda Marinero", "Loco", "Flaca", "¿Quién Asó la Manteca?", "Media Verónica", "El Tercio de los Sueños", "Comida China", "Elvis Está Vivo", "Me Arde", "Crímenes Perfectos", "Nunca Es Igual", "El Novio del Olvido"
                ],
                "destacado" => FALSE
            ],
            [
                "id" => 16,
                "decada" => 90,
                "portada" => "el_amor_despues_del_amor.webp",
                "titulo" => "El Amor Después del Amor",
                "artista" => "Fito Páez",
                "lanzamiento" => "1 de febrero, 1992",
                "duracion" => "1 h, 2 min",
                "canciones" => [
                    "El Amor Después del Amor", "Dos Días en la Vida", "La Verónica", "Tráfico por Katmandú", "Pétalo de Sal", "Sasha, Sissí y el Círculo de Baba", "Un Vestido y un Amor", "Tumbas de la Gloria", "La Rueda Mágica", "Creo", "Detrás del Muro de los Lamentos", "La Balada de Donna Helena", "Brillante sobre el Mic", "A Rodar mi Vida"
                ],
                "destacado" => TRUE,
                "precio" => 36000
            ],
            [
                "id" => 17,
                "decada" => 90,
                "portada" => "3er_arco.webp",
                "titulo" => "3er Arco",
                "artista" => "Los Piojos",
                "lanzamiento" => "1 de enero, 1996",
                "duracion" => "56 min, 44 s",
                "canciones" => [
                    "Esquina Libertad", "Taxi Boy", "El Farolito", "Shup Shup", "Al Atardecer", "Qué Decís", "Don't Say Tomorrow", "Todo Pasa", "Intro Marado", "Marado", "Gris", "Muévelo", "Verano del 92"
                ],
                "destacado" => FALSE,
                "precio" => 49000
            ],
            [
                "id" => 18,
                "decada" => 90,
                "portada" => "despedazado_por_mil_partes.webp",
                "titulo" => "Despedazado por Mil Partes",
                "artista" => "La Renga",
                "lanzamiento" => "1 de enero, 1996",
                "duracion" => "54 min, 3 s",
                "canciones" => [
                    "Desnudo para Siempre (o Despedazado)", "A la Carga mi Rock'n Roll", "El Final Es en Donde Partí", "Balada del Diablo y la Muerte", "Cuando Vendrán", "Psilosibe Mexicana", "Paja Brava", "Lo Frágil de la Locura", "Veneno", "El Viento que Todo Empuja", "Hablado de la Libertad"
                ],
                "destacado" => FALSE,
                "precio" => 29900
            ],
            [
                "id" => 19,
                "decada" => 2000,
                "portada" => "jessico.webp",
                "titulo" => "Jessico",
                "artista" => "Babasónicos",
                "lanzamiento" => "25 de julio, 2001",
                "duracion" => "41 min, 9 s",
                "canciones" => [
                    "Los Calientes", "Fizz", "Deléctrico", "Soy Rock", "Pendejo", "El Loco", "La Fox", "Tóxica", "Yoli", "Rubí", "Camarín", "Atomicum"
                ],
                "destacado" => TRUE,
                "precio" => 32600
            ],
            [
                "id" => 20,
                "decada" => 2000,
                "portada" => "el_numero_imperfecto.webp",
                "titulo" => "El Número Imperfecto",
                "artista" => "Catupecu Machu",
                "lanzamiento" => "1 de enero, 2004",
                "duracion" => "44 min, 17 s",
                "canciones" => [
                    "Magia Veneno", "Preludio al Filo en el Umbral", "Muéstrame los Dientes", "Acaba el Fin", "Plan B: Anhelo de Satisfacción", "En los Sueños", "A Veces Vuelvo", "Sol Infierno", "Óxido en el Aire", "El Número Imperfecto", "Refugio"
                ],
                "destacado" => TRUE,
                "precio" => 47000
            ],
            [
                "id" => 21,
                "decada" => 2000,
                "portada" => "esperando_el_milagro.webp",
                "titulo" => "Esperando el Milagro",
                "artista" => "Las Pelotas",
                "lanzamiento" => "1 de julio, 2003",
                "duracion" => "50 min, 33 s",
                "canciones" => [
                    "Será", "Mareada", "Tomás X", "Desaparecido", "Día Feliz", "Abejas", "Sí Sentís", "Tormenta de Jupiter", "Rey de los Divinos", "Esperando el Milagro", "Tiempo de Matar", "La Creciente", "Puede Ser"
                ],
                "destacado" => FALSE,
                "precio" => 54000
            ],
            [
                "id" => 22,
                "decada" => 2000,
                "portada" => "no_es_solo_rock_n_roll.webp",
                "titulo" => "No Es Sólo Rock 'n' Roll",
                "artista" => "Intoxicados",
                "lanzamiento" => "1 de enero, 2003",
                "duracion" => "1 h, 0 min",
                "canciones" => [
                    "Prólogo (Narrado)", "Está Saliendo el Sol", "Volver a Casa", "De la Guitarra", "Reggae para los Amigos", "Una Vela", "Rodando por Ahí", "De a Ratitos", "No Tengo Ganas", "Rock del Vuelo 20773", "Un Tema de Mierda", "Felicidad, Depresión", "Don Electrón", "Departamento Deshabitado"
                ],
                "destacado" => FALSE
            ],
            [
                "id" => 23,
                "decada" => 2000,
                "portada" => "rocanroles_sin_destino.webp",
                "titulo" => "Rocanroles sin Destino",
                "artista" => "Callejeros",
                "lanzamiento" => "24 de septiembre, 2004",
                "duracion" => "51 min, 48 s",
                "canciones" => [
                    "Distinto", "Sé que no Sé", "Seria una Pena", "Algo Mejor, Algo Peor", "Rebelde, Agitador y Revolucionario", "Un Lugar Perfecto", "Todo Eso", "Prohibido", "Tan Perfecto que Asusta", "Tratando de Olvidar", "Rocanroles sin Destino", "La Llave", "Parte Menor", "Canciones y Almas"
                ],
                "destacado" => FALSE,
                "precio" => 45600
            ],
            [
                "id" => 24,
                "decada" => 2000,
                "portada" => "fuerza_natural.webp",
                "titulo" => "Fuerza Natural",
                "artista" => "Gustavo Cerati",
                "lanzamiento" => "12 de marzo, 2009",
                "duracion" => "56 min, 19 s",
                "canciones" => [
                    "Fuerza Natural", "Deja Vu", "Magia", "Amor sin Rodeos", "Traición a Sangre", "Desastre", "Rapto", "Cactus", "naturaleza Muerta", "Domiinó", "Sal", "Convoy", "He Visto a Lucy", "# - Numeral"
                ],
                "destacado" => FALSE,
                "precio" => 39800
            ]
        ];
    }

    function discos_destacados() : array {
        $destacados = [];
        $discos = todos_los_discos();

        foreach ($discos as $d) {
            if ($d["destacado"] == TRUE) {
                $destacados[] = $d;
            }
        }

        return $destacados;
    }

    function discos_x_decada(string $decada) : array {
        $discos_x_decada = [];
        $discos = todos_los_discos();

        foreach ($discos as $d) {
            if ($d["decada"] == $decada) {
                $discos_x_decada[] = $d;
            }
        }

        return $discos_x_decada;
    }

    function discos_x_id(int $id) {
        $discos = todos_los_discos();

        foreach ($discos as $d) {
            if ($d["id"] == $id) {
                return $d;
            }
        }

        return null;
    }

?>