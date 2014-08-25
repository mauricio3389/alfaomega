<li class="sf_admin_batch_actions_choice">
  <select name="batch_action">
    <option value=""><?php echo __('Elige una acción', array(), 'sf_admin') ?></option>
    <option value="batchDelete"><?php echo __('Eliminar', array(), 'sf_admin') ?></option>
  </select>
  <?php $form = new BaseForm(); if ($form->isCSRFProtected()): ?>
    <input type="hidden" name="<?php echo $form->getCSRFFieldName() ?>" value="<?php echo $form->getCSRFToken() ?>" />
  <?php endif; ?>
  <input class="button [tiny small large]" type="submit" value="<?php echo __('IR', array(), 'sf_admin') ?>" />
</li>
