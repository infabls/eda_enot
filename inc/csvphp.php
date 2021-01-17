<?php 
// качаем категории и страницы из гугл диска и сохраняем на сервере
// $categories = file_get_contents('https://docs.google.com/spreadsheets/d/1R87zOW2-990ATjZmc9qHu_CLqkFvLdqFJlY3TWzHgmU/export?format=csv&gid=1689854645');
file_put_contents('categories.csv', $categories);

function display_products($category,$array) {
	require_once 'mobileDetect.php';
	$detect = new Mobile_Detect;
	$mob = $detect->isMobile();
	for ($i=0; $i < count($array); $i++) { 
		if ($array[$i][5] == $category) {
			?>
			<div class="col s6 cards">
				<div class="entry maincard">
					<a class="vendor-item__link modal-trigger">
						<span class="vendor-item__images">
							<?php if ($mob): ?>
								<img data-src="/mobile/<?=$array[$i][4]?>" class="vendor-item__cover lazyload"></img>
								<?php else: ?>
									<img data-src="<?=$array[$i][4]?>" class="vendor-item__cover lazyload"></img>
								<?php endif ?>
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
									<span class="vendor-item__info-item"><?=$array[$i][3]?>₸</span> 
								</span>

							</span>
							<span class="vendor-item__row">
								<span class="vendor-item__delivery-time vendor-item__delivery-time--ddk"><?=$array[$i][2]?></span>
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
		require_once 'mobileDetect.php';
		$detect = new Mobile_Detect;
		$mob = $detect->isMobile();
		for ($i=0; $i < count($array); $i++) { 
			?>
			<div class="col s6 cards">
				<div class="entry maincard">
					<a class="vendor-item__link">
						<span class="vendor-item__images">
							<?php if ($mob): ?>
								<img data-src="/mobile/<?=$array[$i][4]?>" class="vendor-item__cover lazyload"></img>
								<?php else: ?>
									<img data-src="<?=$array[$i][4]?>" class="vendor-item__cover lazyload"></img>
								<?php endif ?>
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
									<span class="vendor-item__info-item"><?=$array[$i][3]?>₸</span>

								</span>
								<span class="vendor-item__row">
									<span class="vendor-item__delivery-time vendor-item__delivery-time--ddk"><?=$array[$i][2]?></span>
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
