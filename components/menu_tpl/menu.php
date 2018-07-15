<?php if (!isset($category['childs'])): ?>
    <ul class="kid-menu ">
        <li>
            <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']]) //Для ссылок     ?>">
                <?= $category['name'] ?>
            </a>
        </li>
    </ul>
<?php else: ?>
    <li>
        <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']]) //Для ссылок     ?>">
            <?= $category['name'] ?>
            <?php if (isset($category['childs'])): ?>
                <img class="arrow-img " src="/images/arrow1.png" alt=""/>
            <?php endif; ?>
        </a>
        <?php if (isset($category['childs'])): ?>
            <ul class="cute">
                <li class="subitem1">
                    <?= $this->getMenuHtml($category['childs']) ?>
                </li>
            </ul>
        <?php endif; ?>
    </li>
<?php endif; ?>
