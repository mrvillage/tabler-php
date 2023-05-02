<?php
require_once('../Icon.php');

class IconEngineOff extends Icon {
    public static function getName(): string {
        return 'engine-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 10v6" />   <path d="M12 5v3" />   <path d="M10 5h4" />   <path d="M5 13h-2" />   <path d="M16 16h-1v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6h2l.99 -.99m3.01 -1.01h1.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6" />   <path d="M3 3l18 18" />
        SVG;
    }
}