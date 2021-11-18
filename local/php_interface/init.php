<?php
define('DIST_PATH', SITE_DIR . "local/assets/dist/");

function pre($o){
    global $USER;
    if ( !$USER->IsAdmin() )
        return;
    $bt         = debug_backtrace();
    $bt         = $bt[0];
    $dRoot      = $_SERVER["DOCUMENT_ROOT"];
    $dRoot      = str_replace("/","\\",$dRoot);
    $bt["file"] = str_replace($dRoot,"",$bt["file"]);
    $dRoot      = str_replace("\\","/",$dRoot);
    $bt["file"] = str_replace($dRoot,"",$bt["file"]);	?>
    <div style='font-size:9pt; color:#000; background:#fff; border:1px dashed #000;text-align: left!important;'>
    <div style='padding:3px 5px; background:#99CCFF; font-weight:bold;'>File: <?=$bt["file"]?> [<?=$bt["line"]?>]</div>
    <pre style='padding:5px;'><?print_r($o)?></pre>
    </div><?
}

if (!function_exists('pre')){
    /**
     * Распечатка переменной
     * @param bool|array $array
     * @param bool $vardump
     * @param bool $description
     * @param bool $debug_print_trace
     *
     * @return bool
     */
    function pre($array = false, $description = false, $vardump = false, $debug_print_trace = false)
    {
        $debug_trace = debug_backtrace();
        if ($debug_print_trace)
        {
            $backtrace = "";
            foreach ($debug_trace as $k => $v)
            {
                if ($v['function'] == "include" || $v['function'] == "include_once" || $v['function'] == "require_once"
                    || $v['function'] == "require"
                )
                {
                    $backtrace
                        .= "#".$k." ".$v['function']."(".$v['args'][0].") called at [".$v['file'].":".$v['line']."]<br />";
                }
                else
                {
                    $backtrace .= "#".$k." ".$v['function']."() called at [".$v['file'].":".$v['line']."]<br />";
                }
            }
            echo "<br /><b>".$backtrace."</b><br />";
        }
        else
        {
            print("<br /><b>".$debug_trace[0]["file"].": ".$debug_trace[0]["line"]."</b><br />");
        }

        if ($description)
        {
            echo "<b>".$description."</b><br />";
        }

        echo "<pre>";
        if ($vardump)
        {
            var_dump($array);
        }
        else
        {
            print_r($array);
        }
        echo "</pre>";

        return true;
    }
}