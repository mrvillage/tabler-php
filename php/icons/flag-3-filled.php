<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFlag3Filled extends Icon {
    public static function getName(): string {
        return 'flag-3-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 4c.852 0 1.297 .986 .783 1.623l-.076 .084l-3.792 3.793l3.792 3.793c.603 .602 .22 1.614 -.593 1.701l-.114 .006h-13v6a1 1 0 0 1 -.883 .993l-.117 .007a1 1 0 0 1 -.993 -.883l-.007 -.117v-16a1 1 0 0 1 .883 -.993l.117 -.007h14z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}