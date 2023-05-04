<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowDownTail extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-down-tail';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 6v15" />   <path d="M9 18l3 3l3 -3" />   <path d="M9 3l3 3l3 -3" />
        SVG;
    }
}