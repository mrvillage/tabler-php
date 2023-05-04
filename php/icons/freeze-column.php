<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFreezeColumn extends Icon {
    public static function getName(): string {
        return 'freeze-column';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 9.5l-6 6" />   <path d="M9 4l-6 6" />   <path d="M9 15l-5 5" />   <path d="M9 3v18" />   <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
        SVG;
    }
}