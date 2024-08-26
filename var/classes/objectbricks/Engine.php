<?php

/**
 * Fields Summary:
 * - cylinders [numeric]
 * - capacity [quantityValue]
 * - power [quantityValue]
 * - engineLocation [select]
 */

return \Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'Engine',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => '',
   'layoutDefinitions' => 
  \Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'children' => 
    array (
      0 => 
      \Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => 0,
         'height' => 0,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'children' => 
        array (
          0 => 
          \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
             'name' => 'cylinders',
             'title' => 'Количество цилиндров',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'fieldtype' => '',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValue' => NULL,
             'integer' => true,
             'unsigned' => true,
             'minValue' => NULL,
             'maxValue' => NULL,
             'unique' => false,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
             'width' => '',
             'defaultValueGenerator' => '',
          )),
          1 => 
          \Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'name' => 'capacity',
             'title' => 'Объём',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'fieldtype' => '',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'unitWidth' => '',
             'defaultUnit' => '5',
             'validUnits' => 
            array (
              0 => '5',
            ),
             'unique' => false,
             'autoConvert' => false,
             'defaultValueGenerator' => '',
             'width' => '',
             'defaultValue' => NULL,
             'integer' => false,
             'unsigned' => false,
             'minValue' => NULL,
             'maxValue' => NULL,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
          )),
          2 => 
          \Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'name' => 'power',
             'title' => 'Мощность',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'fieldtype' => '',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'unitWidth' => '',
             'defaultUnit' => '6',
             'validUnits' => 
            array (
              0 => '6',
            ),
             'unique' => false,
             'autoConvert' => false,
             'defaultValueGenerator' => '',
             'width' => '',
             'defaultValue' => NULL,
             'integer' => false,
             'unsigned' => false,
             'minValue' => NULL,
             'maxValue' => NULL,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
          )),
          3 => 
          \Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'engineLocation',
             'title' => 'Расположение двигателя',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'fieldtype' => '',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
                'key' => 'front',
                'value' => 'front',
              ),
              1 => 
              array (
                'key' => 'back',
                'value' => 'back',
              ),
              2 => 
              array (
                'key' => 'middle',
                'value' => 'middle',
              ),
            ),
             'defaultValue' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
             'width' => '',
             'optionsProviderType' => 'configure',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
         'icon' => NULL,
         'labelWidth' => 100,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'fieldDefinitionsCache' => NULL,
   'blockedVarsForExport' => 
  array (
  ),
   'activeDispatchingEvents' => 
  array (
  ),
   'classDefinitions' => 
  array (
    0 => 
    array (
      'classname' => 'Car',
      'fieldname' => 'attributes',
    ),
  ),
   'activeDispatchingEvents' => 
  array (
  ),
));
