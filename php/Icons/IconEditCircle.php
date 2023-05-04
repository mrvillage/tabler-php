<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEditCircle extends \Tabler\Icon {
    public static function getName(): string {
        return 'edit-circle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />   <path d="M16 5l3 3" />   <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6" />
        SVG;
    }
}