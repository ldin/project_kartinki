<?php

class TypeTableSeeder extends Seeder {

  public function run()
  {
    DB::table('types')->delete();
    DB::table('types')->insert(array(
      array( 'type' => 'page', 'name'=>'Страница', 'status'=>'0', 'template'=>'page' ),
      array( 'type' => 'works', 'name'=>'Работы', 'status'=>'1', 'template'=>'page'),
      array( 'type' => 'news', 'name'=>'Новости', 'status'=>'1', 'template'=>'page'),
      array( 'type' => 'contacts', 'name'=>'Контакты', 'status'=>'1', 'template'=>'page'),
    ));

  }

}

//заполнить базу:
//php artisan db:seed --class=TypeTableSeeder

