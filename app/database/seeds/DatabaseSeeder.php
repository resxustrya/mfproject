<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ApplicantTableSeeder');
                $this->call('AdminTableSeeder');
                $this->call('EmployerTableSeeder');
                
                $this->command->info('All tables has been seeded');
	}
}

class ApplicantTableSeeder extends Seeder {
    public function run() {
        $app = new Applicants();
        $app->email = 'rexustraya@gmail.com';
        $app->password = 'traya';
        $app->fname = 'Lourence';
        $app->lname = 'Traya';
       
        
        $app->save();
        
        $app = new Applicants();
        $app->email = 'lourence@gmail.com';
        $app->password = 'rexustraya';
        $app->fname = 'Rex';
        $app->lname = 'Bohol';
        
        
        $app->save();
    }
}
class EmployerTableSeeder extends Seeder {
    public function run() {
        $emp = new Employers();
        $emp->email = 'rex@outlook.com';
        $emp->password = 'lourence';
        $emp->fname = 'Rexus';
        $emp->lname = 'Muana';
     
        
        $emp->save();
        
        $emp = new Employers();
        $emp->email = 'rexustraya@outlook.com';
        $emp->password = 'traya';
        $emp->fname = 'Rusel';
        $emp->lname = 'Tayong';
        
        
        $emp->save();
    }
}

class AdminTableSeeder extends Seeder {
    
    public function run() {
        $admin = new Admins();
        $admin->email = 'admin@gmail.com';
        $admin->password = 'admin';
        $admin->fullname = 'Administraion';
        $admin->contactno = '09226663075';
        $admin->save();
    }
}
