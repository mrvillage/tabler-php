<?php
require_once('../Icon.php');

class IconBrandMercedes extends Icon {
    public static function getName(): string {
        return 'brand-mercedes';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 3v9" />   <path d="M12 12l7 5" />   <path d="M12 12l-7 5" />
        SVG;
    }
}