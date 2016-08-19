<?php
defined('_JEXEC') or die('Restricted access');

// Si queremos agregar los CSS's y JS's del modulo, lo aconsejable es usar los del template para generar menos llamados
$document = &JFactory::getDocument();
$document->addStylesheet(JURI::base(true) . "/modules/".$module->module."/css/styles.css");
$document->addScript(JURI::base(true) . "/modules/".$module->module."/js/scripts.js");

// Tomamos los valores dados en el administrador del modulo
$clase = $params->get("moduleclass_sfx");
$texto = $params->get("texto");
?>

<div class="<?php echo $clase; ?>">

	Muestra del modulo en template "default": <br>
	<?php echo $texto; ?>

</div>