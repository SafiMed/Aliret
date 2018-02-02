<?php

use Illuminate\Database\Seeder;

class HeirsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//delete heirs table
        DB::table('heirs')->delete();

        //insert heirs
        DB::table('heirs')->insert(array(
            array('heir'=>'Sons','qualification'=>'Adopted son, step-son, or illegitimate son is not eligible.'),
            array('heir'=>'Daughters','qualification'=>'Adopted daughter, step-daughter, or illegitimate daughter is not eligible.'),
            array('heir'=>'Father','qualification'=>'Illegitimate father, or step-father is not eligible.'),
            array('heir'=>'Mother','qualification'=>'Illegitimate mother, or step-mother is not eligible.'),
            array('heir'=>'Brothers','qualification'=>'Brothers who share the same father and the mother with the deceased.'),
            array('heir'=>'Sisters','qualification'=>'Sisters who share the same father and the mother with the deceased.'),
            array('heir'=>'Wives','qualification'=>'Multiple wives are eligible. Secret or undocumented marriages are not eligible. A divorced wife is eligible if iddah period has not yet completed.'),
            array('heir'=>'Husband','qualification'=>'Must be legally married. Secret or undocumented marriages are not eligible.'),
        ));
    }
}
