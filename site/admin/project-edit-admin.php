<?php include ROOT . '/site/layouts/header-edit.php';?>
<content class="admin-content">
    <?php if (isset($result_edit_project)):?>
        <div class="errors-general-admin">
            <ul>
                <li><h3>Проект успешно изменен</h3></li>
            </ul>
        </div>
    <?php endif;?>
    <?php if (isset($result)):?>
        <div class="errors-general-admin">
            <ul>
                <li><h3>Фотография загружена</h3></li>
            </ul>
        </div>
    <?php endif;?>
    <?php if (isset($result_delete)):?>
        <div class="errors-general-admin">
            <ul>
                <li><h3>Фотография удалена</h3></li>
            </ul>
        </div>
    <?php endif;?>
	<h2>Изменение описания проекта</h2>
	<div class="project-edit">
		<form action="#" method="post" class="project-edit-form">
			<textarea name="header_project_edit" class="header-project-edit"><?=$projectItem['short_content'];?></textarea>
			<textarea name="specification_project_edit" class="specification-project-edit"><?=$projectItem['specification'];?></textarea>
			<input type="submit" name="project_edit_submit" value="Сохранить" />
		</form>
	</div>
    <div class="edit-general-img">
        <h2>Редактирование главной фотографии проекта</h2>
        <form action="#" method="post" class="edit-general-img-form" enctype="multipart/form-data">
            <h3>Загрузите фото</h3>
            <input type="file" name="general_new_img" />
            <input type="submit" name="save_general_new_img" value="Сохранить" />
            <div class="project-photo-edit">
                <img class="minimized" src="/upload/general_img_project/<?=$projectItem['path'];?>" alt="Фото проекта" />
            </div>
        </form>
    </div>
    <div class="edit-general-img">
        <h2>Редактирование дополнительных фотографий проекта</h2>
        <form action="#" method="post" class="edit-general-img-form" enctype="multipart/form-data">
            <h3>Загрузите фото</h3>
            <input type="file" name="new_img" />
            <input type="submit" name="save_new_img" value="Сохранить" />
            <?php if(!empty($imgList)):
            foreach ($imgList as $imgItem):?>
                <div class="project-photo-edit">
                    <img class="minimized" src="/upload/img_project/<?=$imgItem['path'];?>" alt="Фото проекта" />
                    <input type="submit" name="delete_img<?=$imgItem['id'];?>" value="Удалить фото" />
                    <?php if (isset($_POST['delete_img'.$imgItem['id']])){
                        unlink(ROOT."/upload/img_project/".$imgItem['path']);
                        ProjectEdit::delete_img($projectItem['id'], $imgItem['id']);
                    }?>
                </div>
            <?php  endforeach; endif;?>
        </form>
    </div>
</content>
<?php include ROOT . '/site/layouts/footer.php';?>