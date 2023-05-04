<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowUpSquare extends Icon {
    public static function getName(): string {
        return 'arrow-up-square';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 17l0 -14" />   <path d="M15 6l-3 -3l-3 3" />   <path d="M10 21v-4h4v4z" />
        SVG;
    }
}