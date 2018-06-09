<table class="table table-responsive" id="convivenciaMembros-table">
<thead>
        <th>Membros</th>
        <th>Vai à Convivência?</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
    @foreach($casados as $casado)   
               <tr>
                <td>{!! $casado->no_usuario !!} e {!! $casado->no_conjuge !!}</td>
                <td> 
                    @if (!$acolhida
                            ->where('convivencia_id', $convivencia->id)
                            ->where('membro_id', $casado->id)
                            ->pluck('is_ativo')
                            ->first()
                        )
                        @if (!$acolhida
                            ->where('convivencia_id', $convivencia->id)
                            ->where('membro_id', $casado->id)
                            ->pluck('is_conjuge')
                            ->first()
                        )
                        <font color="red"><b>NENHUM DOS DOIS</b></font>
                        @else
                        <font color="green"><b>APENAS O CONJUGE</b></font>
                        @endif
                    @else
                        @if ($acolhida
                            ->where('convivencia_id', $convivencia->id)
                            ->where('membro_id', $casado->id)
                            ->pluck('is_conjuge')
                            ->first()
                        )
                        <font color="green"><b>SIM, O CASAL</b></font>
                        @else
                        <font color="green"><b>SOMENTE MARIDO</b></font>
                        @endif
                    @endif

                    
                </td>
                <td>
                    <a href="{!! route('acolhidas.edit', ['convivencia/'.$convivencia->id.'/membro/'.$casado->id ]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>&nbsp; Inscrever</a>
                </td>
            </tr>
    @endforeach  

    
    @foreach($membros as $membro)
            <tr>
                <td>{!! $membro->no_usuario !!}</td>
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
                    <a href="{!! route('acolhidas.edit', ['convivencia/'.$convivencia->id.'/membro/'.$membro->id ]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>&nbsp; Inscrever</a>
                </td>
            </tr>        
    @endforeach

</tbody>
</table>