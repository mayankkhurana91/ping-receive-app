<?php

class BuilderModule_action_domainmodelling_838ac44f6e037c2f3e3d811cc0462ee935b92ab2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'k' => 
  array (
    0 => 'EBT\\ExtensionBuilder\\ViewHelpers',
  ),
));
}

/**
 * section header
 */
public function section_594fd1615a341c77829e83ed988f137e1ba96231(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
';

return $output0;
}
/**
 * section iconButtons
 */
public function section_cfe02ef001375ab02a741661b53c8aacfcbfd7a0(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
';
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
	<script type="text/javascript">
		// InputEx needs a correct path to this image
		inputEx.spacerUrl = TYPO3.settings.extensionBuilder.baseUrl + "Resources/Public/jsDomainModeling/wireit/lib/inputex/images/space.gif";

		YAHOO.util.Event.onDOMReady( function() {
			var editor = new WireIt.WiringEditor(extbaseModeling_wiringEditorLanguage);
		});
	</script>

	<div id="domainModelEditor" class="yui-skin-sam">

		<div id="left">
			<div id="propertiesForm"></div>
		</div>

		<div id="center">
			<div id="moduleBar"></div>
			<div id="modelingLayer"></div>
		</div>

		<div id="bottom">
		</div>

		<div id="helpPanel">

		</div>

	</div>
';
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['name'] = NULL;
$arguments4['name'] = 'Default';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output3 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
	';
// Rendering ViewHelper EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [EBT\ExtensionBuilder\ViewHelpers\Be\ConfigurationViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output8 .= '
';
return $output8;
};
$arguments6 = array();
$arguments6['name'] = NULL;
$arguments6['name'] = 'header';

$output3 .= NULL;

$output3 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return '
';
};
$arguments11 = array();
$arguments11['name'] = NULL;
$arguments11['name'] = 'iconButtons';

$output3 .= NULL;

$output3 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return '
	<script type="text/javascript">
		// InputEx needs a correct path to this image
		inputEx.spacerUrl = TYPO3.settings.extensionBuilder.baseUrl + "Resources/Public/jsDomainModeling/wireit/lib/inputex/images/space.gif";

		YAHOO.util.Event.onDOMReady( function() {
			var editor = new WireIt.WiringEditor(extbaseModeling_wiringEditorLanguage);
		});
	</script>

	<div id="domainModelEditor" class="yui-skin-sam">

		<div id="left">
			<div id="propertiesForm"></div>
		</div>

		<div id="center">
			<div id="moduleBar"></div>
			<div id="modelingLayer"></div>
		</div>

		<div id="bottom">
		</div>

		<div id="helpPanel">

		</div>

	</div>
';
};
$arguments13 = array();
$arguments13['name'] = NULL;
$arguments13['name'] = 'content';

$output3 .= NULL;

return $output3;
}


}
#