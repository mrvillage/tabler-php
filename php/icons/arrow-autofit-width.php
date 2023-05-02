<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowAutofitWidth extends Icon {
    public static function getName(): string {
        return 'arrow-autofit-width';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v6" />   <path d="M10 18h-7" />   <path d="M21 18h-7" />   <path d="M6 15l-3 3l3 3" />   <path d="M18 15l3 3l-3 3" />
        SVG;
    }
}