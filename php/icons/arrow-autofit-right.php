<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowAutofitRight extends Icon {
    public static function getName(): string {
        return 'arrow-autofit-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 12v-6a2 2 0 0 0 -2 -2h-12a2 2 0 0 0 -2 2v8" />   <path d="M4 18h17" />   <path d="M18 15l3 3l-3 3" />
        SVG;
    }
}