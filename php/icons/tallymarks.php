<?php
require_once(__DIR__ . '/../Icon.php');

class IconTallymarks extends Icon {
    public static function getName(): string {
        return 'tallymarks';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 5l0 14" />   <path d="M10 5l0 14" />   <path d="M14 5l0 14" />   <path d="M18 5l0 14" />   <path d="M3 17l18 -10" />
        SVG;
    }
}