<?php
require_once('../Icon.php');

class IconBrandDcos extends Icon {
    public static function getName(): string {
        return 'brand-dcos';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 18l18 -12h-18l9 14l9 -14v10l-18 -10z" />
        SVG;
    }
}