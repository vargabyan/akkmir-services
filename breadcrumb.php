<?php

function breadcrumb($arg = [['url' => '', 'name' => '']])
{
    $arg_count = count($arg) - 1;
    ?>
    <section class="breadcrumb core-container">
        <ul>
            <li>
                <a class="breadcrumb_home" href="/">Главная</a>
            </li>
            <?php
            foreach ($arg as $key => $item) {
                if (($item['url'] || $item['name']) && $key < $arg_count) {
                    ?>
                    <li>
                        <div class="breadcrumb_line">/</div>
                    </li>
                    <li>
                        <a class="breadcrumb_item" href="<?= $item['url'] ?> "> <?= $item['name'] ?></a>
                    </li>
                    <?php
                }
                if ($key == $arg_count) { ?>
                    <li>
                        <div class="breadcrumb_line">/</div>
                    </li>
                    <li>
                        <p class="breadcrumb_item"> <?= $item['name'] ?></p>
                    </li>
                <?php }
            } ?>
        </ul>
    </section>
    <?php
}

?>