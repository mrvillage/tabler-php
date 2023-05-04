<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCrown extends Tabler\Icon {
    public static function getName(): string {
        return 'crown';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z" />
        SVG;
    }
}