<?php

class SASeeder extends Seeder {

    protected static $prefix = 'sa__';

    /**
     * Run the migrations.
     *
     * @return void
     */
    private static function add_prefix($table) {
        return self::$prefix . $table;
    }

    public function run() {
        //drop all recordsets
        DB::table(self::add_prefix('field_types'))->delete();
        DB::table(self::add_prefix('fields'))->delete();
        DB::table(self::add_prefix('field_values'))->delete();
        DB::table(self::add_prefix('groups'))->delete();
        DB::table(self::add_prefix('group_fields'))->delete();
        DB::table(self::add_prefix('group_rules'))->delete();
        DB::table(self::add_prefix('objects'))->delete();
        DB::table(self::add_prefix('object_property_values'))->delete();

        //field_types
        DB::table(self::add_prefix('field_types'))->insert(
                array(
                    array('id' => 1, 'name' => 'Text Field', 'uic' => 'textfield','is_multi_option' => 0),
                    array('id' => 2, 'name' => 'Text Area', 'uic' => 'textarea','is_multi_option' => 0),
                    array('id' => 3, 'name' => 'Dropdownbox', 'uic' => 'dropdown','is_multi_option' => 1),
                    array('id' => 4, 'name' => 'Listbox', 'uic' => 'list','is_multi_option' => 1),
                    array('id' => 5, 'name' => 'Checkbox', 'uic' => 'checkbox','is_multi_option' => 1),
                    array('id' => 6, 'name' => 'Radiobox', 'uic' => 'radio','is_multi_option' => 1),
                    array('id' => 7, 'name' => 'DatePicker', 'uic' => 'date','is_multi_option' => 0),
                    array('id' => 8, 'name' => 'Image', 'uic' => 'image','is_multi_option' => 0),
                )
        );

        //fields
        DB::table(self::add_prefix('fields'))->insert(
                array(
                    array('id' => 1, 'name' => 'Country', 'code' => 'sa_country', 'field_type_id' => '3'),
                    array('id' => 2, 'name' => 'State', 'code' => 'sa_state', 'field_type_id' => '3'),
                    array('id' => 3, 'name' => 'Rank', 'code' => 'sa_rank', 'field_type_id' => '1'),
                    array('id' => 4, 'name' => 'Collage Type', 'code' => 'sa_collage_type', 'field_type_id' => '3'),
                    array('id' => 5, 'name' => 'Programe Type', 'code' => 'sa_program_type', 'field_type_id' => '3'),
                    array('id' => 6, 'name' => 'Discipline', 'code' => 'sa_discipline', 'field_type_id' => '3'),
                    array('id' => 7, 'name' => 'Size', 'code' => 'sa_size', 'field_type_id' => '3'),
                    array('id' => 8, 'name' => 'Collage House Type', 'code' => 'sa_collage_house_type', 'field_type_id' => '3'),
                )
        );

        //field_value
        DB::table(self::add_prefix('field_values'))->insert(
                array(
                    array('field_id' => 1, 'value' => 'United State'),
                    array('field_id' => 1, 'value' => 'United Kindom'),
                    array('field_id' => 1, 'value' => 'France'),
                    array('field_id' => 1, 'value' => 'Germany'),
                    array('field_id' => 2, 'value' => 'California'),
                    array('field_id' => 2, 'value' => 'Corondo'),
                    array('field_id' => 2, 'value' => 'Columbia'),
                    array('field_id' => 3, 'value' => ''),
                    array('field_id' => 4, 'value' => 'Public'),
                    array('field_id' => 4, 'value' => 'Private'),
                    array('field_id' => 5, 'value' => 'ETS'),
                    array('field_id' => 5, 'value' => 'University'),
                    array('field_id' => 5, 'value' => 'Collage'),
                    array('field_id' => 5, 'value' => 'Collage'),
                    array('field_id' => 6, 'value' => 'IT'),
                    array('field_id' => 6, 'value' => 'Math'),
                    array('field_id' => 6, 'value' => 'MBA'),
                    array('field_id' => 7, 'value' => '<500'),
                    array('field_id' => 7, 'value' => '500 - 3000'),
                    array('field_id' => 7, 'value' => '3000 - 10000'),
                    array('field_id' => 7, 'value' => '>10000'),
                    array('field_id' => 8, 'value' => 'Dorm'),
                    array('field_id' => 8, 'value' => 'Family House'),
                    array('field_id' => 8, 'value' => 'No House'),
                )
        );

        //group
        DB::table(self::add_prefix('groups'))->insert(
                array(
                    array('id' => 1, 'name' => 'Collage Properties'),
                )
        );


        //group_fields
        DB::table(self::add_prefix('group_fields'))->insert(
                array(
                    array('group_id' => 1, 'field_id' => '1'),
                    array('group_id' => 1, 'field_id' => '2'),
                    array('group_id' => 1, 'field_id' => '3'),
                    array('group_id' => 1, 'field_id' => '4'),
                    array('group_id' => 1, 'field_id' => '5'),
                    array('group_id' => 1, 'field_id' => '6'),
                    array('group_id' => 1, 'field_id' => '7'),
                    array('group_id' => 1, 'field_id' => '8'),
                )
        );

        //objects
        DB::table(self::add_prefix('objects'))->insert(
                array(
                    array('group_id' => 1, 'name' => 'Havard University'),
                    array('group_id' => 1, 'name' => 'Oxford University'),
                    array('group_id' => 1, 'name' => 'Columbia University'),
                )
        );
        
        DB::table(self::add_prefix('object_property_values'))->insert(
                array(
                    //Havard
                    array('object_id' => 1, 'field_id' => '1' , 'value' => '1'),
                    array('object_id' => 1, 'field_id' => '2' , 'value' => '1'),
                    array('object_id' => 1, 'field_id' => '3' , 'value' => '200'),
                    array('object_id' => 1, 'field_id' => '4' , 'value' => '1'),
                    array('object_id' => 1, 'field_id' => '5' , 'value' => '1'),
                    array('object_id' => 1, 'field_id' => '6' , 'value' => '1'),
                    array('object_id' => 1, 'field_id' => '6' , 'value' => '2'),
                    array('object_id' => 1, 'field_id' => '6' , 'value' => '3'),
                    array('object_id' => 1, 'field_id' => '7' , 'value' => '3'),
                    array('object_id' => 1, 'field_id' => '8' , 'value' => '1'),
                )
        );
        
        DB::table(self::add_prefix('group_rules'))->insert(
                array(
                    array('group_id' => 1,'name' => 'Collage properties rules in backend', 'field_order_in_list' => '1' , 'field_order_in_detail' => '2','field_order_in_filter' => '3'),
                )
        );
    }

}
