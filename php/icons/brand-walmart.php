<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandWalmart extends Icon {
    public static function getName(): string {
        return 'brand-walmart';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 8.04v-5.04" />   <path d="M15.5 10l4.5 -2.5" />   <path d="M15.5 14l4.5 2.5" />   <path d="M12 15.96v5.04" />   <path d="M8.5 14l-4.5 2.5" />   <path d="M8.5 10l-4.5 -2.505" />
        SVG;
    }
}