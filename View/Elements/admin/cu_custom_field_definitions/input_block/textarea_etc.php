<?php
/**
 * @var BcAppView $this
 * @var string $currentModelName
 * @var array $customFieldConfig
 */
?>


<tr id="Row<?php echo $currentModelName . Inflector::camelize('rows'); ?>Group">
	<th class="col-head bca-form-table__label">
		その他の設定
	</th>
	<td class="col-input bca-form-table__input">
		<span id="Row<?php echo $currentModelName . Inflector::camelize('rows'); ?>">
			<?php echo $this->BcForm->label('CuCustomFieldDefinition.rows', '行数') ?>
			<?php echo $this->BcForm->input('CuCustomFieldDefinition.rows', ['type' => 'text', 'size' => 5, 'placeholder' => '3']) ?>
			<i class="bca-icon--question-circle btn help bca-help"></i>
			<div id="helptextCuCustomFieldDefinitionRows" class="helptext">
				<ul>
					<li>テキストエリアの場合は行数指定となります。</li>
					<li>Wysiwyg Editorの場合はpx指定となります。</li>
				</ul>
			</div>
			<?php echo $this->BcForm->error('CuCustomFieldDefinition.rows') ?>
		</span>
		<span id="Row<?php echo $currentModelName . Inflector::camelize('cols'); ?>">
			<?php echo $this->BcForm->label('CuCustomFieldDefinition.cols', '横幅サイズ') ?>
			<?php echo $this->BcForm->input('CuCustomFieldDefinition.cols', ['type' => 'text', 'size' => 5, 'placeholder' => '40']) ?>
			<i class="bca-icon--question-circle btn help bca-help"></i>
			<div id="helptextCuCustomFieldDefinitionCols" class="helptext">
				<ul>
					<li>テキストエリアの場合は数値指定となります。</li>
					<li>Wysiwyg Editorの場合は％指定となります。</li>
				</ul>
			</div>
			<?php echo $this->BcForm->error('CuCustomFieldDefinition.cols') ?>
		</span>
		<span id="Row<?php echo $currentModelName . Inflector::camelize('editor_tool_type'); ?>">
			<?php echo $this->BcForm->label('CuCustomFieldDefinition.editor_tool_type', 'Ckeditorのタイプ') ?>
			<?php echo $this->BcForm->input('CuCustomFieldDefinition.editor_tool_type', ['type' => 'select', 'options' => $customFieldConfig['editor_tool_type']]) ?>
			<?php echo $this->BcForm->error('CuCustomFieldDefinition.editor_tool_type') ?>
		</span>
	</td>
</tr>
