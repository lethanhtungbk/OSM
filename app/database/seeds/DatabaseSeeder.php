<?php

class DatabaseSeeder extends Seeder {

    public function run() {
        $this->call('SASeeder');
        $this->command->info('Database dumped!');
    }

}
