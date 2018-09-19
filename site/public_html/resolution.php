<?php include ROOT . '/site/layouts/header.php';?>
<content class="content-project">
	<div class="document-site">
		<h2>Лицензия на проведение работ</h2>
        <?php if(!empty($getResolutionImg)):
            foreach ($getResolutionImg as $getResolutionItem):?>
                <img class="minimized" src="/upload/img_resolution/<?=$getResolutionItem['path'];?>" alt="Лицензия" />
            <?php endforeach;  else:?>
                <img id="no_photo" src="/site/img/no_photo2.gif" alt="Лицензия" />
            <?php endif; ?>
	</div>
</content>
<?php include ROOT . '/site/layouts/footer.php';?>