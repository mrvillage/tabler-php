<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAdCircle extends \Tabler\Icon {
    public static function getName(): string {
        return 'ad-circle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-10 0a10 10 0 1 0 20 0a10 10 0 1 0 -20 0" />   <path d="M7 15v-4.5a1.5 1.5 0 0 1 3 0v4.5" />   <path d="M7 13h3" />   <path d="M14 9v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
        SVG;
    }
}