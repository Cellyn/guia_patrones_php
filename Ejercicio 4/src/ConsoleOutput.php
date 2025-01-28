<?php
namespace Src;

class ConsoleOutput implements OutputStrategy {
    public function show($message) {
        return "Consola: " . $message;
    }
}
?>