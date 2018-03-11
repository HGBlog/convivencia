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
		      // MacroRegiao seeder will use the roles above created.
          $this->call(MacroRegiaoTableSeeder::class);
          // Role comes before User seeder here.
		      $this->call(RoleTableSeeder::class);
		      // User seeder will use the roles above created.
		      $this->call(UserTableSeeder::class);
          // Etapas seeder will use the roles above created.
          $this->call(EtapasTableSeeder::class);
          // Tipo Quarto seeder will use the roles above created.
          $this->call(TipoQuartoTableSeeder::class);
          // Acolhida Extra seeder will use the roles above created.
          $this->call(AcolhidaExtraTableSeeder::class);
          // Tipo Carisma seeder will use the roles above created.
          $this->call(TipoCarismaTableSeeder::class);
          // Tipo Translado seeder will use the roles above created.
          $this->call(TipoTransladoTableSeeder::class);
          // Tipo Equipe seeder will use the roles above created.
          $this->call(EquipeTableSeeder::class);
          // LocalConvivencia seeder will use the roles above created.
          $this->call(LocalConvivenciaTableSeeder::class);
          // Diocese seeder will use the roles above created.
          $this->call(DioceseTableSeeder::class);
          // Estados seeder will use the roles above created.
          $this->call(EstadosTableSeeder::class);
    }
}
