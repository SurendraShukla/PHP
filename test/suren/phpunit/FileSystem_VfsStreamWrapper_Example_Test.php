<?php

namespace test\suren;

use PHPUnit\Framework\TestCase;

class FileSystem_VfsStreamWrapper_Example_Test extends TestCase{

    public function setUp() {
        vfsStreamWrapper::register();
        vfsStreamWrapper::setRoot(new vfsStreamDirectory('exampleDir'));
    }

    public function testDirectoryIsCreated() {
        $example = new Demo_FileSystem('id');
        $this->assertFalse(vfsStreamWrapper::getRoot()->hasChild('id'));

        $example->setDirectory(vfsStream::url('exampleDir'));
        $this->assertTrue(vfsStreamWrapper::getRoot()->hasChild('id'));
    }

}
