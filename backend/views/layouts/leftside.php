<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
    
        <?=Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        //['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Home', 'icon' => 'fa fa-dashboard', 
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                        [
                            'label' => 'Announcement',
                            'icon' => 'fa fa-bullhorn',
                            'url' => ['/announcement/index'],
                            
                        ],
                        [
                            'label' => 'Members',
                            'icon' => 'fa fa-users',
                            'url' => ['/member/index'],
                            
                        ],
                        [
                            'label' => 'Finances',
                            'icon' => 'fa fa-dollar',
                            'url' => ['/keuangan/index'],

                        ],
                        [
                            'label' => 'Activity',
                            'icon' => 'fa fa-child',
                            'url' => ['/periode/index'],

                        ],
                        [
                            'label' => 'Mata Kuliah',
                            'icon' => 'fa fa-caret-square-o-right',
                            'url' => ['/mata-kuliah/index'],
                        ],
                        [
                            'label' => 'Gallery',
                            'icon' => 'fa fa-newspaper-o',
                            'url' => ['/gallery'],
                        ],
                        [
                            'label' => 'Tutorial',
                            'icon' => 'fa fa-caret-square-o-right',
                            'url' => ['/tutorial/index'],
                        ],
                        [
                            'label' => 'Rules and SOP',
                            'icon' => 'fa fa-link',
                            'url' => ['/peraturan/index'],
                        ],
                    ],
                ]
        )
        ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
