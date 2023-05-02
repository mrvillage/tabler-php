<?php
require_once('../Icon.php');

class IconBlur extends Icon {
    public static function getName(): string {
        return 'blur';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21a9.01 9.01 0 0 0 2.32 -.302a9 9 0 0 0 1.74 -16.733a9 9 0 1 0 -4.06 17.035z" />   <path d="M12 3v17" />   <path d="M12 12h9" />   <path d="M12 9h8" />   <path d="M12 6h6" />   <path d="M12 18h6" />   <path d="M12 15h8" />
        SVG;
    }
}