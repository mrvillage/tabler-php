<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTree extends Tabler\Icon {
    public static function getName(): string {
        return 'tree';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 13l-2 -2" />   <path d="M12 12l2 -2" />   <path d="M12 21v-13" />   <path d="M9.824 16a3 3 0 0 1 -2.743 -3.69a3 3 0 0 1 .304 -4.833a3 3 0 0 1 4.615 -3.707a3 3 0 0 1 4.614 3.707a3 3 0 0 1 .305 4.833a3 3 0 0 1 -2.919 3.695h-4z" />
        SVG;
    }
}