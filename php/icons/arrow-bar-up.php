<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBarUp extends Icon {
    public static function getName(): string {
        return 'arrow-bar-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 4l0 10" />   <path d="M12 4l4 4" />   <path d="M12 4l-4 4" />   <path d="M4 20l16 0" />
        SVG;
    }
}