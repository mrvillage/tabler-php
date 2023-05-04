<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconApiOff extends Icon {
    public static function getName(): string {
        return 'api-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 13h5" />   <path d="M12 16v-4m0 -4h3a2 2 0 0 1 2 2v1c0 .554 -.225 1.055 -.589 1.417m-3.411 .583h-1" />   <path d="M20 8v8" />   <path d="M9 16v-5.5a2.5 2.5 0 0 0 -5 0v5.5" />   <path d="M3 3l18 18" />
        SVG;
    }
}