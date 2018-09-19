<?php include ROOT . '/site/layouts/header-edit.php';?>

<content class="admin-content">
    <?php if($result_specification_site): ?>
        <div class="errors-general-admin">
            <h3>Изменение прошло упешно</h3>
        </div>
    <?php endif;?>
    <?php if($result_specification_contacts): ?>
        <div class="errors-general-admin">
            <h3>Изменение прошло упешно</h3>
        </div>
    <?php endif;?>
    <?php if($result_edit_contacts_phone): ?>
        <div class="errors-general-admin">
            <h3>Телефон успешно изменен</h3>
        </div>
    <?php endif;?>
    <?php if($result_edit_contacts_email): ?>
        <div class="errors-general-admin">
            <h3>E-mail успешно изменен</h3>
        </div>
    <?php endif;?>
    <?php if (isset($errors_phone) && is_array($errors_phone)): ?>

        <div class="errors-general-admin">
            <ul>
                <?php foreach ($errors_phone as $error_phone): ?>
                    <li><h3><?php echo $error_phone; ?></h3></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if (isset($errors_email) && is_array($errors_email)): ?>

        <div class="errors-general-admin">
            <ul>
                <?php foreach ($errors_email as $error_email): ?>
                    <li><h3><?php echo $error_email; ?></h3></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if (isset($errors_login) && is_array($errors_login)): ?>
        <div class="errors-general-admin">
            <ul>
                <?php foreach ($errors_login as $error_login): ?>
                    <li><h3><?php echo $error_login; ?></h3></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if($result_login): ?>
        <div class="errors-general-admin">
            <h3>Логин успешно изменен</h3>
        </div>
    <?php endif;?>
    <?php if (isset($errors_password) && is_array($errors_password)): ?>
        <div class="errors-general-admin">
            <ul>
                <?php foreach ($errors_password as $error_password): ?>
                    <li><h3><?php echo $error_password; ?></h3></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if($result_password): ?>
        <div class="errors-general-admin">
            <h3>Пароль успешно изменен</h3>
        </div>
    <?php endif;?>
	<h2>О компании</h2>
	<div class="specification-edit">

		<form action="#" method="post" class="specification-edit-form">
			<textarea name="specification_edit"><?=$generalItem['specification_site'];?></textarea>
			<input type="submit" name="specification_edit_submit" value="Сохранить" />
		</form>
	</div>
	<h2>Описание местоположения</h2>
	<div class="specification-contacts-edit">
		<form action="#" method="post" class="specification-contacts-edit-form">
			<textarea name="specification_contacts_edit"><?=$generalItem['specification_contacts'];?></textarea>
			<input type="submit" name="specification_edit_contacts_submit" value="Сохранить" />
		</form>
	</div>
    <h2>Изменение контактных данных</h2>
    <div class="contacts-edit">
        <form action="#" method="post" class="contacts-edit-form">
            <div class="contact-edit-items">
                <input type="text" name="new_telephone" placeholder="Новый телефон" value="<?=$generalItem['telephone'];?>"/>
                <input type="submit" name="contacts_edit_phone_submit" value="Сохранить" />
                <input type="text" name="new_email" placeholder="Новый e-mail" value="<?php if(!empty($generalItem['e_mail'])){echo $generalItem['e_mail'];}?>"/>
                <input type="submit" name="contacts_edit_email_submit" value="Сохранить" />
            </div>
        </form>
    </div>
	<h2>Изменение данных для входа</h2>
	<div class="login-edit">
		<form action="#" method="post" class="login-edit-form">
			<div class="edit-items">
				<input type="text" name="old_login" placeholder="Старый логин" />
				<input type="text" name="new_login" placeholder="Новый логин"/>
				<input type="submit" name="login_edit_submit" value="Сохранить" />
			</div>
			<div class="edit-items">
				<input type="password" name="old_password" placeholder="Старый пароль"/>
				<input type="password" name="new_password" placeholder="Новый пароль"/>
                <input type="password" name="new2_password" placeholder="Повторите пароль"/>
				<input type="submit" name="password_edit_submit" value="Сохранить" />
			</div>
		</form>
	</div>
</content>

<?php include ROOT . '/site/layouts/footer.php';?>