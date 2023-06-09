<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandLoom extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-loom';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17.464 6.518a6 6 0 1 0 -3.023 7.965" />   <path d="M17.482 17.464a6 6 0 1 0 -7.965 -3.023" />   <path d="M6.54 17.482a6 6 0 1 0 3.024 -7.965" />   <path d="M6.518 6.54a6 6 0 1 0 7.965 3.024" />
        SVG;
    }
}