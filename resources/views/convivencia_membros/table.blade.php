<script>
    $("[name='my-checkbox']").bootstrapSwitch();
</script>

<script type='text/javascript'>
 $(document).ready(function() { 
   $('input[name=vai_convivencia]').change(function(){
        $('form').marca_convivencia();
   });
  });
</script>

<script>
    function doSomething()
        {
            alert("Do something radio button was checked");
        }
</script>


<table class="table table-responsive" id="convivenciaMembros-table">
<thead>
        <th>Membro</th>
        <!--
        <th>Pais</th>
        <th>Email</th>
        <th>Sexo</th>
        <th>Cod. Pais</th>
        <th>Telefone</th>
        -->
        <th>Diocese</th>
        <th>Cidade</th>
        <!--
        <th>Paroquia</th>
        <th>Comunidade</th>
        <th>Início Caminho</th>
        -->
        <th colspan="3">Vai para Convivência?</th>
    </thead>
    <tbody>
     
   
   

    
    @foreach($membros as $membro)
            {!! $convivencia ="SELECT membro_id FROM convivencia_membros WHERE membro_id='$membro->id'" !!}
            <tr>
                <td>{!! $membro->no_usuario !!}</td>
                <td>{!! $membro->no_diocese !!}</td>
                <td>{!! $membro->no_cidade !!}</td>
                <td>

                
           
                    <div class='btn-group'>
                        <style>
                              .slow .toggle-group { transition: left 0.7s; -webkit-transition: left 0.7s; }
                              .fast .toggle-group { transition: left 0.1s; -webkit-transition: left 0.1s; }
                              .quick .toggle-group { transition: none; -webkit-transition: none; }
                        </style>

                        

                        <input type="checkbox" name="vai_convivencia" unchecked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="small" data-on="Sim" data-off="Não" onchange="vai_convivencia();">
                        
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
    @endforeach

</tbody>
</table>
