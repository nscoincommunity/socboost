<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

use App\Repositories\SettingRepository;

class SettingComposer
{

  private $settings;


  public function __construct() {

    $this->settings = collect();

    $set_data = new SettingRepository;
    $this->settings = $set_data->getCacheSetting();
  }


  public function compose(View $view) {
    $view->with([
      'settings' => $this->settings,
    ]);
  }

}
