<?php


(new Core\Authenticator)->logout();

header('location: /');
exit();