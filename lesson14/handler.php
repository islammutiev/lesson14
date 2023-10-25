<?php 
if(isset($_POST["name"], $_POST["surname"], $_POST["height"], $_POST["weight"], $_POST["date"])){

    echo "Вы, " , $_POST["name"] , " " , $_POST["surname"] , ", " ,
    "по итогу экспертизы по следующим данным: " , "</br>" ,
    "Рост: " , $_POST["height"] , " " , "см" , "</br>" ,
    "Вес: " , $_POST["weight"] , " " , "кг" , "</br>" ,
    "Дата рождения: " , $_POST["date"] , "</br>" , 
    "признаны годными к воинской службе. Поздравляем!";
};
?>