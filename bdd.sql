SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `Ingredient`;
CREATE TABLE IF NOT EXISTS `Ingredient`
(
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nomIngredient` varchar(25) NOT NULL,
  `recetteID` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `recetteID` (`recetteID`)
)
 ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `Ingredients` (`id`, `nomIngredient`, `recetteID`) VALUES
(1, 'tranche de pain', 1),
(2, 'cheddar', 1),
(3, 'oeuf', 1),
(4, 'jambon', 1),
(5, 'moutarde', 1),

DROP TABLE IF EXISTS `Recette`;
CREATE TABLE IF NOT EXISTS `Recette` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `nomRecette` varchar(100) NOT NULL,
  `descriptionRecette` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

ALTER TABLE `Ingredient`
  ADD CONSTRAINT `ingredient_ibfk_1` 
    FOREIGN KEY (`idRecette`) 
      REFERENCES `Recette` (`id`);
COMMIT;

INSERT INTO `Recette` (`id`, `nomRecette`, `descriptionRecette`) 
    VALUES
      (1, 'Un bon ptit Welsh', 
            'Tout es fait maison même la moutartde!!');