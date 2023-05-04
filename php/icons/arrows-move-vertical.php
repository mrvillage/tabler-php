<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsMoveVertical extends Icon {
    public static function getName(): string {
        return 'arrows-move-vertical';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 18l3 3l3 -3" />   <path d="M12 15v6" />   <path d="M15 6l-3 -3l-3 3" />   <path d="M12 3v6" />
        SVG;
    }
}