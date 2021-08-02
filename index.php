<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h3> Pirmoji uzduotis<br></h3>";
//Sukurkite masyvą iš 101 elemento, kurio indeksai yra nuo 0 iki 100. 
//Tiems masyvo nariams, kurių indeksas dalijasi iš 10 (0, 10, 20, 30,...100), 
//priskirkite reikšmę “A”. Likusiems nariams priskirkite reikšmę “B”. 
//Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();

$array = [];
for($i = 0; $i < 100; $i++){
       if ($i%10==0) {
        $array[$i]="A";
          
       }
      
       else {
        $array[$i]="B";
         }
   
}
    print_r ($array);

    echo "<h3> Antroji uzduotis<br></h3>";

//Pakeiskite pirmąjame uždavinyje sukurtą masyvą. Visas masyvo reikšmes (“A” ir “B”) 
//pakeiskite masyvais, kurie yra atsitiktinio dydžio (ilgio) nuo 3 iki 10. 
//Naujai sukurtų masyvų reikšmes užpildykite atitinkamai “A” arba “B” stringais 
//(pagal tai kokią raidę keičiate į masyvą). Masyvą atspausdinkite naršyklės lange 
//naudodami funkciją print_r();

    $rows=count($array); 
    for($i = 0; $i < $rows; $i++){
        $cols=rand(3,10);
    
        for($j = 0; $j<$cols; $j++){
            if ($j%10==0) {
                $array[$i][$j]="A";
                
               } 
               else {
                $array[$i][$j]="B";
                 }
         
        }
        
                    
    }    

    print_r ($array);  
    
    echo"<br><br>";
  

//Pakeiskite antrame uždavinyje sukurtą masyvą. Visus antro lygio masyvus pailginkite
// iki 10 elementų. Papildomai sukurtų elementų reikšmes užpildykite “C” stringais. 
//Jeigu masyvo ilgis jau yra 10, tai tokio masyvo keisti nereikia. 
//Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r(). 

$rows=count($array); 
    for($i = 0; $i < $rows; $i++){
        $cols=rand(3,10);
    
        for($j = 0; $j<$cols; $j++){
          $k=$j;  
        if $k>10) {  
            if ($j%10==0) {
                $array[$i][$j]="A";
                
               } 
               else {
                $array[$i][$j]="B";
                 }
        } 
        else {
        $array[$i][$j]="C";
        
        }
        
                    
    }    

print_r ($array);
echo"<br><br>";

?>
    
</body>
</html>