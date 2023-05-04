<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircleChevronsDown extends Icon {
    public static function getName(): string {
        return 'circle-chevrons-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 9l-3 3l-3 -3" />   <path d="M15 13l-3 3l-3 -3" />   <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18z" />
        SVG;
    }
}