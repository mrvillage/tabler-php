<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconKeyframeAlignHorizontal extends \Tabler\Icon {
    public static function getName(): string {
        return 'keyframe-align-horizontal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.816 16.58c-.207 .267 -.504 .42 -.816 .42c-.312 0 -.61 -.153 -.816 -.42l-2.908 -3.748a1.39 1.39 0 0 1 0 -1.664l2.908 -3.748c.207 -.267 .504 -.42 .816 -.42c.312 0 .61 .153 .816 .42l2.908 3.748a1.39 1.39 0 0 1 0 1.664l-2.908 3.748z" />   <path d="M3 12h2" />   <path d="M19 12h2" />
        SVG;
    }
}