<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Item;
use App\Models\ItemCategory;
use Illuminate\Console\Command;
use Illuminate\Routing\Events\Routing;
use Illuminate\Routing\RouteAction;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Symfony\Component\Routing\Route;

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
        $itemsandblog=array();

        Item::get()->each(function (Item $post) use ($postsitmap) {

            $postsitmap->add(
                Url::create("/item/{$post->slug}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );

        });

        Blog::get()->each(function (Blog $post) use ($postsitmap) {

            $postsitmap->add(
                Url::create("/blog/{$post->slug}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );

        });



        BlogCategory::get()->each(function (BlogCategory $post) use ($postsitmap) {

            $postsitmap->add(
                Url::create("/blogcategory/{$post->id}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );

        });


        ItemCategory::get()->each(function (ItemCategory $post) use ($postsitmap) {

            $postsitmap->add(
                Url::create("/category/{$post->id}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );

        });



        $postsitmap->add(
            Url::create("/blog")
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );


        $postsitmap->add(
            Url::create("/about")
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );

        $postsitmap->add(
            Url::create("/contact")
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );
    $postsitmap->add(
            Url::create("/faq")
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );
    $postsitmap->add(
            Url::create("/category")
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );
    $postsitmap->add(
            Url::create("/blogcategory")
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );
    $postsitmap->add(
            Url::create("/register")
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );

   $postsitmap->add(
            Url::create("/unlisted")
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );



        $postsitmap->writeToFile(public_path('sitemap.xml'));

        foreach (Item::all() as $item){
            $itemsandblog[]= env('app_url').'/item/'.$item->slug;
        }

        foreach (Blog::all() as $item){
            $itemsandblog[]= env('app_url').'/blog/'.$item->slug;
        }



        $fp = fopen(public_path('sitemap.txt'), 'w');

      foreach ($itemsandblog as $line){
          fwrite($fp, print_r($line, TRUE));
          fwrite($fp,"\n");
      }


      fwrite($fp,env('app_url')."/about \n");
      fwrite($fp,env('app_url').'/register'."\n");
      fwrite($fp,env('app_url').'/login'."\n");
      fwrite($fp,env('app_url').'/home'."\n");
      fwrite($fp,env('app_url').'/contact'."\n");
      fwrite($fp,env('app_url').'/faq'."\n");
      fwrite($fp,env('app_url').'/search'."\n");
      fwrite($fp,env('app_url').'/blog'."\n");
      fwrite($fp,env('app_url').'/blogcategory'."\n");
      fwrite($fp,env('app_url').'/shop'."\n");
      fwrite($fp,env('app_url').'/category'."\n");
      fwrite($fp,env('app_url').'/unlisted'."\n");
     fclose($fp);
    }
}
