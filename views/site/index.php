<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach($articles as $article):?>
                    <article class="post">
                    <div class="post-thumb">
                        <a href="#"><img src="<?= $article->getImage();?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                    
                            <h1 class="entry-title"><a href="/"><?= $article->title;?></a></h1>
                        </header>
                        <div class="entry-content">
                            <p>
                                <?= $article->content ?>
                            </p>

                        </div>
                        <div class="social-share">
                            <span class="social-share-title pull-left text-capitalize"><a href="#">Опубликовано - </a><?= $article->date ?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li>325
                            </ul>
                        </div>
                    </div>
                </article>
                <?php endforeach?>
                
                <?php 
                    echo LinkPager::widget([
                        'pagination'=>$pagination,
                    ]);
                ?>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    <?php foreach($articles as $article):?>
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Популярные посты</h3>

                        <div class="popular-post">


                            <a href="blog.html"><img src="<?= $article->getImage();?>" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase"><?= $article->title ?></a>
                                <span class="p-date"><?= $article->date ?></span>

                            </div>
                        </div>
                    </aside>
                    <?php endforeach?>
                    <?php foreach($articles as $article):?>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Недавние посты</h3>

                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="blog.html"><img src="<?= $article->getImage();?>" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase"><?= $article->title ?></a>
                                <span class="p-date"><?= $article->date ?></span>
                                </div>
                            </div>
                        <div class="thumb-latest-posts">
                    </aside>
                    <?php endforeach?>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Категории</h3>
                        <ul>
                            <li>
                                <a href="/site/title?user_id=Спортивный автомобиль&page=1&per-page=1">SportCar</a>
                                <span class="post-count pull-right"> (1)</span>
                            </li>
                            <li>
                                <a href="/site/title?user_id=Ура+каниулы!&page=2&per-page=1">Каникулы</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="/site/title?user_id=Природа в горах&page=3&per-page=1">Горы</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="/site/title?user_id=Насекомые&page=4&per-page=1">Насекомые</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="/site/title?user_id=Дикие животные&page=5&per-page=1">Дикие</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="/site/title?user_id=Домашние животные&page=6&per-page=1">Домашние</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->