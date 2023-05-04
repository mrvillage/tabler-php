<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconForbid2 extends Tabler\Icon {
    public static function getName(): string {
        return 'forbid-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M9 15l6 -6" />
        SVG;
    }
}