CREATE TABLE IF NOT EXISTS `fajlneveks` (
  `Tipus` varchar(1) COLLATE latin2_hungarian_ci NOT NULL,
  `Engedely szam` varchar(13) COLLATE latin2_hungarian_ci NOT NULL,
  `Adatok idoszaka` varchar(4) COLLATE latin2_hungarian_ci NOT NULL,
  `Sorszam` varchar(2) COLLATE latin2_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

CREATE TABLE IF NOT EXISTS `fejadatoks` (
  `VF` varchar(2) COLLATE latin2_hungarian_ci NOT NULL DEFAULT 'VF',
  `Verzio` varchar(2) COLLATE latin2_hungarian_ci NOT NULL,
  `Elado adoszam` varchar(8) COLLATE latin2_hungarian_ci NOT NULL,
  `Elado engedelyszam` varchar(13) COLLATE latin2_hungarian_ci NOT NULL,
  `Vevo nev` varchar(70) COLLATE latin2_hungarian_ci NOT NULL,
  `Vevo adoszam` varchar(20) COLLATE latin2_hungarian_ci NOT NULL,
  `Vevo adojel` varchar(10) COLLATE latin2_hungarian_ci NOT NULL,
  `Vevo engedelyszam` varchar(20) COLLATE latin2_hungarian_ci NOT NULL,
  `Vevo irszam` varchar(7) COLLATE latin2_hungarian_ci NOT NULL,
  `Vevo varos` varchar(20) COLLATE latin2_hungarian_ci NOT NULL,
  `Vevo utcahsz` varchar(30) COLLATE latin2_hungarian_ci NOT NULL,
  `Forgalom tipusa` varchar(1) COLLATE latin2_hungarian_ci NOT NULL,
  `TKO szam` varchar(20) COLLATE latin2_hungarian_ci NOT NULL,
  `EKO szam` varchar(20) COLLATE latin2_hungarian_ci NOT NULL,
  `Szamlaszam` varchar(20) COLLATE latin2_hungarian_ci NOT NULL,
  `Szamla kelt` date NOT NULL,
  `Szallitas idopont` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

CREATE TABLE IF NOT EXISTS `teteladatoks` (
  `VT` varchar(2) COLLATE latin2_hungarian_ci NOT NULL,
  `Szamlaszam` varchar(20) COLLATE latin2_hungarian_ci NOT NULL,
  `Termek szam` varchar(8) COLLATE latin2_hungarian_ci NOT NULL,
  `Termek nev` varchar(50) COLLATE latin2_hungarian_ci NOT NULL,
  `Termek mennyiseg` varchar(15) COLLATE latin2_hungarian_ci NOT NULL,
  `Termek mertekegyseg` varchar(2) COLLATE latin2_hungarian_ci NOT NULL,
  `Termek kiszereles` varchar(8) COLLATE latin2_hungarian_ci NOT NULL,
  `Alkohol fok` varchar(6) COLLATE latin2_hungarian_ci NOT NULL,
  `Szamla ertek` varchar(16) COLLATE latin2_hungarian_ci NOT NULL,
  `Szamla penznem` varchar(3) COLLATE latin2_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;
