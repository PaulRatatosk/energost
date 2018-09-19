<?php include ROOT . '/site/layouts/header-edit.php';?>
<content class="admin-content">
    <?php if (isset ($id)): ?>
    <div class="errors-general-admin">
        <ul>
            <li><h3>Проект успешно добавлен</h3></li>
        </ul>
    </div>
    <?php endif; ?>
    <?php if (isset($errors_project_add) && is_array($errors_project_add)): ?>
        <div class="errors-general-admin">
            <ul>
                <?php foreach ($errors_project_add as $error): ?>
                    <li><h3><?php echo $error; ?></h3></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
	<h2>Добавить проект</h2>
	<div class="project-add">
		<form action="#" method="post" class="project-add-form" enctype="multipart/form-data">
			<textarea name="short_content_project_add" class="header-project-add" placeholder="Заголовок проекта"></textarea>
			<textarea name="specification_project_add" class="specification-project-add" placeholder="Описание проекта"></textarea>
            <h3>Загрузите главную фотографию проекта</h3>
            <input type="file" name="general_img_project" />
			<input type="submit" name="project_add_submit" value="Сохранить" />
		</form>
	</div>
</content>
<?php include ROOT . '/site/layouts/footer.php';?>