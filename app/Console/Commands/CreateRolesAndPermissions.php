<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Role;
use App\Permission;

class CreateRolesAndPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rolesandpermissions:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates roles and permissions.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Create the admin role.
        $admin = Role::where('name', '=', 'admin')->first();
        if (!$admin) {
            $admin = new Role();
            $admin->name = 'admin';
            $admin->display_name = 'Administrator';
            $admin->description = 'User is allowed to manage and edit other users, create concerts and anything else.'; // optional
            $admin->save();
        }

        // Create the patient role.
        $patient = Role::where('name', '=', 'patient')->first();
        if (!$patient) {
            $patient = new Role();
            $patient->name = 'patient';
            $patient->display_name = 'Patient';
            $patient->description = 'User is a patient';
            $patient->save();
        }

        // Create the doc role.
        $doc = Role::where('name', '=', 'doc')->first();
        if (!$doc) {
            $doc = new Role();
            $doc->name = 'doc';
            $doc->display_name = 'Doctor';
            $doc->description = 'User is a doctor';
            $doc->save();
        }

    }
}
