<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconExchangeOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'exchange-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 8v5c0 .594 -.104 1.164 -.294 1.692m-1.692 2.298a4.978 4.978 0 0 1 -3.014 1.01h-3l3 -3" />   <path d="M14 21l-3 -3" />   <path d="M5 16v-5c0 -1.632 .782 -3.082 1.992 -4m3.008 -1h3l-3 -3" />   <path d="M11.501 7.499l1.499 -1.499" />   <path d="M3 3l18 18" />
        SVG;
    }
}