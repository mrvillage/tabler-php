<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCirclePlus extends \Tabler\Icon {
    public static function getName(): string {
        return 'circle-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M9 12l6 0" />   <path d="M12 9l0 6" />
        SVG;
    }
}