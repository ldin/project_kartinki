<?php

class SettingTableSeeder extends Seeder {

  public function run()
  {
    DB::table('settings')->delete();

    DB::table('settings')->insert(array(
      array( 'name' => 'title', 'title'=>'title', 'value'=>'', ),
      array( 'name' => 'phone_head', 'title'=>'Телефон в шапке', 'value'=>'', ),
      array( 'name' => 'email_head', 'title'=>'email в шапке', 'value'=>'', ),
      array( 'name' => 'email', 'title'=>'email для отправки формы', 'value'=>'', ),
    ));
  }

}


//заполнить базу:
//php artisan db:seed --class=SettingTableSeeder
