<?php
$metas = get_post_meta(7);
echo '<!--';
print_r($metas);
echo '-->';

for ($i=0;$i<$metas['district'][0];$i++){
    $name = substr($metas['district_'.$i.'_district_name'][0], 0,-8);
    $translDistr[] = GetInTranslit($name);


    for ($z=0;$z<$metas['district_'.$i.'_cities'][0];$z++){

        for($f=0;$f<$metas['district_'.$i.'_cities_'.$z.'_numbers'][0];$f++){

            if($metas['district_'.$i.'_cities_'.$z.'_numbers_'.$f.'_number'][0]){

                $numbers[$i][$z][$f] = [
                    'number' => $metas['district_' . $i . '_cities_' . $z . '_numbers_' . $f . '_number'][0]
                ];
            }
        }

        $cities[$z] = str_replace('’','*',$metas['district_'.$i.'_cities_'.$z.'_city'][0]);
        $cities[$z] = str_replace("'",'*',$metas['district_'.$i.'_cities_'.$z.'_city'][0]);

        $citiesFin[$z] = [
            'name'=>$cities[$z],
            'number'=>$numbers[$i][$z],
        ];

    }
    $district[$i] = [
        'translit' => $translDistr[$i],
        'name'=> $name,
        'cities'=>$citiesFin
    ];
}


//print_r($district);
//print_r($translDistr);

$fin = json_encode($district);
//echo $fin;
?>
<footer class="footer">
	<div class="wrap-nav">
		<div class="container">
				<nav class="nav">
					<ul class="menu-list">
						<li class="menu-item">
							<a href="#" class="logo">
									<?php get_template_part('assets/img/svg/logo-footer'); ?>
								</a>
							<!-- /.logo -->
						</li>
						<li class="menu-item has-children">
							Розірви коло
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu-1',
                                'container'      => ' ',
                                'container_class'=> ' ',
                                'menu_class'     => 'sub-menu',
                                'menu_id'     => '   ',
                                'depth' =>1,
                                'walker'=> new Foter_Walker_Nav_Menu()
                            ));
                            ?>
						</li>
						<li class="menu-item has-children">
							Розпізнати насильство
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu-2',
                                'container'      => ' ',
                                'container_class'=> ' ',
                                'menu_class'     => 'sub-menu',
                                'menu_id'     => '   ',
                                'depth' =>1,
                                'walker'=> new Foter_Walker_Nav_Menu()
                            ));
                            ?>
						</li>
						<li class="menu-item has-children">
							Допомога
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu-3',
                                'container'      => ' ',
                                'container_class'=> ' ',
                                'menu_class'     => 'sub-menu',
                                'menu_id'     => 'test',
                                'depth' =>1,
                                'walker'=> new Foter_Walker_Nav_Menu()
                            ));
                            ?>
						</li>
					</ul>
					<!-- /.menu-list -->
				</nav>
				<!-- /.nav -->
		</div>
		<!-- /.container -->
		<div class="svg-line-footer">
			<svg width="100%" height="100%" viewBox="0 0 271 110.5">
				<use  xlink:href="#line_footer_3" class=""></use>
			</svg>
		</div>
	</div>
	<!-- /.wrap-nav -->
	<div class="footer-copyright">
		<div class="container">
			<div class="footer-copyright-wrap">
				<div class="footer-copyright-left">
					<a href="#" rel="nofollow" target="_blank">
						<img class="logo-unfpa" src="<?php bloginfo('template_url'); ?>/assets/img/unfpa.svg" alt="" title="">
					</a>
					<p class="footer-copyright-text">© 2018 Розірви коло усі права захищено.</p>
				</div>
				<!-- /.footer-copyright-left -->
				<div class="footer-copyright-right">
					<a href="https://smarto.agency/" rel="nofollow" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/smart.png" alt="" title="" class="our-logo">
					</a>
				</div>
				<!-- /.footer-copyright-right -->
			</div>
			<!-- /.footer-copyright-wrap -->
			<p class="footer-copyright-text-mobile">© 2018 Розірви коло усі права захищено.</p>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.footer-copyright -->
