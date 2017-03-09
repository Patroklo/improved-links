<?php
namespace Patroklo\ImprovedLinks\Providers;

use Illuminate\Support\ServiceProvider;


/**
 * Class ImprovedLinksProvider
 *
 * Provider that will load all the necessary data.
 *
 * @author Joseba Juániz <joseba.juaniz@gmail.com>
 */
class ImprovedLinksProvider extends ServiceProvider
{


    public function boot()
    {
        \Html::component('methodLink', 'patroklo.links.data', [
            'method' => 'POST', 'url', 'title' => null, 'attributes' => [], 'secure' => null, 'escape' => true
        ]);

        $this->publishes([
            __DIR__ . '/../Assets/js' => public_path('assets/js'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/../Views' => resource_path('views/patroklo/links'),
        ]);
    }
}