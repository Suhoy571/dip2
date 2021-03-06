-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 13 2018 г., 20:43
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dip2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`) VALUES
(1, 0, 'Sportswear', NULL, NULL),
(2, 0, 'Mens', NULL, NULL),
(3, 0, 'Womens', NULL, NULL),
(4, 1, 'Nike', NULL, NULL),
(5, 1, 'Under Armour', NULL, NULL),
(6, 1, 'Adidas', NULL, NULL),
(7, 1, 'Puma', NULL, NULL),
(8, 1, 'ASICS', NULL, NULL),
(9, 2, 'Fendi', NULL, NULL),
(10, 2, 'Guess', NULL, NULL),
(11, 2, 'Valentino', NULL, NULL),
(12, 2, 'Dior', NULL, NULL),
(13, 2, 'Versace', NULL, NULL),
(14, 2, 'Armani', NULL, NULL),
(15, 2, 'Prada', NULL, NULL),
(16, 2, 'Dolce and Gabbana', NULL, NULL),
(17, 2, 'Chanel', NULL, NULL),
(18, 2, 'Gucci', NULL, NULL),
(19, 3, 'Fendi', NULL, NULL),
(20, 3, 'Guess', NULL, NULL),
(21, 3, 'Valentino', NULL, NULL),
(22, 3, 'Dior', NULL, NULL),
(23, 3, 'Versace', NULL, NULL),
(24, 0, 'Kids', NULL, NULL),
(25, 0, 'Fashion', NULL, NULL),
(26, 0, 'Households', NULL, NULL),
(27, 0, 'Interiors', NULL, NULL),
(28, 0, 'Clothing', NULL, NULL),
(29, 0, 'Bags', 'сумки ключевики...', 'сумки описание...'),
(30, 0, 'Shoes', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filePath` varchar(400) NOT NULL,
  `itemId` int(20) NOT NULL,
  `isMain` int(1) DEFAULT NULL,
  `modelName` varchar(150) NOT NULL,
  `urlAlias` varchar(400) NOT NULL,
  `name` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `qty` int(10) NOT NULL,
  `sum` float NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `created_at`, `updated_at`, `qty`, `sum`, `status`, `name`, `email`, `phone`, `address`) VALUES
