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
    <title>Nikoz Recruitment</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '
        <div class="logoWrap" id="animate-area">
            <img src="images/logo_banner.svg" class="img-responsive" width="40%">
         </div><!--LogoWrap-->
        
        ',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    if( Yii::$app->user->can('schools-post-update') )
    {
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
                            '<li class="dropdown-header">School Admin</li>',
                            [
                                'label' => 'Log In',
                                'url' => '?r=site/login'
                            ]
                        ]
                    ],
                    ['label' => 'About', 'url' => ['/about-us']],
                    [
                        'label' => 'Jobs Zone',
                        'url' => '?r=job-home',
                        'items' => [
                            [
                                'label' => 'Jobs Zone home',
                                'url' => '?r=job-home',
                            ],
                            [
                                'label' => 'Quick Sign Up',
                                'url' => '?r=teacher-post-reg',
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
                            ],
                            [
                                'label' => 'Add Post',
                                'url' => '?r=schools-posts/create'
                            ]
                        ]
                    ],
                    [
                        'label' => 'Recruiting',
                        'url' => 'recruiting.php',
                        'items' => [
                            [
                                'label' => 'Register vacancy',
                                'url' => '?r=school-post-reg',
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
                                'url' => '?r=teacher-conditions',
                            ],
                            [
                                'label' => 'Clients Terms',
                                'url' => '?r=school-conditions',
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
    }else{
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
                        '<li class="dropdown-header">School Admin</li>',
                        [
                            'label' => 'Log In',
                            'url' => '?r=site/login'
                        ]
                    ]
                ],
                ['label' => 'About', 'url' => ['/about-us']],
                [
                    'label' => 'Jobs Zone',
                    'url' => '?r=job-home',
                    'items' => [
                        [
                            'label' => 'Jobs Zone home',
                            'url' => '?r=job-home',
                        ],
                        [
                            'label' => 'Quick Sign Up',
                            'url' => '?r=teacher-post-reg',
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
                            'url' => '?r=school-post-reg',
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
                            'url' => '?r=teacher-conditions',
                        ],
                        [
                            'label' => 'Clients Terms',
                            'url' => '?r=school-conditions',
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
    }
    echo "<br><br>";
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <br><br><br>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy;Nikoz Recruitment <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
