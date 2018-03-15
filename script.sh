apt-get install wkhtmltopdf

rm database/migrations/2017_12_*
mysqladmin drop conv -u root -p
mysqladmin create conv -u root -p
php artisan infyom:scaffold Etapa --fieldsFile=exemplos/tb_etapa --datatables=false
php artisan infyom:scaffold Estado --fieldsFile=exemplos/tb_estado --datatables=true
php artisan infyom:scaffold Membro --fieldsFile=exemplos/tb_membros --datatables=false
php artisan infyom:scaffold Convivencia --fieldsFile=exemplos/tb_convivencia --datatables=false
#php artisan infyom:scaffold ConvivenciaMembro --fieldsFile=exemplos/tb_convivencia_membro --datatables=false
php artisan infyom:scaffold Acolhida --fieldsFile=exemplos/tb_acolhida --datatables=false
php artisan infyom:scaffold TipoQuarto --fieldsFile=exemplos/tb_tipo_quarto --datatables=false
php artisan infyom:scaffold AcolhidaExtra --fieldsFile=exemplos/tb_acolhida_extra --datatables=false
php artisan infyom:scaffold Usuario --tableName=users --fromTable --datatables=false
php artisan infyom:scaffold Role --tableName=roles --fromTable --datatables=false
php artisan infyom:scaffold TipoCarisma --fieldsFile=exemplos/tb_tipo_carisma --datatables=false
php artisan infyom:scaffold Equipe --fieldsFile=exemplos/tb_equipe --datatables=false
php artisan infyom:scaffold Diocese --fieldsFile=exemplos/tb_diocese --datatables=true
php artisan infyom:scaffold LocalConvivencia --fieldsFile=exemplos/tb_local_convivencia --datatables=false
#php artisan infyom:scaffold PerfilUsuario --fieldsFile=exemplos/tb_perfil_usuario --datatables=false
#php artisan infyom:scaffold DadosCaminho --fieldsFile=exemplos/tb_dados_caminho --datatables=false
php artisan infyom:scaffold MacroRegiao --fieldsFile=exemplos/tb_macroregiaos --datatables=true
php artisan infyom:scaffold Acolhedor --fieldsFile=exemplos/tb_acolhedores --datatables=true


php artisan infyom:scaffold RelatorioAcolhida --fromTable --tableName=vw_rel_acolhidas --datatables=true