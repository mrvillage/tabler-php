<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBracketsContain extends Icon {
    public static function getName(): string {
        return 'brackets-contain';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 4h-4v16h4" />   <path d="M17 4h4v16h-4" />   <path d="M8 16h.01" />   <path d="M12 16h.01" />   <path d="M16 16h.01" />
        SVG;
    }
}