<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconScriptX extends \Tabler\Icon {
    public static function getName(): string {
        return 'script-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 20h-8a3 3 0 0 1 0 -6h11a3 3 0 0 0 -3 3m7 -3v-8a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v8" />   <path d="M17 17l4 4m0 -4l-4 4" />
        SVG;
    }
}