<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$typeName = 'SuperTrend';
$helperName = 'STR';
$helperArguments = '"SPY", 20, 2, MovingAverageType.Wilders';
$properties = array("BasicUpperBand","BasicLowerBand","CurrentTrailingUpperBand","CurrentTrailingLowerBand");
$updateParameterType = 'a <code>TradeBar</code>, or <code>QuoteBar</code>';
$constructorArguments = '20, 2, MovingAverageType.Wilders';
$updateParameterValue = 'bar';
$hasMovingAverageTypeParameter = True;
$constructorBox = 'super-trend';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>