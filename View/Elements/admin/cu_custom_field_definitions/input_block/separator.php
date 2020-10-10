<?php
/**
 * @var BcAppView $this
 * @var string $currentModelName
 */
?>


<tr id="Row<?php echo $currentModelName . Inflector::camelize('separator'); ?>">
	<th class="col-head bca-form-table__label">
		<?php echo $this->BcForm->label('CuCustomFieldDefinition.separator', '区切り文字') ?>
	</th>
	<td class="col-input bca-form-table__input">
		<?php echo $this->BcForm->input('CuCustomFieldDefinition.separator', ['type' => 'text', 'size' => 60, 'placeholder' => 'ラジオボタン表示の際の区切り文字を指定します']) ?>
		<?php echo $this->BcForm->error('CuCustomFieldDefinition.separator') ?>
	</td>
</tr>
