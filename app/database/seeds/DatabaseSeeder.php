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
            $this->call('EmployerTableSeeder');
            $this->call('RegionTableSeeder');
            $this->call('JobTypeTableSeeder');

            $this->command->info('All tables has been seeded');
	}
}

class ApplicantTableSeeder extends Seeder {
    public function run() {
        $app = new Applicants();
        $app->email = 'rexustraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Lourence';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'lourence@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rex';
        $app->lname = 'Bohol';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_a';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_b';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_c';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_d';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_e';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_f';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_g';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_h';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_i';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_j';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_k';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_m';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_l';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_m';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_n';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_o';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_p';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_q';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_r';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_s';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_t';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_u';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_v';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_w';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_x';
        $app->lname = 'Traya';

        $app->save();

        $app = new Applicants();
        $app->email = 'rextraya@gmail.com';
        $app->password = 'hahahehe';
        $app->fname = 'Rexus_y';
        $app->lname = 'Traya';

        $app->save();
    }
}
class EmployerTableSeeder extends Seeder {
    public function run() {
        $emp = new Employers();
        $emp->email = 'rex@outlook.com';
        $emp->password = 'hahahehe';
        $emp->fname = 'Rexus';
        $emp->lname = 'Muana';

        $emp->save();
        
        $emp = new Employers();
        $emp->email = 'ruseltayong@gmail.com';
        $emp->password = 'hahahehe';
        $emp->fname = 'Rusel';
        $emp->lname = 'Tayong';
        
        
        $emp->save();

        $emp = new Employers();
        $emp->email = 'mark.com';
        $emp->password = 'hahahehe';
        $emp->fname = 'Mark';
        $emp->lname = 'Mamogay';

        $emp->save();
    }
}

class RegionTableSeeder extends Seeder {
    public function run() {
        $regions = new Regions();
        $regions->location = 'Cebu City';
        $regions->save();

        $regions = new Regions();
        $regions->location = 'Davao city';
        $regions->save();

        $regions = new Regions();
        $regions->location = 'Zaboanga Del Sur';
        $regions->save();

        $regions = new Regions();
        $regions->location = 'Zamboanga Del Norte';
        $regions->save();


        $regions = new Regions();
        $regions->location = 'Mandaue City';
        $regions->save();

        $regions = new Regions();
        $regions->location = 'Danao City';
        $regions->save();

        $regions = new Regions();
        $regions->location = 'Consocalcion City';
        $regions->save();

        $regions = new Regions();
        $regions->location = 'Lilion City';
        $regions->save();

        $regions = new Regions();
        $regions->location = 'Talisay City';
        $regions->save();

        $regions = new Regions();
        $regions->location = 'Lapu-Lapu City';
        $regions->save();
    }
}

class JobTypeTableSeeder extends Seeder {
    public function run() {
        $type = new JobTypes();
        $type->description = 'Nanny';
        $type->save();

        $type = new JobTypes();
        $type->description = 'Baby Sitter';
        $type->save();

        $type = new JobTypes();
        $type->description = 'Adult Sitter';
        $type->save();

        $type = new JobTypes();
        $type->description = 'Nanny';
        $type->save();

        $type = new JobTypes();
        $type->description = 'Pet Sitter';
        $type->save();

        $type = new JobTypes();
        $type->description = 'AU Pair';
        $type->save();

        $type = new JobTypes();
        $type->description = 'Tutor';
        $type->save();

        $type = new JobTypes();
        $type->description = 'All Around';
        $type->save();
    }
}