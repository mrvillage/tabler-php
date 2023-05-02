<?php
require_once('../Icon.php');

class IconMist extends Icon {
    public static function getName(): string {
        return 'mist';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5h3m4 0h9" />   <path d="M3 10h11m4 0h1" />   <path d="M5 15h5m4 0h7" />   <path d="M3 20h9m4 0h3" />
        SVG;
    }
}