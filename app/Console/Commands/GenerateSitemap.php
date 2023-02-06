<?php

namespace App\Console\Commands;

use App\Models\Listing;
use Illuminate\Console\Command;
use PharIo\Manifest\Url as ManifestUrl;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Generate an XML Sitemap';
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $postsitmap = Sitemap::create();
        Listing::get()->each(function (Listing $post) use ($postsitmap) {
            $postsitmap->add(
                Url::create("/listing/{$post->id}")
                    ->setPriority(0.9)
                    // ->setChangeFrequency(ManifestUrl::monthly)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            );
        });
        $postsitmap->writeToFile(public_path('sitemap.xml'));
    }
}
