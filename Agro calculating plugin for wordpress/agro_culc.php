<?php
/**
 * Plugin Name: Agro Calculator
 * Description: a simple plugin that adds custom post types and taxonomies
 * Version: 1.0
 * Author: Ola Prish
 * Licence: GPL2
 * */

function show_culture_form() {
 
  echo ' 

<p>Выберите культуру</p>
                <form action="" method="post" />
   
                <select name="culture">
                     <option>------</option>
                	<option>Пшеница</option>
                	<option>Кукуруза</option>
					<option>Подсолничник</option>
                	
                </select>
                <br>
                <button type="submit"  name="submit" value="submit">Культура выбрана</button>

</form> 	
 ';
  
 }
//[show_culture_form]
add_shortcode('show_culture_form', 'show_culture_form' );


 function wp_culture_form_action(){
	 if(isset($_POST['submit'])){
            $culture= $_POST['culture'];        		
              
   
    switch($culture){
		
              	  case "Пшеница":
              	     echo wpshow_form1() ;
				
					 break;

                  case "Кукуруза":
              	     echo wpshow_form2() ;
					 break;

					  case "Подсолничник":
              	     echo wpshow_form3() ;
					 break;
					 
					
	}
	 }
 }
 
 //[wp_culture_form_action]
add_shortcode('wp_culture_form_action', 'wp_culture_form_action' );

function wpshow_form1() {
 
  echo '<form action="" method="post" />
   
         Варианты препаратов:
                <select name="product1">
               
                	
                	<option>Аметил</option>
					<option>Гренадер</option>
					<option>Дикамин</option>
					<option>Оптимум</option>
					
				Площадь посева:	
           <input type="text" name="sqr" placeholder="площадь,га">
                </select>
                <br>
           
                <button type="submit"  name="submit1" value="submit">Расчитать</button>

</form> '; 
}

//[wpshow_form1]
add_shortcode('wpshow_form1', 'wpshow_form1' );


  
 function wp_calc1() {
	 if(isset($_POST['submit1'])){
            $sqr = $_POST['sqr'];
			$product1 = $_POST['product1'];
					 
					 switch($product1){
              	  
              	      case "Аметил":
					
              	     echo  "Вам потребуеться : " . $sqr * 0.7 . "-" .  $sqr * 1.5 . " л препарата Аметил. 
					 Примерная стоимость : " . $sqr * 0.7 * 9 . "-" .  $sqr * 1.5 *9 . "$" ;
              	     break;

              	      case "Гренадер":
					
              	      echo "Вам потребуеться : " . $sqr * 0.015 . "-" .  $sqr * 0.025 . " л препарата Гренадер
              	    		 Примерная стоимость : " . $sqr * 0.015 * 95 . "-" .  $sqr * 0.025 *95 . "$" ;
              	     break;
					 
					  case "Дикамин":
					
              	     echo  "Вам потребуеться : " . $sqr * 0.5 . "-" .  $sqr * 2  . " л препарата Дикамин
					          Примерная стоимость : " . $sqr * 0.5 * 8.4 . "-" .  $sqr * 2 * 8.4 . "$" ;
              	     break;

              	      case "Оптимум":
					
              	      echo "Вам потребуеться : " . $sqr * 0.15 . "-" .  $sqr * 0.3  . " л препарата Оптимум
					   Примерная стоимость : " . $sqr * 0.15 * 21 . "-" .  $sqr * 0.3 * 21 . "$" ;
              	    
              	     break;
					 
					 
					  }
              }
  
  
}
//[wp_calc1]
add_shortcode('wp_calc1', 'wp_calc1' );




function wpshow_form2() {
 
  echo '<form action="" method="post" />
   
         Варианты препаратов:
                <select name="product2">
               
                	
                	<option>Тезис</option>
					<option>Альфа-Дикамба</option>
					<option>Антал</option>
					
					
				Площадь посева:	
           <input type="text" name="sqr" placeholder="площадь,га">
                </select>
                <br>
           
                <button type="submit"  name="submit2" value="submit">Расчитать</button>

</form> '; 
}

 function wp_calc2() {
	 if(isset($_POST['submit2'])){
            $sqr = $_POST['sqr'];
			$product2 = $_POST['product2'];
					 
					 switch($product2){
              	  
              	      case "Тезис":
					
              	     echo  "Вам потребуеться : " . $sqr * 0.02 . "-" .  $sqr * 0.025 . " л препарата Тезис. 
					 Примерная стоимость : " . $sqr * 0.02 * 230 . "-" .  $sqr * 0.025 * 230 . "$" ;
              	     break;

              	      case "Альфа-Дикамба":
					
              	      echo "Вам потребуеться : " . $sqr * 0.15 . "-" .  $sqr * 0.3 . " л препарата Альфа-Дикамба
              	    		 Примерная стоимость : " . $sqr * 0.15 * 23 . "-" .  $sqr * 0.3 * 23 . "$" ;
              	     break;
					 
					  case "Антал":
					
              	     echo  "Вам потребуеться : " . $sqr * 0.6 . "-" .  $sqr * 1.5  . " л препарата Антал
					          Примерная стоимость : " . $sqr * 0.6 * 12.5 . "-" .  $sqr * 1.5 * 12.5 . "$" ;
              	     break;

              	      
					 
					 
					  }
              }
  
  
}
//[wp_calc2]
add_shortcode('wp_calc2', 'wp_calc2' );



function wpshow_form3() {
 
  echo '<form action="" method="post" />
   
         Варианты препаратов:
                <select name="product3">
               
                	
                	<option>Альфа-Прометрин</option>
					<option>Евро-Ланг</option>
					<option>Дифилайн</option>
				
				Площадь посева:	
           <input type="text" name="sqr" placeholder="площадь,га">
                </select>
                <br>
           
                <button type="submit"  name="submit3" value="submit">Расчитать</button>

</form> '; 
}

//[wpshow_form3]
add_shortcode('wpshow_form3', 'wpshow_form3' );


  
 function wp_calc3() {
	 if(isset($_POST['submit3'])){
            $sqr = $_POST['sqr'];
			$product3 = $_POST['product3'];
					 
					 switch($product3){
              	  
              	      case "Альфа-Прометрин":
					
              	     echo  "Вам потребуеться : " . $sqr * 2 . "-" .  $sqr * 4 . " л препарата Альфа-Прометрин. 
					 Примерная стоимость : " . $sqr * 2 * 7.8 . "-" .  $sqr * 4 * 7.8 . "$" ;
              	     break;

              	      case "Евро-Ланг":
					
              	      echo "Вам потребуеться : " . $sqr * 1 . "-" .  $sqr * 1.2 . " л препарата Евро-Ланг
              	    		 Примерная стоимость : " . $sqr * 1 * 24 . "-" .  $sqr * 1.2 * 24 . "$" ;
              	     break;
					 
					  case "Дифилайн":
					
              	     echo  "Вам потребуеться : " . $sqr * 1.3 . "-" .  $sqr * 2  . " л препарата Дифилайн
					          Примерная стоимость : " . $sqr * 1.3 * 17 . "-" .  $sqr * 2 * 17 . "$" ;
              	     break;

              	     
					 
					 
					  }
              }
  
  
}
//[wp_calc3]
add_shortcode('wp_calc3', 'wp_calc3' );
