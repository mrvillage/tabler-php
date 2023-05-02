<?php
require_once('../Icon.php');

class IconBrightness extends Icon {
    public static function getName(): string {
        return 'brightness';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 3l0 18" />   <path d="M12 9l4.65 -4.65" />   <path d="M12 14.3l7.37 -7.37" />   <path d="M12 19.6l8.85 -8.85" />
        SVG;
    }
}