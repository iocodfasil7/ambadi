<?php
/* Smarty version 3.1.33, created on 2019-07-18 05:48:54
  from '/Users/razib/Documents/valet/ibc/ibilling/apps/theme_options/views/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d304086294ac8_36489389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '809a4815d8e479172581ec8bf92b0991e413fbe0' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/apps/theme_options/views/settings.tpl',
      1 => 1562708984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d304086294ac8_36489389 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h4><?php echo $_smarty_tpl->tpl_vars['i10_theme_options']->value['Theme Options'];?>
</h4>

            </div>
            <div class="ibox-content" id="ibox_form">
                <form role="form" name="accadd" method="post" id="rform" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/add-post">
                <div class="demo-options">

                    <div class="demo-body">
                        <div class="tabular">
                            <div class="tabular-row">
                                <div class="tabular-cell"><h5>Fixed Header</h5></div>
                                <div class="tabular-cell demo-switches"><input  data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" name="th_fixed_header" id="th_fixed_header" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['_c']->value['ib_theme_options_fixed_header'] == '1') {?> checked <?php }?>></div>
                            </div>
                            <div class="tabular-row">
                                <div class="tabular-cell"><h5>Boxed Layout</h5></div>
                                <div class="tabular-cell demo-switches"><input  data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" type="checkbox" name="th_boxed_layout" id="th_boxed_layout" <?php if ($_smarty_tpl->tpl_vars['_c']->value['ib_theme_options_boxed_layout'] == '1') {?> checked <?php }?>></div>
                            </div>
                            <div class="tabular-row">
                                <div class="tabular-cell"><h5>Collapse Leftbar</h5></div>
                                <div class="tabular-cell demo-switches"><input  data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" type="checkbox" name="th_collapse_leftbar"  id="th_collapse_leftbar" <?php if ($_smarty_tpl->tpl_vars['_c']->value['ib_theme_options_collapse_leftbar'] == '1') {?> checked <?php }?>></div>
                            </div>
                        </div>
                    </div>

                    <div class="demo-body">
                        <div class="option-title">Topnav</div>
                        <ul id="demo-header-color" class="demo-color-list">
                            <li><span class="demo-cyan"></span></li>
                            <li><span class="demo-light-blue"></span></li>
                            <li><span class="demo-blue"></span></li>
                            <li><span class="demo-indigo"></span></li>
                            <li><span class="demo-deep-purple"></span></li>
                            <li><span class="demo-purple"></span></li>
                            <li><span class="demo-pink"></span></li>
                            <li><span class="demo-red"></span></li>
                            <li><span class="demo-teal"></span></li>
                            <li><span class="demo-green"></span></li>
                            <li><span class="demo-light-green"></span></li>
                            <li><span class="demo-lime"></span></li>
                            <li><span class="demo-yellow"></span></li>
                            <li><span class="demo-amber"></span></li>
                            <li><span class="demo-orange"></span></li>
                            <li><span class="demo-deep-orange"></span></li>
                            <li><span class="demo-midnightblue"></span></li>
                            <li><span class="demo-bluegray"></span></li>
                            <li><span class="demo-bluegraylight"></span></li>
                            <li><span class="demo-black"></span></li>
                            <li><span class="demo-gray"></span></li>
                            <li><span class="demo-graylight"></span></li>
                            <li><span class="demo-default"></span></li>
                            <li><span class="demo-brown"></span></li>
                        </ul>
                    </div>

                    <div class="demo-body">
                        <div class="option-title">Sidebar</div>
                        <ul id="demo-sidebar-color" class="demo-color-list">
                            <li><span class="demo-cyan"></span></li>
                            <li><span class="demo-light-blue"></span></li>
                            <li><span class="demo-blue"></span></li>
                            <li><span class="demo-indigo"></span></li>
                            <li><span class="demo-deep-purple"></span></li>
                            <li><span class="demo-purple"></span></li>
                            <li><span class="demo-pink"></span></li>
                            <li><span class="demo-red"></span></li>
                            <li><span class="demo-teal"></span></li>
                            <li><span class="demo-green"></span></li>
                            <li><span class="demo-light-green"></span></li>
                            <li><span class="demo-lime"></span></li>
                            <li><span class="demo-yellow"></span></li>
                            <li><span class="demo-amber"></span></li>
                            <li><span class="demo-orange"></span></li>
                            <li><span class="demo-deep-orange"></span></li>
                            <li><span class="demo-midnightblue"></span></li>
                            <li><span class="demo-bluegray"></span></li>
                            <li><span class="demo-bluegraylight"></span></li>
                            <li><span class="demo-black"></span></li>
                            <li><span class="demo-gray"></span></li>
                            <li><span class="demo-graylight"></span></li>
                            <li><span class="demo-default"></span></li>
                            <li><span class="demo-brown"></span></li>
                        </ul>
                    </div>



                </div>

                    <input type="hidden" id="th_topnav" name="th_topnav" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['ib_theme_options_topnav'];?>
">
                    <input type="hidden" id="th_sidebar" name="th_sidebar" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['ib_theme_options_sidebar'];?>
">
                    <button type="submit" id="set_theme_options" class="btn btn-primary mt-md"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save Changes'];?>
</button>
                </form>

            </div>
        </div>



    </div>



</div><?php }
}
