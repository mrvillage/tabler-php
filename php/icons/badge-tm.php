<?php
require_once('../Icon.php');

class IconBadgeTm extends Icon {
    public static function getName(): string {
        return 'badge-tm';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M6 9h4" />   <path d="M8 9v6" />   <path d="M13 15v-6l2 3l2 -3v6" />
        SVG;
    }
}