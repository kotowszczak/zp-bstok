<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function debugGetBacktrace($errno= null, $errstr = null, $errfile = null, $errline = 0 ){
    //kontrolne wyswietlenie bug'a
    //pr(func_get_args());

    $trace  = '';

    if ( $errno ) {
        $trace .= $errstr . ' in ' . $errfile . ':' . $errline . "\n";
    }

    $backtrace = debug_backtrace(null);
    for ( $i = 0, $lp = count($backtrace); $i < $lp; $i++ ) {
        //unset($backtrace[$i]['object']);
        if( $i > 0 ){
            $type = isset($backtrace[$i]['type']) ? $backtrace[$i]['type'] : '::';

            if( !isset($backtrace[$i]['line']) ){
                $backtrace[$i]['line'] = 0;
            }
            if( !isset($backtrace[$i]['function']) ){
                $backtrace[$i]['function'] = 'inline';
            }
            if( !isset($backtrace[$i]['file']) ){
                $backtrace[$i]['file'] = '???';
            }

            $trace .= '#' . $i . ' - '. ( empty($backtrace[$i]['class']) ? '' : ($backtrace[$i]['class'] . $type ) ) . ( $backtrace[$i]['function']) .'() in '. $backtrace[$i]['file'] .':'.$backtrace[$i]['line'] . "\n";
        }
    }

    return $trace;
}


function pr($data, $debug = false) {
    echo '<pre style="text-align: left">';
    if ( $debug ) {
        echo debugGetBacktrace();
    }

    print_r($data);
    echo '</pre>';
}



function add2log($msg, $trace = false)
{
    $logFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'wp-content'  . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'logs'  . DIRECTORY_SEPARATOR . date('Y-m-d') . '.log';

    $fp = fopen($logFile, 'a');
    if (! $fp) {
        return;
    }

    if (is_string($msg)) {
        fwrite($fp, $msg . "\n");
    } else {
        fwrite($fp, print_r($msg, true) . "\n");
    }

    if ($trace) {
        fwrite($fp, debugGetBacktrace());
    }
    fclose($fp);
}