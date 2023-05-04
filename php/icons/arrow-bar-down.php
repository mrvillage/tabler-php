<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBarDown extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-bar-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 20l0 -10" />   <path d="M12 20l4 -4" />   <path d="M12 20l-4 -4" />   <path d="M4 4l16 0" />
        SVG;
    }
}