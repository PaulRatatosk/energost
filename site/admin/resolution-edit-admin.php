<?php include ROOT . '/site/layouts/header-edit.php';?>
<content class="admin-content">
	<h2>Резолюция на проведение работ</h2>
    <div class="document-site-add-photo">
        <form action="#" method="post" enctype="multipart/form-data">
            <h3>Загрузите документ</h3>
            <input type="file" name="img_upload_resolution"/>
            <input type="submit" name="submit_upload_resolution" value="Сохранить" />
        </form>
    </div>
    <?php if(!empty($getResolutionImg)):
    foreach ($getResolutionImg as $getResolutionItem):?>
	<div class="document-site-edit-wrapper">
		<div class="document-site">
            <img class="minimized" src="/upload/img_resolution/<?=$getResolutionItem['path'];?>" alt="Лицензия" />
		</div>
        <form action="#" method="post">
            <input type="submit" name="resolution_delete_submit<?=$getResolutionItem['id'];?>" value="Удалить" />
        </form>
        <?php
            if (isset($_POST["resolution_delete_submit".$getResolutionItem['id']])){
                unlink(ROOT."/upload/img_resolution/".$getResolutionItem['path']);
                Resolution::deleteImg($getResolutionItem['id']);
            }
            endforeach; endif;
        ?>
	</div>
</content>
<?php include ROOT . '/site/layouts/footer.php';?>