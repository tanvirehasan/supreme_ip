

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO admin VALUES("1","admin@gmail.com","81dc9bdb52d04dc20036dbd8313ed055");



CREATE TABLE `blog_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(300) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `parent_cat_id` int(10) NOT NULL DEFAULT '0',
  `page_status` int(2) NOT NULL,
  `blognews_content` longtext NOT NULL,
  `featured_image` varchar(225) NOT NULL,
  `datetime` datetime(6) NOT NULL,
  `updatedtime` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `page_view` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

INSERT INTO blog_news VALUES("38","Bangladesh Trademark Journal 304","28","Bangladesh-Trademark-Journal-304","3","1","&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;hough it is not compulsory to register a trademark in Bangladesh. However, for obtaining a certificate of BSTI (Bangladesh Standards and Testing Institution) for certain goods registering the trademark is mandatory. In the view of Law, for a mark that is not registered, you may rely on your rights under the common law action of Ã¢â‚¬Å“passing offÃ¢â‚¬Â to protect your unregistered mark against imitation or infringement, but it does not give you exclusive rights.&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;According to the law, if you register a trademark in relation to your goods or services, you are effectively gaining statutory monopoly rights of your mark under the Trademarks Act, 2009.&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;A trademark can add value to your business, you can license it to third parties such as a franchise, or you can sell it outright for a specified value. Properly used a Trademark may become the most valuable asset of a business.&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;1. Exclusive rights&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;Trademark registration gives the proprietor the right to exclusive use of the mark in respect of the goods or services covered by it. Possibly the most important reason for registration of a trade mark is the powerful remedies against unauthorized use. A trade mark registration allows the proprietor to sue for infringement and to obtain very powerful remedies such as interdict, delivery up infringing articles and damages. At the same time, the trade mark infringement provisions do not preclude a person.&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;2. Hypothecation / security&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;A registered trade mark can be hypothecated as security, meaning that a registered trade mark can be pledged as security to secure loan facilities much the same way as immovable property can be bonded.&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;3. Intangible property&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;A very important reason for registration is to create the trade mark as an identifiable intangible property in the legal sense. Trade mark registration is a value store or receptacle of the value attaching to the reputation or goodwill that the product enjoys.&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;A common law trade mark attaches to the goodwill and, generally speaking, the goodwill is not severable from the business in its entirety. This has the practical effect that an unregistered trade mark will never have a separate and independent existence. It will always form part of the goodwill and it will always be attached to the business. The only way in which to acquire a common law trade mark is to acquire the business as a going concern. Trade mark registration, by contrast, can be transferred like any other asset owned by a person or a company.&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;4. Licensing&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;A registered trade mark can be licensed. A trade mark license can be recorded on the trade mark register, giving the licensee rights to institute legal proceedings in the event of infringement.&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;5. Assignment&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;A registered trade mark can be transferred. The same is not possible for a common law trade mark, which can only be transferred with the business.&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;6. Deterrent&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;Trademark registration deters other traders from using trademarks that are similar or identical to yours in relation to goods and services like yours. By using the Ã‚Â® symbol, you put others on notice of your rights. Moreover, a registered mark can be found when others search the official register before choosing to commence using a particular name.&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;7. Use in proceedings&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;A trade mark registration is prima facie evidence &quot;of the&quot; validity of the registration and the rights conveyed by registration. In legal proceedings relating to a registered trade mark the fact that a person is registered as the proprietor of the trade mark is evidence of the validity of the original registration of the trade mark, unless the contrary is proved.&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;8. The right to use the symbol Ã‚Â® or Ã¢â‚¬Å“RÃ¢â‚¬Â or word registered&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;Once the trade marks is registered the symbol Ã‚Â® or Ã¢â‚¬Å“RÃ¢â‚¬Â or word Ã¢â‚¬Å“RegisteredÃ¢â‚¬Â may be used for the goods and services listed in the registration.&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;9. Foreign territories&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;A registered mark can be used as a basis to obtain registration in some foreign countries, facilitating the protection of the brand worldwide as the business expands.&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;10. REMEDIES:&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;font-family: system-ui, -apple-system, &amp;quot;Segoe UI&amp;quot;, Roboto, &amp;quot;Helvetica Neue&amp;quot;, Arial, &amp;quot;Noto Sans&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif, &amp;quot;Apple Color Emoji&amp;quot;, &amp;quot;Segoe UI Emoji&amp;quot;, &amp;quot;Segoe UI Symbol&amp;quot;, &amp;quot;Noto Color Emoji&amp;quot;; font-size: 16px; text-align: justify;&quot;&gt;The following remedies are available for registered trademark infringement.&lt;/p&gt;","blog1.webp","2022-05-12 12:28:54.000000","2022-05-12 12:28:54.953917","16");



CREATE TABLE `blogs_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `cat_icon` varchar(100) NOT NULL,
  `perent_id` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

INSERT INTO blogs_category VALUES("3","Blog(EN)","","0");
INSERT INTO blogs_category VALUES("4","Blog(BN)","","0");
INSERT INTO blogs_category VALUES("6","News","","0");
INSERT INTO blogs_category VALUES("7","Notice","","0");
INSERT INTO blogs_category VALUES("20","Test 1 ","","3");
INSERT INTO blogs_category VALUES("21","Test 2 ","","3");
INSERT INTO blogs_category VALUES("26","Test 6","","3");
INSERT INTO blogs_category VALUES("27","New sub","","6");
INSERT INTO blogs_category VALUES("28","Trademark ","","3");
INSERT INTO blogs_category VALUES("29","সম্পত্তি","","4");
INSERT INTO blogs_category VALUES("30","মুসলিম আইনে","","4");



