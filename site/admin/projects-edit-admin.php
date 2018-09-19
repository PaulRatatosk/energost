<?php include ROOT . '/site/layouts/header-edit.php';?>
<content class="admin-content">
	<h2>Изменить проекты</h2>
	<div class="projects-edit-admin">
        <?php foreach ($projectList as $projectItem):?>
		<a href="/admin/projects-edit/<?=$projectItem['id'];?>">
			<div class="projects-edit-items">
				<img src="/upload/general_img_project/<?=$projectItem['path'];?>" alt="Фото проекта" />
				<div class="projects-edit-text">
					<img src="/site/img/slider-img-bottom.png">
					<h3><?=$projectItem['short_content'];?> </h3>
				</div>
			</div>
            <form action="#" method="post">
                <input type="submit" name="delete_project<?=$projectItem['id'];?>" value="Удалить проект">
            </form>
            <?php
                if (isset($_POST['delete_project'.$projectItem['id']])){
                    if ($projectItem['path'] != 'no_photo2.gif'){
                        unlink(ROOT."/upload/general_img_project/".$projectItem['path']);
                    }
                    Admin::delete_project($projectItem['id']);
                };
            ?>
		</a>
        <?php endforeach; ?>
	</div>
</content>
<?php include ROOT . '/site/layouts/footer.php';?>