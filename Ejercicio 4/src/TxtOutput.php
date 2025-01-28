<?php
namespace Src;

class TxtOutput implements OutputStrategy {
    public function show($message) {
        return "Archivo TXT: " . $message;
    }
}
?>