<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php $this->registerJs('
        $(document).ready(function(){
            $(".btn-xs").addClass("btn-block");
            $(".kv-grid-table").removeClass("table-responsive");
            $(".kv-grid-table").removeClass("table-bordered");
            $(".kv-grid-table").removeClass("table-striped");

             $(".modalButton").click(function(){
                $("#modal").modal("show")
                    .find("#modalContent")
                    .load($(this).attr("value"));
            });
        });
    ');?>
</head>
<body class="skin-black fixed">
<?php $this->beginBody() ?>

<?php
    Modal::begin([
        // 'header'=>'<h4>Person</h4>',
            'id'=>'modal',
            'size'=>'modal-lg',
            'options' => [
            'tabindex' => false // important for Select2 to work properly
            ],
        ]);
        echo '<div id="modalContent"></div>';
    Modal::end();
?>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                ADD LABORATORY
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <!-- <img src="../img/avatar3.png" class="img-circle" alt="User Image" /> -->
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <!-- <img src="../img/avatar3.png" class="img-circle" alt="User Image" /> -->
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Mark</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <ul class="sidebar-menu">
                       
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-tint"></i> <span>Laboratory Tests</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#transaction"><i class="fa fa-plus"></i> Transaction</a>

                                </li>
                                <li><a href="#settings"><i class="fa fa-cog"></i> Settings</a></li>
                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Patients</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-edit"></i> Manage Patient', ['patients/index'], ['class' => ''])?>
                                </li>
                                <li><a href="#today"><i class="fa fa-calendar"></i> Today's Patient(s)</a></li>
                                <li><a href="#today"><i class="fa fa-calendar"></i> Patient's History</a></li>
                                <li><a href=#settings"><i class="fa fa-cog"></i> Settings</a></li>
                                
                            </ul>
                        </li>

                         <li>
                            <a href="#dashboard">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i>  Multilevel Menu
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>                            

                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#">
                                        First level
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>

                                    <ul class="treeview-menu">
                                        <li class="treeview">
                                            <a href="#">
                                                Second level
                                                <i class="fa fa-angle-left pull-right"></i>
                                            </a>

                                            <ul class="treeview-menu">
                                                <li>
                                                    <a href="#">Third level</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h5>
                        
                         <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            'homeLink' => false,
                        ]) ?>
                        <?= Alert::widget() ?> 
                        
                    </h5>
                    <?= $content ?>
                   
                </section>

                <!-- Main content -->
                <section class="content">


                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

<?php
$js='
    $(document).ready(function(){
        $(".search_link").click(function(){
            $(".search_panel").slideDown(300);
            $(".search_close").show();
        });

        $(".search_close").click(function(){
            $(".search_panel").slideUp(300);
            $(".search_close").hide();
        });
    });
';
$this->registerJs($js);

?>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
