<?php 
get_header();

?>


<main class="page">
			<section class="main">
				<div class="main__container">
					<div class="main__columns">
						<img src="<?php echo get_field('content')['image']['url'];?>" alt="<?php echo get_field('content')['image']['description'];?>">
					</div>
					<div class="main__columns">
						<div class="main__content">
							<div class="main__subtitle _anim-items _anim-no-hide"><?php  ?><?php echo get_field('content')['sub_title'];?></div>

							<h1 class="main__heading _anim-items _anim-no-hide"><?php echo get_field('content')['title'];?></h1>
							<div class="main__desc _anim-items _anim-no-hide"> <?php echo get_field('content')['description'];?>
							</div>
						</div>
						<div class="main__arrow-bottom">Discover Services <svg width="15px" height="37px" viewBox="0 0 15 37" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								
								<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="01_homepage_warren_hill" transform="translate(-1396.000000, -614.000000)" fill="#97CAFA" fill-rule="nonzero">
										<path id="arrow" d="M1404.25,614.75 L1404.25,646.262 L1408.47132,638.757304 L1408.83901,638.103622 L1410.14638,638.839014 L1409.77868,639.492696 L1404.15368,649.492696 L1403.5,650.654797 L1402.84632,649.492696 L1397.22132,639.492696 L1396.85362,638.839014 L1398.16099,638.103622 L1398.52868,638.757304 L1402.75,646.262 L1402.75,614.75 L1404.25,614.75 Z">
										</path>
									</g>
								</g>
							</svg></div>
					</div>
				</div>
			</section>

			<section class="services">
				<div class="services__container">
					<h2 class="services__heading heading --dark _anim-items _anim-no-hide">Services</h2>
					<div class="services__subtitle subtitle --dark _anim-items _anim-no-hide">Warren is an SEO Consultant with over a decade of
						experience,
						working with big brands in the UK and US to grow traffic.</div>

					<div class="services__wrap _anim-items _anim-no-hide">
                        <?php 
                            $services = get_field('services');
                            $rows = $services['items'];
                            if( $rows ) {
                                foreach( $rows as $row ) {
                                    //var_dump($row['button']['title']);
                                    $button = $row['button'];
                                    ?>

                                    <div class="services__column">
                                        <img src="<?php echo $row['img'] ?>" alt="">
                                        <div class="services__title"><?php echo $row['title'] ?></div>
                                        <div class="services__desc"><?php echo $row['description'] ?> </div>
                                        <div class="services__includes includes">
                                            <div class="includes__title">includes:</div>
                                            <ul class="includes__list">
                                                <?php 
                                                $list = $row['list'];
                                                foreach ($list as $item) { ?>
                                                    <li class="includes__item"><?php echo $item['includes_item'] ?></li>
                                                <?php }
                                                ?>
                                            </ul>
                                     </div> <?php
                                    if (isset($button['title'])) {
                                    ?>
                                    <div class="services__button button"><a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a></div> 
                                    <?php } ?>

                                    </div> <?php
                                }
                            } ?>
					</div>
				</div>
			</section>

			<section class="resources">
                <?php $resources = get_field('resources'); ?>
				<div class="resources__container">
					<h2 class="resources__heading heading --light _anim-items _anim-no-hide"><?php echo $resources['heading'] ?></h2>
					<div class="resources__subtitle subtitle --light _anim-items _anim-no-hide"><?php echo $resources['subheading'] ?></div>
					<div class="resources__slider swiper">
						<div class="resources__wrapper swiper-wrapper">
                            <?php   
                            $rows = $resources['slider'];
                            foreach ($rows as $row) { 
                                ?>
                                <div class="resources__slide swiper-slide">
                                    <img src="<?php echo $row['image']; ?>" alt="">
                                    <div class="swiper-slide__date"><?php echo $row['date']; ?></div>
                                    <div class="swiper-slide__title"><?php echo $row['description']; ?></div>
                                    <div class="swiper-slide__button button"><a href="<?php echo $row['button']['url']; ?>"><?php echo $row['button']['title']; ?></a></div>
							    </div>                            
                            <?php }  ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</section>

			<section class="testimonials">
            <?php $testimonials = get_field('testimonials'); ?>
				<div class="testimonials__container">
					<h2 class="testimonials__heading heading --dark _anim-items _anim-no-hide"><?php echo $testimonials['heading'] ?></h2>
					<div class="testimonials__subtitle subtitle --dark _anim-items _anim-no-hide"><?php echo $testimonials['subheading'] ?></div>
					<div class="testimonials__wrap">
                       <?php $cards =  $testimonials['testimonials_cards']; 
                            foreach ($cards as $card) { 
                                ?>
                                <div class="testimonials__item">
                                    <div class="testimonials__img"><img src="<?php echo $card['image']; ?>" alt=""></div>
                                    <div class="testimonials__quote"><?php echo $card['quote']; ?></div>
                                    <div class="testimonials__person"><?php echo $card['person']; ?></div>
                                    <div class="testimonials__positions"><?php echo $card['position']; ?></div>
						        </div>
                           <?php }
                       ?>
						<div class="testimonials__gap"></div>
					</div>
				</div>
			</section>

			<section class="questions">
                <?php $questions = get_field('questions'); ?>
				<div class="questions__container">
					<h2 class="questions__heading heading --dark _anim-items _anim-no-hide"><?php echo $questions['heading']; ?></h2>
					<div class="questions__subtitle subtitle --dark _anim-items _anim-no-hide"><?php echo $questions['subheading']; ?></div>
					<div class="questions__wrap">
						<div data-spollers class="spollers">
                            <?php 
                            $spollers = $questions['questions_spoilers'];
                            foreach ($spollers as $spoller) { ?>
                                <div class="questions__item">
								    <button   button type="button" data-spoller class="questions__title"><?php echo $spoller['title']; ?></button>
								    <div class="questions__body"><?php echo $spoller['text']; ?></div>
						    	</div>
                            <?php }  ?>
						</div>
					</div>
				</div>
			</section>

		</main>
<?php
get_footer();