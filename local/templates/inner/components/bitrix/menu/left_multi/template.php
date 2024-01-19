<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php //debug($arResult); ?>
<?php if (!empty($arResult)): ?>
    <div class="sb_nav">
        <ul>
            <?php
            $previousLevel = 0;
            foreach ($arResult

            as $arItem): ?>

            <?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
                <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
            <?php endif ?>

            <?php if ($arItem["IS_PARENT"]): ?>

                <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>
                    <li class=""><a href="<?= $arItem["LINK"] ?>">
                            <span><?= $arItem["TEXT"] ?></span></a>
                        <ul>
                <?php else: ?>
                        <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                            <ul>
                <?php endif ?>

            <?php else: ?>

                <?php if ($arItem["PERMISSION"] > "D"): ?>

                    <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>
                        <li><a href="<?= $arItem["LINK"] ?>">
                                <span><?= $arItem["TEXT"] ?></span></a>
                        </li>
                    <?php else: ?>
                        <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                    <?php endif ?>

                <?php endif ?>

            <?php endif ?>

            <?php $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

            <?php endforeach ?>

            <?php if ($previousLevel > 1)://close last item tags?>
                <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
            <?php endif ?>
        </ul>
    </div>
<?php endif; ?>

<!-- <div class="sb_nav">
     <ul>
         <li class="close"><a href=""><span>Каталог</span></a></li>
         <li class="close"><a href=""><span>Кухни</span></a></li>
         <li class="close"><a href=""><span>Гарнитуры</span></a></li>
         <li class="open current">
             <span class="sb_showchild"></span>
             <a href=""><span>Спальни</span></a>
             <ul>
                 <li><a href="">Одноместрые</a></li>
                 <li><a href="">Двухместные</a></li>
                 <li><a href="">Детские</a></li>
             </ul>
         </li>
         <li class="close"><a href=""><span>Кухни</span></a></li>
         <li class="close"><a href=""><span>Гарнитуры</span></a></li>
         <li class="close">
             <span class="sb_showchild"></span>
             <a href=""><span>Спальни</span></a>
             <ul>
                 <li><a href="">Одноместрые</a></li>
                 <li><a href="">Двухместные</a></li>
                 <li><a href="">Детские</a></li>
             </ul>
         </li>
     </ul>
 </div>-->
