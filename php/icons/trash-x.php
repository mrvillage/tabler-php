<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTrashX extends Icon {
    public static function getName(): string {
        return 'trash-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 7h16" />   <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />   <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />   <path d="M10 12l4 4m0 -4l-4 4" />
        SVG;
    }
}