<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlaystationTriangle extends Tabler\Icon {
    public static function getName(): string {
        return 'playstation-triangle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21a9 9 0 0 0 9 -9a9 9 0 0 0 -9 -9a9 9 0 0 0 -9 9a9 9 0 0 0 9 9z" />   <path d="M7.5 15h9l-4.5 -8z" />
        SVG;
    }
}