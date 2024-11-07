<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name : Nama view yang ingin dibuat}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membuat file view baru di folder resources/views';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $path = resource_path("views/{$name}.blade.php");

        if (File::exists($path)) {
            $this->error("View {$name} sudah ada!");
            return 1;
        }

        File::put($path, "<!-- View {$name} -->");
        $this->info("View {$name} berhasil dibuat!");
        return 0;
    }
}
