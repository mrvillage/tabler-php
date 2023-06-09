<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandVercel extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-vercel';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 19h18l-9 -15z" />
        SVG;
    }
}