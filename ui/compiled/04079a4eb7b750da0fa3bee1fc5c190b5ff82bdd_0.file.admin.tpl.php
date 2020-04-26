<?php
/* Smarty version 3.1.33, created on 2019-07-29 07:03:17
  from '/Users/razib/Documents/valet/ibc/ibilling/apps/theme_options/views/layouts/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3ed275ae8c12_77989786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04079a4eb7b750da0fa3bee1fc5c190b5ff82bdd' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/apps/theme_options/views/layouts/admin.tpl',
      1 => 1563473156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3ed275ae8c12_77989786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="iTheme - Plugin for iBilling">
    <meta name="author" content="KaijuThemes and SadiaSharmin">

    <link type='text/css' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/fa/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">              <!-- Themify Icons -->
    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/css/styles.css" rel="stylesheet">

    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->

    <!--[if lt IE 10]>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/js/media.match.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/js/respond.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/js/placeholder.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->

    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/plugins/switchery/switchery.css" rel="stylesheet">   							<!-- Switchery -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/css/animate.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/toggle/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/component.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/icons/css/ibilling_icons.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/material.css" rel="stylesheet">
    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/css/extras.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin_ui_header_admin']->value, 'plugin_ui_header_add');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plugin_ui_header_add']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['plugin_ui_header_add']->value;?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if (isset($_smarty_tpl->tpl_vars['xheader']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

    <?php }?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin_ui_header_admin_css']->value, 'plugin_ui_header_add_css');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plugin_ui_header_add_css']->value) {
?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['plugin_ui_header_add_css']->value;?>
" rel="stylesheet">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</head>

<body class="animated-content <?php if ($_smarty_tpl->tpl_vars['_c']->value['ib_theme_options_boxed_layout'] == '1') {?> layout-boxed <?php }?> <?php if ($_smarty_tpl->tpl_vars['_c']->value['ib_theme_options_collapse_leftbar'] == '1') {?> sidebar-collapsed <?php }?>">

<header id="topnav" class="navbar navbar-<?php echo $_smarty_tpl->tpl_vars['_c']->value['ib_theme_options_topnav'];?>
 <?php if ($_smarty_tpl->tpl_vars['_c']->value['ib_theme_options_fixed_header'] == '1') {?> navbar-fixed-top <?php } else { ?> navbar-static-top <?php }?>" role="banner">

    <div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
            </a>
		</span>

        <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;
echo $_smarty_tpl->tpl_vars['_c']->value['redirect_url'];?>
/"><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</a>

        <div class="toolbar-icon-bg hidden-xs" id="toolbar-search">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/">
                <div class="input-group">
                    <span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-search"></i></button></span>
                    <input type="text" class="form-control" name="name" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search Customers'];?>
...">
                    <span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-close"></i></button></span>
                </div>
            </form>

        </div>

    </div><!-- logo-area -->

    <ul class="nav navbar-nav toolbar pull-right">

        <li class="toolbar-icon-bg visible-xs-block" id="trigger-toolbar-search">
            <a href="#"><span class="icon-bg"><i class="ti ti-search"></i></span></a>
        </li>



        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i></a>
        </li>





        <li class="dropdown toolbar-icon-bg">
            <a href="#" class="dropdown-toggle username" data-toggle="dropdown">

                <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == 'gravatar') {?>
                    <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['user']->value['username']));?>
?s=200" class="img-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                    <img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/img/user-icon-default.png" alt="" />
                <?php } else { ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                <?php }?>


            </a>
            <ul class="dropdown-menu userinfo arrow">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/"><i class="ti ti-user"></i><span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>
</span></a></li>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password/"><i class="ti ti-settings"></i><span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change Password'];?>
</span></a></li>
                <li class="divider"></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout/"><i class="ti ti-shift-right"></i><span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</span></a></li>
            </ul>
        </li>

    </ul>

</header>

<div id="wrapper">
    <div id="layout-static">
        <div class="static-sidebar-wrapper sidebar-<?php echo $_smarty_tpl->tpl_vars['_c']->value['ib_theme_options_sidebar'];?>
">
            <div class="static-sidebar">
                <div class="sidebar">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="userinfo">
                                <div class="avatar">

                                    <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == 'gravatar') {?>
                                        <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['user']->value['username']));?>
?s=200" class="img-thumbnail img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/img/user-icon-default.png" class="img-responsive img-circle">
                                    <?php } else { ?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-thumbnail img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                                    <?php }?>


                                </div>
                                <div class="info">
                                    <span class="username"><?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
</span>
                                    <span class="useremail"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget stay-on-collapse" id="widget-sidebar">
                        <nav role="navigation" class="widget-body">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplnav']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                        </nav>
                    </div>


                </div>
            </div>
        </div>
        <div class="static-content-wrapper">
            <div class="static-content">
                <div class="page-content">

                    <div class="container-fluid mt-md">



                        <?php if (isset($_smarty_tpl->tpl_vars['notify']->value)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                        <?php }?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3308532475d3ed275ae2f52_81461698', "content");
?>







                    </div> <!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div>
            <footer role="contentinfo">
                <div class="clearfix">
                    <ul class="list-unstyled list-inline pull-left">
                        <li><h6 style="margin: 0;">&copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</h6></li>
                    </ul>
                    <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
                </div>
            </footer>

        </div>
    </div>
</div>


<!-- Switcher -->

<input type="hidden" id="_url" name="_url" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
">
<input type="hidden" id="_df" name="_df" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['df'];?>
">
<input type="hidden" id="_lan" name="_lan" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['language'];?>
">
<div id="ajax-modal" class="modal container fade" tabindex="-1" style="display: none;"></div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery-ui-1.10.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var _L = [];
    var config_animate = 'No';
    <?php if (($_smarty_tpl->tpl_vars['_c']->value['animate']) == '1') {?>
    var config_animate = 'Yes';
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['jsvar']->value;?>

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Custom and plugin javascript -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/moment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/blockui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/toggle/bootstrap-toggle.min.js"><?php echo '</script'; ?>
>

<?php if (($_smarty_tpl->tpl_vars['_c']->value['animate']) == '1') {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/pace.min.js"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/progress.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/bootbox.min.js"><?php echo '</script'; ?>
>

<!-- iCheck -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/icheck/icheck.min.js"><?php echo '</script'; ?>
>	<!-- Load jQueryUI -->
<!-- Load Bootstrap -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/js/enquire.min.js"><?php echo '</script'; ?>
> 									<!-- Load Enquire -->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/plugins/velocityjs/velocity.min.js"><?php echo '</script'; ?>
>					<!-- Load Velocity for Animated Content -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/plugins/velocityjs/velocity.ui.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/plugins/wijets/wijets.js"><?php echo '</script'; ?>
>     						<!-- Wijet -->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/plugins/bootstrap-switch/bootstrap-switch.js"><?php echo '</script'; ?>
> 		<!-- Swith/Toggle Button -->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"><?php echo '</script'; ?>
>  <!-- Bootstrap Tabdrop -->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>     					<!-- iCheck -->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"><?php echo '</script'; ?>
> <!-- nano scroller -->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/theme_options/views/assets/js/application.js"><?php echo '</script'; ?>
>

<?php if (isset($_smarty_tpl->tpl_vars['xfooter']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }
echo '<script'; ?>
>
    jQuery(document).ready(function() {
        // initiate layout and plugins

        <?php if (isset($_smarty_tpl->tpl_vars['xjq']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['xjq']->value;?>

        <?php }?>



    });

<?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block "content"} */
class Block_3308532475d3ed275ae2f52_81461698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3308532475d3ed275ae2f52_81461698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
