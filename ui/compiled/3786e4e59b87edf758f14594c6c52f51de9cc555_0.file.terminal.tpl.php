<?php
/* Smarty version 3.1.33, created on 2019-07-16 06:35:38
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/terminal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2da87aaace93_83642300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3786e4e59b87edf758f14594c6c52f51de9cc555' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/terminal.tpl',
      1 => 1562710887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2da87aaace93_83642300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16370376755d2da87aaabd38_02684482', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_16370376755d2da87aaabd38_02684482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16370376755d2da87aaabd38_02684482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Terminal'];?>
</h5>

                </div>
                <div class="ibox-content">

                    <div id="terminal">

                        <div id="output"></div>

                        <div id="command">
                            <div id="prompt">&gt;</div>
                            <input type="text" autocapitalize="off">
                        </div>

                    </div>

                </div>
            </div>



        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}
