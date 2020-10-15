<?php

require_once 'core/init.php';

/**
 * $arCategory - список категорий для layout (init.php)
 */

$title = 'Контакты';


$page_content = renderTemplate("contact");

$result = renderTemplate('layout', [
    'content' => $page_content,
    'title' => $title,
    'arCategory' => $arCategory
]);

echo $result;