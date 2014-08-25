<ul class="sf_admin_actions">
<?php if ($form->isNew()): ?>
  <?php echo $helper->linkToDelete($form->getObject(), array(  'params' =>   array(  ),  'confirm' => '¿Esta seguro?',  'class_suffix' => 'delete',  'label' => 'Eliminar',)) ?>
  <?php echo $helper->linkToList(array(  'params' =>   array(  ),  'class_suffix' => 'list',  'label' => 'Volver a la lista',)) ?>
  <?php echo $helper->linkToSave($form->getObject(), array(  'params' =>   array( ),  'class_suffix' => 'save',  'label' => 'Guardar', 'class' => 'button [tiny small large]')) ?>
  <?php echo $helper->linkToSaveAndAdd($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save_and_add',  'label' => 'Guardar y Agregar', 'class' => 'button [tiny small large]')) ?>
<?php else: ?>
  <?php echo $helper->linkToDelete($form->getObject(), array(  'params' =>   array(  ),  'confirm' => '¿Esta seguro?',  'class_suffix' => 'delete',  'label' => 'Eliminar',)) ?>
  <?php echo $helper->linkToList(array(  'params' =>   array(  ),  'class_suffix' => 'list',  'label' => 'Volver a la lista',)) ?>
  <?php echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Guardar', 'class' => 'button [tiny small large]')) ?>
  <?php echo $helper->linkToSaveAndAdd($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save_and_add',  'label' => 'Guardar y Agregar', 'class' => 'button [tiny small large]')) ?>
<?php endif; ?>
</ul>
