-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-02-2020 a las 20:20:06
-- Versión del servidor: 5.7.29-0ubuntu0.18.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `osolelaravel_conduplast`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `elim` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `order`, `resume`, `text`, `image`, `elim`, `created_at`, `updated_at`) VALUES
(1, 'aa', '<p><span style=\"color:#666666\"><span style=\"font-size:16px\">Utilizado en instalaciones fijas de interior, aparatos y electrodom&eacute;sticos</span></span></p>', 'Alambres', '{\"i\":\"images\\/categorias\\/1582227684_image.png\",\"e\":\"png\",\"n\":\"1582227684_image\",\"d\":{\"0\":269,\"1\":269,\"2\":3,\"3\":\"width=\\\"269\\\" height=\\\"269\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}', 0, '2020-02-20 22:41:24', '2020-02-20 22:44:36'),
(2, 'bb', '<p><span style=\"color:#666666\"><span style=\"font-size:16px\">Cobre electrol&iacute;tico recocido de alta pureza, aislada en PVC</span></span></p>', 'Unipolares', '{\"i\":\"images\\/categorias\\/1582227712_image.png\",\"e\":\"png\",\"n\":\"1582227712_image\",\"d\":{\"0\":269,\"1\":269,\"2\":3,\"3\":\"width=\\\"269\\\" height=\\\"269\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}', 0, '2020-02-20 22:41:52', '2020-02-20 22:44:45'),
(3, 'cc', '<p><span style=\"color:#666666\"><span style=\"font-size:16px\">Cobre electrol&iacute;tico recocido de alta pureza, aisladas en PVC</span></span></p>', 'Envainados', '{\"i\":\"images\\/categorias\\/1582227762_image.png\",\"e\":\"png\",\"n\":\"1582227762_image\",\"d\":{\"0\":269,\"1\":269,\"2\":3,\"3\":\"width=\\\"269\\\" height=\\\"269\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}', 0, '2020-02-20 22:42:42', '2020-02-20 22:44:54'),
(4, 'dd', '<p><span style=\"color:#666666\"><span style=\"font-size:16px\">Usado en instrumentaci&oacute;n electr&oacute;nica, y sistemas de transmisi&oacute;n de datos</span></span></p>', 'Blindados', '{\"i\":\"images\\/categorias\\/1582227808_image.png\",\"e\":\"png\",\"n\":\"1582227808_image\",\"d\":{\"0\":269,\"1\":269,\"2\":3,\"3\":\"width=\\\"269\\\" height=\\\"269\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}', 0, '2020-02-20 22:43:28', '2020-02-20 22:43:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `elim` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `section`, `data`, `elim`, `created_at`, `updated_at`) VALUES
(1, 'p1', '{\"e1\":{\"image\":{\"i\":\"images\\/contenido_p1_elemento_1\\/1582211730_image.png\",\"e\":\"png\",\"n\":\"1582211730_image\",\"d\":{\"0\":671,\"1\":319,\"2\":3,\"3\":\"width=\\\"671\\\" height=\\\"319\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}},\"text\":\"<p>El Cable de la Secci&oacute;n Exacta<\\/p>\\n\\n<table border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\" style=\\\"width:0px\\\">\\n\\t<tbody>\\n\\t\\t<tr>\\n\\t\\t\\t<td><img alt=\\\"\\\" src=\\\"http:\\/\\/localhost:8000\\/images\\/imagen\\/1582211264_image.png\\\" style=\\\"height:40px; width:40px\\\" \\/><\\/td>\\n\\t\\t\\t<td>M&aacute;s de 50 a&ntilde;os de trayectoria<\\/td>\\n\\t\\t<\\/tr>\\n\\t\\t<tr>\\n\\t\\t\\t<td><img alt=\\\"\\\" src=\\\"http:\\/\\/localhost:8000\\/images\\/imagen\\/1582211333_image.png\\\" style=\\\"height:40px; width:40px\\\" \\/><\\/td>\\n\\t\\t\\t<td>Alta durabilidad y calidad<\\/td>\\n\\t\\t<\\/tr>\\n\\t\\t<tr>\\n\\t\\t\\t<td><img alt=\\\"\\\" src=\\\"http:\\/\\/localhost:8000\\/images\\/imagen\\/1582211340_image.png\\\" style=\\\"height:40px; width:40px\\\" \\/><\\/td>\\n\\t\\t\\t<td>Industria Nacional Argentina<\\/td>\\n\\t\\t<\\/tr>\\n\\t<\\/tbody>\\n<\\/table>\\n\\n<p>&nbsp;<\\/p>\"},\"e2\":{\"image\":{\"i\":\"images\\/contenido_p1_elemento_2\\/1582211730_image.jpg\",\"e\":\"jpg\",\"n\":\"1582211730_image\",\"d\":{\"0\":1350,\"1\":400,\"2\":2,\"3\":\"width=\\\"1350\\\" height=\\\"400\\\"\",\"bits\":8,\"channels\":3,\"mime\":\"image\\/jpeg\"}},\"text\":\"<p><img alt=\\\"\\\" class=\\\"d-block mx-auto\\\" src=\\\"http:\\/\\/localhost:8000\\/images\\/imagen\\/1582211347_image.png\\\" style=\\\"height:54px; width:54px\\\" \\/><\\/p>\\n\\n<h2 style=\\\"text-align:center\\\"><span style=\\\"font-size:36px\\\">Consulte por pedidos especiales<\\/span><\\/h2>\\n\\n<h3 style=\\\"text-align:center\\\"><span style=\\\"font-size:16px\\\">CONFECCIONAMOS CONDUCTORES ESPECIALES<\\/span><\\/h3>\\n\\n<p style=\\\"text-align:center\\\"><span style=\\\"font-size:16px\\\">Conduplast posee amplia experiencia en la confecci&oacute;n de coductores especiales.<br \\/>\\nIngrese al formulario para enviar una consulta. Nuestros ingenieros brindan<br \\/>\\nasesoramiento en la especificaci&oacute;n y eval&uacute;an la mejor soluci&oacute;n para su proyecto.<\\/span><\\/p>\",\"btn\":\"Pedidos\",\"btn_link\":null}}', 0, '2020-02-20 18:01:49', '2020-02-20 18:15:30'),
(2, 'p2', '{\"e1\":{\"image\":{\"i\":\"images\\/contenido_p2_elemento_1\\/1582219419_image.png\",\"e\":\"png\",\"n\":\"1582219419_image\",\"d\":{\"0\":361,\"1\":417,\"2\":3,\"3\":\"width=\\\"361\\\" height=\\\"417\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}},\"text\":\"<h2><span style=\\\"color:#c82828\\\">Conduplast es sin&oacute;nimo de durabilidad y seguridad<\\/span><\\/h2>\\n\\n<p><span style=\\\"color:#444444\\\"><span style=\\\"font-size:16px\\\">Conduplast S.A. es una empresa dedicada a la fabricaci&oacute;n de conductores el&eacute;ctricos, ofreciendo al mercado una amplia gama de productos que se destacan por su durabilidad y calidad, avalados por sus m&aacute;s de 50 a&ntilde;os de experiencia en el rubro.<\\/span><\\/span><\\/p>\\n\\n<p><span style=\\\"color:#444444\\\"><span style=\\\"font-size:16px\\\">Fundada en 1957 por Alejandro Russo, industrial visionario y pujante que supo prever el porvenir del cable bajo pl&aacute;stico, confiando en sus posibilidades y el alcance de su comercializaci&oacute;n, comenz&oacute; con la fabricaci&oacute;n de conductores el&eacute;ctricos con la convicci&oacute;n de su aceptaci&oacute;n en el rubro.<\\/span><\\/span><\\/p>\\n\\n<p><span style=\\\"color:#444444\\\"><span style=\\\"font-size:16px\\\">Bajo el lema de &ldquo;El cable de la secci&oacute;n exacta&rdquo; Conduplast S.A. comenz&oacute; a distinguirse por la calidad del producto, que sometido a estrictos controles, y sin salir a conquistar el interior del pa&iacute;s, fue ganando ese segmento por la recomendaci&oacute;n de los clientes.<\\/span><\\/span><\\/p>\\n\\n<p><span style=\\\"color:#444444\\\"><span style=\\\"font-size:16px\\\">Siguiendo esa conducta profesional, el fundador obtuvo la confianza y el respeto de las casas del gremio de audio, radio y televisi&oacute;n en la Capital Federal y el Gran Buenos Aires, trasladando luego las instalaciones a Dean Funes al 900, donde la empresa funcion&oacute; durante 27 a&ntilde;os.<\\/span><\\/span><\\/p>\"},\"e2\":[{\"order\":\"1957\",\"text\":\"<p style=\\\"text-align:center\\\">Fundada en 1957 por Alejandro Russo, industrial visionario y pujante que supo prever el porvenir del cable bajo pl&aacute;stico, confiando en sus posibilidades y el alcance de su comercializaci&oacute;n, comenz&oacute; con la fabricaci&oacute;n de conductores el&eacute;ctricos con la convicci&oacute;n de su aceptaci&oacute;n en el rubro.<\\/p>\\n\\n<p style=\\\"text-align:center\\\">Las actividades se desarrollaban en Pringles al 400, en la Capital Federal, y aunque fue dif&iacute;cil al inicio, con mucha dedicaci&oacute;n consigui&oacute; que sus productos fueran ocupando un lugar en el mercado.<\\/p>\",\"image\":{\"i\":\"images\\/contenido_p2_elemento_2\\/1582219419_image_1_0.jpg\",\"e\":\"jpg\",\"n\":\"1582219419_image_1_0\",\"d\":{\"0\":389,\"1\":296,\"2\":2,\"3\":\"width=\\\"389\\\" height=\\\"296\\\"\",\"bits\":8,\"channels\":3,\"mime\":\"image\\/jpeg\"}}}]}', 0, '2020-02-20 18:23:03', '2020-02-20 21:35:34'),
(3, 'p6', '{\"e1\":{\"image\":{\"i\":\"images\\/contenido_p6_elemento_1\\/1582310098_image.jpg\",\"e\":\"jpg\",\"n\":\"1582310098_image\",\"d\":{\"0\":571,\"1\":374,\"2\":2,\"3\":\"width=\\\"571\\\" height=\\\"374\\\"\",\"bits\":8,\"channels\":3,\"mime\":\"image\\/jpeg\"}},\"text\":\"<h3><span style=\\\"font-size:28px\\\"><span style=\\\"color:#c82828\\\">Desde 1957 fabricando<br \\/>\\n&ldquo;El Cable de la Secci&oacute;n Exacta&rdquo;<\\/span><\\/span><\\/h3>\\n\\n<p><span style=\\\"color:#666666\\\"><span style=\\\"font-size:20px\\\">Evaluaci&oacute;n y seguimiento de nuestros procesos<\\/span><\\/span><\\/p>\\n\\n<p><span style=\\\"color:#666666\\\"><span style=\\\"font-size:16px\\\">Conduplast posee amplia experiencia en la confecci&oacute;n de coductores especiales. Nuestros ingenieros pueden asesorarlo en la especificaci&oacute;n y evaluar la mejor soluci&oacute;n para su proyecto.<\\/span><\\/span><\\/p>\\n\\n<p><span style=\\\"color:#666666\\\"><span style=\\\"font-size:16px\\\">Nuestro proceso de fabricac&iacute;on combina tecnolog&iacute;a de punta con intensivos controles a lo largo de todo el proceso.<\\/span><\\/span><\\/p>\\n\\n<p><span style=\\\"color:#666666\\\"><span style=\\\"font-size:16px\\\">Ingenieros especialmente capacitados analizan los requerimientos de su proyecto y le asesoran sobre la especificaci&oacute;n de conductores que mejor responden a su caso particular.<\\/span><\\/span><\\/p>\"},\"e2\":[{\"order\":\"1\",\"title\":\"Informaci\\u00f3n de cables\",\"file\":{\"i\":\"files\\/contenido_p6_elemento_2\\/pdf-test1.pdf\",\"e\":\"pdf\",\"n\":\"pdf-test1\",\"d\":null}}]}', 0, '2020-02-21 21:25:22', '2020-02-21 21:37:59'),
(4, 'p4', '{\"e1\":[{\"order\":\"1\",\"title\":\"Cable unipolar sin esta\\u00f1ar\",\"text\":\"<p>Cuerdas formadas por hilos de alambre de cobre electrol&iacute;tico recocido de alta pureza, aislada en PVC. La fabricaci&oacute;n de nuestros productos es llevada a cabo con la mayor calidad en materia prima, utilizando para su elaboraci&oacute;n cobre de alta pureza en di&aacute;metros de hasta 0,05mm. Para su aislamiento utilizamos PVC y PE v&iacute;rgenes de primer&iacute;simas marcas y calidad (Princz S.A., Tecnocom, Alfa Vinil, entre otros).<\\/p>\",\"image\":{\"i\":\"images\\/contenido_p4_elemento_1\\/1582312301_image_0_0.jpg\",\"e\":\"jpg\",\"n\":\"1582312301_image_0_0\",\"d\":{\"0\":389,\"1\":296,\"2\":2,\"3\":\"width=\\\"389\\\" height=\\\"296\\\"\",\"bits\":8,\"channels\":3,\"mime\":\"image\\/jpeg\"}},\"icon\":{\"i\":\"images\\/contenido_p4_elemento_1\\/1582312301_icon_0_0.png\",\"e\":\"png\",\"n\":\"1582312301_icon_0_0\",\"d\":{\"0\":40,\"1\":40,\"2\":3,\"3\":\"width=\\\"40\\\" height=\\\"40\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}},{\"order\":\"2\",\"title\":\"Cable\",\"text\":\"<p>Cuerdas formadas por hilos de alambre de cobre electrol&iacute;tico recocido de alta pureza, aislada en PVC.<\\/p>\",\"image\":{\"i\":\"images\\/contenido_p4_elemento_1\\/1582522003_image_0_1.jpg\",\"e\":\"jpg\",\"n\":\"1582522003_image_0_1\",\"d\":{\"0\":389,\"1\":296,\"2\":2,\"3\":\"width=\\\"389\\\" height=\\\"296\\\"\",\"bits\":8,\"channels\":3,\"mime\":\"image\\/jpeg\"}},\"icon\":{\"i\":\"images\\/contenido_p4_elemento_1\\/1582522003_icon_0_1.png\",\"e\":\"png\",\"n\":\"1582522003_icon_0_1\",\"d\":{\"0\":40,\"1\":40,\"2\":3,\"3\":\"width=\\\"40\\\" height=\\\"40\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}}]}', 0, '2020-02-21 21:58:33', '2020-02-24 08:26:43'),
(5, 'terminos', '{\"title\":\"T\\u00e9rminos y Condiciones de Uso\",\"text\":\"<p><strong>INFORMACI&Oacute;N RELEVANTE<\\/strong><\\/p>\\n\\n<p>Es requisito necesario para la adquisici&oacute;n de los productos que se ofrecen en este sitio, que lea y acepte los siguientes T&eacute;rminos y Condiciones que a continuaci&oacute;n se redactan. El uso de nuestros servicios as&iacute; como la compra de nuestros productos implicar&aacute; que usted ha le&iacute;do y aceptado los T&eacute;rminos y Condiciones de Uso en el presente documento. Todas los productos &nbsp;que son ofrecidos por nuestro sitio web pudieran ser creadas, cobradas, enviadas o presentadas por una p&aacute;gina web tercera y en tal caso estar&iacute;an sujetas a sus propios T&eacute;rminos y Condiciones. En algunos casos, para adquirir un producto, ser&aacute; necesario el registro por parte del usuario, con ingreso de datos personales fidedignos y definici&oacute;n de una contrase&ntilde;a.<\\/p>\\n\\n<p>El usuario puede elegir y cambiar la clave para su acceso de administraci&oacute;n de la cuenta en cualquier momento, en caso de que se haya registrado y que sea necesario para la compra de alguno de nuestros productos. http:\\/\\/www.conduplast.com\\/ no asume la responsabilidad en caso de que entregue dicha clave a terceros.<\\/p>\\n\\n<p>Todas las compras y transacciones que se lleven a cabo por medio de este sitio web, est&aacute;n sujetas a un proceso de confirmaci&oacute;n y verificaci&oacute;n, el cual podr&iacute;a incluir la verificaci&oacute;n del stock y disponibilidad de producto, validaci&oacute;n de la forma de pago, validaci&oacute;n de la factura (en caso de existir) y el cumplimiento de las condiciones requeridas por el medio de pago seleccionado. En algunos casos puede que se requiera una verificaci&oacute;n por medio de correo electr&oacute;nico.<\\/p>\\n\\n<p>Los precios de los productos ofrecidos en esta Tienda Online es v&aacute;lido solamente en las compras realizadas en este sitio web.<\\/p>\\n\\n<p><strong>LICENCIA<\\/strong><\\/p>\\n\\n<p>Conduplast S.A.&nbsp; a trav&eacute;s de su sitio web concede una licencia para que los usuarios utilicen&nbsp; los productos que son vendidos en este sitio web de acuerdo a los T&eacute;rminos y Condiciones que se describen en este documento.<\\/p>\\n\\n<p><strong>USO NO AUTORIZADO<\\/strong><\\/p>\\n\\n<p>En caso de que aplique (para venta de software, templetes, u otro producto de dise&ntilde;o y programaci&oacute;n) usted no puede colocar uno de nuestros productos, modificado o sin modificar, en un CD, sitio web o ning&uacute;n otro medio y ofrecerlos para la redistribuci&oacute;n o la reventa de ning&uacute;n tipo.<\\/p>\\n\\n<p><strong>PROPIEDAD<\\/strong><\\/p>\\n\\n<p>Usted no puede declarar propiedad intelectual o exclusiva a ninguno de nuestros productos, modificado o sin modificar. Todos los productos son propiedad &nbsp;de los proveedores del contenido. En caso de que no se especifique lo contrario, nuestros productos se proporcionan&nbsp; sin ning&uacute;n tipo de garant&iacute;a, expresa o impl&iacute;cita. En ning&uacute;n esta compa&ntilde;&iacute;a ser&aacute; &nbsp;responsables de ning&uacute;n da&ntilde;o incluyendo, pero no limitado a, da&ntilde;os directos, indirectos, especiales, fortuitos o consecuentes u otras p&eacute;rdidas resultantes del uso o de la imposibilidad de utilizar nuestros productos.<\\/p>\\n\\n<p><strong>POL&Iacute;TICA DE REEMBOLSO Y GARANT&Iacute;A<\\/strong><\\/p>\\n\\n<p>En el caso de productos que sean&nbsp; mercanc&iacute;as irrevocables no-tangibles, no realizamos reembolsos despu&eacute;s de que se env&iacute;e el producto, usted tiene la responsabilidad de entender antes de comprarlo. &nbsp;Le pedimos que lea cuidadosamente antes de comprarlo. Hacemos solamente excepciones con esta regla cuando la descripci&oacute;n no se ajusta al producto. Hay algunos productos que pudieran tener garant&iacute;a y posibilidad de reembolso pero este ser&aacute; especificado al comprar el producto. En tales casos la garant&iacute;a solo cubrir&aacute; fallas de f&aacute;brica y s&oacute;lo se har&aacute; efectiva cuando el producto se haya usado correctamente. La garant&iacute;a no cubre aver&iacute;as o da&ntilde;os ocasionados por uso indebido. Los t&eacute;rminos de la garant&iacute;a est&aacute;n asociados a fallas de fabricaci&oacute;n y funcionamiento en condiciones normales de los productos y s&oacute;lo se har&aacute;n efectivos estos t&eacute;rminos si el equipo ha sido usado correctamente. Esto incluye:<\\/p>\\n\\n<p>&ndash; De acuerdo a las especificaciones t&eacute;cnicas indicadas para cada producto.<br \\/>\\n&ndash; En condiciones ambientales acorde con las especificaciones indicadas por el fabricante.<br \\/>\\n&ndash; En uso espec&iacute;fico para la funci&oacute;n con que fue dise&ntilde;ado de f&aacute;brica.<br \\/>\\n&ndash; En condiciones de operaci&oacute;n el&eacute;ctricas acorde con las especificaciones y tolerancias indicadas.<\\/p>\\n\\n<p><strong>COMPROBACI&Oacute;N ANTIFRAUDE<\\/strong><\\/p>\\n\\n<p>La compra del cliente puede ser aplazada para la comprobaci&oacute;n antifraude. Tambi&eacute;n puede ser suspendida por m&aacute;s tiempo para una investigaci&oacute;n m&aacute;s rigurosa, para evitar transacciones fraudulentas.<\\/p>\\n\\n<p><strong>PRIVACIDAD<\\/strong><\\/p>\\n\\n<p>Este <a href=\\\"http:\\/\\/www.conduplast.com\\/\\\" target=\\\"_blank\\\">sitio web<\\/a> garantiza que la informaci&oacute;n personal que usted env&iacute;a cuenta con la seguridad necesaria. Los datos ingresados por usuario o en el caso de requerir una validaci&oacute;n de los pedidos no ser&aacute;n entregados a terceros, salvo que deba ser revelada en cumplimiento a una orden judicial o requerimientos legales.<\\/p>\\n\\n<p>La suscripci&oacute;n a boletines de correos electr&oacute;nicos publicitarios es voluntaria y podr&iacute;a ser seleccionada al momento de crear su cuenta.<\\/p>\\n\\n<p>Conduplast S.A. reserva los derechos de cambiar o de modificar estos t&eacute;rminos sin previo aviso.<\\/p>\"}', 0, '2020-02-21 22:36:37', '2020-02-21 22:40:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `phone` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `domicile` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `social_networks` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `metadata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `form` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `sections` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `captcha` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `email`, `phone`, `domicile`, `social_networks`, `images`, `metadata`, `form`, `sections`, `captcha`, `text`, `created_at`, `updated_at`) VALUES
(1, '[\"conduplast@conduplast.com.ar\"]', '[{\"telefono\":\"01149121758\",\"tipo\":\"tel\",\"visible\":\"(011) 4912-1758\",\"texto\":null,\"is_link\":1,\"is_header\":1,\"elementos\":\"number\"},{\"telefono\":\"01149121760\",\"tipo\":\"tel\",\"visible\":\"(011) 4912-1760\",\"texto\":null,\"is_link\":1,\"is_header\":null,\"elementos\":\"number\"},{\"telefono\":\"5491159542888\",\"tipo\":\"wha\",\"visible\":\"15-5954-2888\",\"texto\":null,\"is_link\":1,\"is_header\":1,\"elementos\":\"number\"}]', '{\"calle\":\"Famatina\",\"altura\":\"3748\",\"localidad\":\"Parque de los Patricios\",\"provincia\":\"Buenos Aires\",\"pais\":\"Argentina\",\"cp\":\"1437\",\"detalle\":null,\"mapa\":\"<iframe src=\\\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3282.29968979251!2d-58.41691148468669!3d-34.64713366730378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb752bcb559f%3A0x894348c9802be5a1!2sConduplast!5e0!3m2!1ses!2sar!4v1582313007850!5m2!1ses!2sar\\\" width=\\\"600\\\" height=\\\"450\\\" frameborder=\\\"0\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\"><\\/iframe>\",\"link\":\"https:\\/\\/goo.gl\\/maps\\/g9nddLKm3CGVpfHKA\"}', '{\"1582459780\":{\"redes\":\"facebook\",\"titulo\":\"Facebook Conduplast\",\"url\":\"https:\\/\\/www.facebook.com\\/\"}}', '{\"logo\":{\"i\":\"images\\/empresa_images\\/1582313265_logo.png\",\"e\":\"png\",\"n\":\"1582313265_logo\",\"d\":{\"0\":302,\"1\":69,\"2\":3,\"3\":\"width=\\\"302\\\" height=\\\"69\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}},\"logoFooter\":{\"i\":\"images\\/empresa_images\\/1582313265_logoFooter.png\",\"e\":\"png\",\"n\":\"1582313265_logoFooter\",\"d\":{\"0\":236,\"1\":53,\"2\":3,\"3\":\"width=\\\"236\\\" height=\\\"53\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}},\"favicon\":null}', '{\"p1\":{\"description\":null,\"keywords\":null},\"p2\":{\"description\":null,\"keywords\":null},\"p3\":{\"description\":null,\"keywords\":null},\"p4\":{\"description\":null,\"keywords\":null},\"p5\":{\"description\":null,\"keywords\":null},\"p6\":{\"description\":null,\"keywords\":null},\"p7\":{\"description\":null,\"keywords\":null},\"p8\":{\"description\":null,\"keywords\":null}}', '{\"contacto\":\"corzo.pabloariel@gmail.com\",\"pedido\":\"corzo.pabloariel@gmail.com\"}', '[\n  {\n    \"p1\": {\n      \"FIRST\": null,\n      \"NAME\": \"Inicio\",\n      \"GROUP\": 0,\n      \"IMAGE\": \"<i class=\'fab fa-angellist\'></i>\",\n      \"LINK\": \"/\",\n      \"URL\": [\n        \"/\"\n      ]\n    },\n    \"p2\": {\n      \"FIRST\": null,\n      \"NAME\": \"Empresa\",\n      \"GROUP\": 0,\n      \"IMAGE\": \"<i class=\'fab fa-angellist\'></i>\",\n      \"LINK\": \"empresa\",\n      \"URL\": [\n        \"empresa\"\n      ],\n      \"ICON\": \"<i class=\\\"fas fa-industry\\\"></i>\"\n    },\n    \"p3\": {\n      \"FIRST\": null,\n      \"NAME\": \"Productos\",\n      \"GROUP\": 0,\n      \"IMAGE\": \"<i class=\'fab fa-angellist\'></i>\",\n      \"LINK\": \"productos\",\n      \"URL\": [\n        \"productos\"\n      ],\n      \"ICON\": \"<i class=\\\"fab fa-product-hunt\\\"></i>\"\n    },\n    \"p4\": {\n      \"FIRST\": null,\n      \"NAME\": \"Cables Especiales\",\n      \"GROUP\": 0,\n      \"IMAGE\": \"<i class=\'fab fa-angellist\'></i>\",\n      \"LINK\": \"cables-especiales\",\n      \"URL\": [\n        \"cables-especiales\"\n      ],\n      \"ICON\": \"<i class=\\\"fas fa-store-alt\\\"></i>\"\n    },\n    \"p5\": {\n      \"FIRST\": null,\n      \"NAME\": \"Sectores\",\n      \"GROUP\": 1,\n      \"IMAGE\": \"<i class=\'fab fa-angellist\'></i>\",\n      \"LINK\": \"sectores\",\n      \"URL\": [\n        \"sectores\"\n      ],\n      \"ICON\": \"<i class=\\\"fas fa-puzzle-piece\\\"></i>\"\n    },\n    \"p6\": {\n      \"FIRST\": null,\n      \"NAME\": \"Informacion Tecnica\",\n      \"GROUP\": 1,\n      \"IMAGE\": \"<i class=\'fab fa-angellist\'></i>\",\n      \"LINK\": \"informacion-tecnica\",\n      \"URL\": [\n        \"informacion-tecnica\"\n      ],\n      \"ICON\": \"<i class=\\\"fas fa-info-circle\\\"></i>\"\n    },\n    \"p7\": {\n      \"FIRST\": null,\n      \"NAME\": \"Pedidos\",\n      \"GROUP\": 1,\n      \"IMAGE\": \"<i class=\'fab fa-angellist\'></i>\",\n      \"LINK\": \"pedidos\",\n      \"URL\": [\n        \"pedidos\"\n      ],\n      \"ICON\": \"<i class=\\\"fas fa-info-circle\\\"></i>\"\n    },\n    \"p8\": {\n      \"FIRST\": null,\n      \"NAME\": \"Contacto\",\n      \"GROUP\": 1,\n      \"IMAGE\": \"<i class=\'fab fa-angellist\'></i>\",\n      \"LINK\": \"contacto\",\n      \"URL\": [\n        \"contacto\"\n      ],\n      \"ICON\": \"<i class=\\\"fas fa-info-circle\\\"></i>\"\n    }\n  }\n]', '{\"public\":\"6LfVH9sUAAAAAAZ1kHFCrzDSO92XwgzAsvO_LJuh\",\"private\":\"6LfVH9sUAAAAAJPJRDyQ9OierUPzhTB9BeL_tEQS\"}', '{\"text_contact\":\"<p>Para m&aacute;s informaci&oacute;n comunicate con nosotros v&iacute;a email a <a href=\\\"mailto:conduplast@conduplast.com.ar\\\"><span style=\\\"color:#c82828\\\">conduplast@conduplast.com.ar<\\/span><\\/a> o completando el siguiente formulario.<\\/p>\"}', '2020-02-20 13:13:30', '2020-02-25 06:52:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `elim` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `image`, `elim`, `created_at`, `updated_at`) VALUES
(1, '{\"i\":\"images\\/imagen\\/1582211264_image.png\",\"e\":\"png\",\"n\":\"1582211264_image\",\"d\":{\"0\":40,\"1\":40,\"2\":3,\"3\":\"width=\\\"40\\\" height=\\\"40\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}', 0, '2020-02-20 18:07:44', '2020-02-20 18:07:44'),
(2, '{\"i\":\"images\\/imagen\\/1582211333_image.png\",\"e\":\"png\",\"n\":\"1582211333_image\",\"d\":{\"0\":40,\"1\":40,\"2\":3,\"3\":\"width=\\\"40\\\" height=\\\"40\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}', 0, '2020-02-20 18:08:53', '2020-02-20 18:08:53'),
(3, '{\"i\":\"images\\/imagen\\/1582211340_image.png\",\"e\":\"png\",\"n\":\"1582211340_image\",\"d\":{\"0\":40,\"1\":40,\"2\":3,\"3\":\"width=\\\"40\\\" height=\\\"40\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}', 0, '2020-02-20 18:09:00', '2020-02-20 18:09:00'),
(4, '{\"i\":\"images\\/imagen\\/1582211347_image.png\",\"e\":\"png\",\"n\":\"1582211347_image\",\"d\":{\"0\":54,\"1\":54,\"2\":3,\"3\":\"width=\\\"54\\\" height=\\\"54\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}', 0, '2020-02-20 18:09:07', '2020-02-20 18:09:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `notification` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_01_21_140014_create_empresa_table', 1),
(4, '2020_01_22_113212_create_imagenes_table', 1),
(5, '2020_01_22_122628_create_contenidos_table', 1),
(6, '2020_01_22_122802_create_logs_table', 1),
(7, '2020_01_27_120911_create_sliders_table', 1),
(8, '2020_02_20_190250_create_categorias_table', 2),
(9, '2020_02_20_190355_create_productos_table', 2),
(10, '2020_02_21_161604_create_sectores_table', 3),
(11, '2020_02_21_170600_create_sectorproductos_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci,
  `resume` text COLLATE utf8mb4_unicode_ci,
  `features` text COLLATE utf8mb4_unicode_ci,
  `models` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `ficha` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `mercadolibre` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elim` tinyint(1) NOT NULL DEFAULT '0',
  `categoria_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `order`, `title`, `text`, `resume`, `features`, `models`, `details`, `images`, `ficha`, `mercadolibre`, `elim`, `categoria_id`, `created_at`, `updated_at`) VALUES
(1, 'aa', 'Cable unipolar sin estañar', '<p><span style=\"color:#666666\"><span style=\"font-size:16px\">Cuerdas formadas por hilos de alambre de cobre electrol&iacute;tico recocido de alta pureza, aislada en PVC.</span></span></p>\n\n<p><span style=\"color:#666666\"><span style=\"font-size:16px\">La fabricaci&oacute;n de nuestros productos es llevada a cabo con la mayor calidad en materia prima, utilizando para su elaboraci&oacute;n cobre de alta pureza en di&aacute;metros de hasta 0,05mm. Para su aislamiento utilizamos PVC y PE v&iacute;rgenes de primer&iacute;simas marcas y calidad (Princz S.A., Tecnocom, Alfa Vinil, entre otros).</span></span></p>\n\n<p><span style=\"color:#c82828\"><span style=\"font-size:16px\">No dude en contactarnos para requerimientos especiales</span></span></p>', '<p><span style=\"color:#666666\"><span style=\"font-size:16px\">Cuerdas formadas por hilos de alambre de cobre electrol&iacute;tico recocido de alta pureza, aislada en PVC.</span></span></p>', '{\"title\":\"Caracter\\u00edsticas\",\"features\":\"<table border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\" class=\\\"table\\\">\\n\\t<tbody>\\n\\t\\t<tr>\\n\\t\\t\\t<td><span style=\\\"font-size:16px\\\"><span style=\\\"color:#c82828\\\">Tensi&oacute;n<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td><span style=\\\"font-size:16px\\\"><span style=\\\"color:#666666\\\">1000V entre fases en CA y 750V contra tierra en CC.180mm<\\/span><\\/span><\\/td>\\n\\t\\t<\\/tr>\\n\\t\\t<tr>\\n\\t\\t\\t<td><span style=\\\"font-size:16px\\\"><span style=\\\"color:#c82828\\\">Temperatura de trabajo<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td><span style=\\\"font-size:16px\\\"><span style=\\\"color:#666666\\\">-25\\/+70&ordm;C<\\/span><\\/span><\\/td>\\n\\t\\t<\\/tr>\\n\\t\\t<tr>\\n\\t\\t\\t<td><span style=\\\"font-size:16px\\\"><span style=\\\"color:#c82828\\\">Aplicaciones<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td><span style=\\\"font-size:16px\\\"><span style=\\\"color:#666666\\\">Instalaciones fijas interiores (domiciliarias e industriales), aparatos, y electrodom&eacute;sticos<\\/span><\\/span><\\/td>\\n\\t\\t<\\/tr>\\n\\t\\t<tr>\\n\\t\\t\\t<td><span style=\\\"font-size:16px\\\"><span style=\\\"color:#c82828\\\">Acondicionamiento<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td><span style=\\\"font-size:16px\\\"><span style=\\\"color:#666666\\\">Rollo de 100 metros (standard) o bobina (seg&uacute;n cantidad solicitada)<\\/span><\\/span><\\/td>\\n\\t\\t<\\/tr>\\n\\t<\\/tbody>\\n<\\/table>\\n\\n<p>&nbsp;<\\/p>\"}', '{\"title\":\"Modelos\",\"models\":\"<table border=\\\"0\\\" cellpadding=\\\"0\\\" cellspacing=\\\"0\\\" class=\\\"table table-striped\\\">\\n\\t<thead>\\n\\t\\t<tr>\\n\\t\\t\\t<th scope=\\\"col\\\"><span style=\\\"color:#c82828\\\"><span style=\\\"font-size:12px\\\">C&oacute;digo<\\/span><\\/span><\\/th>\\n\\t\\t\\t<th scope=\\\"col\\\"><span style=\\\"color:#c82828\\\"><span style=\\\"font-size:12px\\\">Colores<\\/span><\\/span><\\/th>\\n\\t\\t\\t<th scope=\\\"col\\\"><span style=\\\"color:#c82828\\\"><span style=\\\"font-size:12px\\\">Secci&oacute;n mm&sup2;<\\/span><\\/span><\\/th>\\n\\t\\t\\t<th scope=\\\"col\\\"><span style=\\\"color:#c82828\\\"><span style=\\\"font-size:12px\\\">Nro. de hilos por secci&oacute;n<\\/span><\\/span><\\/th>\\n\\t\\t\\t<th scope=\\\"col\\\"><span style=\\\"color:#c82828\\\"><span style=\\\"font-size:12px\\\">Di&aacute;metro exterior mm<\\/span><\\/span><\\/th>\\n\\t\\t\\t<th scope=\\\"col\\\"><span style=\\\"color:#c82828\\\"><span style=\\\"font-size:12px\\\">Corriente Amp. Reg. Perm.<\\/span><\\/span><\\/th>\\n\\t\\t<\\/tr>\\n\\t<\\/thead>\\n\\t<tbody>\\n\\t\\t<tr>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">040<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">5<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">0,35<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">7 x 0,25<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">3,00<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">2,0<\\/span><\\/span><\\/td>\\n\\t\\t<\\/tr>\\n\\t\\t<tr>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">041<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">5<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">0,50<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">7 x 0,30<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">3,400<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">3,0<\\/span><\\/span><\\/td>\\n\\t\\t<\\/tr>\\n\\t\\t<tr>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">042<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">Rojo<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">0,50<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">7 x 0,30<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">4,30<\\/span><\\/span><\\/td>\\n\\t\\t\\t<td style=\\\"text-align:center\\\"><span style=\\\"font-size:12px\\\"><span style=\\\"color:#666666\\\">3,0<\\/span><\\/span><\\/td>\\n\\t\\t<\\/tr>\\n\\t<\\/tbody>\\n<\\/table>\\n\\n<p>&nbsp;<\\/p>\"}', '<p><span style=\"color:#666666\"><span style=\"font-size:16px\">Cuerdas formadas por hilos de alambre de cobre electrol&iacute;tico recocido de alta pureza, aislada en PVC.</span></span></p>\n\n<p><span style=\"color:#666666\"><span style=\"font-size:16px\">La fabricaci&oacute;n de nuestros productos es llevada a cabo con la mayor calidad en materia prima, utilizando para su elaboraci&oacute;n cobre de alta pureza en di&aacute;metros de hasta 0,05mm. Para su aislamiento utilizamos PVC y PE v&iacute;rgenes de primer&iacute;simas marcas y calidad (Princz S.A., Tecnocom, Alfa Vinil, entre otros).</span></span></p>\n\n<p><span style=\"color:#c82828\"><span style=\"font-size:16px\">No dude en contactarnos para requerimientos especiales</span></span></p>', '[{\"order\":\"1\",\"image\":{\"i\":\"images\\/productos\\/1582296925_image_3_0.png\",\"e\":\"png\",\"n\":\"1582296925_image_3_0\",\"d\":{\"0\":371,\"1\":371,\"2\":3,\"3\":\"width=\\\"371\\\" height=\\\"371\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}},{\"order\":\"2\",\"image\":{\"i\":\"images\\/productos\\/1582296925_image_3_1.png\",\"e\":\"png\",\"n\":\"1582296925_image_3_1\",\"d\":{\"0\":371,\"1\":371,\"2\":3,\"3\":\"width=\\\"371\\\" height=\\\"371\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}}]', '{\"i\":\"files\\/productos\\/pdf-test1.pdf\",\"e\":\"pdf\",\"n\":\"pdf-test1\",\"d\":null}', 'https://www.mercadolibre.com.ar/', 0, 2, '2020-02-21 15:56:08', '2020-02-25 23:18:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE `sectores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `elim` tinyint(1) NOT NULL DEFAULT '0',
  `productos_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sectores`
--

INSERT INTO `sectores` (`id`, `order`, `title`, `text`, `images`, `elim`, `productos_id`, `created_at`, `updated_at`) VALUES
(1, 'aa', 'Sistemas de seguridad', '<p><span style=\"font-size:16px\"><span style=\"color:#666666\">Nuestra l&iacute;nea de art&iacute;culos es desarrollada para las distintas &aacute;reas de la electr&oacute;nica, electromedicina, audio profesional, dom&oacute;tica, rob&oacute;tica, celdas de carga, instrumental de medici&oacute;n, sistemas de seguridad, etc.; como as&iacute; tambi&eacute;n para un segmento del &aacute;rea rural como ser blindados antiroedores, blindados para silos, electrificadores de cercos, etc.</span></span></p>\n\n<p><span style=\"font-size:16px\"><span style=\"color:#c82828\">No dude en contactarnos para requerimientos especiales</span></span></p>', '[{\"order\":\"1\",\"image\":{\"i\":\"images\\/productos\\/1582303367_image_1_0.jpg\",\"e\":\"jpg\",\"n\":\"1582303367_image_1_0\",\"d\":{\"0\":571,\"1\":454,\"2\":2,\"3\":\"width=\\\"571\\\" height=\\\"454\\\"\",\"bits\":8,\"channels\":3,\"mime\":\"image\\/jpeg\"}}}]', 0, '[\"1\"]', '2020-02-21 19:42:47', '2020-02-21 21:23:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectorproductos`
--

CREATE TABLE `sectorproductos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sector_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `section` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elim` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `order`, `text`, `image`, `section`, `elim`, `created_at`, `updated_at`) VALUES
(1, 'aa', '<p>Desde 1957 fabricando<br />\n<strong>la mejor calidad en cables</strong></p>', '{\"i\":\"images\\/sliders\\/1582211924_image.png\",\"e\":\"png\",\"n\":\"1582211924_image\",\"d\":{\"0\":1350,\"1\":400,\"2\":3,\"3\":\"width=\\\"1350\\\" height=\\\"400\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}', 'p1', 0, '2020-02-20 18:18:44', '2020-02-20 18:18:44'),
(2, 'aa', '<p>Ofrecemos soluciones en<br />\n<strong>conducciones el&eacute;ctricas</strong></p>', '{\"i\":\"images\\/sliders\\/1582212176_image.png\",\"e\":\"png\",\"n\":\"1582212176_image\",\"d\":{\"0\":1350,\"1\":400,\"2\":3,\"3\":\"width=\\\"1350\\\" height=\\\"400\\\"\",\"bits\":8,\"mime\":\"image\\/png\"}}', 'p2', 0, '2020-02-20 18:22:56', '2020-02-20 18:22:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `login` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `ip`, `username`, `password`, `level`, `login`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pablo Cabañuz', 'pcabanuz@osole.es', '0', 'pablo', '$2y$10$x/liZmGh6JpkrEV8..9AhuLik1E3m103LIpKxzKoGCsvpiLYr2sSm', 1, '2020-02-25 23:18:15', NULL, '2020-02-20 13:06:38', '2020-02-25 23:18:15'),
(2, 'Conduplast', NULL, '0', 'conduplast', '$2y$10$ShBIHsA/Dbzd/2th.aknVOgdTl5JcOzAgQbcB/o8JbFjiUZE99H/m', 1, NULL, NULL, '2020-02-21 21:57:39', '2020-02-21 21:57:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`);

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
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `sectores`
--
ALTER TABLE `sectores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sectorproductos`
--
ALTER TABLE `sectorproductos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sectorproductos_sector_id_foreign` (`sector_id`),
  ADD KEY `sectorproductos_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sectores`
--
ALTER TABLE `sectores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sectorproductos`
--
ALTER TABLE `sectorproductos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sectorproductos`
--
ALTER TABLE `sectorproductos`
  ADD CONSTRAINT `sectorproductos_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sectorproductos_sector_id_foreign` FOREIGN KEY (`sector_id`) REFERENCES `sectores` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
