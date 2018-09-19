<?php include ROOT . '/site/layouts/header.php';?>
	<content>
		<div class="log-in">
			<h2>Доступно администратору</h2>
            <div class="login-form">
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><h3><?php echo $error; ?></h3></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <form action="#" method="post" class="form">
                    <input type="text" name="admin_login" placeholder="Логин..." value="<?=$login;?>"/>
                    <input type="password" name="admin_password" placeholder="Пароль..." />
                    <input type="submit" name="submit_login" value="Войти" />
                </form>
            </div>

		</div>
	</content>
<?php include ROOT . '/site/layouts/footer.php';?>