<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userRoles')->insert(['name' => 'Desarrollador', 'created_at' =>now()]);
        DB::table('userRoles')->insert(['name' => 'Cliente', 'created_at' =>now()]);
        DB::table('projectTypes')->insert(['name' => 'Permanente', 'created_at' =>now()]);
        DB::table('projectTypes')->insert(['name' => 'Limitado', 'created_at' =>now()]);
        DB::table('projectStatuses')->insert(['name' => 'Activo', 'created_at' =>now()]);
        DB::table('projectStatuses')->insert(['name' => 'Planeación', 'created_at' =>now()]);
        DB::table('projectStatuses')->insert(['name' => 'Completado', 'created_at' =>now()]);
        DB::table('projectStatuses')->insert(['name' => 'Abierto', 'created_at' =>now()]);
        DB::table('currencies')->insert(['name' => 'Dolares', 'symbol' => 'U$D', 'created_at' =>now()]);
        DB::table('currencies')->insert(['name' => 'Pesos', 'symbol' => '$', 'created_at' =>now()]);
        DB::table('payModes')->insert(['name' => 'Mensual', 'created_at' =>now()]);
        DB::table('payModes')->insert(['name' => 'Único', 'created_at' =>now()]);
        DB::table('payModes')->insert(['name' => 'Por Entregable', 'created_at' =>now()]);
        DB::table('transactionTypes')->insert(['name' => 'Pagado', 'created_at' =>now()]);
        DB::table('transactionTypes')->insert(['name' => 'Saldo a Favor', 'created_at' =>now()]);
        DB::table('transactionTypes')->insert(['name' => 'Recibido', 'created_at' =>now()]);
        DB::table('transactionTypes')->insert(['name' => 'Tramitando', 'created_at' =>now()]);
        DB::table('transactionTypes')->insert(['name' => 'Cobrar', 'created_at' =>now()]);
        DB::table('transactionTypes')->insert(['name' => 'Por Pagar', 'created_at' =>now()]);
        DB::table('transactionTypes')->insert(['name' => 'Ajuste', 'created_at' =>now()]);
        DB::table('transactionStatuses')->insert(['name' => 'Completa', 'created_at' =>now()]);
        DB::table('transactionStatuses')->insert(['name' => 'En Proceso', 'created_at' =>now()]);
        DB::table('transactionStatuses')->insert(['name' => 'Rechazada', 'created_at' =>now()]);
    }
}
