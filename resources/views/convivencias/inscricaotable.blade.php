<script type="text/javascript">
//Changes the Following text to Unfollow when mouseover the button 
$(document).ready(function()
{
    $('.following').hover(function()
    {
        $(this).text("Não vai");
    },function()
    {
        $(this).text("Indo");
    });
 });

 //Perform the Following and Unfollowing work
function vai_or_naovai(id,action)
{
    if ( action == "indo" ){ // I'm not sure for the condition, it depends of its meaning.
        myUrl = "{{ action('ConvivenciaController@inscricao', 'id') }}" ;
        myMethod = "GET";
    } else {
        myUrl = "{{ action('ConvivenciaController@destroy', 'id') }}" ;
        myMethod = "DELETE";
    }
    var dataString = "id=" + id;
    $.ajax({  
        type: myMethod ,  
        url: myUrl,  
        data: dataString,
        beforeSend: function() 
        {
            if ( action == "indo" )
            {
                $("#indo"+id).hide();
                $("#loading"+id).html('<img src="loading.gif" align="absmiddle" alt="Loading...">');
            }
            else if ( action == "vai" )
            {
                $("#vai"+id).hide();
                $("#loading"+id).html('<img src="loading.gif" align="absmiddle" alt="Loading...">');
            }
            else { }
        },  
        success: function(response)
        {
            if ( action == "indo" ){
                $("#loading"+id).html('');
                $("#vai"+id).show();

            }
            else if ( action == "vai" ){
                $("#loading"+id).html('');
                $("#indo"+id).show();
            }
            else { }
        }
    }); 
}
</script>

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
            //$convivencia->membros()->syncWithoutDetaching([$membros->id]);
            $convivencia->membros()->attach($membro->id, array('is_ativo' => 1));
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
        <th>Vai?</th>
        <th>Dados do Acolhimento</th>
    </thead>
    <tbody>
     
   
   

    
    @foreach($membros as $membro)
            <tr>
                <td>{!! $membro->no_usuario !!}</td>
                <td>{!! $membro->no_diocese !!}</td>
                <td>{!! $membro->no_cidade !!}</td>
                <td>
                   {{!! Form::hidden('is_ativo', 0) !!}}
                   {{!! Form::checkbox('status_convivencia', $membro->is_ativo, true,['data-toggle' => 'toggle', 'data-onstyle' =>'success', 'data-offstyle'=>'danger', 'data-size'=>'small', 'data-on'=>'Sim', 'data-off'=>'Não' ]) !!}}
                </td>
                <td>
                    <a href="{!! route('acolhidas.edit', ['convivencia/'.$convivencia->id.'/membro/'.$membro->id ]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </td>
            </tr>
        
    @endforeach

</tbody>
</table>