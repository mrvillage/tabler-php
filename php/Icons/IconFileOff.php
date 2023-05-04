<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFileOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'file-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3l18 18" />   <path d="M7 3h7l5 5v7m0 4a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-14" />
        SVG;
    }
}