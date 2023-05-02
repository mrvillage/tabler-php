<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandGit extends Icon {
    public static function getName(): string {
        return 'brand-git';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 8m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M12 15v-6" />   <path d="M15 11l-2 -2" />   <path d="M11 7l-1.9 -1.9" />   <path d="M13.446 2.6l7.955 7.954a2.045 2.045 0 0 1 0 2.892l-7.955 7.955a2.045 2.045 0 0 1 -2.892 0l-7.955 -7.955a2.045 2.045 0 0 1 0 -2.892l7.955 -7.955a2.045 2.045 0 0 1 2.892 0z" />
        SVG;
    }
}