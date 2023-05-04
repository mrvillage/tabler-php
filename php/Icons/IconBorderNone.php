<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBorderNone extends \Tabler\Icon {
    public static function getName(): string {
        return 'border-none';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4l0 .01" />   <path d="M8 4l0 .01" />   <path d="M12 4l0 .01" />   <path d="M16 4l0 .01" />   <path d="M20 4l0 .01" />   <path d="M4 8l0 .01" />   <path d="M12 8l0 .01" />   <path d="M20 8l0 .01" />   <path d="M4 12l0 .01" />   <path d="M8 12l0 .01" />   <path d="M12 12l0 .01" />   <path d="M16 12l0 .01" />   <path d="M20 12l0 .01" />   <path d="M4 16l0 .01" />   <path d="M12 16l0 .01" />   <path d="M20 16l0 .01" />   <path d="M4 20l0 .01" />   <path d="M8 20l0 .01" />   <path d="M12 20l0 .01" />   <path d="M16 20l0 .01" />   <path d="M20 20l0 .01" />
        SVG;
    }
}