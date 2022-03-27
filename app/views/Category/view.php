<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <?=$breadcrumbs?>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--prdt-starts-->
<div class="prdt">
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-9 prdt-left">
                <?php if(!empty($products)): ?>
                    <div class="product-one">
                        <?php $curr = \ishop\App::$app->getProperty('currency'); ?>
                        <?php foreach($products as $product): ?>
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="product/<?=$product->alias;?>" class="mask"><img class="img-responsive zoom-img" src="images/<?=$product->img;?>" alt="" /></a>
                                    <div class="product-bottom">
                                        <h3><?=$product->title;?></h3>
                                        <p>Explore Now</p>
                                        <h4>
                                            <a data-id="<?=$product->id;?>" class="add-to-cart-link" href="cart/add?id=<?=$product->id;?>"><i></i></a> <span class=" item_price"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                            <?php if($product->old_price): ?>
                                                <small><del><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></del></small>
                                            <?php endif; ?>
                                        </h4>
                                    </div>
                                    <div class="srch srch1">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <p>(<?=count($products)?> товара(ов) из <?=$total;?>)</p>
                            <?php if($total / count($products) > 1): ?>
                                <?=$pagination;?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <h3>В этой категории товаров пока нет...</h3>
                <?php endif; ?>
            </div>
            <div class="col-md-3 prdt-right">
                <div class="w_sidebar">
                    <?php new \app\widgets\filter\Filter(); ?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--product-end-->




<!--<div class="b-enter__digits support">-->
<!--<div class="page-form__wrap">-->
<!--    <div class="page-form__title">-->
<!--        Комплект поддержки 1С:ИТС-->
<!--    </div>-->
<!--    <div class="page-form__pre-title">-->
<!--        Обслуживание 1С в Челябинске-->
<!--    </div>-->
<!--    <div class="d-flex justify-content-around">-->
<!--        <div class="button_block">-->
<!--        <button  href="#" class="btn-circle company__btn btn btn-secondary">Три месяца бесплатно</button >-->
<!--            <div class="page-form__info">-->
<!--                <div class="b-digit__descr">-->
<!--                    Льготный период сопровождения*-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="stroke">-->
<!---->
<!--        </div>-->
<!--        <div class="button_block">-->
<!--        <button  href="#" class="btn-circle company__btn btn btn-secondary">-->
<!--            Приобрести-->
<!--        </button >-->
<!--            <div class="page-form__info">-->
<!--                <div class="b-digit__descr">-->
<!--                    Комплект поддержки на самых выгодных условиях-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->
<!---->
<!--<div class="b-enter__project">-->
<!--    <div class="b-enter__digits">-->
<!--        <div class="b-digit">-->
<!--            <div class="b-digit__descr">Что такое ИТС</div>-->
<!--        </div>-->
<!--        <div class="b-digit">-->
<!--            <div class="b-digit__descr">Стоимость</div>-->
<!--        </div>-->
<!--        <div class="b-digit">-->
<!--            <div class="b-digit__descr">Сервисы 1С:ИТС</div>-->
<!--        </div>-->
<!--        <div class="b-digit">-->
<!--            <div class="b-digit__descr">Акции</div>-->
<!--        </div>-->
<!--        <div class="b-digit">-->
<!--            <div class="b-digit__descr">Приобрести</div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="page_sub_title">-->
<!--    С договором 1С:ИТС Вы получаете:-->
<!--</div>-->


<!--<div class="direction__main">-->
<!--    <div class="direction__item">-->
<!--        <div class="direction__item_ico">-->
<!--            <img src="/local/templates/itc2019/img/updating.svg">-->
<!--        </div>-->
<!--        <div class="direction__item_link">-->
<!--            <span>Обновление программ 1С до последних релизов</span>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="direction__item">-->
<!--        <div class="direction__item_ico">-->
<!--            <img src="/local/templates/itc2019/img/access.svg">-->
<!--        </div>-->
<!--        <div class="direction__item_link">-->
<!--            <span>Доступ к информационной системе 1С:ИТС</span>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="direction__item">-->
<!--        <div class="direction__item_ico">-->
<!--            <img src="/local/templates/itc2019/img/consultation.svg">-->
<!--        </div>-->
<!--        <div class="direction__item_link">-->
<!--            <span>Профессиональную линию консультации</span>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="direction__item">-->
<!--        <div class="direction__item_ico">-->
<!--            <img src="/local/templates/itc2019/img/services.svg">-->
<!--        </div>-->
<!--        <div class="direction__item_link">-->
<!--            <span>Сервисы 1С:ИТС для комфортной и эффективной работы</span>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="page_sub_title_small">-->
<!--    Что такое 1С:ИТС-->
<!--</div>-->
<!--<p>Информационно-технологическое сопровождение (1С:ИТС) – это комплексная поддержка пользователей «1С:Предприятие» по всем направлениям, которую оказывают официальные партнеры фирмы «1С». В первую очередь, это регулярное предоставление комплекса услуг и сервисов профессиональными специалистами 1С для комфортной и эффективной работы по ведению учета и управлению предприятием.</p>-->
<!---->
<!--<div class="products-box__wrap escort">-->
<!--    <div class="products-box__item ">-->
<!--        <div class="products-box__item_img">-->
<!--            <img src="/local/templates/itc2019/img/time.svg" alt="">-->
<!--        </div>-->
<!--        <div class="products-box__item_text">-->
<!--            Поддержка программ 1С в режиме реального времени-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="products-box__item ">-->
<!--        <div class="products-box__item_img">-->
<!--            <img src="/local/templates/itc2019/img/legislation.svg" alt="">-->
<!--        </div>-->
<!--        <div class="products-box__item_text">-->
<!--            Актуальная информация об изменениях законодательства-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="products-box__item ">-->
<!--        <div class="products-box__item_img">-->
<!--            <img src="/local/templates/itc2019/img/new_functions.svg" alt="">-->
<!--        </div>-->
<!--        <div class="products-box__item_text">-->
<!--            Новые функции и возможности в программах 1С-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="products-box__item ">-->
<!--        <div class="products-box__item_img">-->
<!--            <img src="/local/templates/itc2019/img/new_reporting.svg" alt="">-->
<!--        </div>-->
<!--        <div class="products-box__item_text">-->
<!--            Новые формы отчетности-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="products-box__item ">-->
<!--        <div class="products-box__item_img">-->
<!--            <img src="/local/templates/itc2019/img/DB.svg" alt="">-->
<!--        </div>-->
<!--        <div class="products-box__item_text">-->
<!--            Сохранность вашей базы-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="products-box__item ">-->
<!--        <div class="products-box__item_img">-->
<!--            <img src="/local/templates/itc2019/img/submission.svg" alt="">-->
<!--        </div>-->
<!--        <div class="products-box__item_text">-->
<!--            Бесперебойная сдача отчетности-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->
<!--<div class="page_sub_title">-->
<!--Стоимость 1С:Комплект поддержки ИТС-->
<!--</div>-->
<!---->
<!--<div class="direction__main type_service">-->
<!--    <div class="direction__item">-->
<!--        <div class="direction__item_link">-->
<!--            <span>ПРОФ</span>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="direction__item">-->
<!--        <div class="direction__item_link">-->
<!--            <span>ТЕХНО</span>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="direction__item">-->
<!--        <div class="direction__item_link">-->
<!--            <span>СТРОИТЕЛЬСТВО</span>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="direction__item">-->
<!--        <div class="direction__item_link">-->
<!--            <span>МЕДИЦИНА</span>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

