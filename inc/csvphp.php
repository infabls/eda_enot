<?php 
// качаем категории и страницы из гугл диска и сохраняем на сервере
// $categories = file_get_contents('http://docs.google.com/spreadsheets/d/1R87zOW2-990ATjZmc9qHu_CLqkFvLdqFJlY3TWzHgmU/export?format=csv&gid=1689854645');
// file_put_contents('categories.csv', $categories);

function display_products($category,$array) {

	for ($i=0; $i < count($array); $i++) { 
	if ($array[$i][5] == $category) {
		?>
		<div class="col s6">
    		<div class="entry">
      	 		<img src="<?=$array[$i][4]?>" alt="">
       		<h6><?=$array[$i][1]?></h6>
	       	<p class="descr"><?=$array[$i][2]?></p>
	       	<div class="price">
	          <h5><?=$array[$i][3]?> тг</h5>
	          <?=$array[$i][5]?>
	       	</div>
	       	<button class="button cart-add" 
	       		type='button' 
				class='cart-add' 
				data-id='<?=$array[$i][0]?>' 
				data-label='<?=$array[$i][1]?>' 
				data-price='<?=$array[$i][3]?>'
				data-image='<?=$array[$i][4]?>'>В корзину</button>
	    	</div>
	 	</div>
	<?php 
	}
}

}

function display_all ($array) {
	for ($i=0; $i < count($array); $i++) { 
		?>
		<div class="col s6">
    		<div class="entry">
      	 		<img src="<?=$array[$i][4]?>" alt="">
       		<h6><?=$array[$i][1]?></h6>
	       	<p class="descr"><?=$array[$i][2]?></p>
	       	<div class="price">
	          <h5><?=$array[$i][3]?> тг</h5>
	          <?=$array[$i][5]?>
	       	</div>
	       	<button class="button cart-add" 
	       		type='button' 
				class='cart-add' 
				data-id='<?=$array[$i][0]?>' 
				data-label='<?=$array[$i][1]?>' 
				data-price='<?=$array[$i][3]?>'
				data-image='<?=$array[$i][4]?>'>В корзину</button>
	    	</div>
	 	</div>
	<?php 
}

}
