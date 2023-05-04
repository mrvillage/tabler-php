<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowUpBar extends Icon {
    public static function getName(): string {
        return 'arrow-up-bar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21l0 -18" />   <path d="M15 6l-3 -3l-3 3" />   <path d="M9 21l6 0" />
        SVG;
    }
}