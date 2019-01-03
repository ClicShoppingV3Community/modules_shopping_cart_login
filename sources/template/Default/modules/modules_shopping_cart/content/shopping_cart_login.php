<?php
/**
 *
 *  @copyright 2008 - https://www.clicshopping.org
 *  @Brand : ClicShopping(Tm) at Inpi all right Reserved
 *  @Licence GPL 2 & MIT
 *  @licence MIT - Portion of osCommerce 2.4
 *  @Info : https://www.clicshopping.org/forum/trademark/
 *
 */

  use ClicShopping\OM\HTML;
  use ClicShopping\OM\CLICSHOPPING;
?>
<div class="<?php echo $position; ?> col-md-<?php echo $content_width; ?>">
  <div class="separator"></div>
  <div class="hr"></div>
  <?php echo $form; ?>
    <div class="col-md-12">
      <div class="separator"></div>
      <div class="ModulesShoppingCartLoginHeadingTitle"><h1><?php echo CLICSHOPPING::getDef('module_shopping_cart_login_title'); ?></h1></div>
      <div class="col-md-5" style="padding-top:10px;">
        <div class="input-group col-md-12">
          <label for="InputEmail" class="sr-only"><?php echo CLICSHOPPING::getDef('module_shopping_cart_login_entry_email_address'); ?></label>
          <span class="input-group-addon" id="InputEmail"><?php echo CLICSHOPPING::getDef('module_shopping_cart_login_entry_email_address'); ?></span>
          <?php echo HTML::inputField('email_address', null, 'required aria-required="true" id="InputEmail" aria-describedby="' . CLICSHOPPING::getDef('module_shopping_cart_login_entry_email_address') . '" placeholder="' . CLICSHOPPING::getDef('module_shopping_cart_login_entry_email_address') . '"', 'email'); ?>
        </div>
        <div class="separator"></div>
      </div>
      <div class="separator"></div>
      <div class="col-md-5">
        <div class="input-group col-md-12">
          <label for="inputPassword" class="sr-only"><?php echo CLICSHOPPING::getDef('module_shopping_cart_login_entry_password'); ?></label>
          <span class="input-group-addon" id="inputPassword"><?php echo CLICSHOPPING::getDef('module_shopping_cart_login_entry_password'); ?></span>
          <?php echo HTML::inputField('password', null, 'required aria-required="true" id="inputPassword" aria-describedby="' . CLICSHOPPING::getDef('module_shopping_cart_login_entry_password') . '" placeholder="' . CLICSHOPPING::getDef('module_shopping_cart_login_entry_password') . '"', 'password'); ?>
        </div>
      </div>
      <div class="col-md-12 control-group">
        <div class="controls">
          <div class="buttonSet float-md-right"><?php echo HTML::button(CLICSHOPPING::getDef('module_shopping_cart_login_image_button_login'), null, null, 'success'); ?></div>
        </div>
      </div>
    </div>
    <?php echo $endform; ?>
<!--
    <div>
      <div class="col-md-12">
        <span class="ModulesShoppingCartLogin"><?php echo HTML::link(CLICSHOPPING::link(null, 'Account&LogIn'), CLICSHOPPING::getDef('module_shopping_cart_login_create_account')); ?></span>
      </div>
      <div class="col-md-12">
        <span class="ModulesShoppingCartLoginpassword"><?php echo HTML::link(CLICSHOPPING::link(null, 'Account&PasswordForgotten'), CLICSHOPPING::getDef('module_shopping_cart_login_text_password_forgotten')); ?></span>
      </div>
    </div>
-->
</div>
<div class="clearfix"></div>
