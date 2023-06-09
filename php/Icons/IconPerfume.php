<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPerfume extends \Tabler\Icon {
    public static function getName(): string {
        return 'perfume';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 6v3" />   <path d="M14 6v3" />   <path d="M5 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />   <path d="M12 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M9 3h6v3h-6z" />
        SVG;
    }
}