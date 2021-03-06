<?php
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/form_validation.js');
?>
<?php
/* @var $this FormDropdownController */
/* @var $model FormDropdown */

$this->breadcrumbs=array(
	'Form Dropdowns'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List FormDropdown', 'url'=>array('index')),
	array('label'=>'Create FormDropdown', 'url'=>array('create')),
	array('label'=>'Update FormDropdown', 'url'=>array('update', 'id'=>$model->dropdown_id)),
	array('label'=>'Delete FormDropdown', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dropdown_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FormDropdown', 'url'=>array('admin')),
);
?>

<h1>View FormDropdown #<?php echo $model->dropdown_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dropdown_id',
		'name',
		'values',
		'date_added',
		'datetime_created',
		'form_updated',
		'admin_id',
	),
)); ?>
