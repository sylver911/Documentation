<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$typeName = 'FilteredIdentity';
$helperName = 'FilteredIdentity';
$helperArguments = '"SPY", filter = lambda x: x.Close > x.Open';
$properties = array();
$updateParameterType = 'time/number pair, or an <code>IndicatorDataPoint</code>';
$constructorArguments = 'filter = lambda x: x.Close > x.Open';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = False;
$constructorBox = 'filtered-identity';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>