<?php

include './Lib/router.php';

router('/',['controller.php', 'home']);
router('/user',['controller.php', 'user']);