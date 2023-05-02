<?php
require_once('../Icon.php');

class IconArrowAutofitLeft extends Icon {
    public static function getName(): string {
        return 'arrow-autofit-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v8" />   <path d="M20 18h-17" />   <path d="M6 15l-3 3l3 3" />
        SVG;
    }
}