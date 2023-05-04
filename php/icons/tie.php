<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTie extends Tabler\Icon {
    public static function getName(): string {
        return 'tie';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 22l4 -4l-2.5 -11l.993 -2.649a1 1 0 0 0 -.936 -1.351h-3.114a1 1 0 0 0 -.936 1.351l.993 2.649l-2.5 11l4 4z" />   <path d="M10.5 7h3l5 5.5" />
        SVG;
    }
}