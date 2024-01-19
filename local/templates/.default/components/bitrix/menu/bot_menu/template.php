<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
?>

<?php if (!empty($arResult)): ?>
    <div class="ft_about">
        <h4> <?php echo Loc::getMessage("ABOUT_STORE"); ?></h4>
        <ul>
            <?php foreach ($arResult as $arItem): ?>
            <li><a href="<?=$arItem["LINK"] ?>"><?=$arItem["TEXT"] ?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
<?php endif ?>