<?php

view('session/create.view.php', [
    'errors' => $_SESSION['_flash']['errors'] ?? []
]);