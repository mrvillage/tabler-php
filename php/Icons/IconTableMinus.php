<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTableMinus extends \Tabler\Icon {
    public static function getName(): string {
        return 'table-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 21h-7.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10" />   <path d="M3 10h18" />   <path d="M10 3v18" />   <path d="M16 19h6" />
        SVG;
    }
}