<table class="table table-responsive" id="convivenciaMembros-table">
<thead>
        <th>Membro</th>
        <!--
        <th>Pais</th>
        <th>Email</th>
        <th>Sexo</th>
        <th>Cod. Pais</th>
        <th>Telefone</th>
        <th>Diocese</th>
        -->
        <th>Cidade</th>
        <!--
        <th>Paroquia</th>
        <th>Comunidade</th>
        <th>Início Caminho</th>
        -->
        <th>Vai à Convivência?</th>
        <th>Dados Acolhimento</th>
    </thead>
    <tbody>
     
   
   

    
    @foreach($membros as $membro)
            <tr>
                <td>{!! $membro->no_usuario !!}</td>
                <td>{!! $membro->no_cidade !!}</td>
                <td> 
                    @if (!$acolhida
                            ->where('convivencia_id', $convivencia->id)
                            ->where('membro_id', $membro->id)
                            ->pluck('is_ativo')
                            ->first()
                        )
                        <font color="red"><b>NÃO</b></font>
                    @else
                        <font color="green"><b>SIM</b></font>
                    @endif

                    
                </td>
                <td>
                    <a href="{!! route('acolhidas.edit', ['convivencia/'.$convivencia->id.'/membro/'.$membro->id ]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </td>
            </tr>
        
    @endforeach

</tbody>
</table>