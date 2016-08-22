<?php    
 
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('WEB', dirname(__FILE__));

require_once (ROOT . DS . 'config' . DS . 'config.php');
//require_once (ROOT . DS . 'config' . DS . 'database.php');
 
/** Check if environment is development and display errors **/
 
function setReporting() 
{
    if (DEVELOPMENT_ENVIRONMENT == true)
    {
        error_reporting(E_ALL);
        ini_set('display_errors','On');
    }
    else
    {
        error_reporting(E_ALL);
        ini_set('display_errors','Off');
        ini_set('log_errors', 'On');
        ini_set('error_log', ROOT.DS.'tmp'.DS.'logs'.DS.'error.log');
    }
}
 
/** Check for Magic Quotes and remove them **/
 
function stripSlashesDeep($value)
{
    $value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
    return $value;
}
 
function removeMagicQuotes()
{
    if ( get_magic_quotes_gpc() )
    {
        $_GET    = stripSlashesDeep($_GET   );
        $_POST   = stripSlashesDeep($_POST  );
        $_COOKIE = stripSlashesDeep($_COOKIE);
    }
}
 
/** Check register globals and remove them **/
 
function unregisterGlobals()
{
    if (ini_get('register_globals'))
    {
        $array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
        foreach ($array as $value)
        {
            foreach ($GLOBALS[$value] as $key => $var) 
            {
                if ($var === $GLOBALS[$key])
                {
                    unset($GLOBALS[$key]);
                }
            }
        }
    }
}

// /** Main Call Function **/
 
function callHook()
{
    global $page;
    global $page2;
    global $os;
    

    $urlArray = array();
    $urlArray = explode("/",URL);

    $level_1 = $urlArray[1];
    @$level_2 = $urlArray[2];

    switch ($level_1)
    {
        case "":
            $page = 'homePage'; 
            break;
        case "admin":   
            $page = 'admin'; 
            switch ($level_2)
            {
                // case "":
                //     $page2 = 'login'; 
                //     break;
                case "login":
                    $page2 = 'login'; 
                    break;  
                case "category":
                    $page2 = 'category'; 
                    break;
                case "dashboard":
                    $page2 = 'dashboard'; 
                    break;  
                default:
            }
            break;
        case "windows":
        case "mac":
        case "linux";
            $os = $level_1;
            $page = 'osDisplayPage';
            break;
        default:
     }   
}

    // $action = $urlArray[0];
    // array_shift($urlArray);
    // $queryString = $urlArray;
 
    // // $controllerName = $controller;
    // // $controller = ucwords($controller);
    // // $model = rtrim($controller, 's');
    // // $controller .= 'Controller';
    // // $dispatch = new $controller($model,$controllerName,$action);

    // // if ((int)method_exists($controller, $action)) {
    // //     call_user_func_array(array($dispatch,$action),$queryString);
    // // } else {
    // //     /* Error Generation Code Here */
    // // }
// }
 
/** Autoload any classes that are required **/
 
function __autoload($className) {

    if (file_exists(ROOT . DS . 'lib' . DS . strtolower($className) . '.class.php')) {
        require_once(ROOT . DS . 'lib' . DS . strtolower($className) . '.class.php');
    } else if (file_exists(ROOT . DS . 'lib' . DS . 'models' . DS . strtolower($className) . '.class.php')) {
        require_once(ROOT . DS . 'lib' . DS . 'models' . DS . strtolower($className) . '.class.php');
    } else {
        /* Error Generation Code Here */
    }
}
 
setReporting();
removeMagicQuotes();
unregisterGlobals();
callHook();
$urlArray = explode("/",URL);
if($urlArray[1] == 'admin')
{
    require_once(ROOT.DS.'app'.DS.'admin'.DS.'layout.php');
}
else
{
     require_once(ROOT.DS.'app'.DS.'front'.DS.'layout.php');
}


