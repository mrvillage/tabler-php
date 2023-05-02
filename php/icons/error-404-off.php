<?php
require_once('../Icon.php');

class IconError404Off extends Icon {
    public static function getName(): string {
        return 'error-404-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 7v4a1 1 0 0 0 1 1h3" />   <path d="M7 7v10" />   <path d="M10 10v6a1 1 0 0 0 1 1h2a1 1 0 0 0 1 -1v-2m0 -4v-2a1 1 0 0 0 -1 -1h-2" />   <path d="M17 7v4a1 1 0 0 0 1 1h3" />   <path d="M21 7v10" />   <path d="M3 3l18 18" />
        SVG;
    }
}