<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlaneDeparture extends \Tabler\Icon {
    public static function getName(): string {
        return 'plane-departure';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14.639 10.258l4.83 -1.294a2 2 0 1 1 1.035 3.863l-14.489 3.883l-4.45 -5.02l2.897 -.776l2.45 1.414l2.897 -.776l-3.743 -6.244l2.898 -.777l5.675 5.727z" />   <path d="M3 21h18" />
        SVG;
    }
}