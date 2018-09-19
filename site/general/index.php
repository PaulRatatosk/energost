<?php include ROOT . '/site/layouts/header.php';?>
	<content>
		<h2>О компании</h2>
		<div class="specification">
			<p><?=$generalItem['specification_site'];?></p>
		</div>
		<a href="/projects"><h2 class="header_projects">Наши проекты</h2></a>
		<div class="projects">
			<div id="butt" class="prev">
				<img src="site/img/left.png" />
			</div>
			<div class="slider">
				<?php
                if ($projectList):
                    foreach($projectList as $projectItem):?>
                        <div class="slider-items">
                            <a href="projects/<?=$projectItem['id'];?>">
                                <div class="slide">
                                    <img src="/upload/general_img_project/<?=$projectItem['path'];?>" />
                                    <div class="slide-text">
                                        <img src="site/img/slider-img-bottom.png">
                                        <h3><?=$projectItem['short_content'];?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
				<?php endforeach; endif;?>
			</div>
			<div id="butt" class="next">
				<img src="site/img/right.png" />
			</div>
		</div>
		<div class="location">
			<div class="location_text">
				<a href="/contacts"><h2>Наш офис в Москве</h2></a>
			</div>
			 <div class="image_card">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A91041fa5a191af8d93aa0d07b2d10c63ca0b93b46fdb642d86707f3783f72f30&amp;width=100%&amp;height=20em&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
			<div class="image_card-min">
				<p><?=$generalItem['specification_contacts'];?></p>
			</div>
		</div>
	</content>
<?php include ROOT . '/site/layouts/footer.php';?>