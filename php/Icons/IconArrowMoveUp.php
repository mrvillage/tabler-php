<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowMoveUp extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-move-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 13v-10" />   <path d="M9 6l3 -3l3 3" />   <path d="M12 17a2 2 0 1 1 0 4a2 2 0 0 1 0 -4z" />
        SVG;
    }
}