<?php

class Windows7To10Adapter implements Windows10File {
    private $windows7File;

    public function __construct(Windows7File $windows7File) {
        $this->windows7File = $windows7File;
    }

    public function open() {
        return $this->windows7File->openInWindows7() . " (adaptado para Windows 10)";
    }
}
?>