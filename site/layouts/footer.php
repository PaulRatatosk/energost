<footer>
    <div class="footer-wrapper">
        <div class="footer-content">
            <div class="footer-items">
                <a href="/contacts"><h4>Контакты</h4></a>
                <p>Москва, Киевское шоссе, 22-км, (п. Московский), домовл, 4, стр. 1</p>
                <p>Телефон: <?=$generalItem['telephone'];?></p>
                <p>E-mail: <?=$generalItem['e_mail'];?></p>
                <p>ООО &laquo;ЭНЕРГО-СТРОЙ&raquo; <?php echo date('Y');?>  &copy;</p>
            </div>
            <div class="footer-logo">
                <a href="/"><img src="/site/img/logo_blick.png" alt="footer-logo" /></a>
            </div>
        </div>
        <div class="footer-down">
            <div class="login">
                <?php
                
                    if(preg_match("#^/admin/projects-edit/[0-9]+$#", $_SERVER['REQUEST_URI'])): 
                ?>
                        <a href="../">Назад</a>
                    
                <?php else: ?>
                    <?php if (isset($_SESSION['user'])): ?>
                        <a href="../admin">Редактирование </a>
                        <a href="../admin/logout"> Выход</a>
                    <?php else: ?>
                        <a href="../login/">Авторизация</a>
                    <?php endif;?>
                <?php endif;?>
            </div>
        </div>
    </div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="/site/js/slick.min.js"></script>
<script src="/site/js/script.js"></script>
</body>
</html>