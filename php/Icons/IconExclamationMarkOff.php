<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconExclamationMarkOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'exclamation-mark-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 19v.01" />   <path d="M12 15v-3m0 -4v-3" />   <path d="M3 3l18 18" />
        SVG;
    }
}