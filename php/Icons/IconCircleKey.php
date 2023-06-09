<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircleKey extends \Tabler\Icon {
    public static function getName(): string {
        return 'circle-key';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M21 12a9 9 0 1 1 -18 0a9 9 0 0 1 18 0z" />   <path d="M12.5 11.5l-4 4l1.5 1.5" />   <path d="M12 15l-1.5 -1.5" />
        SVG;
    }
}