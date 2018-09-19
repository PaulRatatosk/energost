<?php include ROOT . '/site/layouts/header.php';?>
	<content class="content-project">
		<div class="document-site">
			<h2>Благодарности и признания</h2>
            <?php if(isset($getAcknowledgmentImg)):
                foreach ($getAcknowledgmentImg as $getAcknowledgmentItem):?>
                    <img class="minimized" src="/upload/img_acknowledgments/<?=$getAcknowledgmentItem['path'];?>" alt="Благодарности" />
                <?php endforeach; endif;?>
		</div>
	</content>
<?php include ROOT . '/site/layouts/footer.php';?>