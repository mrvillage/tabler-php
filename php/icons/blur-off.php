<?php
require_once('../Icon.php');

class IconBlurOff extends Icon {
    public static function getName(): string {
        return 'blur-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3v5m0 4v8" />   <path d="M5.641 5.631a9 9 0 1 0 12.719 12.738m1.68 -2.318a9 9 0 0 0 -12.074 -12.098" />   <path d="M16 12h5" />   <path d="M13 9h7" />   <path d="M12 6h6" />   <path d="M12 18h6" />   <path d="M12 15h3m4 0h1" />   <path d="M3 3l18 18" />
        SVG;
    }
}