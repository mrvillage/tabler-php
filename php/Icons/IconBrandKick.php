<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandKick extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-kick';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4h5v4h3v-2h2v-2h6v4h-2v2h-2v4h2v2h2v4h-6v-2h-2v-2h-3v4h-5z" />
        SVG;
    }
}