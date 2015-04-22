<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
                    $table->increments('id');
                    $table->string('nombre');
                    $table->string('correo');
                    $table->string('password');
                    $table->timestamps();
                    $table->rememberToken();
		});
                
                Schema::create('publicacion', function(Blueprint $table)
		{
                    $table->increments('id');
                    $table->timestamps();
                    $table->text('publicacion');
                    $table->boolean('tipo');
                    $table->integer('id_usuario')->unsigned();
                    $table->foreign('id_usuario')->references('id')->on('usuario');
                    $table->integer('padre')->unsigned()->nullable();
                    $table->foreign('padre')->references('id')->on('publicacion');
		});   
                
                Schema::create('me_gusta', function(Blueprint $table)
		{
                    $table->increments('id');
                    $table->integer('id_pub')->unsigned();
                    $table->foreign('id_pub')->references('id')->on('publicacion');
                    $table->integer('id_usuario')->unsigned();
                    $table->foreign('id_usuario')->references('id')->on('usuario');
                    $table->timestamps();
		});
                
                DB::table('usuario')
                    ->insert([
                        'nombre' => 'Sebastián',
                        'correo' => 'sebasspicke@gmail.com',
                        'password' => Hash::make('1234')
                    ]);            
	}

	public function down()
	{
		Schema::drop('me_gusta');
		Schema::drop('publicacion');
		Schema::drop('usuario');
	}

}
