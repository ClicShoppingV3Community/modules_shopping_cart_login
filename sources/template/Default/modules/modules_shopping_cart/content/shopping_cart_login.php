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
<div class="col-md-<?php echo $content_width; ?> <?php echo $position; ?>">
  <div class="separator"></div>
  <div class="hr"></div>
  <?php echo $form; ?>
    <div class="col-md-12">
      <div class="separator"></div>
      <div class="ModulesShoppingCartLoginHeadingTitle"><h1><?php echo CLICSHOPPING::getDef('module_shopping_cart_login_title'); ?></h1></div>
      <div class="separator"></div>
      <div class="input-group col-md-12">
        <label for="InputEmail" class="visually-hidden"><?php echo CLICSHOPPING::getDef('module_shopping_cart_login_entry_email_address'); ?>&nbsp;&nbsp;</label>
        <span class="input-group-addon" id="InputEmail"><?php echo CLICSHOPPING::getDef('module_shopping_cart_login_entry_email_address'); ?>&nbsp;&nbsp;</span>
        <?php echo HTML::inputField('email_address', null, 'required aria-required="true" id="InputEmail" aria-describedby="' . CLICSHOPPING::getDef('module_shopping_cart_login_entry_email_address') . '" placeholder="' . CLICSHOPPING::getDef('module_shopping_cart_login_entry_email_address') . '"', 'email'); ?>
      </div>
      <div class="separator"></div>

      <div class="input-group col-md-12">
        <label for="inputPassword" class="visually-hidden"><?php echo CLICSHOPPING::getDef('module_shopping_cart_login_entry_password'); ?>&nbsp;&nbsp;</label>
        <span class="input-group-addon" id="inputPassword"><?php echo CLICSHOPPING::getDef('module_shopping_cart_login_entry_password'); ?>&nbsp;&nbsp;</span>
        <?php echo HTML::inputField('password', null, 'required aria-required="true" id="inputPassword" aria-describedby="' . CLICSHOPPING::getDef('module_shopping_cart_login_entry_password') . '" placeholder="' . CLICSHOPPING::getDef('module_shopping_cart_login_entry_password') . '"', 'password'); ?>
      </div>


      <div>
        <div class="buttonSet float-end text-right"><?php echo HTML::button(CLICSHOPPING::getDef('module_shopping_cart_login_image_button_login'), null, null, 'success'); ?></div>
      </div>
    </div>
  <?php echo $endform; ?>
</div>