(1, '2018-06-23 17:03:04', '2018-06-23 17:03:04', 1, 56, '0', 'Илья Суховинеко', 'isuhovienko@gmail.com', '+380956274159', 'г. Луганск'),
(2, '2018-06-23 17:03:57', '2018-06-23 17:03:57', 1, 70, '0', 'Владислав Копенкин', 'iadwadwd@gmail.com', '+380956274158', 'г. Керчь'),
(3, '2018-06-23 17:04:55', '2018-06-23 17:04:55', 3, 45, '0', 'Александр Алексеев', 'aaletksirev@mail.ru', '+3809562157896', 'г. Киев'),
(4, '2018-06-23 19:14:18', '2018-06-23 19:14:18', 1, 56, '0', 'Илья', 'isuhovienko@gmail.com', '+380956274158', 'г. Луганск'),
(5, '2018-06-23 19:14:34', '2018-06-23 19:14:34', 1, 56, '0', 'Илья', 'isuhovienko@gmail.com', '+380956274158', 'г. Луганск'),
(6, '2018-06-23 19:15:16', '2018-06-23 19:15:16', 1, 56, '0', 'Александр Алексеев', 'iadwadwd@gmail.com', '+380956274159', 'г. Луганск'),
(7, '2018-06-23 19:20:27', '2018-06-23 19:20:27', 1, 56, '0', 'Александр Алексеев', 'isuhovienko@gmail.com', '+380956274158', 'г. Керчь'),
(8, '2018-06-23 21:01:58', '2018-06-23 21:01:58', 1, 56, '0', 'Александр Алексеев', 'iadwadwd@gmail.com', '+380956274158', 'г. Керчь'),
(9, '2018-06-23 21:02:19', '2018-06-23 21:02:19', 1, 56, '0', 'Александр Алексеев', 'iadwadwd@gmail.com', '+380956274158', 'г. Керчь'),
(10, '2018-06-23 21:02:24', '2018-06-23 21:02:24', 1, 56, '0', 'Александр Алексеев', 'iadwadwd@gmail.com', '+380956274158', 'г. Керчь'),
(11, '2018-06-23 21:03:03', '2018-06-23 21:03:03', 1, 56, '0', 'Александр Алексеев', 'iadwadwd@gmail.com', '+380956274158', 'г. Керчь'),
(12, '2018-06-23 21:03:22', '2018-06-23 21:03:22', 1, 56, '0', 'Александр Алексеев', 'iadwadwd@gmail.com', '+380956274158', 'г. Керчь'),
(13, '2018-06-23 21:03:34', '2018-06-23 21:03:34', 1, 56, '0', 'Александр Алексеев', 'iadwadwd@gmail.com', '+380956274158', 'г. Керчь'),
(14, '2018-06-23 21:04:31', '2018-06-23 21:04:31', 1, 56, '0', 'Александр Алексеев', 'isuhovienko@gmail.com', '+380956274159', 'г. Луганск'),
(15, '2018-06-23 21:06:34', '2018-06-23 21:06:34', 2, 126, '0', 'Александр Алексеев', 'isuhovienko@gmail.com', '+380956274159', 'г. Киев'),
(16, '2018-06-23 21:07:35', '2018-06-23 21:07:35', 2, 126, '0', 'Александр Алексеев', 'isuhovienko@gmail.com', '+380956274159', 'г. Киев');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty_item` int(11) NOT NULL,
  `sum_item` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `name`, `price`, `qty_item`, `sum_item`) VALUES
(4, 1, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(5, 2, 4, 'Tom Tailor TT 20312490071 7610 M', 70, 1, 70),
(6, 3, 10, 'GUSSACI TUGUS13A060-3-10', 15, 3, 45),
(7, 4, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(8, 5, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(9, 6, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(10, 7, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(11, 8, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(12, 9, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(13, 10, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(14, 11, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(15, 12, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(16, 13, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(17, 14, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(18, 15, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(19, 15, 4, 'Tom Tailor TT 20312490071 7610 M', 70, 1, 70),
(20, 16, 2, 'MR520 MR 227 20002 0115 29-34 р Синие', 56, 1, 56),
(21, 16, 4, 'Tom Tailor TT 20312490071 7610 M', 70, 1, 70);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text,
  `price` float NOT NULL DEFAULT '0',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'no-image.png',
  `hit` enum('0','1') NOT NULL DEFAULT '0',
  `new` enum('0','1') NOT NULL DEFAULT '0',
  `sale` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `content`, `price`, `keywords`, `description`, `img`, `hit`, `new`, `sale`) VALUES
(1, 4, 'Garcia 244/32/856 28-32 р Серо-синие', 'Великолепные джинсы винтажно-голубого цвета. Настоящая находка для любителей качественного денима.\n\nОсобенности:\n\n    Зауженные к низу\n    Пять карманов\n    Высококачественный деним\n    Высокая посадка (high fit)\n    Выгодно подчеркивают фигуру', 10, NULL, NULL, 'ba.jpg', '0', '0', '0'),
(2, 4, 'MR520 MR 227 20002 0115 29-34 р Синие', '\n\nMR520 – амбициозный восточноевропейский бренд, который предлагает качественную и стильную одежду, сделанную специально для молодых людей, следящих за своим внешним видом.\n\nЖенские джинсы фасона boyfriend fit (в переводе с англ. – \"джинсы моего парня\"). Модель с зауженными штанинами. Застегивается на пуговицы. Изделие с низкой посадкой. Джинсы дополнены прорезными карманами спереди и накладными карманами сзади.\n\nИзделие декорировано эффектом потертости, вареным эффектом и необычными швами.\n', 56, NULL, NULL, 'pic13.jpg', '1', '0', '0'),
(3, 9, 'Mango 53005681-05 M Бежевая', 'Испанский бренд модной одежды \"Mango\" родился в 1984 году в Барселоне, где и по сей день находится штаб-квартира компании. В том же городе появился и первый магазин — на улице Пасео де Грасия (Paseo de Gracia). Компания, основанная братьями Исааком и Нахманом Андиком (Isaac & Nahman Andic), очень быстро набрала популярность — всего лишь годом позднее был открыт магазин в другом городе, на этот раз в Валенсии. Одежда \"Mango\" отличается высоким качеством, приемлемой ценой, современным дизайном и неповторимым стилем.', 20, NULL, NULL, 'bottle.jpg', '0', '1', '0'),
(4, 21, 'Tom Tailor TT 20312490071 7610 M', '\r\n\r\nTom Tailor Group — один из ведущих и быстро развивающихся Fashion холдингов германии и европы, продукция которого ориентирована на целевую аудиторию в возрасте от 0 до 60 лет.\r\n\r\nTom Tailor известен на рынке текстиля с 1962 года и до сих пор сохраняет стандарты немецкого качества. Tom Tailor предлагает повседневную одежду и аксессуары высокого качества для женщин, мужчин и детей.\r\n\r\nОдежда от Tom Tailor поможет создать активный повседневный образ с нотками элегантности.', 70, NULL, NULL, 'bott.jpg', '1', '0', '1'),
(5, 25, 'Kira Plastinina 17-16-17453-SM-29 S', NULL, 0, NULL, NULL, 'bottle.jpg', '1', '0', '0'),
(6, 28, 'Levi\'s Icy Grey Heather M', NULL, 100, NULL, NULL, 'pic2.jpg', '0', '0', '0'),
(7, 28, 'ONLY ON 15102048 M Black Tan/Partridg', '\r\n\r\nCasual марка молодежной женской одежды ONLY является частью датской компании Bestseller AS. Изначально Bestseller занимался производством детской одежды, а в 1995 году появилась на свет марка ONLY. Популярность этой марки возрастала быстрыми темпами и теперь ONLY владеет 770 магазинами в более чем 40 странах мира.\r\n\r\nONLY — бренд стильной молодежной одежды. Это бренд для тех, кто любит добиваться успеха и быть не таким, как все. Демократичные цены, модные модели, экологически чистые ткани делают одежду от ONLY сверхпопулярной.', 0, NULL, NULL, 'pic4.jpg', '0', '1', '0'),
(8, 26, 'SK House 2211-1972кор L Коричневые', '\r\n\r\nКомпания SK House — это украинский производитель модной женской одежды с безупречной репутацией и тысячами поклонников по всему СНГ. SK House изготавливает качественный и долговечный товар, созданный из высококачественных тканей. Компания использует современные методы пошива и, изучая текущие мировые тенденции и локальные требования покупателей, создает модели, которые не задерживаются на полках длительное время и быстро раскупаются во всех странах.', 99, NULL, NULL, 'pic5.jpg', '0', '0', '1'),
(9, 26, 'Kira Plastinina 17-07-17418-FL-58 L', NULL, 0, NULL, NULL, 'bottle.jpg', '0', '0', '0'),
(10, 29, 'GUSSACI TUGUS13A060-3-10', 'Простота, инновационный стиль бренда, высококачественные требования к продукции, благодаря этому GUSSACI Italy пользуется высокой репутацией во многих странах Европы. Превосходное качество, отличный дизайн, соответствующие цены делают \"Гуссачи\" модным и популярным!\r\n\r\nОсобенности:\r\n\r\nКоличество основных отделений: 1. Сумка имеет прорезной карман на молнии, а также два небольших накладных кармана для хранения мобильного телефона, разных портативных гаджетов и мелочей. На лицевой стороне модели есть узкий прорезной карман на \"молнии\". На тыльной стороне модели есть прорезной карман на \"молнии\". Особенностью данной модели является возможность изменения ее формы при помощи дополнительной внешней застежки-молнии. Сумка имеет 2 ручки для переноса на локте или в руке. Их длина не регулируется и составляет 45 см, а высота от крайней точки ручки до сумки — 16 см. В комплект к изделию прилагается съемный плечевой ремень. Его длина может регулироваться при помощи металлической пряжки от 78 до 137.5 см. Сумка закрывается при помощи застежки-молнии.\r\n\r\nМатериал подкладки: плотная ткань.\r\nМатериал сумки: кожезаменитель.\r\nЦвет фурнитуры: золото.\r\nРазмеры сумки: 26 х 25 х 10.5 см', 15, NULL, NULL, 'pic8.jpg', '0', '1', '0'),
(11, 29, 'Michael Kors Jet Set Travel Нежно-розовая', '\r\n\r\nОсобенность стиля Michael Kors заключается в том, что простота его коллекций гармонирует с роскошью. Этому дизайнеру под силу объединить американский утилитаризм в манере одеваться с европейской изысканностью и шармом. Все его работы отличает изящная утонченность, которая рождается из строгих, почти примитивных линий. Все аксессуары поддерживают общий стиль человека с безупречным вкусом.\r\n\r\nМодели Michael Kors могут оставаться оригинальными, стильными и неотразимыми в течение многих лет, что особо важно для покупательниц, не желающих постоянно обновлять свой гардероб.', 200, NULL, NULL, 'pic12.jpg', '0', '0', '1'),
(12, 29, 'Michael Kors Selma Золотистая', '\r\n\r\nОсобенность стиля Michael Kors заключается в том, что простота его коллекций гармонирует с роскошью. Этому дизайнеру под силу объединить американский утилитаризм в манере одеваться с европейской изысканностью и шармом. Все его работы отличает изящная утонченность, которая рождается из строгих, почти примитивных линий. Все аксессуары поддерживают общий стиль человека с безупречным вкусом.\r\n\r\nМодели Michael Kors могут оставаться оригинальными, стильными и неотразимыми в течение многих лет, что особо важно для покупательниц, не желающих постоянно обновлять свой гардероб.', 205, NULL, NULL, 'pic10.jpg', '0', '0', '0'),
(13, 29, 'Michael Kors Bedford Красная', '\r\n\r\nОсобенность стиля Michael Kors заключается в том, что простота его коллекций гармонирует с роскошью. Этому дизайнеру под силу объединить американский утилитаризм в манере одеваться с европейской изысканностью и шармом. Все его работы отличает изящная утонченность, которая рождается из строгих, почти примитивных линий. Все аксессуары поддерживают общий стиль человека с безупречным вкусом.\r\n\r\nМодели Michael Kors могут оставаться оригинальными, стильными и неотразимыми в течение многих лет, что особо важно для покупательниц, не желающих постоянно обновлять свой гардероб.', 0, NULL, NULL, 'pic13.jpg', '0', '0', '0'),
(14, 29, 'Michael Kors JS Travel Светло-розовая', '\r\n\r\nОсобенность стиля Michael Kors заключается в том, что простота его коллекций гармонирует с роскошью. Этому дизайнеру под силу объединить американский утилитаризм в манере одеваться с европейской изысканностью и шармом. Все его работы отличает изящная утонченность, которая рождается из строгих, почти примитивных линий. Все аксессуары поддерживают общий стиль человека с безупречным вкусом.\r\n\r\nМодели Michael Kors могут оставаться оригинальными, стильными и неотразимыми в течение многих лет, что особо важно для покупательниц, не желающих постоянно обновлять свой гардероб.', 0, NULL, NULL, 'pi3.jpg', '0', '0', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', '$2y$13$kBnllkunDATfvXIMnev95euGGR6njtUkx5pCPcO1fsvMzPjURrYdG', 'pe8gH6leCceE4M_6YwbIRQqX6KuShoDc');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
