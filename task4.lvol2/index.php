<?php
$userTitle = 'Какая то моя новая страница';
$userH1 = "Какой то новый текст в заголовок";
$userYear = 2025;

$userSite = file_get_contents("site.html");
$userSite = str_replace('{{ userTitle }}', $userTitle, $userSite);
$userSite = str_replace('{{ userH1 }}', $userH1, $userSite);
$userSite = str_replace('{{ userYear }}', $userYear, $userSite);
echo $userSite;
