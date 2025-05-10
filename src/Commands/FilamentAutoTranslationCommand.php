<?php

namespace Deonoize\FilamentAutoTranslation\Commands;

use Illuminate\Console\Command;

class FilamentAutoTranslationCommand extends Command
{
    public $signature = 'filament-auto-translation';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
