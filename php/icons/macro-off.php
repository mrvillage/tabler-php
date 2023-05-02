<?php
require_once(__DIR__ . '../Icon.php');

class IconMacroOff extends Icon {
    public static function getName(): string {
        return 'macro-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 15a6 6 0 0 0 11.47 2.467" />   <path d="M15.53 15.53a6 6 0 0 0 -3.53 5.47" />   <path d="M12 21a6 6 0 0 0 -6 -6" />   <path d="M12 21v-10" />   <path d="M10.866 10.87a5.007 5.007 0 0 1 -3.734 -3.723m-.132 -4.147l3 2l2 -2l2 2l3 -2v3a5 5 0 0 1 -2.604 4.389" />   <path d="M3 3l18 18" />
        SVG;
    }
}