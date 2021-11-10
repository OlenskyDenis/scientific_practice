<?php

namespace Database\Seeders;

use App\Models\Coach;
use App\Models\Gym;
use App\Models\Schedule;
use App\Models\TrainingProgram;
use App\Models\User;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scheduleCount = (int)$this->command->ask('How many schedules would you like?', 50);
        $users = User::all();
        $gyms = Gym::all();
        $coaches = Coach::all();
        $training_programs = TrainingProgram::all();

        Schedule::factory($scheduleCount)->make()->each(function($schedule) use ($users, $gyms, $coaches, $training_programs) {
            $schedule->id_user = $users->random()->id;
            $schedule->id_gym = $gyms->random()->id;
            $schedule->id_coach = $coaches->random()->id;
            $schedule->id_training_program = $training_programs->random()->id;
            $schedule->save();
        });
    }
}
