spl_autoload_register(function($profile) {
$prefix = "Edu\\Cnm\\DataDesign";
$baseDir = __DIR__;
$len = strlen($prefix);
if (strncmp($prefix, $class, $len) !==0) {
return;
}
$className = substr($class, $len);

$file = baseDir . str_replace("\\", $className) . ".php";

if(file_exists($file)) {
require_once($file);
}
});