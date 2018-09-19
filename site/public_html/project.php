<?php include ROOT . '/site/layouts/header.php';?>
	<content class="content-project">
		<h2><?=$projectItem['short_content'];?></h2>
		<div class="view-project">
			<div class="in-detail-project">
				<div class="in-detail-project-text">
					<img src="/site/img/slider-img-bottom.png" alt="Проектный город"/>
					<p><?=$projectItem['specification'];?></p>
				</div>
                <div class="slider-project-wrapper">
                    <div id="butt" class="pprev">
                        <img src="/site/img/left.png" alt="prev"/>
                    </div>
                    <div class="slider-project">
                            <img class="minimized" src="/upload/general_img_project/<?=$projectItem['path'];?>" alt="Фото проекта" />
                        <?php foreach ($imgList as $imgItem):?>
                            <img class="minimized" src="/upload/img_project/<?=$imgItem['path'];?>" alt="Фото проекта" />
                        <?php endforeach;?>
                    </div>
                    <div id="butt" class="pnext">
                        <img src="/site/img/right.png" alt="next"/>
                    </div>
                </div>
            </div>
        </div>
	</content>

<?php include ROOT . '/site/layouts/footer.php';?>