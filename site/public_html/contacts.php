<?php include ROOT . '/site/layouts/header.php';?>
	<content class="content-contacts">
		<div class="contacts">
			<h2>Напишите нам</h2>
                <div class="contacts-form">
                    <?php if ($result): ?>
                        <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
                    <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><h3><?php echo $error; ?></h3></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <form action="#" method="post" class="message">
                        <input type="text" name="message-email" placeholder="E-mail..." value="<?=$userEmail;?>" />
                        <textarea name="message" placeholder="Ваше сообщение..."><?=$userText;?></textarea>
                        <input type="submit" name="submit-message" value="Отправить" />
                    </form>
                    <?php endif; ?>
                </div>
            <h2>Контакты</h2>
            <div class="contact">
                <p><?=$generalItem['specification_contacts'];?></p>
                <div class="image_card">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A91041fa5a191af8d93aa0d07b2d10c63ca0b93b46fdb642d86707f3783f72f30&amp;width=100%&amp;height=20em&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
		</div>
	</content>
<?php include ROOT . '/site/layouts/footer.php';?>