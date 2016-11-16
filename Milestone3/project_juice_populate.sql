drop table Users;
drop table Alcoholic;
drop table Non_alcoholic;

CREATE TABLE Users (firstName char(50), lastName char(50), userName char(50), passWord char(50), DOB char(50) primary key);

CREATE TABLE Alcoholic (name char(50) primary key, instructions char(250), rating float, ingredient_one char(50),  ingredient_two char(50),  ingredient_three char(50),  ingredient_four char(50),  ingredient_five char(50), ingredient_six char(50), ingredient_seven char(50), ingredient_eight char(50), ingredient_nine char(50), ingredient_ten char(50));

CREATE TABLE Non_alcoholic (name char(50) primary key, instructions char(250), rating float, ingredient_one char(50),  ingredient_two char(50),  ingredient_three char(50),  ingredient_four char(50),  ingredient_five char(50), ingredient_six char(50), ingredient_seven char(50), ingredient_eight char(50), ingredient_nine char(50), ingredient_ten char(50));

insert into Users values('Bryce', 'Melvin', 'bmelvin', 'password101', '01/17/1994');
insert into Users values('Aaron', 'Aaeng', 'Aaron', 'password', '05/02/1994');
insert into Users values('Peter', 'Wang', 'SwagMoney', 'swagmoney', '09/22/1980');
insert into Users values('Emma', 'Langdon', 'Emma', 'password10', '02/05/1990');
insert into Users values('Jack', 'Albert', 'Jal', 'test', '10/20/1992');

insert into Alcoholic values('Martini', 'http://allrecipes.com/recipe/14885/martini/?internalSource=hn_carousel%2003_Martini&referringId=14932&referringContentType=recipe%20hub&referringPosition=carousel%2003', 5, 'gin', 'dry vermout' ,'green olive', 'ice', NULL, NULL, NULL, NULL, NULL, NULL);
insert into Alcoholic values('The Ultimate Cosmopolitan', 'http://allrecipes.com/recipe/133202/the-ultimate-cosmopolitan/?internalSource=recipe%20hub&referringId=1743&referringContentType=recipe%20hub&clickId=cardslot%2054', 4, 'vodka', 'triple sec', 'peach schnapps', 'cranberry juice', 'lemon juice', 'lime juice', NULL, NULL, NULL, NULL);
insert into Alcoholic values('Mixed Fruit Daiquiri', 'http://allrecipes.com/recipe/237867/mixed-fruit-daiquiri/?internalSource=hub%20recipe&referringId=15048&referringContentType=recipe%20hub&clickId=cardslot%202', 3, 'ice', 'strawberry daiquiri mixer', 'apple', 'pineapple', 'mango', 'orange', 'lime juice', 'white rum', NULL, NULL);
insert into Alcoholic values('Tequila Sunrise', 'http://allrecipes.com/recipe/139111/tequila-sunrise/?internalSource=staff%20pick&referringId=1742&referringContentType=recipe%20hub&clickId=cardslot%203', 4.5, 'jigger tequila', 'orange juice', 'ice', 'jigger grenadine syrup', 'orange', 'maraschino cherry', NULL, NULL, NULL, NULL);
insert into Alcoholic values('Jewels Watermelon Margaritas', 'http://allrecipes.com/recipe/221229/jewels-watermelon-margaritas/?internalSource=staff%20pick&referringId=14933&referringContentType=recipe%20hub&clickId=cardslot%203',4.4, 'white sugar', 'water', 'orange zest', 'watermelon', 'white tequila', 'lime juice', 'salt', 'lime', 'ice', NULL);

insert into Non_alcoholic values('Watermelon Lemonade with Kiwi Splash', 'http://www.tablespoon.com/recipes/watermelon-lemonade-with-kiwi-splash/812dc497-7329-4aaa-980c-919d2c0c4ef5', 4, 'kiwifruit', 'sugar', 'watermelon', 'frozen lemonade' , 'water', NULL, NULL, NULL, NULL, NULL);
insert into Non_alcoholic values('Strawberry Citrus Slush' , 'http://www.tablespoon.com/recipes/strawberry-citrus-slush/541d33d6-7313-42df-b093-3708d8cfda4e', 0, 'grapefruit juice', 'frozen lemonade' , 'sugar', 'strawberry drink mix', 'ginger ale', NULL, NULL, NULL, NULL, NULL);
insert into Non_alcoholic values('Iced Vanilla Soy Latte', 'http://www.tablespoon.com/recipes/iced-vanilla-soy-latte/55656c8d-2056-4b20-8f73-69d17c22b655', 2, 'ground espresso', 'water', 'vanilla soymilk' , 'caramel', 'chocolate', 'ice cubes', 'sugar', NULL, NULL, NULL);
insert into Non_alcoholic values('Tropical Tea', 'http://www.tablespoon.com/recipes/tropical-tea/06a29de1-d636-4bf9-9fd3-072dd91e1898', 4, 'water', 'iced tea', 'frozen pineapple-orange', 'mint leaf', NULL, NULL, NULL, NULL, NULL, NULL);
insert into Non_alcoholic values('Non-Alcoholic Sangria', 'http://www.tablespoon.com/recipes/non-alcoholic-sangria/28d78fb7-1dba-4728-9674-28a17dcac18b', 3, 'passon fruit juice', 'sparkling water', 'kiwi', 'orange', 'star fruit', 'lime', 'cranberries', NULL, NULL, NULL);



