<?php include ROOT . '/site/layouts/header-edit.php';?>
<content class="admin-content">
	<h2>Благодарности</h2>
    <div class="document-site-add-photo">
        <form action="#" method="post" enctype="multipart/form-data">
            <h3>Загрузите документ</h3>
            <input type="file" name="img_upload_acknowledgments"/>
            <input type="submit" name="submit_upload" value="Сохранить" />
        </form>
    </div>
    <?php if(!empty($getAcknowledgmentImg)):
        foreach ($getAcknowledgmentImg as $getAcknowledgmentItem):?>
	<div class="document-site-edit-wrapper">
		<div class="document-site-edit">
			<img src="/upload/img_acknowledgments/<?=$getAcknowledgmentItem['path'];?>" alt="Благодарности" />
		</div>
        <form action="#" method="post">
            <input type="submit" name="acknowledgment_delete_submit<?=$getAcknowledgmentItem['id'];?>" value="Удалить" />
        </form>
	</div>
        <?php
            if (isset($_POST["acknowledgment_delete_submit".$getAcknowledgmentItem['id']])){
                unlink(ROOT."/upload/img_acknowledgments/".$getAcknowledgmentItem['path']);
                Acknowledgment::deleteImg($getAcknowledgmentItem['id']);
            }
            endforeach; endif;
        ?>

</content>
<?php include ROOT . '/site/layouts/footer.php';?>