</footer>
<!-- /.footer -->
<div class="popup-overlay popup-overlay-js">
	<div class="popup-modal">
		<button  title="Закрити" class="close-popup-btn close-popup-btn-js"></button>
		<h4 class="modal-title">Де ви знаходитесь?</h4>
		<div class="modal-content">
			<ul class="city-list">
                <?
                $dac = ['0000001','703447','709929','709716','687699','703447','702657','702549','700567','698738','695592','706482','706442'];
                $arC = count($district);
                //print_r($arC);
                for ($c=0;$c<$arC;$c++){
                    $arR = count($district[$c]['cities']);
                    ?>
                    <li class="city-item" data-city="<?=$c;?>" data-region-ip="<?=$dac[$c]?>"><?=$district[$c]['name'];?> обл.
                        <ul class="region-list region-list-js">
                            <?for ($r=0;$r<$arR;$r++){?>
                                <li class="region-item"
                                    <?

                                    $arN = count($district[$c]['cities'][$r]['number']);
                                        for($n=0;$n<$arN;$n++){
                                             ?>data-phone<?=$n+1?>="<?=$district[$c]['cities'][$r]['number'][$n]['number']?>"<?
                                        }

                                    ?> data-region="<?=$r?>"><?=$district[$c]['cities'][$r]['name'];?></li>
                            <?}?>
                        </ul>
                    </li>
                <?}?>

				
				
			</ul>
			<div class="modal-contact">
				<p class="modal-contact__title">Контакти мобільних бригад соціально-психологічної допомоги</p>
				<!-- /.modal-contact__title -->
				<div class="modal-phone-wrap">
					<p class="attention-text modal-contact__phone"></p>
					<!-- /.attention-text -->
					<a href="tel:111111111111" class="modal-contact__phone region-phone-1-js">Оберіть район</a>
					<!-- /.modal-contact__phone -->
					<a href="tel:111111111111" class="modal-contact__phone region-phone-2-js"></a>
					<!-- /.modal-contact__phone -->
				</div>
				<!-- /.modal-phone-wrap -->
				<button  class="modal-contact__btn">Обрати</button>
			</div>
			<!-- /.modal-contact -->
		</div>
		<!-- /.modal-content -->
		
	</div>
	<!-- /.popup-modal -->
</div>
<!-- /.popup-overlay -->
<div class="mobile-popup-overlay mobile-popup-overlay-js">
    <div class="mobile-popup-modal">
        <button  title="Закрити" class="close-popup-btn close-mobile-popup-btn-js"></button>
        <ul class="menu-list">
            <li class="menu-item has-children">
                Розірви коло
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu-1',
                    'container'      => ' ',
                    'container_class'=> ' ',
                    'menu_class'     => 'sub-menu',
                    'menu_id'     => '   ',
                    'depth' =>1,
                    'walker'=> new Foter_Walker_Nav_Menu()
                ));
                ?>
            <li class="menu-item has-children">
                Розпізнати насильство
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu-2',
                    'container'      => ' ',
                    'container_class'=> ' ',
                    'menu_class'     => 'sub-menu',
                    'menu_id'     => '   ',
                    'depth' =>1,
                    'walker'=> new Foter_Walker_Nav_Menu()
                ));
                ?>
            </li>
            <li class="menu-item has-children">
                Допомога
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu-3',
                    'container'      => ' ',
                    'container_class'=> ' ',
                    'menu_class'     => 'sub-menu',
                    'menu_id'     => '   ',
                    'depth' =>1,
                    'walker'=> new Foter_Walker_Nav_Menu()
                ));
                ?>
            </li>
        </ul>
        <!-- /.menu-list -->
    </div>
    <!-- /.popup-modal -->
</div>
<!-- /.popup-overlay -->




	

<script async defer src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.2"></script>


