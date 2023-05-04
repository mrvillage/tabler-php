<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandVue extends Tabler\Icon {
    public static function getName(): string {
        return 'brand-vue';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16.5 4l-4.5 8l-4.5 -8" />   <path d="M3 4l9 16l9 -16" />
        SVG;
    }
}