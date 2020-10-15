<?php
require_once 'core/init.php';

/**
 * $arCategory - список категорий для layout (init.php)
 */

$title = 'Поддержка';


$page_content = renderTemplate("support");

$result = renderTemplate('layout', [
    'content' => $page_content,
    'title' => $title,
    'arCategory' => $arCategory
]);

echo $result;