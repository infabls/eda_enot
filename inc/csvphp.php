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
                     <a href="/srv/Mcdonalds_msk" class="vendor-item__link">
                     <span class="vendor-item__images">
                     <span data-src="<?=$array[$i][4]?>" class="vendor-item__cover lazyloaded" style="background-image: url(<?=$array[$i][4]?>);"></span>
                     </span> <!----> 
                     <span class="vendor-item__wrap">
                        <span class="vendor-item__headrow">
                           <span class="vendor-item__title">
                              <h3 title="<?=$array[$i][1]?>" class="vendor-item__title-text"><?=$array[$i][1]?></h3>
                           </span>
                        </span>
                        <span class="vendor-item__row">
                           <span class="vendor-item__delivery-time vendor-item__delivery-time--ddk">
                              <!---->
                              65 мин
                           </span>
                           <span class="vendor-item__info-item">От 1 ₽</span> 
                           <span class="vendor-item__stars rating rating--xsmall rating--in-card">
                              <span class="rating__row rating__row--xsmall">
                                 <!----> <span class="rating__value rating__value--xsmall rating__value--yellow rating__value--medium rating--in-card__value">4,7</span>
                              </span>
                              <!----> <!---->
                           </span>
                        </span>
                     </span>
                  </a>
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