CREATE TABLE `color_settings` (
  `color_id` int(10) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(100) NOT NULL,
  `color_code` varchar(250) NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

INSERT INTO color_settings VALUES("1","White","#ffffff");
INSERT INTO color_settings VALUES("2","Green 1","#2d642d");
INSERT INTO color_settings VALUES("3","Green 2","#568356");
INSERT INTO color_settings VALUES("4","Green 3","#abc1ab");
INSERT INTO color_settings VALUES("5","Red_Gray 1","#f6f4f2");
INSERT INTO color_settings VALUES("6","Red_gray 2","#ece7e3");
INSERT INTO color_settings VALUES("7","Red_gray 3","#d7cec5");
INSERT INTO color_settings VALUES("8","Black 1","#222222");
INSERT INTO color_settings VALUES("9","Black 2","#7a7a7a");
INSERT INTO color_settings VALUES("10","Black 3","#e8e8e8");
INSERT INTO color_settings VALUES("11","Gradient-BG","linear-gradient(to bottom, #44a08d, #093637);");
INSERT INTO color_settings VALUES("12","Gradient-BG 2","linear-gradient(to bottom, #f0f2f0, #000c40)");
INSERT INTO color_settings VALUES("14","Gradient-BG 3","linear-gradient(to bottom, #abc1ab, #f6f4f2)");
INSERT INTO color_settings VALUES("15","Blue","#034e83");
INSERT INTO color_settings VALUES("16","Red","#FF0000");
INSERT INTO color_settings VALUES("17","left-to-right","linear-gradient(to right, #abc1ab, #f6f4f2)");
INSERT INTO color_settings VALUES("18","new color","#fffffff");
INSERT INTO color_settings VALUES("19","new color 2","#ffffff");
INSERT INTO color_settings VALUES("20","new color 555","#034e83");



CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8;

INSERT INTO countries VALUES("1","Afghanistan");
INSERT INTO countries VALUES("2","Aland Islands");
INSERT INTO countries VALUES("3","Albania");
INSERT INTO countries VALUES("4","Algeria");
INSERT INTO countries VALUES("5","American Samoa");
INSERT INTO countries VALUES("6","Andorra");
INSERT INTO countries VALUES("7","Angola");
INSERT INTO countries VALUES("8","Anguilla");
INSERT INTO countries VALUES("9","Antarctica");
INSERT INTO countries VALUES("10","Antigua and Barbuda");
INSERT INTO countries VALUES("11","Argentina");
INSERT INTO countries VALUES("12","Armenia");
INSERT INTO countries VALUES("13","Aruba");
INSERT INTO countries VALUES("14","Australia");
INSERT INTO countries VALUES("15","Austria");
INSERT INTO countries VALUES("16","Azerbaijan");
INSERT INTO countries VALUES("17","Bahamas");
INSERT INTO countries VALUES("18","Bahrain");
INSERT INTO countries VALUES("19","Bangladesh");
INSERT INTO countries VALUES("20","Barbados");
INSERT INTO countries VALUES("21","Belarus");
INSERT INTO countries VALUES("22","Belgium");
INSERT INTO countries VALUES("23","Belize");
INSERT INTO countries VALUES("24","Benin");
INSERT INTO countries VALUES("25","Bermuda");
INSERT INTO countries VALUES("26","Bhutan");
INSERT INTO countries VALUES("27","Bolivia");
INSERT INTO countries VALUES("28","Bonaire, Sint Eustatius and Saba");
INSERT INTO countries VALUES("29","Bosnia and Herzegovina");
INSERT INTO countries VALUES("30","Botswana");
INSERT INTO countries VALUES("31","Bouvet Island");
INSERT INTO countries VALUES("32","Brazil");
INSERT INTO countries VALUES("33","British Indian Ocean Territory");
INSERT INTO countries VALUES("34","Brunei Darussalam");
INSERT INTO countries VALUES("35","Bulgaria");
INSERT INTO countries VALUES("36","Burkina Faso");
INSERT INTO countries VALUES("37","Burundi");
INSERT INTO countries VALUES("38","Cambodia");
INSERT INTO countries VALUES("39","Cameroon");
INSERT INTO countries VALUES("40","Canada");
INSERT INTO countries VALUES("41","Cape Verde");
INSERT INTO countries VALUES("42","Cayman Islands");
INSERT INTO countries VALUES("43","Central African Republic");
INSERT INTO countries VALUES("44","Chad");
INSERT INTO countries VALUES("45","Chile");
INSERT INTO countries VALUES("46","China");
INSERT INTO countries VALUES("47","Christmas Island");
INSERT INTO countries VALUES("48","Cocos (Keeling) Islands");
INSERT INTO countries VALUES("49","Colombia");
INSERT INTO countries VALUES("50","Comoros");
INSERT INTO countries VALUES("51","Congo");
INSERT INTO countries VALUES("52","Congo, Democratic Republic of the Congo");
INSERT INTO countries VALUES("53","Cook Islands");
INSERT INTO countries VALUES("54","Costa Rica");
INSERT INTO countries VALUES("55","Cote D'Ivoire");
INSERT INTO countries VALUES("56","Croatia");
INSERT INTO countries VALUES("57","Cuba");
INSERT INTO countries VALUES("58","Curacao");
INSERT INTO countries VALUES("59","Cyprus");
INSERT INTO countries VALUES("60","Czech Republic");
INSERT INTO countries VALUES("61","Denmark");
INSERT INTO countries VALUES("62","Djibouti");
INSERT INTO countries VALUES("63","Dominica");
INSERT INTO countries VALUES("64","Dominican Republic");
INSERT INTO countries VALUES("65","Ecuador");
INSERT INTO countries VALUES("66","Egypt");
INSERT INTO countries VALUES("67","El Salvador");
INSERT INTO countries VALUES("68","Equatorial Guinea");
INSERT INTO countries VALUES("69","Eritrea");
INSERT INTO countries VALUES("70","Estonia");
INSERT INTO countries VALUES("71","Ethiopia");
INSERT INTO countries VALUES("72","Falkland Islands (Malvinas)");
INSERT INTO countries VALUES("73","Faroe Islands");
INSERT INTO countries VALUES("74","Fiji");
INSERT INTO countries VALUES("75","Finland");
INSERT INTO countries VALUES("76","France");
INSERT INTO countries VALUES("77","French Guiana");
INSERT INTO countries VALUES("78","French Polynesia");
INSERT INTO countries VALUES("79","French Southern Territories");
INSERT INTO countries VALUES("80","Gabon");
INSERT INTO countries VALUES("81","Gambia");
INSERT INTO countries VALUES("82","Georgia");
INSERT INTO countries VALUES("83","Germany");
INSERT INTO countries VALUES("84","Ghana");
INSERT INTO countries VALUES("85","Gibraltar");
INSERT INTO countries VALUES("86","Greece");
INSERT INTO countries VALUES("87","Greenland");
INSERT INTO countries VALUES("88","Grenada");
INSERT INTO countries VALUES("89","Guadeloupe");
INSERT INTO countries VALUES("90","Guam");
INSERT INTO countries VALUES("91","Guatemala");
INSERT INTO countries VALUES("92","Guernsey");
INSERT INTO countries VALUES("93","Guinea");
INSERT INTO countries VALUES("94","Guinea-Bissau");
INSERT INTO countries VALUES("95","Guyana");
INSERT INTO countries VALUES("96","Haiti");
INSERT INTO countries VALUES("97","Heard Island and Mcdonald Islands");
INSERT INTO countries VALUES("98","Holy See (Vatican City State)");
INSERT INTO countries VALUES("99","Honduras");
INSERT INTO countries VALUES("100","Hong Kong");
INSERT INTO countries VALUES("101","Hungary");
INSERT INTO countries VALUES("102","Iceland");
INSERT INTO countries VALUES("103","India");
INSERT INTO countries VALUES("104","Indonesia");
INSERT INTO countries VALUES("105","Iran, Islamic Republic of");
INSERT INTO countries VALUES("106","Iraq");
INSERT INTO countries VALUES("107","Ireland");
INSERT INTO countries VALUES("108","Isle of Man");
INSERT INTO countries VALUES("109","Israel");
INSERT INTO countries VALUES("110","Italy");
INSERT INTO countries VALUES("111","Jamaica");
INSERT INTO countries VALUES("112","Japan");
INSERT INTO countries VALUES("113","Jersey");
INSERT INTO countries VALUES("114","Jordan");
INSERT INTO countries VALUES("115","Kazakhstan");
INSERT INTO countries VALUES("116","Kenya");
INSERT INTO countries VALUES("117","Kiribati");
INSERT INTO countries VALUES("118","Korea, Democratic People's Republic of");
INSERT INTO countries VALUES("119","Korea, Republic of");
INSERT INTO countries VALUES("120","Kosovo");
INSERT INTO countries VALUES("121","Kuwait");
INSERT INTO countries VALUES("122","Kyrgyzstan");
INSERT INTO countries VALUES("123","Lao People's Democratic Republic");
INSERT INTO countries VALUES("124","Latvia");
INSERT INTO countries VALUES("125","Lebanon");
INSERT INTO countries VALUES("126","Lesotho");
INSERT INTO countries VALUES("127","Liberia");
INSERT INTO countries VALUES("128","Libyan Arab Jamahiriya");
INSERT INTO countries VALUES("129","Liechtenstein");
INSERT INTO countries VALUES("130","Lithuania");
INSERT INTO countries VALUES("131","Luxembourg");
INSERT INTO countries VALUES("132","Macao");
INSERT INTO countries VALUES("133","Macedonia, the Former Yugoslav Republic of");
INSERT INTO countries VALUES("134","Madagascar");
INSERT INTO countries VALUES("135","Malawi");
INSERT INTO countries VALUES("136","Malaysia");
INSERT INTO countries VALUES("137","Maldives");
INSERT INTO countries VALUES("138","Mali");
INSERT INTO countries VALUES("139","Malta");
INSERT INTO countries VALUES("140","Marshall Islands");
INSERT INTO countries VALUES("141","Martinique");
INSERT INTO countries VALUES("142","Mauritania");
INSERT INTO countries VALUES("143","Mauritius");
INSERT INTO countries VALUES("144","Mayotte");
INSERT INTO countries VALUES("145","Mexico");
INSERT INTO countries VALUES("146","Micronesia, Federated States of");
INSERT INTO countries VALUES("147","Moldova, Republic of");
INSERT INTO countries VALUES("148","Monaco");
INSERT INTO countries VALUES("149","Mongolia");
INSERT INTO countries VALUES("150","Montenegro");
INSERT INTO countries VALUES("151","Montserrat");
INSERT INTO countries VALUES("152","Morocco");
INSERT INTO countries VALUES("153","Mozambique");
INSERT INTO countries VALUES("154","Myanmar");
INSERT INTO countries VALUES("155","Namibia");
INSERT INTO countries VALUES("156","Nauru");
INSERT INTO countries VALUES("157","Nepal");
INSERT INTO countries VALUES("158","Netherlands");
INSERT INTO countries VALUES("159","Netherlands Antilles");
INSERT INTO countries VALUES("160","New Caledonia");
INSERT INTO countries VALUES("161","New Zealand");
INSERT INTO countries VALUES("162","Nicaragua");
INSERT INTO countries VALUES("163","Niger");
INSERT INTO countries VALUES("164","Nigeria");
INSERT INTO countries VALUES("165","Niue");
INSERT INTO countries VALUES("166","Norfolk Island");
INSERT INTO countries VALUES("167","Northern Mariana Islands");
INSERT INTO countries VALUES("168","Norway");
INSERT INTO countries VALUES("169","Oman");
INSERT INTO countries VALUES("170","Pakistan");
INSERT INTO countries VALUES("171","Palau");
INSERT INTO countries VALUES("172","Palestinian Territory, Occupied");
INSERT INTO countries VALUES("173","Panama");
INSERT INTO countries VALUES("174","Papua New Guinea");
INSERT INTO countries VALUES("175","Paraguay");
INSERT INTO countries VALUES("176","Peru");
INSERT INTO countries VALUES("177","Philippines");
INSERT INTO countries VALUES("178","Pitcairn");
INSERT INTO countries VALUES("179","Poland");
INSERT INTO countries VALUES("180","Portugal");
INSERT INTO countries VALUES("181","Puerto Rico");
INSERT INTO countries VALUES("182","Qatar");
INSERT INTO countries VALUES("183","Reunion");
INSERT INTO countries VALUES("184","Romania");
INSERT INTO countries VALUES("185","Russian Federation");
INSERT INTO countries VALUES("186","Rwanda");
INSERT INTO countries VALUES("187","Saint Barthelemy");
INSERT INTO countries VALUES("188","Saint Helena");
INSERT INTO countries VALUES("189","Saint Kitts and Nevis");
INSERT INTO countries VALUES("190","Saint Lucia");
INSERT INTO countries VALUES("191","Saint Martin");
INSERT INTO countries VALUES("192","Saint Pierre and Miquelon");
INSERT INTO countries VALUES("193","Saint Vincent and the Grenadines");
INSERT INTO countries VALUES("194","Samoa");
INSERT INTO countries VALUES("195","San Marino");
INSERT INTO countries VALUES("196","Sao Tome and Principe");
INSERT INTO countries VALUES("197","Saudi Arabia");
INSERT INTO countries VALUES("198","Senegal");
INSERT INTO countries VALUES("199","Serbia");
INSERT INTO countries VALUES("200","Serbia and Montenegro");
INSERT INTO countries VALUES("201","Seychelles");
INSERT INTO countries VALUES("202","Sierra Leone");
INSERT INTO countries VALUES("203","Singapore");
INSERT INTO countries VALUES("204","Sint Maarten");
INSERT INTO countries VALUES("205","Slovakia");
INSERT INTO countries VALUES("206","Slovenia");
INSERT INTO countries VALUES("207","Solomon Islands");
INSERT INTO countries VALUES("208","Somalia");
INSERT INTO countries VALUES("209","South Africa");
INSERT INTO countries VALUES("210","South Georgia and the South Sandwich Islands");
INSERT INTO countries VALUES("211","South Sudan");
INSERT INTO countries VALUES("212","Spain");
INSERT INTO countries VALUES("213","Sri Lanka");
INSERT INTO countries VALUES("214","Sudan");
INSERT INTO countries VALUES("215","Suriname");
INSERT INTO countries VALUES("216","Svalbard and Jan Mayen");
INSERT INTO countries VALUES("217","Swaziland");
INSERT INTO countries VALUES("218","Sweden");
INSERT INTO countries VALUES("219","Switzerland");
INSERT INTO countries VALUES("220","Syrian Arab Republic");
INSERT INTO countries VALUES("221","Taiwan, Province of China");
INSERT INTO countries VALUES("222","Tajikistan");
INSERT INTO countries VALUES("223","Tanzania, United Republic of");
INSERT INTO countries VALUES("224","Thailand");
INSERT INTO countries VALUES("225","Timor-Leste");
INSERT INTO countries VALUES("226","Togo");
INSERT INTO countries VALUES("227","Tokelau");
INSERT INTO countries VALUES("228","Tonga");
INSERT INTO countries VALUES("229","Trinidad and Tobago");
INSERT INTO countries VALUES("230","Tunisia");
INSERT INTO countries VALUES("231","Turkey");
INSERT INTO countries VALUES("232","Turkmenistan");
INSERT INTO countries VALUES("233","Turks and Caicos Islands");
INSERT INTO countries VALUES("234","Tuvalu");
INSERT INTO countries VALUES("235","Uganda");
INSERT INTO countries VALUES("236","Ukraine");
INSERT INTO countries VALUES("237","United Arab Emirates");
INSERT INTO countries VALUES("238","United Kingdom");
INSERT INTO countries VALUES("239","United States");
INSERT INTO countries VALUES("240","United States Minor Outlying Islands");
INSERT INTO countries VALUES("241","Uruguay");
INSERT INTO countries VALUES("242","Uzbekistan");
INSERT INTO countries VALUES("243","Vanuatu");
INSERT INTO countries VALUES("244","Venezuela");
INSERT INTO countries VALUES("245","Viet Nam");
INSERT INTO countries VALUES("246","Virgin Islands, British");
INSERT INTO countries VALUES("247","Virgin Islands, U.s.");
INSERT INTO countries VALUES("248","Wallis and Futuna");
INSERT INTO countries VALUES("249","Western Sahara");
INSERT INTO countries VALUES("250","Yemen");
INSERT INTO countries VALUES("251","Zambia");
INSERT INTO countries VALUES("252","Zimbabwe");



CREATE TABLE `faq` (
  `FAQid` int(10) NOT NULL AUTO_INCREMENT,
  `faq_title` varchar(355) NOT NULL,
  `page_id` int(10) NOT NULL,
  `faq_descrippstion` longtext NOT NULL,
  `bgcolor` varchar(55) NOT NULL DEFAULT '#FFFFFF',
  `Font_color` varchar(25) NOT NULL DEFAULT '#000000',
  `serial_list` int(2) NOT NULL,
  PRIMARY KEY (`FAQid`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

INSERT INTO faq VALUES("23","Requirement for Renewal","43","&lt;ol&gt;&lt;li&gt;Registration Number and Class of the Trademark&lt;/li&gt;&lt;li&gt;&amp;nbsp;Copy of the last renewal or registration certificate&lt;/li&gt;&lt;li&gt;POA: Notarization or legalization does not require. Scanned copy is sufficient. &lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; Download POA&lt;/p&gt;","#ffffff","#000000","0");
INSERT INTO faq VALUES("24","Timeline","43","&lt;p&gt;2 to 3 Months&lt;br&gt;&lt;/p&gt;","#ffffff","#000000","0");
INSERT INTO faq VALUES("25","Procedure for filing for a renewal","43","&lt;p&gt;Request to renew a trademark in Bangladesh can be filed within 6 months BEFORE THE EXPIRY of the registration/ renewal term if accompanied by the requisite renewal fees on the prescribed form. Request to renew a trademark in Bangladesh can be filed within 6 months AFTER THE EXPIRY of the registration/ renewal term if accompanied by the requisite renewal fees on the prescribed form.&lt;br&gt;&lt;/p&gt;","#ffffff","#000000","0");
INSERT INTO faq VALUES("26","If Abandoned","43","&lt;p&gt;If a trademark has been removed from the Register on grounds of non-renewal then the same can be restored by filing an application in the prescribed form for the restoration of the mark within 1 year from the expiration of the last registration of the trademark. If the mark not been removed, a trademark can be renewed by depositing delay fee.&lt;br&gt;&lt;/p&gt;","#ffffff","#000000","0");
INSERT INTO faq VALUES("27","Requirement","44","&lt;p&gt;Description of the Mark and Class.&lt;br&gt;&lt;/p&gt;","#ffffff","#000000","0");
INSERT INTO faq VALUES("28","Word mark Search in Bangladesh","44","&lt;p&gt;Word mark search edition of Bangladesh follows the Nice Classification and trademark applications can be filed for goods in classes 1-34 and services in classes 35-45. Searches in Bangladesh can be conducted for the desired class and associated classes. It is advisable to conduct comprehensive trademark clearance search in Bangladesh to ascertain availability of the proposed mark and also to overcome any objection and opposition with respect to mark later on. Along with trademark search, it is also advisable to do a comprehensive company search and domain search of the proposed trademark in Bangladesh.&lt;br&gt;&lt;/p&gt;","#ffffff","#000000","0");
INSERT INTO faq VALUES("29","Device Mark Search in Bangladesh","44","&lt;p&gt;It is advisable to conduct a comprehensive search for a figuration trademark. The device marks include individual marks such as stylized letters, numerals, shapes, plants, celestial bodies, living creatures etc. or combination of marks containing device marks. A device mark search in Bangladesh can be conducted amongst the marks filed and registered as per the Vienna code classification.&lt;br&gt;&lt;/p&gt;","#ffffff","#000000","0");



CREATE TABLE `file_management` (
  `fileid` int(10) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(200) NOT NULL,
  `file_url` varchar(300) NOT NULL,
  `File_uploaded` varchar(200) NOT NULL,
  PRIMARY KEY (`fileid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO file_management VALUES("1","File Name","628c4a9c3c9201653361308","IFC Training of Trainer (ToT) usd.docx ");
INSERT INTO file_management VALUES("3","File Name 66","628d4ad104d421653426897","sdfsadfsf.jpg ");
INSERT INTO file_management VALUES("4","File Name 6666","628d4b3ccfa6a1653427004","IMG-4175.JPG ");
INSERT INTO file_management VALUES("5","File Name rtrtt ","628d58a15d2681653430433","LPI-IFC-TPMA-Trainer-badge.png ");



CREATE TABLE `flowchart` (
  `Flowchartid` int(10) NOT NULL AUTO_INCREMENT,
  `Flowchart_Titel` varchar(300) NOT NULL,
  `Flowchart_service_id` int(10) NOT NULL,
  `Flowchart_descripstion` longtext NOT NULL,
  `page_id` int(10) NOT NULL,
  `Process_Title` varchar(255) NOT NULL,
  `serial_list` int(2) NOT NULL,
  PRIMARY KEY (`Flowchartid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `header_menu` (
  `menu_id` int(10) NOT NULL AUTO_INCREMENT,
  `margin` varchar(100) NOT NULL,
  `font_size` int(10) NOT NULL,
  `font_color` varchar(25) NOT NULL,
  `font_family` varchar(200) NOT NULL,
  `background_color` varchar(100) NOT NULL,
  `text_transform` varchar(30) NOT NULL,
  `hover_color` varchar(20) NOT NULL,
  `active_color` varchar(20) NOT NULL,
  `line_height` float NOT NULL,
  `scrol_height` int(10) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO header_menu VALUES("2","0","14","#222222","Lucida Sans Unicode","#f6f4f2","uppercase","#568356","#034e83","1.6","0");



CREATE TABLE `home_page` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `content` varchar(500) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(300) NOT NULL,
  `bg_color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

INSERT INTO home_page VALUES("1","1.1","What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and","#","blog1.webp","linear-gradient(to bottom, #f0f2f0, #000c40)");
INSERT INTO home_page VALUES("2","1.2","What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry.","#","team1.png","#034e83");
INSERT INTO home_page VALUES("3","page 3","What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry.","#","cat3.jpg","#034e83");
INSERT INTO home_page VALUES("4","Home page 4","What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry.","#","cat3.jpg","linear-gradient(to bottom, #44a08d, #093637);");
INSERT INTO home_page VALUES("5","page 5","What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry.","#","images.jpg","#1902ca");
INSERT INTO home_page VALUES("6","Home page 6","What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry.","#","optimaznew.jpg","#02453a");
INSERT INTO home_page VALUES("7","Home page 7","What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry.","#","University-Student-PNG.png","linear-gradient(to bottom, #44a08d, #093637);");
INSERT INTO home_page VALUES("8","Home page 8","What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry.","#","cat3.jpg","#9d5401");
INSERT INTO home_page VALUES("9","Home page 9","What is Lorem Ipsum?Lorem Ipsum is simply ","#","blog2.jpg","#8050f2");



CREATE TABLE `image_gallay` (
  `image_id` int(10) NOT NULL AUTO_INCREMENT,
  `page_id` int(10) NOT NULL,
  `images` varchar(300) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO image_gallay VALUES("11","26","icon.png,lawyer.jpg,logo (4).png,logo.jpeg,logo.png,world-news.png");



CREATE TABLE `our_clients` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) NOT NULL,
  `client_logo` varchar(255) NOT NULL,
  `client_countri` varchar(255) NOT NULL,
  `client_ditils` varchar(500) NOT NULL,
  `page_id` int(10) NOT NULL,
  `bgcolor` varchar(25) NOT NULL DEFAULT '#E8E8E8',
  `serial_list` int(2) NOT NULL,
  `Font_color` varchar(25) NOT NULL DEFAULT '#000',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `our_services` (
  `service_name` varchar(200) NOT NULL,
  `service_icon` varchar(50) NOT NULL,
  `service_text_link` varchar(300) NOT NULL,
  `service_bgcolor` varchar(25) NOT NULL,
  `service_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `our_team` (
  `team_id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Designation` varchar(300) NOT NULL,
  `About` varchar(5000) NOT NULL,
  `Phone_No` varchar(15) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Profile_pic` varchar(300) NOT NULL,
  `status` int(2) NOT NULL,
  `serial_list` int(2) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO our_team VALUES("1","Adv. Chaudhury Reagan","IP Attorney & CEO","    &lt;p&gt;skdjflask&lt;/p&gt;","8801613336333","advreagan@gmail.com","profile1.jpg","0","1");
INSERT INTO our_team VALUES("3","Tanvir Hasan","Web Developer","     &lt;p&gt;Web Developer&lt;br&gt;&lt;/p&gt;","01843640517","admin@gmail.com","New Project (1).jpg","0","3");
INSERT INTO our_team VALUES("4","Sumi Akter","Web Designer"," <p>new about </p>","01843640517","hello@gmail.com","profile3.jpg","0","4");
INSERT INTO our_team VALUES("5","Amena Akter","Web Designer","<p>Web Designer<br></p>","01843640517","hello@gmail.com","profile2.jpg","0","2");



CREATE TABLE `our_team_design` (
  `our_team_design_id` int(10) NOT NULL AUTO_INCREMENT,
  `name_font_size` int(10) NOT NULL,
  `designation_font_size` int(10) NOT NULL,
  `name_font_color` varchar(25) NOT NULL,
  `designation_font_color` varchar(25) NOT NULL,
  `name_font_family` varchar(100) NOT NULL,
  `designation_font_family` varchar(100) NOT NULL,
  `background_color` varchar(200) NOT NULL,
  `hover_color` varchar(20) NOT NULL,
  `icon_color` varchar(20) NOT NULL,
  `icon_bg_color` varchar(200) NOT NULL,
  `shedrocolor` varchar(200) NOT NULL,
  PRIMARY KEY (`our_team_design_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO our_team_design VALUES("1","16","14","#ffffff","#ffffff","&#039;Oswald&#039;, sans-serif","Poppins","#2d642d","#7a7a7a","#ffffff","#2d642d","");



CREATE TABLE `page_file` (
  `fileid` int(10) NOT NULL AUTO_INCREMENT,
  `file_title` varchar(300) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `page_id` int(10) NOT NULL,
  `fileuploaddate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `serial_list` int(2) NOT NULL,
  PRIMARY KEY (`fileid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

INSERT INTO page_file VALUES("17","Trademarks in Bangladesh may ","logo (4).png","15","2022-04-23 12:13:38","2");
INSERT INTO page_file VALUES("18","dfgdfgdfgsdfsdfjghjhg","logo (4).png","15","2022-04-23 12:13:47","1");



CREATE TABLE `page_team` (
  `tid` int(10) NOT NULL AUTO_INCREMENT,
  `page_id` int(10) NOT NULL,
  `team_member_id` int(255) NOT NULL,
  `bgcolor` varchar(25) NOT NULL DEFAULT '#E8E8E8',
  `serial_list_pt` int(2) NOT NULL,
  `text_color` varchar(25) NOT NULL DEFAULT '#000',
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

INSERT INTO page_team VALUES("3","15","3","#1b935b","1","#000000");
INSERT INTO page_team VALUES("11","15","1","#e8e8e8","2","#000000");
INSERT INTO page_team VALUES("12","26","3","#ffffff","0","#000");
INSERT INTO page_team VALUES("13","26","1","#ffffff","0","#000");
INSERT INTO page_team VALUES("14","15","4","#ffffff","0","#000");
INSERT INTO page_team VALUES("15","15","5","#ffffff","0","#000");
INSERT INTO page_team VALUES("16","41","1","#ffffff","0","#000");
INSERT INTO page_team VALUES("17","41","3","#ffffff","0","#000");
INSERT INTO page_team VALUES("18","41","4","#ffffff","0","#000");
INSERT INTO page_team VALUES("19","41","5","#ffffff","0","#000");
INSERT INTO page_team VALUES("20","42","1","#ffffff","0","#000");
INSERT INTO page_team VALUES("21","42","3","#ffffff","0","#000");
INSERT INTO page_team VALUES("22","42","4","#ffffff","0","#000");
INSERT INTO page_team VALUES("23","42","5","#ffffff","0","#000");



CREATE TABLE `pages` (
  `page_id` int(10) NOT NULL AUTO_INCREMENT,
  `manu_title` varchar(255) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_url` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `menu_icon` varchar(50) NOT NULL,
  `time` time(6) DEFAULT NULL,
  `page_parent_id` int(10) DEFAULT NULL,
  `page_status` int(2) NOT NULL DEFAULT '0',
  `page_content` longtext,
  `page_featured_image` varchar(300) DEFAULT NULL,
  `bg_color` varchar(200) NOT NULL,
  `seo_title` varchar(355) NOT NULL DEFAULT 'seo title',
  `seo_keyword` varchar(555) NOT NULL DEFAULT 'seo_keyword',
  `seo_description` varchar(1000) NOT NULL DEFAULT 'seo_description',
  `contact_parson` varchar(20) NOT NULL,
  `contact_parson_titel` varchar(255) NOT NULL DEFAULT 'Your Lawyer is here',
  `contact_parson_color` varchar(20) NOT NULL DEFAULT '#E8E8E8',
  `contact_parson_text_color` varchar(25) NOT NULL,
  `header_bg_img` varchar(355) NOT NULL DEFAULT 'cat1.jpg',
  `bgimag_off_on` varchar(10) NOT NULL DEFAULT '1',
  `header_img_two` varchar(355) NOT NULL DEFAULT 'cat3.jpg',
  `header_overlay_color` varchar(200) NOT NULL,
  `Section_Title_Price` varchar(355) NOT NULL DEFAULT 'Schedule Fee',
  `Section_Title_Flowchart` varchar(355) NOT NULL DEFAULT 'Flowchart',
  `Section_Title_Faq` varchar(355) NOT NULL DEFAULT 'FAQ',
  `Section_Title_File` varchar(355) NOT NULL DEFAULT 'File Download',
  `Section_gap_off_on` int(2) NOT NULL DEFAULT '0',
  `main_menu` int(10) NOT NULL DEFAULT '0',
  `client_off_on` int(2) NOT NULL,
  `services_off_on` int(2) NOT NULL,
  `global_color` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4;

INSERT INTO pages VALUES("42","Trademark","Trademark Registration in Bangladesh (COST & Procedure)","trademark","2022-05-12","fas fa-trademark","00:00:00.000000","0","1","                                        &lt;h3 style=&quot;font-family: system-ui, -apple-system, &quot;&gt;&lt;b&gt;Trademark Registration in Bangladesh (COST &amp;amp; Procedure)&lt;/b&gt;&lt;/h3&gt;&lt;div style=&quot;font-family: system-ui, -apple-system, &quot; segoe=&quot;&quot; ui&quot;,=&quot;&quot; roboto,=&quot;&quot; &quot;helvetica=&quot;&quot; neue&quot;,=&quot;&quot; arial,=&quot;&quot; &quot;noto=&quot;&quot; sans&quot;,=&quot;&quot; &quot;liberation=&quot;&quot; sans-serif,=&quot;&quot; &quot;apple=&quot;&quot; color=&quot;&quot; emoji&quot;,=&quot;&quot; &quot;segoe=&quot;&quot; ui=&quot;&quot; symbol&quot;,=&quot;&quot; emoji&quot;;=&quot;&quot; font-size:=&quot;&quot; 16px;=&quot;&quot; text-align:=&quot;&quot; justify;&quot;=&quot;&quot;&gt;A trademark, trade mark, or trade-mark is a distinctive sign or indicator used by an individual, business organization, or other legal entity to help consumers identify that its products or services with which the trademark appears originate from a unique source, and to help distinguish its products or services from those of other entities.&lt;/div&gt;&lt;div style=&quot;font-family: system-ui, -apple-system, &quot; segoe=&quot;&quot; ui&quot;,=&quot;&quot; roboto,=&quot;&quot; &quot;helvetica=&quot;&quot; neue&quot;,=&quot;&quot; arial,=&quot;&quot; &quot;noto=&quot;&quot; sans&quot;,=&quot;&quot; &quot;liberation=&quot;&quot; sans-serif,=&quot;&quot; &quot;apple=&quot;&quot; color=&quot;&quot; emoji&quot;,=&quot;&quot; &quot;segoe=&quot;&quot; ui=&quot;&quot; symbol&quot;,=&quot;&quot; emoji&quot;;=&quot;&quot; font-size:=&quot;&quot; 16px;=&quot;&quot; text-align:=&quot;&quot; justify;&quot;=&quot;&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;font-family: system-ui, -apple-system, &quot; segoe=&quot;&quot; ui&quot;,=&quot;&quot; roboto,=&quot;&quot; &quot;helvetica=&quot;&quot; neue&quot;,=&quot;&quot; arial,=&quot;&quot; &quot;noto=&quot;&quot; sans&quot;,=&quot;&quot; &quot;liberation=&quot;&quot; sans-serif,=&quot;&quot; &quot;apple=&quot;&quot; color=&quot;&quot; emoji&quot;,=&quot;&quot; &quot;segoe=&quot;&quot; ui=&quot;&quot; symbol&quot;,=&quot;&quot; emoji&quot;;=&quot;&quot; font-size:=&quot;&quot; 16px;=&quot;&quot; text-align:=&quot;&quot; justify;&quot;=&quot;&quot;&gt;&lt;div&gt;Trademarks in Bangladesh may be designated by the following symbols:&lt;/div&gt;&lt;div&gt;â„¢(for an unregistered trademark, but for which application has been filed)&lt;br&gt;&lt;/div&gt;&lt;div&gt;Â® (for a registered trademark)&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;div&gt;A trademark is typically a name, word, phrase, logo, symbol, design, image, or a combination of these elements. There is also a range of non-conventional trademarks comprising marks that do not fall into these standard categories, such as those based on color, smell, or sound.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;The Bangladesh Trademarks Act, 2009 also provides that if a registered trademark is not used for a continuous period of 5 years from the date of its registration, then the same becomes vulnerable to cancellation action on grounds of non-use.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;h5 style=&quot;margin-bottom: 0.5rem; line-height: 1.2;&quot;&gt;Types of Trademark Applications in Bangladesh&lt;/h5&gt;&lt;div&gt;&lt;div&gt;Ordinary Trademark Application:&amp;nbsp;Ordinary trademark applications filed in Bangladesh are applications without claiming any priority. Ordinarily, a trademark application is filed on form TM-1.&amp;nbsp;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;However, the Trademarks Act also lays down provisions regarding the filing of priority applications, wherein the priority of the mark can be claimed in the said mark filed in a convention country.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Convention Trademark Application (Priority Trademark Application)&lt;/div&gt;&lt;div&gt;A priority trademark application should be filed in Bangladesh within 6 months after the date on which the application was made in the convention country. A certified copy of the priority documents needs to be filed within 3 months from the date of filing of the convention application in Bangladesh.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;h5 style=&quot;margin-bottom: 0.5rem; line-height: 1.2;&quot;&gt;Classes of Trademark in Bangladesh&lt;/h5&gt;&lt;div&gt;The Bangladesh trademark office follows the 10th edition of the NICE Classification in addition to a list of goods and services maintained by the Bangladesh Trademarks Office. The registration of marks is acceptable in classes 1-34 in respect of goods and classes 35-45 in respect of services. The Bangladesh trademark office accepts only single class applications.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;h5 style=&quot;margin-bottom: 0.5rem; line-height: 1.2;&quot;&gt;Multi-Class Trademark Applications&lt;/h5&gt;&lt;div&gt;Multi-Class trademark with a single application cannot be filed in Bangladesh. Separate&amp;nbsp;applications has to be filed in case of multi-class.&amp;nbsp;&lt;br&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Registration Validity&lt;/div&gt;&lt;div&gt;The registration of the trademark is valid for a period of 7 years and renewable every 10 years. An application for renewing a trademark registration can be filed at any time during the 6 months prior to the expiration of the registration/last renewal validity. Late renewal is also possible after the expiry and within 6 months from the validity date. A restoration of the registration is possible after 6 months but before 1 year from the validity date of the registration.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;div&gt;&lt;span style=&quot;background-color: rgb(255, 255, 0);&quot;&gt;Infringement&amp;nbsp;&lt;/span&gt;&lt;/div&gt;&lt;div&gt;The owner of a registered trademark may initiate legal proceedings for trademark infringement to prevent unauthorized use of that trademark. However, registration is not required. The owner of a common-law trademark may also file suit, but an unregistered mark may be protectable only in the geographical area within which it has been used or in geographical areas into which it may be reasonably expected to expand.&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;                                              
                      
                    
                      
                ","blog1.webp","linear-gradient(to bottom, #abc1ab, #f6f4f2)","seo title","seo_keyword","seo_description","1","Your Lawyer is here","#e8e8e8","#000000","cat2.webp","1","cat3.jpg","#2d642d","Schedule Fee","Flowchart","FAQ","File Download","0","1","0","0","1");
INSERT INTO pages VALUES("43","Renewal","Trademark Renewal","renewal","2022-05-12","fad fa-business-time","00:00:00.000000","42","1","                    &lt;p&gt;A trademark can be renewed in Bangladesh from time to time for an unlimited period upon payment of the renewal fees, failing which the mark becomes liable to be removed from the Register on account of non-renewal. Each renewal term is for a period of 10 years.&lt;/p&gt;&lt;p&gt;The procedure for filing for a renewal of a trademark in Bangladesh is as follows: Request to renew a trademark in Bangladesh can be filed within 6 months BEFORE THE EXPIRY of the registration/ renewal term if accompanied by the requisite renewal fees on the prescribed form.&lt;br&gt;&lt;/p&gt;&lt;p&gt;Request to renew a trademark in Bangladesh can be filed within 6 months AFTER THE EXPIRY of the registration/ renewal term if accompanied by the requisite renewal fees on the prescribed form.&lt;br&gt;&lt;/p&gt;&lt;p&gt;A Certificate of Renewal is issued by the Registrar as evidence of payment of the renewal fee due at that period. Clients are advised that the renewal fee due on a mark cannot be paid until the mark is registered. Clients are therefore advised that they need not worry about the renewal fee until the mark has been registered.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 0.894rem;&quot;&gt;If removed from the Register of a trademark, how to restore?&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;The procedure for filing for restoration of a trademark in Bangladesh is as follows: If a trademark has been removed from the Register on grounds of non-renewal then the same can be restored by filing an application in the prescribed form for restoration of the mark within 1 year from the expiration of the last registration of the trademark. For more information on trademark renewal and restoration in Bangladesh, mail us&amp;nbsp;info@supremeip.com&lt;/p&gt;      
                ","blog1.webp","linear-gradient(to bottom, #abc1ab, #f6f4f2)","seo title","seo_keyword","seo_description","1","Your Lawyer is here","#e8e8e8","#000000","cat2.webp","1","cat3.jpg","#2d642d","Schedule Fee","Flowchart","FAQ","File Download","0","3","0","0","0");
INSERT INTO pages VALUES("44","Search","Trademark Search in Bangladesh","Search","2022-05-12","fas fa-file-search","00:00:00.000000","42","1","                    &lt;div&gt;Search is not mandatory but is advisable for the following two reasons; It will help one in determining whether the application has a chance for success, or whether it would be a waste of time and money to try and register it in its present form. It will also help one avoid trademark infringement and potential lawsuits if one went straight ahead in applying for registration.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Before applying for the registration of a trademark, an applicant may conduct a search to find out whether the trademark is registrable or not and whether there exists in the records a trademark, which could be confused with the intended trademark. An application for search and preliminary advice by the registrar should be made by the prospecting proprietor or his agent on Form TM-04.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;div&gt;Search is not mandatory but is advisable for the following two reasons; It will help one in determining whether the application has a chance for success, or whether it would be a waste of time and money to try and register it in its present form. It will also help one avoid trademark infringement and potential lawsuits if one went straight ahead in applying for registration.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Before applying for the registration of a trademark, an applicant may conduct a search to find out whether the trademark is registrable or not and whether there exists in the records a trademark, which could be confused with the intended trademark. An application for search and preliminary advice by the registrar should be made by the prospecting proprietor or his agent on Form TM-04.&lt;/div&gt;&lt;/div&gt;                          
                      
                ","blog1.webp","linear-gradient(to bottom, #abc1ab, #f6f4f2)","seo title","seo_keyword","seo_description","1","Your Lawyer is here","#e8e8e8","#000000","cat1.jpg","1","cat3.jpg","#2d642d","Schedule Fee","Flowchart","FAQ","File Download","0","2","0","0","0");
INSERT INTO pages VALUES("45","objection","Office Action of Trademark","objection","0000-00-00","Icon","00:00:00.000000","42","1","                                                            &lt;div&gt;&lt;h1&gt;How to overcome an objection of Trademark in Bangladesh?&lt;/h1&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;After an application is filed, it is examined by the Registrar with regard to the distinctiveness, possibility of deceptiveness and conflicting trademarks. If an objection to a registration is raised, an official examination report will be issued by the Registrar within 6 months to 1 year, depending on the back log at the Registry.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;The Registrar may accept or refuse the application subject to the provisions of the ordinance.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;h2&gt;Proceedings&lt;/h2&gt;&lt;div&gt;If the objections raised by the Registrar with regard to an application are forwarded to the applicant and the applicant has to file an appropriate reply with the supporting documents to the official objections within 60 days. The Registrar may accept the application on the basis of the written reply or responses and documents filed or may list the application for hearing.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;h3&gt;Appeal&lt;/h3&gt;&lt;div&gt;An appeal against the decision of registrar at the hearing or without the hearing can be filed by the applicant within 1 month from the date of such communication to the Registrar, requiring him to state in writing the grounds of, and the materials used by him in arriving at his decision. When an application for registration of a trademark is accepted, the Registrar advertises it in the official Trademarks Journal which is published and available on this link: www.supremeip.com/trademark-journal/&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Which trademark application in Bangladesh can be refused or objected by the Registrar?&lt;/div&gt;&lt;div&gt;(1) The mark is similar/ identical to an earlier trademark for the same or similar goods/ services.&lt;/div&gt;&lt;div&gt;(2) The mark is similar/identical to an earlier trademark in respect of different goods/services.&lt;/div&gt;&lt;div&gt;(3) The mark is a commonly used and accepted name of any single chemical element or single chemical compound.&lt;/div&gt;&lt;div&gt;(4) The mark is likely to deceive the public or cause confusion with regard to the origin of goods.&lt;/div&gt;&lt;div&gt;(5) The matter contained or comprised in the mark is likely to hurt religious susceptibilities of any class or section of the citizens of Bangladesh.&lt;/div&gt;&lt;div&gt;(6) It contains or comprises of scandalous or obscene matter.&lt;/div&gt;&lt;div&gt;(7) It is a word declared by World Health Organization as an international non-proprietary name.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;The above categories of marks may however be registered if the proprietor of the earlier trademark consents to it or there has been an honest concurrent use of the later mark.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;h4&gt;Which trademarks cannot be registered in Bangladesh?&lt;/h4&gt;&lt;div&gt;(a) which comprises or consists of any scandalous or obscene matter; or&lt;/div&gt;&lt;div&gt;(b) the use of which would be contrary to any law for the time being in force; or (c) the use of which would be likely to deceive or cause confusion; or&lt;/div&gt;&lt;div&gt;(d) which contains any matter likely to hurt the religious susceptibilities of any class of the citizens of Bangladesh;&lt;/div&gt;&lt;div&gt;(e) which is identical with, or is an imitation of, or contains as an element, an armorial bearing, flag or other emblem, a name or abbreviation or initials of the name of, or official sign or hallmark adopted by, any state or international organization created by an international convention, charter or other instruments, unless authorized by the competent authority of that state or organization; or&lt;/div&gt;&lt;div&gt;(f) which would otherwise be disentitled to protection in a court;&lt;/div&gt;&lt;div&gt;(g) the application is made in bad intention and faith;&lt;/div&gt;&lt;/div&gt;                        
                    
                    
                    
                ","2022-05-19 18_40_41-Window.png","#222222","seo title","seo_keyword","seo_description","1","Your Lawyer is here","#e8e8e8","#000000","cat1.jpg","1","cat3.jpg","#222222","Schedule Fee","Flowchart","FAQ","File Download","0","4","0","0","1");
INSERT INTO pages VALUES("46","newpage","sdfasdfsad","newpage","0000-00-00","Icon","00:00:00.000000","42","1","                                                                                                                        &lt;div&gt;After an application is filed, it is examined by the Registrar with regard to the distinctiveness, possibility of deceptiveness and conflicting trademarks. If an objection to a registration is raised, an official examination report will be issued by the Registrar within 6 months to 1 year, depending on the back log at the Registry.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;The Registrar may accept or refuse the application subject to the provisions of the ordinance.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Proceedings&lt;/div&gt;&lt;div&gt;If the objections raised by the Registrar with regard to an application are forwarded to the applicant and the applicant has to file an appropriate reply with the supporting documents to the official objections within 60 days. The Registrar may accept the application on the basis of the written reply or responses and documents filed or may list the application for hearing.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Appeal&lt;/div&gt;&lt;div&gt;An appeal against the decision of registrar at the hearing or without the hearing can be filed by the applicant within 1 month from the date of such communication to the Registrar, requiring him to state in writing the grounds of, and the materials used by him in arriving at his decision. When an application for registration of a trademark is accepted, the Registrar advertises it in the official Trademarks Journal which is published and available on this link: www.supremeip.com/trademark-journal/&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Which trademark application in Bangladesh can be refused or objected by the Registrar?&lt;/div&gt;&lt;div&gt;(1) The mark is similar/ identical to an earlier trademark for the same or similar goods/ services.&lt;/div&gt;&lt;div&gt;(2) The mark is similar/identical to an earlier trademark in respect of different goods/services.&lt;/div&gt;&lt;div&gt;(3) The mark is a commonly used and accepted name of any single chemical element or single chemical compound.&lt;/div&gt;&lt;div&gt;(4) The mark is likely to deceive the public or cause confusion with regard to the origin of goods.&lt;/div&gt;&lt;div&gt;(5) The matter contained or comprised in the mark is likely to hurt religious susceptibilities of any class or section of the citizens of Bangladesh.&lt;/div&gt;&lt;div&gt;(6) It contains or comprises of scandalous or obscene matter.&lt;/div&gt;&lt;div&gt;(7) It is a word declared by World Health Organization as an international non-proprietary name.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;The above categories of marks may however be registered if the proprietor of the earlier trademark consents to it or there has been an honest concurrent use of the later mark.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Which trademarks cannot be registered in Bangladesh?&lt;/div&gt;&lt;div&gt;(a) which comprises or consists of any scandalous or obscene matter; or&lt;/div&gt;&lt;div&gt;(b) the use of which would be contrary to any law for the time being in force; or (c) the use of which would be likely to deceive or cause confusion; or&lt;/div&gt;&lt;div&gt;(d) which contains any matter likely to hurt the religious susceptibilities of any class of the citizens of Bangladesh;&lt;/div&gt;&lt;div&gt;(e) which is identical with, or is an imitation of, or contains as an element, an armorial bearing, flag or other emblem, a name or abbreviation or initials of the name of, or official sign or hallmark adopted by, any state or international organization created by an international convention, charter or other instruments, unless authorized by the competent authority of that state or organization; or&lt;/div&gt;&lt;div&gt;(f) which would otherwise be disentitled to protection in a court;&lt;/div&gt;&lt;div&gt;(g) the application is made in bad intention and faith;&lt;/div&gt;                          
                      
                      
                      
                      
                      
                      
                ","divorce-by-wife.jpg","#e8e8e8","seo title","seo_keyword","seo_description","1","Your Lawyer is here","#e8e8e8","#000000","cat1.jpg","1","cat3.jpg","#f6f4f2","Schedule Fee","Flowchart","FAQ","File Download","0","5","0","0","1");
INSERT INTO pages VALUES("47","Treadmark","","Treadmark","2022-05-25","Icon","","42","1","","","","seo title","seo_keyword","seo_description","","Your Lawyer is here","#E8E8E8","","cat1.jpg","1","cat3.jpg","","Schedule Fee","Flowchart","FAQ","File Download","0","0","0","0","1");



CREATE TABLE `prices` (
  `priceid` int(10) NOT NULL AUTO_INCREMENT,
  `price_title` varchar(55) NOT NULL,
  `price_subtile` varchar(55) NOT NULL,
  `Priceamount` varchar(10) NOT NULL,
  `service_id` int(10) NOT NULL,
  `price_page_id` int(10) NOT NULL,
  `price_icon` varchar(55) NOT NULL,
  `gmail_link` varchar(255) NOT NULL,
  `Price_Description` longtext NOT NULL,
  `datetimet` datetime(6) NOT NULL,
  `serial_list` int(2) NOT NULL,
  PRIMARY KEY (`priceid`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

INSERT INTO prices VALUES("28","Stage:01 Filling","","$ 100","0","42","","","&lt;p&gt;&lt;span style=&quot;text-align: justify;&quot;&gt;However, registration is not required. The owner of a common-law trademark may also file suit, but an unregistered mark may be protectable only in the geographical area within which it has been used or in geographical areas into which it may be reasonably expected to expand.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;","2022-05-12 12:50:29.000000","0");
INSERT INTO prices VALUES("29","Regular Renewal","","$413 / eac","0","43","","","&lt;ul&gt;&lt;li&gt;&amp;nbsp;Professional fee: $110&lt;/li&gt;&lt;li&gt;&amp;nbsp;Official fee: $288&lt;/li&gt;&lt;li&gt;&amp;nbsp;POA: $15&lt;/li&gt;&lt;li&gt;&amp;nbsp;Disbursement: Free&lt;/li&gt;&lt;li&gt;&amp;nbsp;Courier Based on Demand ($30)&lt;/li&gt;&lt;/ul&gt;","2022-05-12 14:00:14.000000","0");
INSERT INTO prices VALUES("30","Late Renewal","","$513 / eac","0","43","","","&lt;ul&gt;&lt;li&gt;&amp;nbsp;Professional fee: $110&lt;/li&gt;&lt;li&gt;&amp;nbsp;Official fee: $388&lt;/li&gt;&lt;li&gt;&amp;nbsp;POA: $15&lt;/li&gt;&lt;li&gt;&amp;nbsp;Disbursement: Free&lt;/li&gt;&lt;li&gt;&amp;nbsp;Courier Based on Demand ($30)&lt;/li&gt;&lt;/ul&gt;","2022-05-12 14:02:02.000000","0");
INSERT INTO prices VALUES("31","Option-A: WITH OFFICIAL REPORT","","$40","0","44","","","&lt;ul&gt;&lt;li&gt;&lt;span style=&quot;color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 14px;&quot;&gt;Availability search of a mark in one class and obtaining the official report.&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 14px;&quot;&gt;Professional fee: $20&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 14px;&quot;&gt;Official fee: $20&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;color: rgb(50, 50, 50); font-family: Roboto, sans-serif; font-size: 14px;&quot;&gt;Timeline: Official prescribed time (at least 30 working days)&lt;/span&gt;&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;","2022-05-12 14:11:44.000000","0");
INSERT INTO prices VALUES("32","Option-B: WITH OFFICIAL REPORT & OPINION","","$60","0","44","","","&lt;ul&gt;&lt;li&gt;Availability search of a mark in one class and obtaining the official report.&lt;/li&gt;&lt;li&gt;Professional fee: $40&lt;/li&gt;&lt;li&gt;Official fee: $20&lt;/li&gt;&lt;li&gt;Timeline: Official prescribed time (at least 30 working days)&lt;/li&gt;&lt;/ul&gt;","2022-05-12 14:29:35.000000","0");
INSERT INTO prices VALUES("33","Option: C: WITHOUT OFFICIAL REPORT (Word Mark only)","","$25","0","44","","","&lt;ul&gt;&lt;li&gt;Availability search of one mark in one class without obtaining the official report&lt;/li&gt;&lt;li&gt;Professional fee: $25&lt;/li&gt;&lt;li&gt;Timeline: 2 working days&lt;/li&gt;&lt;/ul&gt;","2022-05-12 14:31:01.000000","0");
INSERT INTO prices VALUES("34","Option: D: WITHOUT OFFICIAL REPORT & OPINION (Word Mark","","$40","0","44","","","&lt;ul&gt;&lt;li&gt;Availability search of one mark in one class without obtaining the official report&lt;/li&gt;&lt;li&gt;Professional fee: $25&lt;/li&gt;&lt;li&gt;Timeline: 2 working days&lt;/li&gt;&lt;/ul&gt;","2022-05-12 14:31:25.000000","0");



CREATE TABLE `read_more` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `page_id` int(10) NOT NULL,
  `ditails` varchar(5000) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO read_more VALUES("1","42","&lt;ul&gt;&lt;li&gt;&lt;a href=&quot;#&quot;&gt;trademark&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;font-size: 14.304px;&quot;&gt;&lt;a href=&quot;#&quot;&gt;Bangladesh&lt;/a&gt;&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;font-size: 14.304px;&quot;&gt;&lt;a href=&quot;#&quot;&gt;trademark&lt;/a&gt;&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;font-size: 14.304px;&quot;&gt;&lt;a href=&quot;#&quot;&gt;in Bangladesh&lt;/a&gt;&lt;/span&gt;&lt;/li&gt;&lt;li&gt;&lt;span style=&quot;font-size: 14.304px;&quot;&gt;&lt;a href=&quot;#&quot;&gt;trademark&lt;/a&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 14.304px;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 14.304px;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 14.304px;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;br&gt;&lt;/li&gt;&lt;/ul&gt;");



CREATE TABLE `section_design` (
  `section_design_id` int(10) NOT NULL AUTO_INCREMENT,
  `font_size` int(10) NOT NULL,
  `font_color` varchar(25) NOT NULL,
  `font_family` varchar(100) NOT NULL,
  `background_color` varchar(50) NOT NULL,
  `text-transform` varchar(30) NOT NULL,
  `text_bg_color` varchar(200) NOT NULL,
  PRIMARY KEY (`section_design_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO section_design VALUES("2","20","#ffffff","Lucida Sans Unicode","#f6f4f2","","#2d642d");



CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `logo_size` float NOT NULL,
  `favicon` varchar(100) NOT NULL,
  `footer` mediumtext NOT NULL,
  `copyrightupdate` text NOT NULL,
  `sidebarcolor` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `Print_page_header` varchar(255) NOT NULL,
  `default_img` varchar(300) NOT NULL,
  `default_img2` varchar(200) NOT NULL,
  `Overlay_color` varchar(200) NOT NULL,
  `Overlay_color_opasity` varchar(10) NOT NULL,
  `Overlay_color2` varchar(100) NOT NULL,
  `Overlay_color2_opasity` varchar(10) NOT NULL,
  `default_theam_color` varchar(250) NOT NULL,
  `shadow_color` varchar(100) NOT NULL,
  `shadow_color_number` varchar(10) NOT NULL,
  `client_bg_defult` varchar(25) NOT NULL,
  `page_header_font_size` int(10) NOT NULL,
  `page_header_font_color` varchar(200) NOT NULL,
  `page_header_font_famaily` varchar(200) NOT NULL,
  `page_header_font_lettercash` varchar(100) NOT NULL,
  `page_header_icon_color` varchar(100) NOT NULL,
  `Your_Lawyer_text` varchar(100) NOT NULL,
  `Your_Lawyer_font_size` int(10) NOT NULL,
  `Your_Lawyer_font_famaily` varchar(200) NOT NULL,
  `Your_Lawyer_font_lettercash` varchar(100) NOT NULL,
  `Your_Lawyer_font_color` varchar(100) NOT NULL,
  `Your_Lawyer_bg_color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO settings VALUES("3","logo.png","85","icon.png","&lt;p style=&quot;font-size:12px;&quot;&gt;&lt;b style=&quot;font-size:13px;&quot;&gt;&lt;font color=&quot;#000000&quot;&gt;SUPREPEIP LAW FIRM&lt;/font&gt;&lt;/b&gt;&lt;br&gt;
WhatsUp &lt;a href=&quot;call:+8801613336333&quot; target=&quot;_blank&quot;&gt;+8801613336333&lt;/a&gt;&lt;br&gt;info@supremeip.com&lt;/p&gt;","Copyright © supremeip.com 2022","","01613336333","555.png","cat1.jpg","cat3.jpg","#FF0000","0.3","#2d642d","0.3","linear-gradient(to bottom, #abc1ab, #f6f4f2)","#222222","5","","30","#ffffff","Oswald","capitalize","#ffffff","dsfsdfs","20","Arial","uppercase","#2d642d","#568356");



CREATE TABLE `social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `social_url` varchar(55) NOT NULL,
  `icon` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO social VALUES("1","Facebook","#","fab fa-facebook-f");
INSERT INTO social VALUES("2","Youtube ","#","fab fa-youtube");
INSERT INTO social VALUES("3","Linkedin","#","fab fa-linkedin-in");
INSERT INTO social VALUES("4","Twitter","#","fab fa-twitter");
INSERT INTO social VALUES("7","Wechat","#","fab fa-weixin");
INSERT INTO social VALUES("8","Whatsapp","#","fab fa-whatsapp");



CREATE TABLE `sub_menu` (
  `menu_id` int(10) NOT NULL AUTO_INCREMENT,
  `font_size` varchar(10) NOT NULL,
  `font_color` varchar(25) NOT NULL,
  `font_family` varchar(100) NOT NULL,
  `background_color` varchar(50) NOT NULL,
  `text-transform` varchar(30) NOT NULL,
  `hover_color` varchar(20) NOT NULL,
  `active_color` varchar(20) NOT NULL,
  `line_height` float NOT NULL,
  `text_transform` varchar(50) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO sub_menu VALUES("1","14","#222222","Lucida Sans Unicode","#f6f4f2","ewrwe","#2d642d","#034e83","1","uppercase");



CREATE TABLE `text_color_settings` (
  `tcid` int(11) NOT NULL AUTO_INCREMENT,
  `text_name` varchar(25) NOT NULL,
  `color_code` varchar(25) NOT NULL,
  `font_fmaily` varchar(100) NOT NULL,
  PRIMARY KEY (`tcid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

INSERT INTO text_color_settings VALUES("1","h1","#222222","Poppins");
INSERT INTO text_color_settings VALUES("2","h2","#222222","&#039;Oswald&#039;, sans-serif");
INSERT INTO text_color_settings VALUES("3","h3","#568356","&#039;Oswald&#039;, sans-serif");
INSERT INTO text_color_settings VALUES("4","h4","#2d642d","&#039;Oswald&#039;, sans-serif");
INSERT INTO text_color_settings VALUES("5","h5","#2d642d","");
INSERT INTO text_color_settings VALUES("6","h6","#568356","");
INSERT INTO text_color_settings VALUES("7","p","#2d642d","Arial");
INSERT INTO text_color_settings VALUES("8","q","#568356","");
INSERT INTO text_color_settings VALUES("11","icon","#FF0000","");
INSERT INTO text_color_settings VALUES("12","hover","#034e83","Times New Roman");



CREATE TABLE `topbar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text3` varchar(255) NOT NULL,
  `link3` varchar(555) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO topbar VALUES("2","Contact","#","About","#","Clients","#");

