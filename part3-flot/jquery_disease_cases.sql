CREATE TABLE IF NOT EXISTS `jquery_disease_cases` (
  `disease` varchar(50) NOT NULL,
  `2020` int(11) NOT NULL,
  `2021` int(11) NOT NULL,
  `2022` int(11) NOT NULL,
  `2023` int(11) NOT NULL,
  `2024` int(11) NOT NULL,
  `2025` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO `jquery_disease_cases` (`disease`, `2020`, `2021`, `2022`, `2023`, `2024`, `2025`, `id`) VALUES
('Tuberculosis', 10000, 9500, 9000, 8500, 8000, 7500, 1),
('Malaria', 12000, 11500, 11000, 10500, 10000, 9500, 2),
('Hepatitis B', 5000, 5200, 5300, 5400, 5500, 5600, 3),
('HIV/AIDS', 8000, 7800, 7600, 7400, 7200, 7000, 4),
('Dengue Fever', 3000, 3200, 3500, 3700, 3900, 4000, 5);