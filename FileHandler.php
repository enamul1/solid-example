<?php

class FileHandler
{
    private $parser;

    public function __construct(ParserInterface $parser)
    {
        $this->parser = $parser;
    }

    public function parse(string $data)
    {
        return $this->parser->parse($data);
    }
}