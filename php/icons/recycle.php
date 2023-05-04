<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRecycle extends Icon {
    public static function getName(): string {
        return 'recycle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 17l-2 2l2 2" />   <path d="M10 19h9a2 2 0 0 0 1.75 -2.75l-.55 -1" />   <path d="M8.536 11l-.732 -2.732l-2.732 .732" />   <path d="M7.804 8.268l-4.5 7.794a2 2 0 0 0 1.506 2.89l1.141 .024" />   <path d="M15.464 11l2.732 .732l.732 -2.732" />   <path d="M18.196 11.732l-4.5 -7.794a2 2 0 0 0 -3.256 -.14l-.591 .976" />
        SVG;
    }
}