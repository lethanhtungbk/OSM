<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration {

    protected static $prefix = 'sa__';

    /**
     * Run the migrations.
     *
     * @return void
     */
    private static function add_prefix($table) {
        return self::$prefix . $table;
    }

    public function up() {
        
        $this->down();
        //field_types
        Schema::create(self::add_prefix('field_types'), function($table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('uic',100);
            $table->tinyInteger('is_multi_option')->default(0);
        });


        //fields
        Schema::create(self::add_prefix('fields'), function($table) {
            $table->increments('id');
            $table->integer('field_type_id');
            $table->string('name');
            $table->string('code');
        });

        //field_values
        Schema::create(self::add_prefix('field_values'), function($table) {
            $table->increments('id');
            $table->integer('field_id');
            $table->string('value', 100);
            $table->integer('position');
        });

        //groups        
        Schema::create(self::add_prefix('groups'), function($table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('tag', 255);
        });


        //group_fields        
        Schema::create(self::add_prefix('group_fields'), function($table) {
            $table->increments('id');
            $table->integer('group_id');
            $table->integer('field_id');
        });

        //group_rules
        Schema::create(self::add_prefix('group_rules'), function($table) {
            $table->increments('id');
            $table->integer('group_id');
            $table->string('name');
            $table->string('field_order_in_list');
            $table->string('field_order_in_detail');
            $table->string('field_order_in_filter');
        });
        
        //objects
        Schema::create(self::add_prefix('objects'), function($table) {
            $table->increments('id');
            $table->integer('group_id');
            $table->string('name');
        });
        
        //object_property_values
        Schema::create(self::add_prefix('object_property_values'), function($table) {
            $table->increments('id');
            $table->integer('object_id');
            $table->integer('field_id');
            $table->string('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists(self::add_prefix('field_types'));
        Schema::dropIfExists(self::add_prefix('fields'));
        Schema::dropIfExists(self::add_prefix('field_values'));
        Schema::dropIfExists(self::add_prefix('groups'));
        Schema::dropIfExists(self::add_prefix('group_fields'));
        Schema::dropIfExists(self::add_prefix('group_rules'));
        Schema::dropIfExists(self::add_prefix('objects'));
        Schema::dropIfExists(self::add_prefix('object_property_values'));
    }

}
