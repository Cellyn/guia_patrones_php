<?php
namespace Src;

class JsonOutput implements OutputStrategy {
    public function show($message) {
        return json_encode(['message' => $message]);
    }
}
?>