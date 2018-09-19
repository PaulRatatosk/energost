<?php include ROOT . '/site/layouts/header.php';?>
	<content class="content-projects">
		<h2>Проекты компании</h2>
		<div class="views-projects">
            <?php
            if ($projectList):
                foreach ($projectList as $projectItem):?>
                    <div class="projects-items">
                        <a href="projects/<?=$projectItem['id'];?>">
                            <div class="project-items">
                                <img src="/upload/general_img_project/<?=$projectItem['path'];?>" alt="Фото проекта"/>
                                <div class="project-items-text">
                                    <img src="site/img/slider-img-bottom.png" alt="Проектный город" />
                                    <h3><?=$projectItem['short_content'];?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php endforeach; endif;?>
		</div>
	</content>
<?php include ROOT . '/site/layouts/footer.php';?>