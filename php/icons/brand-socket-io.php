<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandSocketIo extends Icon {
    public static function getName(): string {
        return 'brand-socket-io';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M11 11h1l3 -4z" />   <path d="M12 13h1l-4 4z" />
        SVG;
    }
}