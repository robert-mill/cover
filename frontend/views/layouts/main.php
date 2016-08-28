<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '
        <div class="logoWrap">
         <img src="images/logo_banner.svg" class="img-responsive" width="40%">

          <!-- <div class="cube">
             <div class="front">
                <p class="fullfont">Nikoz
                <span class="halffont">Recruitment</span></p>
             </div>
             <div class="back">
                <p class="fullfont">Nikoz
                <span class="halffont">Recruitment</span></p>
             </div>
             <div class="top">
            
             </div>
             <div class="bottom">
             
             </div>
             <div class="left">
             
             </div>
             <div class="right">
             
             </div>-->
             
            <!-- </div><!--The cube-->
            
            </div><!--LogoWrap-->
        
        ',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [


        Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                [
                    'label' => 'Home',
                    'url' => 'index.php',

                    'items' => [
                        [
                            'label' => 'Home',
                            'url' => 'index.php'
                        ],
                        [
                            'label' => 'Services',
                            'url' => '#services'
                        ],
                        '<li class="divider"></li>',
                        '<li class="dropdown-header">Dropdown Header</li>',
                        [
                            'label' => 'Level 1 - Dropdown B',
                            'url' => '#'
                        ]
                    ]
                ],
                ['label' => 'About', 'url' => ['/site/about']],
                [
                    'label' => 'Jobs Zone',
                    'url' => 'jobs.php',
                    'items' => [
                        [
                            'label' => 'Jobs Zone home',
                            'url' => 'jobs.php#home',
                        ],
                        [
                            'label' => 'Quick Sign Up',
                            'url' => 'teacher-post-reg',
                        ],
                        [
                            'label' => 'Primary Education',
                            'url' => '#',
                        ],
                        [
                            'label' => 'Secondary Education',
                            'url' => '#',
                        ],
                        [
                            'label' => 'Further Education',
                            'url' => '#',
                        ],
                        [
                            'label' => 'SEN',
                            'url' => '#',
                        ],
                        [
                            'label' => 'Job Alert',
                            'url' => 'jobs.php#alert',
                        ]
                    ]
                ],
                [
                    'label' => 'Recruiting',
                    'url' => 'recruiting.php',
                    'items' => [
                        [
                            'label' => 'Register vacancy',
                            'url' => 'recruiting.php#home',
                        ],
                        [
                            'label' => 'Security & Vetting',
                            'url' => '#security',
                        ],
                        [
                            'label' => 'Safety First',
                            'url' => '#safety',
                        ]
                    ]
                ],
                [
                    'label' => 'Resources',
                    'url' => 'resources.php',
                    'items' => [
                        [
                            'label' => 'Applicant Profiles',
                            'url' => '#aprofiles',
                        ],
                        [
                            'label' => 'Applicant Terms',
                            'url' => '#aterms',
                        ],
                        [
                            'label' => 'Clients Terms',
                            'url' => '#cterms',
                        ],
                        [
                            'label' => 'Time Sheets',
                            'url' => '#tsheets',
                        ]
                    ]
                ],



                ['label' => 'Contact', 'url' => ['/site/contact']],
            ],

        ]),
    ] ;
    echo "<br><br>";
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
