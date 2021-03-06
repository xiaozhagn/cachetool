<?php

namespace CacheTool\Command;

class ApcuKeyFetchCommandTest extends CommandTest
{
    public function testCommand()
    {
        $this->assertHasApcu();

        $result = $this->runCommand('apcu:key:fetch key -v');
        $this->assertStringContainsString('apcu_fetch("key", {})', $result);
    }
}
