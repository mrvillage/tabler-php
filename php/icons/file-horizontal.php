<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFileHorizontal extends \Tabler\Icon {
    public static function getName(): string {
        return 'file-horizontal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 5v4a1 1 0 0 0 1 1h4" />   <path d="M3 7v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2 -2v-7l-5 -5h-11a2 2 0 0 0 -2 2z" />
        SVG;
    }
}