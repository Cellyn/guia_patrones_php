<?php
namespace Src;

class MessageDisplay {
    private $outputStrategy;

    public function __construct(OutputStrategy $outputStrategy) {
        $this->outputStrategy = $outputStrategy;
    }

    public function display($message) {
        return $this->outputStrategy->show($message);
    }
}
?>