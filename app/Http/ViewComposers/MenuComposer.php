<?php
namespace App\Http\ViewComposers;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MenuComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $menus;

    /**
     * Create a new menu composer.
     *
     * @param  UserRepository  $menus
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $menus = DB::table('menus')->orderBy('menu_order')->get();
        $this->menus = $menus;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menus', $this->menus);
    }
}
