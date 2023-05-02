<?php
require_once('../Icon.php');

class IconPills extends Icon {
    public static function getName(): string {
        return 'pills';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" />   <path d="M17 17m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M4.5 4.5l7 7" />   <path d="M19.5 14.5l-5 5" />
        SVG;
    }
}