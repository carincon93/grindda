-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2018 a las 22:11:13
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grindda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aliados`
--

CREATE TABLE `aliados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicaciones`
--

CREATE TABLE `aplicaciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `aplicaciones`
--

INSERT INTO `aplicaciones` (`id`, `nombre`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Matriz de fitotectura', 'http://fitotectura.grindda.com', '2018-12-26 18:38:12', '2018-12-26 18:38:12'),
(2, 'Sistema de Gestión de Proyectos GRINDDA', 'http://sipro.grindda.com', '2018-12-26 18:38:29', '2018-12-26 18:38:29'),
(3, 'Caja de ideas de las Empresas', 'http://ideas.grindda.com', '2018-12-26 18:38:48', '2018-12-26 18:38:48'),
(4, 'Software de Sistemas de Construcción', 'http://sisconstruccion.grindda.com', '2018-12-26 18:39:06', '2018-12-26 18:39:06'),
(5, 'Clasificación de residuos', 'http://clasificacionresiduos.grindda.com', '2018-12-26 18:39:21', '2018-12-26 18:39:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE `aprendices` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoDocumento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroDocumento` bigint(20) NOT NULL,
  `tipoVinculacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'fotos-usuarios/foto-default.png',
  `numeroCelular` bigint(20) DEFAULT NULL,
  `enlace_CvLac` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `programa_formacion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `aprendices`
--

INSERT INTO `aprendices` (`id`, `nombre`, `email`, `email_verified_at`, `password`, `tipoDocumento`, `numeroDocumento`, `tipoVinculacion`, `foto`, `numeroCelular`, `enlace_CvLac`, `estado`, `programa_formacion_id`, `created_at`, `updated_at`) VALUES
(1, 'Santiago Loaiza Giraldo', 'sloaiza36@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$EGf6vDg7D.NpOIw4wqpqOeHWqGNJCFMNAdONYlUaTAGZmiyUNSsLq', 'cc', 1059709063, 'aprendiz practica', 'fotos_usuarios/no-photo.png', 3136650194, NULL, 'inactivo', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Anthony Parra Malaver', 'anthonyma@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$WrIpEP2wF3kj1FyxhdvldeaGKK8vT.V6yO6HOyuWio87DfEHI58MS', 'ti', 1053856434, 'aprendiz practica', 'fotos_usuarios/no-photo.png', 3117907968, NULL, 'inactivo', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Einner Cañon Gómez', 'ecanon86@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$bmklzjRrOj7arYW2E56nWOnUa4X.ziEopcrlY.5Mu0i5maQuuLU3u', 'cc', 1060654812, 'aprendiz practica', 'fotos_usuarios/no-photo.png', 3137717007, NULL, 'inactivo', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Kevin Alejandro Rodriguez Suarez', 'karodriguez370@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$Ah8IzUugUrHqBV/yMwwhkOaY7MhG2uelnbBko9uETRAHnmhO9VcPS', 'cc', 1060654073, 'aprendiz practica', 'fotos_usuarios/no-photo.png', 3122631896, NULL, 'inactivo', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'eduardo arango oliveros', 'eduardo.arango@ucm.edu.co', '0000-00-00 00:00:00', '$2y$10$MmMXlUX/Ah7HR9TQBkvp0uCCCRzrW0uwjLCKTVWLq5D4ZE4ZV11gG', 'cc', 1053824775, 'aprendiz practica', 'fotos_usuarios/no-photo.png', 3003939199, NULL, 'inactivo', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `clasificacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lugar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logros` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estadoPublicacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `ano` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `clasificacion`, `descripcion`, `lugar`, `logros`, `imagen`, `estadoPublicacion`, `fechaInicio`, `fechaFin`, `ano`, `created_at`, `updated_at`) VALUES
(1, 'feria de la industria y la construcción', 'El comité organizador de la MUESTRA DE PROYECTOS DE I+D+i “Feria de la Industria y la Construcción” del Centro de procesos Industriales y Construcción del SENA Regional Caldas, se complace en invitarle a participar en el evento que tendrá lugar en Manizales, Caldas, Colombia, los días 15, 16, 17 y 18 de noviembre de 2018. Dentro de su temática se trabajarán el desarrollo de proyectos de Investigación, innovación y Desarrollo tecnológico enmarcados en las líneas de construcción e infraestructura, línea en diseño y desarrollo experimental bajo los proyecto de cierre de brechas de innovación y tecnología en, Automotriz, eficiencias energéticas, internet de las cosas, materiales avanzados, realidad virtual/realidad aumentada, manufactura 3D, robótica y automatización, más las líneas de sostenibilidad Ambiental y biotecnología, relacionadas con los programas de Formación del Centro de Procesos Industriales y Construcción. Con este propósito, la agenda abarcará como temas, los siguientes: Retos en la gestión de la construcción Tecnologías BPO Generación de energía eficiente Siderúrgica y metalúrgica Sector de confecciones - Textura', 'Expoferias, Manizales, Caldas', 'Introducción.\r\n\r\nLa brecha determina la distancia de cada una de las tecnologías midiendo la diferencia entre el desarrollo y su dominio actual en el sector y el estimado que se requiere para competir  con éxito en los mercados internacionales. (Quintero, 2018).Para disminuir la distancia tecnológica, se requiere de herramientas de gestión de la innovación, que es ampliamente reconocida como uno de los factores determinantes para mejorar y fortalecer la capacidad productiva y la competitividad de los sectores económicos y regiones de un país. Su relevancia es aún más significativa ante las presiones competitivas derivadas de la progresiva globalización de los mercados y la tecnología, la disminución del ciclo de vida de los productos, la emergencia de nuevas tecnologías disruptivas y los rápidos cambios en los patrones y preferencias de consumo a nivel global (Madrid et al., 2009; Cefis & Marsili, 2006; Dosi & Nelson, 2010; Rubmann et al., 2015).\r\n\r\nPara determinar la capacidad y condiciones para la innovación a nivel regional se hace necesario medir los índices de desempeño Innovación y Desarrollo (I+D), más las actividades de Ciencia tecnología e innovación (ACTI), relacionadas con su participación en el PIB en cada  país.  En Colombia se alcanza un 0.29% del PIB para I+D en el 2015, estando muy por debajo del promedio mundial de acuerdo a la OCDE  que es del 2.38% y de Latinoamérica que es del 0,7%. Como estrategias para fomentar la innovación en el sector productivo y académico es la participación y empoderamiento de las personas para innovar a través de la difusión del resultado de  sus investigaciones y la adopción de  tecnologías emergentes, teniendo en cuenta estos aspectos se programará la muestra de proyectos I+D+i, en la Feria de la Industria y Construcción.\r\n\r\nCon este propósito, la agenda abarcará como temas, los siguientes:\r\n\r\n1. Retos en la gestión de  la construcción\r\n\r\nEdificaciones sostenibles.\r\nTecnologías de la información y comunicación TICs, aplicadas a la gestión de la construcción y  el desarrollo urbano.\r\nMateriales innovadores a usar en la construcción.\r\nSistemas constructivos en la construcción de interés turísticos.\r\n2. Tecnologías BPO\r\n\r\nProyectos de Realidad Aumentada y la Realidad Virtual a usar en la industria.\r\nProyectos de Realidad Aumentada y la Realidad Virtual a usar  en la academia en los procesos de aprendizaje.\r\n3. Generación de energía eficiente.\r\n\r\nMejores maneras de producir energías renovables.\r\nUso de energías en el sector  de movilidad.\r\nUso de energías eficientes en la construcción.\r\nUso de energías  en la industria.\r\nUso de energías en los sectores agroindustriales.\r\n4. Siderúrgica y metalúrgica\r\n\r\nMateriales alternativos en el sector siderúrgica y metalúrgica\r\nRobótica y automatización.\r\nInstrumentos de medición, metrología.\r\nControl de procesos.\r\n5. Sector de confecciones – Textura.\r\n\r\nMateriales Avanzados en el uso de textiles\r\nTextiles sostenibles\r\nBiotecnología en el diseño de nuevo textiles\r\nUbicación stand\r\n\r\nMuestra de proyectos de I+D+I: La muestra de proyectos consta de un espacio para divulgar los resultados de los proyectos, permitiendo contar con un escenario académico para que estudiantes e investigadores den a conocer avances en sus iniciativas, así:\r\n\r\nProyecto de investigación terminado y en curso: Los proyectos de esta modalidad se caracterizan tener actividades de  investigación fruto de la solución de problemáticas de los sectores industriales o académicos  que  tienen resultado  finales o en desarrollo  y serán presentados en stand  de 3 m de ancho x 2,0 m de profundidad  x  2.4 m de alto, que disponen de una mesa y dos sillas. \r\nProyecto de innovación terminado y en curso: Los proyectos de esta modalidad se caracterizan tener actividades de  innovación fruto de la solución de problemáticas  y oportunidades de negocio de los sectores industriales o académicos  que  tienen resultado  finales o en desarrollo  y serán presentados en stand  de 3 m de ancho x 2,0 m de profundidad  x  2.4 m de alto, que disponen de una mesa y dos sillas.\r\nDesarrollo Tecnológico: Corresponde a proyectos donde existen procesos,  equipos, materiales en los que se desarrolla la creación o mejora con aplicaciones tecnológicas en bienes y servicios que hacen parte del cierre de brechas. serán presentados en stand  de 3 m de ancho x 2,0 m de profundidad  x  2.4 m de alto, que disponen de una mesa y dos sillas.\r\nFechas Importantes:\r\n\r\nInscripción en link: 27 Agosto al 07 Septiembre de 2018.\r\n\r\nEnvío de Artículos para participar: 10 de Septiembre al 19 de Octubre de 2018.\r\n\r\nComunicación de aceptación: 31 de Octubre de 2018                                    \r\n\r\nInscripción\r\n\r\nEvento sin costo pero requiere inscripción para asegurar cupo:\r\n\r\nContacto\r\n\r\nCorreo electrónico del equipo SENNOVA - Centro de procesos Industriales: grindda-cpic@sena.edu.co\r\n\r\nComité científico - organizador\r\n\r\nHades Felipe Salazar. Líder SENNOVA - Regional Caldas -CPIC\r\n\r\nValentina Hernández Piedrahita. Dinamizadora Tecnoparque SENA CALDAS-CPIC.\r\n\r\nAdriana Rodríguez Morales. Instructora SENNOVA - Regional Caldas -CPIC', 'imagenes_eventos/hdfmuQ20gt04ONj0QflF.jpg', 'publicar', '2018-11-15', '2018-11-18', 2018, '2018-12-24 18:57:36', '2018-12-27 20:20:58'),
(2, 'RECICLARTE', 'SENNOVA y el Centro de Procesos Industriales y Construcción del SENA Regional Caldas, conscientes de que la educación, la ciencia y la tecnología, son elementos primordiales para la prosperidad de los países, principalmente si se procura armonizar progreso con equilibrio ambiental, organizan la cuarta versión de RECICLARTE, buscando propiciar nuevamente un espacio para la generación de ideas y estrategias innovadoras, que rompan el paradigma “de que lo que ya no es útil para algunos, no es útil para nadie” y muestren los residuos como una ventana de oportunidad para negocios verdes, traducido en fuente de ingresos y ganancias ambientales. Nuestro país está llamado a seguir el ejemplo de países como Holanda, donde las basuras desaparecen, y no por arte de magia. De los 60 millones de toneladas de residuos que se producen al año en ese país, el 80% se recicla, el 18% se incinera y solo el 2% va a parar a rellenos sanitarios. De allí, que el concurso busque premiar aquellas ideas que permitan revertir la situación actual del país para conseguirlo.', 'Centro de Procesos Industriales y Construcción - SENA Regional Caldas', 'none', 'imagenes_eventos/lfM7Aa0WLVoV1nRkckub.jpg', 'publicar', '2018-09-03', '2018-09-07', 2018, '2018-12-27 20:08:54', '2018-12-27 20:08:54'),
(3, 'RREDSI', 'Este evento se desarrolla desde el año 2008, con la participación de las diferentes Instituciones de Educación básica-media, Educación Técnica, Tecnológica y Superior del Departamento de Caldas. El 10º Encuentro Departamental de Semilleros de Investigación -Nodo Caldas- brindará la posibilidad a los integrantes de semilleros, de reflexionar sobre problemáticas del entorno y encontrar alternativas de solución, partiendo desde los diferentes campos del saber, conducentes al desarrollo local y regional. Será también un espacio de carácter académico e investigativo, que pretende concientizar a los jóvenes de las instituciones de educación superior, sobre la importancia del uso y la producción de conocimiento científico, tecnológico y de innovación, permitiendo de esta manera, la consolidación de una comunidad académica multidisciplinar e interdisciplinar. Servirá como el espacio propicio para presentar, socializar y retroalimentar las prácticas y resultados obtenidos en los proyectos de investigación en curso o terminados, que son desarrollados por los estudiantes vinculados a los diferentes semilleros de investigación de las instituciones adscritas a la Red -RREDSI-.', 'Universidad Católica Luis Amigó', 'none', 'imagenes_eventos/9mrbtZt3j0Wi0uFwqrGc.jpg', 'publicar', '2018-05-09', '2018-05-09', 2018, '2018-12-27 20:11:08', '2018-12-27 20:19:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos_investigacion`
--

CREATE TABLE `grupos_investigacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `que_hacemos` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `objetivo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mision` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grupos_investigacion`
--

INSERT INTO `grupos_investigacion` (`id`, `nombre`, `descripcion`, `que_hacemos`, `objetivo`, `mision`, `vision`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'GRINDDA', 'El grupo de Investigación de Diseño y Desarrollo Aplicado GRINDDA es un grupo Interdisciplinario, del Centro de Procesos Industriales y Construcción del SENA Regional Caldas, reconocido por COLCIENCIAS y con categoría C.', '\"El Grupo de Investigación en Diseño y Desarrollo Aplicado GRINDDA, gestiona conocimiento científico, tecnológico y de innovación en el Centro de Procesos Industriales y Construcción a nivel nacional e internacional fomentando el desarrollo productivo, humano y ecológico en las prácticas formativas, propendiendo la consolidación constante del SENA y el trabajo colaborativo con empresas del sector industrial y de la construcción, así como universidades del país.\"', 'Aportar y contribuir al desarrollo técnico y tecnológico de la región y del país, desarrollando proyectos de investigación aplicada, Innovación y desarrollo tecnológico que sean pertinentes a las necesidades del medio empresarial, con equidad y responsabilidad social.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, eum, magni nesciunt soluta labore dolorem expedita ipsa asperiores temporibus suscipit maxime harum odit autem dolor recusandae impedit itaque adipisci rem.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, eum, magni nesciunt soluta labore dolorem expedita ipsa asperiores temporibus suscipit maxime harum odit autem dolor recusandae impedit itaque adipisci rem.', 'logos_grupos_investigacion/grindda-logo.png', '2018-12-25 21:40:46', '2018-12-26 13:35:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_investigacion`
--

CREATE TABLE `lineas_investigacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaCreacion` date NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lider_id` int(10) UNSIGNED NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lineas_investigacion`
--

INSERT INTO `lineas_investigacion` (`id`, `nombre`, `fechaCreacion`, `descripcion`, `imagen`, `lider_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Desarrollo de Infraestructura y Construcción', '2014-05-10', 'Objetivo de la Línea: Desarrollar proyectos de I+D+i en conjunto con la academia y el sector de la construcción, desde la formulación de proyectos y su ejecución, apoyados con la construcción de prototipos a escala y reales buscando dar respuesta a las problemáticas del sector de la infraestructura y construcción.\r\nLogros de la Línea: Alianzas con gremios del sector de la construcción para el desarrollo de proyecto, que impacten la infraestructura de la Región:\r\nEfectos de la Línea: Impacto a los sectores de arquitectura Auto-sostenible,construcción pirotécnicas, Diseño experimental funcionales.', 'imagenes_lineas_investigacion/hD06fH9CTiSkLhtqBq6g.jpg', 6, 'activo', '2018-12-26 16:51:52', '2018-12-26 16:51:52'),
(2, 'Desarrollo de Materiales para la Industria', '2016-02-01', 'Objetivo de la Línea: Desarrollar proyectos con un enfoque interdisciplinario, en las áreas de la industrial y la construcción, dirigidos al estudio y aprovechamiento de los recursos para la producción de nuevos materiales que resuelvan problemas de los diferentes sectores promoviendo el desarrollo científico, social y económico de la región.\r\nLogros de la Línea: Generación de procesos y productos aplicando componentes de I+D+i, uniendo esfuerzos y recursos para la atención de las necesidades del sector productivo.\r\nEfectos de la Línea: Fortalecimiento de la investigación aplicada en el SENA, contribuyendo a la transformación científica y tecnológica de la institución consolidandose como fuente de conocimiento científico aplicado al desarrollo económico de la región y a la formación de jóvenes investigadores con capacidad de innovación y desarrollo científico.', 'imagenes_lineas_investigacion/F7mqDVGfdJqjiNv9siqU.jpg', 2, 'activo', '2018-12-26 16:52:52', '2018-12-26 16:52:52'),
(3, 'Desarrollo Humano, Educación y Cultura', '2014-05-05', 'Objetivo de la Línea: Desarrollar procesos técnico pedagógicos en las concepciones de educación y cultura, que fortalezcan el grupo de investigación GRINDDA y coadyuven al crecimiento productivo de la region.\r\nLogros de la Línea: Generar sinergias en la investigación aplicada en procesos de educación Aplicar la investigación e innovación en procesos de desarrollo cultural y pedagógico.\r\nEfectos de la Línea: Línea en la que se busca comprender de forma dinámica los diversos aportes de la educación en el desarrollo del concepto sociedad. Y como la cultura consolida diversas formas de abordaje de los sujetos, según características específicas. También se permite comprender las mejores prácticas pedagógicas y educativas que permitan la mejor comprensión de los currículos de formación.', 'imagenes_lineas_investigacion/S4sNumqxgyrwTtZDQD7t.jpg', 5, 'activo', '2018-12-26 16:53:55', '2018-12-26 16:53:55'),
(4, 'Diseño y Desarrollo Experimental', '2014-05-05', 'Objetivo de la Línea: Definir, documentar y desarrollar proyecto de investigación I+D+i, a través del diseño experimental, para dar respuesta a las problemáticas reales con el fin de aportar herramientas y conceptos claros tendientes al desarrollo sostenible de Caldas y el mejoramiento de la calidad de vida de sus habitantes y del sector industrial.\r\nLogros de la Línea: Implementar procesos de innovación, investigación y desarrollo tecnológico en proyectos de diseño experimental, tendientes a mejorar situaciones de riesgo actuales o a generar impacto con nuevas tendencias que apoyen la auto-sostenibilidad.\r\nEfectos de la Línea: Fortalecimiento de los programas de formación del centro de procesos, a través de la formulación de proyectos que contribuyan a la solución de problemas del sector industrial y mejoramiento de la calidad de vida.', 'imagenes_lineas_investigacion/4R0WkclrY5A7BJzvmQKP.jpg', 3, 'activo', '2018-12-26 16:54:39', '2018-12-26 16:54:39'),
(5, 'Eficiencia de Recursos Naturales para la Sostenibilidad Ambiental', '2014-05-05', 'Objetivo de la Línea: Diseñar e implementar estrategias de gestión de recursos naturalesdurante la formulación y ejecución de proyectos, obras civiles y actividades industriales de acuerdo con lineamientos de sostenibilidad ambiental.\r\nLogros de la Línea: Proces de eficiencia en recurso naturales (energía, agua, minerales). -Sistemas de gestión ambiental. -Caracterización de residuos peligrosos y no peligrosos. - Manejo ambiental de proyectos, obras civiles y actividades productivas. - Educación ambiental.\r\nEfectos de la Línea: La línea de investigación pretende generar conocimientos que orienten y faciliten atender de manera efectiva la caracterización, evaluación, planificación y evaluación de estrategias de gestión de recursos naturales durante el diseño y ejecución de proyectos, obras y actividades de orden constructivo e industrial.', 'imagenes_lineas_investigacion/Z3WxzkjifidSy4WeH7zW.jpg', 8, 'activo', '2018-12-26 16:55:16', '2018-12-26 16:55:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_investigacion_semillero`
--

CREATE TABLE `linea_investigacion_semillero` (
  `id` int(10) UNSIGNED NOT NULL,
  `linea_investigacion_id` int(10) UNSIGNED NOT NULL,
  `semillero_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_investigacion_usuario`
--

CREATE TABLE `linea_investigacion_usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `linea_investigacion_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_22_105325_create_lineas_investigacion_table', 1),
(4, '2018_12_22_105813_create_linea_investigacion_usuario_table', 1),
(5, '2018_12_22_105941_create_roles_table', 1),
(6, '2018_12_22_110034_create_rol_usuario_table', 1),
(7, '2018_12_22_110238_create_eventos_table', 1),
(8, '2018_12_22_110327_create_aliados_table', 1),
(9, '2018_12_22_111939_create_semilleros_table', 1),
(10, '2018_12_22_112200_create_linea_investigacion_semillero_table', 1),
(11, '2018_12_22_112326_create_proyectos_table', 1),
(12, '2018_12_22_112358_create_proyecto_autor_table', 1),
(13, '2018_12_22_112533_create_aplicaciones_table', 1),
(14, '2018_12_22_112602_create_programas_formacion_table', 1),
(15, '2018_12_22_112603_create_aprendices_table', 1),
(16, '2018_12_22_115548_create_semillero_proyecto_table', 1),
(17, '2018_12_24_102858_create_grupos_investigacion_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas_formacion`
--

CREATE TABLE `programas_formacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoFormacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `programas_formacion`
--

INSERT INTO `programas_formacion` (`id`, `nombre`, `tipoFormacion`, `created_at`, `updated_at`) VALUES
(1, 'Reparación Y Mantenimiento De Edificaciones', 'Técnico', NULL, NULL),
(2, 'Patronista Escalador En Confección Industrial', 'Técnico', NULL, NULL),
(3, 'Mantenimiento De Motores Diesel', 'Técnico', NULL, NULL),
(4, 'Seguridad Ocupacional', 'Técnico', NULL, NULL),
(5, 'Trazo Y Corte En Confección Industrial', 'Técnico', NULL, NULL),
(6, 'Fabricación De Estructuras Metálicas Soldadas', 'Técnico', NULL, NULL),
(7, 'Mecánico De Maquinaria Industrial', 'Técnico', NULL, NULL),
(8, 'Control De Calidad En Confección', 'Técnico', NULL, NULL),
(9, 'Mantenimiento Eléctrico Y Electrónico En Automotores', 'Técnico', NULL, NULL),
(10, 'Control De Calidad En Confección', 'Técnico', NULL, NULL),
(11, 'Mecanizado De Productos Metalmecánicos', 'Técnico', NULL, NULL),
(12, 'Control De Calidad En Confección', 'Técnico', NULL, NULL),
(13, 'Operación De Torno Y Fresadora', 'Técnico', NULL, NULL),
(14, 'Mantenimiento De Sistemas De Refrigeración Y Climatización', 'Técnico', NULL, NULL),
(15, 'Mantenimiento De Motores Gasolina Y Gas', 'Técnico', NULL, NULL),
(16, 'Control De Calidad En Confección', 'Técnico', NULL, NULL),
(17, 'Fabricación De Muebles Contemporáneos Y Modulares', 'Técnico', NULL, NULL),
(18, 'Soldadura Para Aplicaciones Automotrices', 'Técnico', NULL, NULL),
(19, 'Carpintería', 'Técnico', NULL, NULL),
(20, 'Desarrollo Gráfico De Proyectos De Construcción', 'Técnico', NULL, NULL),
(21, 'Control De Calidad En Confección', 'Técnico', NULL, NULL),
(22, 'Mantenimiento De Las Motocicletas', 'Técnico', NULL, NULL),
(23, 'Soldadura De Productos Metálicos (Platina)', 'Técnico', NULL, NULL),
(24, 'Construcciones Livianas En Seco', 'Técnico', NULL, NULL),
(25, 'Obras Civiles', 'Tecnólogo', NULL, NULL),
(26, 'Mantenimiento Mecatrónico De Automotores', 'Tecnólogo', NULL, NULL),
(27, 'Mantenimiento Mecánico Industrial', 'Tecnólogo', NULL, NULL),
(28, 'Construcción', 'Tecnólogo', NULL, NULL),
(29, 'Topografía', 'Tecnólogo', NULL, NULL),
(30, 'Electricidad Industrial', 'Tecnólogo', NULL, NULL),
(31, 'Mantenimiento Electromecánico Industrial', 'Tecnólogo', NULL, NULL),
(32, 'Gestión Integrada De La Calidad, Medio Ambiente, Seguridad Y Salud Ocupacional', 'Tecnólogo', NULL, NULL),
(33, 'Salud Ocupacional', 'Tecnólogo', NULL, NULL),
(34, 'Desarrollo Grafico De Proyectos De Arquitectura E Ingenieria', 'Tecnólogo', NULL, NULL),
(35, 'Formulación De Proyectos', 'Tecnólogo', NULL, NULL),
(36, 'Análisis Y Desarrollo De Sistemas De Información', 'Tecnólogo', NULL, NULL),
(37, 'Diseño De Sistemas Mecanicos', 'Tecnólogo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resultado` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lineaProgramatica` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaCreacion` date NOT NULL,
  `objetivoGeneral` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `objetivosEspecificos` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lider_id` int(10) UNSIGNED NOT NULL,
  `estadoPublicacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`, `resultado`, `lineaProgramatica`, `fechaCreacion`, `objetivoGeneral`, `objetivosEspecificos`, `imagen`, `url`, `lider_id`, `estadoPublicacion`, `created_at`, `updated_at`) VALUES
(1, 'Aplicación de nuevas técnicas constructivas auto-sostenibles en el diseño y desarrollo de un Hotel Demostrativo como estrategia para la formación.', 'none', 'innovacion y desarrollo tecnologico', '2015-02-02', 'Promover en los aprendices SENA el desarrollo  arquitectónico creativo y sostenible a través del diseño de un Hotel Demostrativo para la Regional Caldas, en el cual  se aprecie la  aplicación de tecnologias vanguarditas y amigables al medio ambiente.', 'Conocer sobre las nuevas técnicas arquitectónicas autosostenibles en cuanto a energia solar, tratamiento de aguas lluvias, manejo de residuos solidos y arquitectura verde para la aplicación de sus conceptos en el diseño del hotel demostrativo.\r\nConocer métodos de representación grafica y virtual en el diseño de proyectos arquitectónicos para el desarrollo turístico.\r\nPlantear  diseños constructivos innovadores para el fomento del turismo regional.', 'imagenes_proyectos/1lOOuIM53yLoTfZ7tnWl.JPG', NULL, 1, 'publicar', '2018-12-26 19:01:12', '2018-12-26 19:01:12'),
(2, 'none4', 'none', 'asesorias tecnoparque', '2019-02-01', 'none', 'none', 'imagenes_proyectos/step-1.png', NULL, 9, 'publicar', '2018-12-27 18:40:53', '2018-12-27 18:40:53'),
(3, 'none 5', 'none', 'asesorias tecnoparque', '2014-02-01', 'none', 'none', 'imagenes_proyectos/step-2.png', NULL, 16, 'publicar', '2018-12-27 18:46:14', '2018-12-27 18:46:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_autor`
--

CREATE TABLE `proyecto_autor` (
  `id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED NOT NULL,
  `autor_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proyecto_autor`
--

INSERT INTO `proyecto_autor` (`id`, `proyecto_id`, `autor_id`) VALUES
(1, 1, 24),
(2, 1, 25),
(3, 1, 26),
(4, 2, 1),
(5, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(191) NOT NULL,
  `descripcion` longtext NOT NULL,
  `archivo` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `nombre`, `descripcion`, `archivo`, `created_at`, `updated_at`) VALUES
(1, 'none', 'none', 'publicaciones/marcadores.pdf', '2018-12-27 13:53:11', '2018-12-27 13:53:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `permisos` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_usuario`
--

CREATE TABLE `rol_usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `rol_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semilleros`
--

CREATE TABLE `semilleros` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoSemillero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaCreacion` date NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mision` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `justificacion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `objetivoGeneral` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `objetivosEspecificos` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logros` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `semilleros`
--

INSERT INTO `semilleros` (`id`, `nombre`, `tipoSemillero`, `fechaCreacion`, `imagen`, `descripcion`, `mision`, `vision`, `justificacion`, `objetivoGeneral`, `objetivosEspecificos`, `logros`, `created_at`, `updated_at`) VALUES
(1, 'LEVEL UP', 'semillero tematico', '2017-10-25', 'imagenes_semilleros/oScYh0bWZ1AifioHBJ54.png', 'Semillero de Investigación en Desarrollo de Software y Producción Multimedial.', 'Rediseñar juegos clásicos para darles nueva vida y una nueva dinámica, crear videojuegos en donde prevalezca la experiencia de juego por encima de los elaborados gráficos. Nuestro semillero de investigación se enfoca sobre los aspectos fundamentales del desarrollo de videojuegos, el modelado, la programación y la música. Creemos firmemente que los videojuegos deben estar diseñados para un público amplio y no solo para un segmento considerado “Gamers Hardcore”.', 'LEVEL UP será visto como un grupo de desarrollo serio y multidisciplinario en el entorno de los videojuegos tipo Indie local. Como meta principal queremos ser el punto de partida para un legado de continuo desarrollo en el SENA. Para finales del 2018 habremos promovido el interés y el desarrollo de los videojuegos y la realidad virtual impulsada por la Red SENNOVA con sus estrategias TECNOPARQUE y el Grupo de Investigación en Diseño y Desarrollo Aplicado GRINDDA‐CPIC; contaremos con desarrollos probados al interior del SENA y en distintos ambientes Universitarios.', 'El Sistema de Investigación  Desarrollo  Tecnológico e Innovación SENNOVA fortalece las condiciones de calidad y pertinencia de la formación profesional integral impartida en la Institución, formando aprendices innovadores, aportando nuevas tecnologías a los programas de formación de la entidad y al sector productivo en general, además de contar con los requisitos de calidad que permita la acreditación de los programas de formación; uno de los objetivos de SENNOVA es formar capital humano técnico y teólogo para la ciencia, la tecnología y la innovación; en este sentido se considera de vital importancia la conformación de semilleros de investigación como LEVEL UP, que busca fortalecer y complementar los procesos formativos a través de estrategias didácticas virtuales como vídeo juegos, realidad virtual, diseño y desarrollo de software para la generación  de proyectos I+D+i de los diferentes programa para dar solución aplicada a la industria y la academia.', 'Ofrecer un espacio para que los aprendices y estudiantes universitarios, interesados en el desarrollo de vídeo juegos, puedan aprender y desarrollar juegos, mientras realizan un proceso de investigación formativa.', 'Ofrecer un espacio para que las personas que tengan experiencia en desarrollo de videojuegos compartan personas que comienzan esta labor.\r\nLograr que los participantes del semillero desarrollen habilidades básicas de investigación en temas relacionados con el desarrollo de videojuegos.\r\nBrindar un espacio donde confluyan personas para desarrollar videojuegos con los siguientes saberes e intereses y habilidades: programación, diseño gráfico, compositores de música electrónica.', 'none', '2018-12-24 21:16:39', '2018-12-26 18:27:39'),
(2, 'SECCOT', 'semillero tematico', '2018-01-19', 'imagenes_semilleros/RcNTMzSq6nGY2oQBPSVU.png', 'Semillero de Investigación en Obra Civil, Topografía y Construcción', 'SECCOT es un equipo conformado por Aprendices, Instructores del Centro de Procesos Industriales y Construcción, que promueven la investigación en la formación profesional integral en áreas de construcción e infraestructura, encaminados a desarrollar proyectos de diseño en las diferentes áreas de conocimiento vinculando la tecnología y la experiencia funcional en nuestros procesos investigativos orientados a la eficiencia y mejoramiento de las empresas.', 'En el 2019 SECCOT será un semillero que promueva proyectos de Investigación, Desarrollo Tecnológico e Innovación, enfocado en desarrollar ideas de cambio para el sector de la construcción, generando conocimiento de punta que permita el posicionamiento del SENA y del Centro de Procesos Industriales frente a las diferentes redes empresariales de la región.', 'El Sistema de Investigación  Desarrollo  Tecnológico e Innovación SENNOVA fortalece las condiciones de calidad y pertinencia de la formación profesional integral impartida en la Institución, formando aprendices innovadores, aportando nuevas tecnologías a los programas de formación de la entidad y al sector productivo en general, además de contar con los requisitos de calidad que permita la acreditación de los programas de formación; uno de los objetivos de SENNOVA es formar capital humano técnico y tecnólogo para la ciencia, la tecnología y la innovación; en este sentido se considera de vital importancia la conformación de semilleros de investigación como SECCOT, que busca fortalecer los procesos formativos a través del desarrollo de proyectos de investigación, innovación y Desarrollo Tecnológico en las áreas de Construcción, obra Civil y Topografía en los diferentes programas relacionados con esta área, para dar solución aplicada a la industria de la construcción.', 'Fomentar  la actividad en investigación aplicada en la formación profesional integral entre aprendices e instructores y el sector de la construcción, desarrollando competencias, habilidades para el desarrollo de proyectos en las áreas de construcción e infraestructura.', 'Sensibilizar tanto instructores como aprendices sobre la importancia de realizar proyectos en el Semillero de Investigación “SECCOT” en temas relacionados con las áreas temáticas definidas. \r\nGenerar espacios de encuentro y discusión académica en torno a la investigación aplicada, desarrollo tecnológico e innovación, en temas relacionados con la construcción, infraestructura.\r\nFormular y desarrollar proyectos de investigación, acorde a los procesos de formación profesional integral de los aprendices del Centro de Procesos y construcción en temas relacionados con la construcción.\r\nAportar a la ejecución de los proyectos de investigación aplicada, desarrollo tecnológico e innovación de acuerdo a las políticas  de SENNOVA.\r\nTransferir el conocimiento generado en los proyectos desarrollados en el semillero ”SECCOT” de las diferentes líneas de investigación.', 'none', '2018-12-26 18:27:23', '2018-12-26 18:27:23'),
(3, 'SEDIEX', 'semillero tematico', '2017-10-25', 'imagenes_semilleros/Ap8r839aS49ubEdNUL09.png', 'Semillero de Investigación en Diseño Experimental', 'Somos un grupo multidisciplinario integrado por aprendices e Instructores del Centro de Procesos Industriales del SENA Regional Caldas, encaminados a desarrollar proyectos de diseño en las diferentes áreas de conocimiento vinculando la tecnología y la experiencia funcional en nuestros procesos investigativos orientados a la eficiencia y mejoramiento de las empresas.', 'En el año 2018 el semillero SEDIEX, estará realizando proyectos de Investigación, Desarrollo Tecnológico e Innovación, partiendo del diseño experimental y enfocado en desarrollar ideas de cambio para el sector industrial y de la construcción, generando conocimiento de punta que permita el posicionamiento del SENA y del Centro de Procesos Industriales frente a las diferentes redes empresariales de la región.', 'El Sistema de Investigación  Desarrollo  Tecnológico e Innovación SENNOVA fortalece las condiciones de calidad y pertinencia de la formación profesional integral impartida en la Institución, formando aprendices innovadores, aportando nuevas tecnologías a los programas de formación de la entidad y al sector productivo en general, además de contar con los requisitos de calidad que permita la acreditación de los programas de formación; uno de los objetivos de SENNOVA es formar capital humano técnico y tecnólogo para la ciencia, la tecnología y la innovación; en este sentido se considera de vital importancia la conformación de semilleros de investigación como SEDIEX, que busca fortalecer los procesos formativos a través de la gestión de investigación, innovación y Desarrollo Tecnológico, con el cumplimiento de los requisitos para la presentación de proyectos I+D+i de los diferentes programa para dar solución aplicada a la industria  y la construcción.', 'Gestionar conocimiento científico, tecnológico y de innovación en el Centro de Procesos Industriales a nivel nacional e internacional fomentando el desarrollo de talleres de diseño experimental orientados a la consecución de prototipos funcionales.', 'Desarrollo de talleres de diseño experimental en las diferentes áreas de conocimiento del Centro de Procesos Industriales.\r\nElaboración de prototipos de diseño a escala de productos arquitectónicos, industriales, etc enfocados en la auto‐sostenibildad.\r\nCreación de prototipos funcionales que pretenden dar solución a diversas problemáticas del sector industrial.', 'none', '2018-12-26 18:29:36', '2018-12-26 18:29:36'),
(4, 'SEMMAU', 'semillero tematico', '2018-01-19', 'imagenes_semilleros/lX1RLpQerFVh8Q5GeYTN.png', 'Semillero de Investigación en Mantenimiento Mecánico y Mecatrónica de Automotores.', 'SEMMAU es un equipo conformado por Aprendices, Instructores del Centro de Procesos Industriales y Construcción, que promueven la investigación en la formación profesional integral en las áreas de mecánica Industrial y mecatrónica de automóviles y su aplicabilidad del conocimiento generado al sector industrial automotriz, de esta manera generar habilidades en los aprendices e instructores y demás actores vinculados, mediante los procesos de formación los cuales estarán involucrados para facilitar la interacción entre lo formativo y el sector productivo.', 'En el 2019 SEMMAU será un semillero que promueva un espacio para el desarrollo de las habilidades prácticas investigativas. En él, se espera que tanto los instructores como los aprendices construyan conocimiento basado en la solución de problemas reales, particulares a su entorno y generen propuestas de cambio y mejoramiento en múltiples dimensiones, bien sean sociales, científicas, técnicas y/o tecnológicas en las áreas de mecánica Industrial y mecatrónica de automóviles.', 'El Sistema de Investigación  Desarrollo  Tecnológico e Innovación SENNOVA fortalece las condiciones de calidad y pertinencia de la formación profesional integral impartida en la Institución, formando aprendices innovadores, aportando nuevas tecnologías a los programas de formación de la entidad y al sector productivo en general, además de contar con los requisitos de calidad que permita la acreditación de los programas de formación; uno de los objetivos de SENNOVA es formar capital humano técnico y tecnólogo para la ciencia, la tecnología y la innovación; en este sentido se considera de vital importancia la conformación de semilleros de investigación como SEMMAU, que busca fortalecer los procesos formativos a través del desarrollo de proyectos de investigación, innovación y Desarrollo Tecnológico en las áreas de  Mecánica y Mecatrónica de automóviles en los diferentes programas relacionados con esta área, para dar solución aplicada a la industria  mecánica y automotriz.', 'Fomentar  la actividad en investigación aplicada en la formación profesional integral entre aprendices e instructores y el sector mecánico y automotriz, desarrollando competencias, habilidades para el desarrollo de proyectos en las áreas de mecánica Industrial y mecatrónica de automóviles.', 'Sensibilizar tanto instructores como aprendices sobre la importancia de realizar proyectos en el Semillero de Investigación “SEMMAU” en temas relacionados con las áreas temáticas definidas. \r\nGenerar espacios de encuentro y discusión académica en torno a la investigación aplicada, desarrollo tecnológico e innovación, en temas relacionados con mecánica de mecatrónica de automotores.\r\nFormular y desarrollar proyectos de investigación, acorde a los procesos de formación profesional integral de los aprendices del Centro de Procesos y construcción en temas relacionados con mecánica de mecatrónica de automotores.\r\nAportar a la ejecución de los proyectos de investigación aplicada, desarrollo tecnológico e innovación de acuerdo a las políticas  de SENNOVA.\r\nTransferir el conocimiento generado en los proyectos desarrollados en el semillero”SEMMAU” de las diferentes líneas de investigación.', 'none', '2018-12-26 18:31:05', '2018-12-26 18:31:05'),
(5, 'SEREEL', 'semillero tematico', '2018-01-19', 'imagenes_semilleros/dPoiNw0p2ZfFYeSkhUu5.png', 'Semillero de Investigación en Supervisión y Mantenimiento de Redes, Energía y Electricidad.', 'SEREEL es un equipo conformado por Aprendices, Instructores del Centro de Procesos Industriales y Construcción, que promueven la investigación en la formación profesional integral en el área de la Energía Eléctrica y su aplicabilidad del conocimiento generado al sector industrial de la construcción, de esta manera generar habilidades en los aprendices e instructores y demás actores vinculados, mediante los procesos de formación los cuales estarán involucrados para facilitar la interacción entre lo formativo y el sector productivo.', 'SEREEL será en el 2019 un semillero destacado en el Centro de Procesos Industriales y Construcción, por su proyección en proyectos que promueven la investigación en la formación profesional integral entre aprendices e instructores, el sector productivo y la solución a problemáticas existentes mediante la Investigación aplicada desarrollando competencias y habilidades para el desarrollo de proyectos en las áreas de Energía Eléctrica.', 'El Sistema de Investigación  Desarrollo  Tecnológico e Innovación SENNOVA fortalece las condiciones de calidad y pertinencia de la formación profesional integral impartida en la Institución, formando aprendices innovadores, aportando nuevas tecnologías a los programas de formación de la entidad y al sector productivo en general, además de contar con los requisitos de calidad que permita la acreditación de los programas de formación; uno de los objetivos de SENNOVA es formar capital humano técnico y tecnólogo para la ciencia, la tecnología y la innovación; en este sentido se considera de vital importancia la conformación de semilleros de investigación como SEREEL, que busca fortalecer los procesos formativos a través del desarrollo de proyectos de investigación, innovación y Desarrollo Tecnológico en las áreas de Energía Eléctrica de los diferentes programas relacionados con esta área, para dar solución aplicada a la industria  y la construcción.', 'Fomentar la actividad en investigación aplicada en la formación profesional integral entre aprendices e instructores y el sector industrial de la construcción, desarrollando competencias, habilidades para el desarrollo de proyectos en las áreas de Energía Eléctrica.', 'Sensibilizar tanto instructores como aprendices sobre la importancia de realizar proyectos en el Semillero de Investigación “SEREEL” en temas relacionados con las áreas temáticas definidas. \r\nGenerar espacios de encuentro y discusión académica en torno a la investigación aplicada, desarrollo tecnológico e innovación, en temas relacionados con Energía.\r\nFormular y desarrollar proyectos de investigación, acorde a los procesos de formación profesional integral de los aprendices del Centro de Procesos y construcción en temas relacionados con energía y su aprovechamiento.\r\nAportar a la ejecución de los proyectos de investigación aplicada, desarrollo tecnológico e innovación de acuerdo a las políticas  de SENNOVA.\r\nTransferir el conocimiento generado en los proyectos desarrollados en el semillero”SEREEL” de las diferentes líneas de investigación.', 'none', '2018-12-26 18:32:45', '2018-12-26 18:32:45'),
(6, 'SIMATI', 'semillero tematico', '2018-01-19', 'imagenes_semilleros/XeCzkQLvEticJW4yfhQc.png', 'none', 'SIMATI es un equipo conformado por Aprendices, Instructores del Centro de Procesos Industriales y Construcción, que promueven la investigación en la formación profesional integral en las áreas de en áreas de construcción e infraestructura de automóviles y su aplicabilidad del conocimiento generado al sector industrial de la construcción, de esta manera generar habilidades en los aprendices e instructores y demás actores vinculados, mediante los procesos de formación los cuales estarán involucrados para facilitar la interacción entre lo formativo y el sector productivo.', 'En el 2019 SIMATI será un semillero que promueva un espacio para el desarrollo de las habilidades prácticas investigativas. En él, se espera que tanto los instructores como los aprendices construyan conocimiento basado en la solución de problemas reales, particulares a su entorno y generen propuestas de cambio y mejoramiento en múltiples dimensiones, bien sean sociales, científicas, técnicas y/o tecnológicas en áreas de construcción e infraestructura.', 'El Sistema de Investigación  Desarrollo  Tecnológico e Innovación SENNOVA fortalece las condiciones de calidad y pertinencia de la formación profesional integral impartida en la Institución, formando aprendices innovadores, aportando nuevas tecnologías a los programas de formación de la entidad y al sector productivo en general, además de contar con los requisitos de calidad que permita la acreditación de los programas de formación; uno de los objetivos de SENNOVA es formar capital humano técnico y tecnólogo para la ciencia, la tecnología y la innovación; en este sentido se considera de vital importancia la conformación de semilleros de investigación como SIMATI, que busca fortalecer los procesos formativos a través del desarrollo de proyectos de investigación, innovación y Desarrollo Tecnológico en las áreas de Materiales para la Industria en los diferentes programas relacionados con esta área, para dar solución aplicada a la industria de la construcción.', 'Fomentar  la actividad en investigación aplicada en la formación profesional integral entre aprendices e instructores y el sector de materiales a usar en la industria y construcción, desarrollando competencias, habilidades para el desarrollo de proyectos que involucre el diseño y aprovechamiento de materiales.', 'Sensibilizar tanto instructores como aprendices sobre la importancia de realizar proyectos en el Semillero de Investigación “SIMATI” en temas relacionados con las áreas temáticas definidas. \r\nGenerar espacios de encuentro y discusión académica en torno a la investigación aplicada, desarrollo tecnológico e innovación, en temas relacionados con materiales para la Industria.\r\nFormular y desarrollar proyectos de investigación, acorde a los procesos de formación profesional integral de los aprendices del Centro de Procesos y construcción en temas relacionados con materiales para la industria.\r\nAportar a la ejecución de los proyectos de investigación aplicada, desarrollo tecnológico e innovación de acuerdo a las políticas  de SENNOVA.\r\nTransferir el conocimiento generado en los proyectos desarrollados en el semillero”SIMATI” de las diferentes líneas de investigación.', 'none', '2018-12-26 18:34:02', '2018-12-26 18:34:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semillero_proyecto`
--

CREATE TABLE `semillero_proyecto` (
  `id` int(10) UNSIGNED NOT NULL,
  `semillero_id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `semillero_proyecto`
--

INSERT INTO `semillero_proyecto` (`id`, `semillero_id`, `proyecto_id`) VALUES
(1, 3, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoDocumento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroDocumento` bigint(20) NOT NULL,
  `tipoVinculacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'fotos_usuarios/foto-default.png',
  `numeroCelular` bigint(20) DEFAULT NULL,
  `enlace_CvLac` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dependencia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `email`, `email_verified_at`, `password`, `tipoDocumento`, `numeroDocumento`, `tipoVinculacion`, `profesion`, `foto`, `numeroCelular`, `enlace_CvLac`, `dependencia`, `estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hades Salazar Jiménez', 'hsalazarj@sena.edu.co', '0000-00-00 00:00:00', '$2y$10$qjUPIW.kq2RZL6neropSNOqbv7Sum2EniqORUPGCarnZ37g0uzqpS', 'cc', 75090230, 'funcionario planta', 'Arquitecto', 'fotos_usuarios/cqhFOsvhDLzdt1aVgUHs.jpg', 3218512954, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0001597514', 'sennova', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Adriana Rodríguez Morales', 'adrrodriguez@sena.edu.co', '0000-00-00 00:00:00', '$2y$10$SX560/.j.c3b09nHaoi0v.E.v3oeCkjWl4GF/yQCfffwIe3ZFKX76', 'cc', 51808949, 'instructor planta', 'Ingeniera de Alimentos', 'fotos_usuarios/EBqgn263rLI3u5RxW82w.jpg', 3176366444, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0001591390', 'sennova', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Jeyson Soto Cardona', 'jeisonsoto3d@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$U6d6/MoxagKRMd2o0DfcXOQrwnAGVPJCPTznfVsKBRBNve9/MEtIe', 'cc', 1053801927, 'funcionario planta', 'Diseñador Visual', 'fotos_usuarios/6A47Sx9kUlzn3gwdVEqD.jpg', 3008935423, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0001414832', 'sennova', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Valentina Hernández Piedrahíta', 'vhernandezp@sena.edu.co', '0000-00-00 00:00:00', '$2y$10$tJAvBfmQNsAal/X7.C/SIuDNVhDLqaobWmfUt6WsFWjJCCD9.g3Jq', 'cc', 30232365, 'funcionario planta', 'Ingeniera Química', 'fotos_usuarios/hGJygzMoxL9sZIpHM3MF.jpg', 3116349192, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000467685', 'tecnoparque', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Luisa Fernanda Echeverri Caballero', 'lfecheverri38@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$I1pfU/XmgyIa2nYYbuwrC.JsOqxBANq4Qlb/CrliOSzEPfhnBYh1S', 'cc', 24335083, 'instructor contratista', 'Licenciada en Filosofía y Letras', 'fotos_usuarios/wVaNMlIhFvtErAnDyoRo.jpg', 3146264428, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000020858', 'sennova', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Jorge Alberto Tamayo Grisales', 'jatamayo27@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$nc9W3HSkM8FYp/7yuea.Xu7cYQK1UTYUaeluiiW2I.w444wTeXxSe', 'cc', 1053782472, 'instructor contratista', 'Arquitecto', 'fotos_usuarios/VhtZkqIiKG3dZylk7NCw.jpg', 3045503577, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000059851', 'sennova', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Aparicio Mejía Rendón', 'apmejiar@sena.edu.co', '0000-00-00 00:00:00', '$2y$10$hQReGH1JCJa4s3Cjl4Mo2.5nuo.IGXB0NxOjsYLe/p4SlJTsCONsa', 'cc', 75091846, 'instructor planta', 'Arquitecto', 'fotos_usuarios/cq6zLYG778OQRke3fSk0.jpg', 3014160504, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0001594098', 'sennova', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Carmen Elena Hernández Rincón', 'carelena@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$DBuQNmlxjdK3TzbNa29MQOxgwWziArtEkkOZxLixQEMKL0bIQ.XES', 'cc', 24340753, 'instructor planta', 'Trabajadora Social', 'fotos_usuarios/kRHIFsJ7e3REDckPhdyE.jpg', 3147917762, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0001584037', 'sennova', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Diego Ángelo Restrepo Zapata', 'darestrepo83@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$ZnqpLiLB2Nx.f3a7VabKQuY2e03D3mrfFgv3jzt2qRZ.IFUUwxlta', 'cc', 75100238, 'funcionario contratista', 'Trabajador Social', 'fotos_usuarios/spm2Cdc5lcLrYycOwbCY.jpg', 3127904073, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0001578015', 'sennova', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Leidy Natalia Gaviria Ocampo', 'lgaviriao@sena.edu.co', '0000-00-00 00:00:00', '$2y$10$kns4EzKkhkBfWvBdoxQxpOS8Du/goPlKMvnrCq0JkGCYy4lqynpDu', 'cc', 1053773750, 'funcionario contratista', 'Ingeniera Industrial', 'fotos_usuarios/PZSgGmSxiOGyP0fNuXMx.jpg', 3105377956, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0001428335', 'tecnoparque', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Carlos Fernando Luna Carlosama', 'cfluna@sena.edu.co', '0000-00-00 00:00:00', '$2y$10$sHO1cgrIQuuqrbD/wHzYq.ZAio.qEVYgjkpdUKCbYDvSe0.1PoiFS', 'cc', 1122782288, 'funcionario contratista', 'Ingeniero Mecánico', 'fotos_usuarios/DhlCgQUKLka7P56NHYfg.jpg', 3116505882, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000041393', 'tecnoparque', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Beatriz Elena Montes Castro', 'bmontes@sena.edu.co', '0000-00-00 00:00:00', '$2y$10$3c6yeqEqpk1WvgrZs3Rgf.zQO7GIhtkFFPYSmuRhJl/QsTlI3L9Wi', 'cc', 41959284, 'funcionario contratista', 'Diseñadora Industrial', 'fotos_usuarios/CsSxQZx7aSFKlgRcN0cP.jpg', 3016960993, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0001492892', 'tecnoparque', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Santiago Sánchez Escobar', 'ssancheze@sena.edu.co', '0000-00-00 00:00:00', '$2y$10$W3pi/GGWEtcWadZTacvwYumlemLPgBEDfDyluImH4.vQRq0NKRKbm', 'cc', 16078225, 'funcionario contratista', 'Ingeniero Electrónico', 'fotos_usuarios/2F30jAfW8wZStiIyNMXO.jpg', 3016119773, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000043936', 'tecnoparque', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Sergio Ivan Ossa Duque', 'siduque@sena.edu.co', '0000-00-00 00:00:00', '$2y$10$51abxhtE5qJrnsobEZChVOnGI9lfmV3VTMo0zy25qaerVGVs0JoJm', 'cc', 75094042, 'funcionario contratista', 'Ingeniero Electrónico', 'fotos_usuarios/WaXvW8BKgmpnap8FXwEc.jpg', 3117471486, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000042591', 'tecnoparque', 'inactivo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Juan Camilo Flórez Ruiz', 'florez87@gmail.com', '0000-00-00 00:00:00', '$2y$10$ZadwUBAl/ux.YsmVFXpdGOVafmBmnf6E49K.wtqw7/a8GWMbO4y1e', 'cc', 1053810000, 'funcionario contratista', 'Ingeniero de Sistemas', 'fotos_usuarios/4Mcs1hSLSooO7ICYPQWw.jpg', 3044886625, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0001458140', 'tecnoparque', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Danny Garzón Jiménez', 'dgarzonj@sena.edu.co', '0000-00-00 00:00:00', '$2y$10$BZ5XTQpqMn09zvh1mYH9jebhfxfQq09ZivpEXm1CWIyMWcp25WA/C', 'cc', 1053777782, 'funcionario contratista', 'Ingeniero de Alimentos', 'fotos_usuarios/5AWtpTXwuCJoxLjGpYQa.jpg', 3165859025, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0001473887', 'tecnoparque', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Gustavo Adolfo Peña Hernández', 'iqgaph@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$0d2Do65DZKRFQ4jwLcsatuPw/dTH/BSbc0KGOwDgbr1xMQ21lFkzm', 'cc', 75098642, 'funcionario contratista', 'Ingeniero Químico', 'fotos_usuarios/nL6XxGjxpY4cXql72pqJ.jpg', 3128860611, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000010620', 'tecnoparque', 'inactivo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Mónica Quintero Moreno', 'mquinteromo@sena.edu.co', '0000-00-00 00:00:00', '$2y$10$34A3FWSbZiaIZiDDP5rHcO6Gk3E.2BoWzLnfHx8A8aOvFeJZqkZSe', 'cc', 1017154633, 'funcionario contratista', 'Ingeniera Biológica', 'fotos_usuarios/sXmRufiYMoVxM4G721Ec.jpg', 3014272814, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0001427452', 'tecnoparque', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Julieth Paola Giraldo Escobar', 'ypgiraldo@sena.edu.co', '0000-00-00 00:00:00', '$2y$10$vm7ZFzJ/fgb./MtMnKwNyeiEIMJfR1k1oIVcw6cM.kXFcZwOkDbg6', 'cc', 30237742, 'funcionario contratista', 'Ingeniera de Sistemas y Telecomunicaciones', 'fotos_usuarios/yi93D4bZxxgXax6aIXoM.jpg', 3015161766, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000571199', 'tecnoparque', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Juan Esteban Serna López', 'jeserna5@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$//NaWHB5QcV1UU3yOtmBjOJRYen/3LOam3Aesq56euU6CLjyC6slC', 'cc', 1053844605, 'funcionario contratista', 'Tgo. Desarrollo Gráfico de proyectos de Arquitectura e Ingeniería', 'fotos_usuarios/y5HNV1d6rxIDwHaItqbx.jpg', 3217555776, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000114778', 'sennova', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Alvaro Santiago Orozco Rodríguez', 'asorozco412@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$5c3F7yrlwndH1eelnCO/zu0oNPMFPB0t98JqH7GgJpJopkshKNqIu', 'cc', 1118558214, 'funcionario contratista', 'Tgo. Análisis y Desarrollo de Sistemas de Información', 'fotos_usuarios/2AAvfSvcaHsnOl929xVR.jpg', 3017337563, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000115487', 'sennova', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Julian Guillermo Bravo Dussan', 'jgbravo3@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$4SynSVz6a6Q/UQRVsqRoueCLaxsT7tJ8OyshG340lYQH1djWbGYwC', 'cc', 1032465973, 'funcionario contratista', 'Tgo. en Mantenimiento Mecatrónico de Automotores', 'fotos_usuarios/I6uCOCHTG1otHFL6Gdrw.jpg', 3194818356, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000128429', 'sennova', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Sergio Gaviria Cardona (†)', 'sgaviria73@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$gjY.nL3LL46H/Ov.NTbWoOyYT.1Csrcn4rzLTXsVnpccgcGvVhupy', 'cc', 1053843337, 'funcionario contratista', 'Tgo. Análisis y Desarrollo de Sistemas de Información', 'fotos_usuarios/9gaiHBDWYA4t0FHOpe4d.jpg', 3022383427, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000117215', 'sennova', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Santiago Loaiza Giraldo', 'sloaiza36@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$EGf6vDg7D.NpOIw4wqpqOeHWqGNJCFMNAdONYlUaTAGZmiyUNSsLq', 'cc', 1059709063, 'aprendiz practica', '', 'fotos_usuarios/no-photo.png', 3136650194, NULL, '', 'inactivo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Anthony Parra Malaver', 'anthonyma@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$WrIpEP2wF3kj1FyxhdvldeaGKK8vT.V6yO6HOyuWio87DfEHI58MS', 'ti', 1053856434, 'aprendiz practica', '', 'fotos_usuarios/no-photo.png', 3117907968, NULL, '', 'inactivo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Einner Cañon Gómez', 'ecanon86@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$bmklzjRrOj7arYW2E56nWOnUa4X.ziEopcrlY.5Mu0i5maQuuLU3u', 'cc', 1060654812, 'aprendiz practica', '', 'fotos_usuarios/no-photo.png', 3137717007, NULL, '', 'inactivo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Kevin Alejandro Rodriguez Suarez', 'karodriguez370@misena.edu.co', '0000-00-00 00:00:00', '$2y$10$Ah8IzUugUrHqBV/yMwwhkOaY7MhG2uelnbBko9uETRAHnmhO9VcPS', 'cc', 1060654073, 'aprendiz practica', '', 'fotos_usuarios/no-photo.png', 3122631896, NULL, '', 'inactivo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Administrador SENNOVA ', 'administracion@grindda.com', '0000-00-00 00:00:00', '$2a$04$5K7m2kN/ZtQjStHaszivYupfn3ewOCtC2qRi7kCCNaNA3rJH5/65i', 'cc', 10000000, 'instructor planta', '', 'fotos_usuarios/no-photo.png', 31000000, NULL, '', 'activo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'eduardo arango oliveros', 'eduardo.arango@ucm.edu.co', '0000-00-00 00:00:00', '$2y$10$MmMXlUX/Ah7HR9TQBkvp0uCCCRzrW0uwjLCKTVWLq5D4ZE4ZV11gG', 'cc', 1053824775, 'aprendiz practica', '', 'fotos_usuarios/no-photo.png', 3003939199, NULL, '', 'inactivo', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'ADMIN GRINDDA ', 'admin@mail.com', '0000-00-00 00:00:00', '$2a$04$NMi4Pa1g7zYaMxdO1tE3murL8gHpg.SH9ty0j38cspX/4khHNNHQG', 'cc', 1053, 'funcionario contratista', '', 'fotos_usuarios/no-photo.png', 312744, NULL, '', 'activo', 'ILbfYpgZTYWtE28yzr3qBJNDYULxncCRyIjJPyIRivNMIERPGXoA8p5oawFb', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aliados`
--
ALTER TABLE `aliados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aplicaciones`
--
ALTER TABLE `aplicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aprendices_email_unique` (`email`),
  ADD KEY `aprendices_programa_formacion_id_foreign` (`programa_formacion_id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos_investigacion`
--
ALTER TABLE `grupos_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lineas_investigacion`
--
ALTER TABLE `lineas_investigacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lineas_investigacion_lider_id_foreign` (`lider_id`);

--
-- Indices de la tabla `linea_investigacion_semillero`
--
ALTER TABLE `linea_investigacion_semillero`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linea_investigacion_semillero_linea_investigacion_id_foreign` (`linea_investigacion_id`),
  ADD KEY `linea_investigacion_semillero_semillero_id_foreign` (`semillero_id`);

--
-- Indices de la tabla `linea_investigacion_usuario`
--
ALTER TABLE `linea_investigacion_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linea_investigacion_usuario_linea_investigacion_id_foreign` (`linea_investigacion_id`),
  ADD KEY `linea_investigacion_usuario_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `programas_formacion`
--
ALTER TABLE `programas_formacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyectos_lider_id_foreign` (`lider_id`);

--
-- Indices de la tabla `proyecto_autor`
--
ALTER TABLE `proyecto_autor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyecto_autor_proyecto_id_foreign` (`proyecto_id`),
  ADD KEY `proyecto_autor_autor_id_foreign` (`autor_id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_usuario_rol_id_foreign` (`rol_id`),
  ADD KEY `rol_usuario_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `semilleros`
--
ALTER TABLE `semilleros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semillero_proyecto`
--
ALTER TABLE `semillero_proyecto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semillero_proyecto_semillero_id_foreign` (`semillero_id`),
  ADD KEY `semillero_proyecto_proyecto_id_foreign` (`proyecto_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aliados`
--
ALTER TABLE `aliados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `aplicaciones`
--
ALTER TABLE `aplicaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `grupos_investigacion`
--
ALTER TABLE `grupos_investigacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lineas_investigacion`
--
ALTER TABLE `lineas_investigacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `linea_investigacion_semillero`
--
ALTER TABLE `linea_investigacion_semillero`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `linea_investigacion_usuario`
--
ALTER TABLE `linea_investigacion_usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `programas_formacion`
--
ALTER TABLE `programas_formacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyecto_autor`
--
ALTER TABLE `proyecto_autor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `semilleros`
--
ALTER TABLE `semilleros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `semillero_proyecto`
--
ALTER TABLE `semillero_proyecto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD CONSTRAINT `aprendices_programa_formacion_id_foreign` FOREIGN KEY (`programa_formacion_id`) REFERENCES `programas_formacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lineas_investigacion`
--
ALTER TABLE `lineas_investigacion`
  ADD CONSTRAINT `lineas_investigacion_lider_id_foreign` FOREIGN KEY (`lider_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `linea_investigacion_semillero`
--
ALTER TABLE `linea_investigacion_semillero`
  ADD CONSTRAINT `linea_investigacion_semillero_linea_investigacion_id_foreign` FOREIGN KEY (`linea_investigacion_id`) REFERENCES `lineas_investigacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `linea_investigacion_semillero_semillero_id_foreign` FOREIGN KEY (`semillero_id`) REFERENCES `semilleros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `linea_investigacion_usuario`
--
ALTER TABLE `linea_investigacion_usuario`
  ADD CONSTRAINT `linea_investigacion_usuario_linea_investigacion_id_foreign` FOREIGN KEY (`linea_investigacion_id`) REFERENCES `lineas_investigacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `linea_investigacion_usuario_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_lider_id_foreign` FOREIGN KEY (`lider_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyecto_autor`
--
ALTER TABLE `proyecto_autor`
  ADD CONSTRAINT `proyecto_autor_autor_id_foreign` FOREIGN KEY (`autor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyecto_autor_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD CONSTRAINT `rol_usuario_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rol_usuario_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `semillero_proyecto`
--
ALTER TABLE `semillero_proyecto`
  ADD CONSTRAINT `semillero_proyecto_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `semillero_proyecto_semillero_id_foreign` FOREIGN KEY (`semillero_id`) REFERENCES `semilleros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
