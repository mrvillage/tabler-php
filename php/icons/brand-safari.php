<?php
require_once('../Icon.php');

class IconBrandSafari extends Icon {
    public static function getName(): string {
        return 'brand-safari';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 16l2 -6l6 -2l-2 6l-6 2" />   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
        SVG;
    }
}