<?php

namespace suren;

class FileSystem_Example {

    protected $id;
    protected $directory;

    public function __construct($id) {
        $this->id = $id;
    }

    public function setDirectory($directory) {
        $this->directory = $directory . DIRECTORY_SEPARATOR . $this->id;
        echo '$this->directory='.$this->directory;
        if (!file_exists($this->directory)) {
            mkdir($this->directory, 0700, true);
        }
    }

}
