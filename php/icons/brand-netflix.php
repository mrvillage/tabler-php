<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandNetflix extends Tabler\Icon {
    public static function getName(): string {
        return 'brand-netflix';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 3l10 18h-4l-10 -18z" />   <path d="M5 3v18h4v-10.5" />   <path d="M19 21v-18h-4v10.5" />
        SVG;
    }
}