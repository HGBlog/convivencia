<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use JasperPHP\JasperPHP;
use PHPJasper\PHPJasper; 
use App\Customer;
use App\Repositories\AcolhidaRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Convivencia;
//use App\Models\ConvivenciaMembro;
//use App\Models\LocalConvivencia;
//use App\Models\Acolhida;

class RelatorioController extends Controller
{

    /** @var  AcolhidaRepository */
    private $acolhidaRepository;
    private $PHPJasper;

    public function __construct($PHPJasper = null, AcolhidaRepository $acolhidaRepo)
    {
        $this->PHPJasper = new PHPJasper();
        $this->acolhidaRepository = $acolhidaRepo;
    }



    /**
     * Lista as convivências ativas para geração de relatório.
     *
     * @param Request $request
     * @return Response
     */
    public function acolhidas(Request $request)
        {
            //$this->convivenciaRepository->pushCriteria(new RequestCriteria($request));
            //$convivencias = $this->convivenciaRepository->all();

            //return view('convivencias.lista_ativas')
            //    ->with('convivencias', $convivencias);

            $convivencias = Convivencia::where('is_ativo', true)->get();

                 
            //Prepend adicionado para colocar a primeira da lista em branco. Retirado a pedido do Fabio
            //$convivencias->prepend('None');
            
            return view('relatorios.acolhidas',compact('convivencias'));    
        }

    public function seleciona_convivencia(Request $request)
        {
            //$this->convivenciaRepository->pushCriteria(new RequestCriteria($request));
            //$convivencias = $this->convivenciaRepository->all();

            //return view('convivencias.lista_ativas')
            //    ->with('convivencias', $convivencias);
            //$convivencia_id = $request->input('convivencia_id');
            $convivencia_id = $request->convivencia_id;
         
            return redirect(route('convivencia_inscricao', $convivencia_id));    
        }



    /**
     * Retorna um array com os parametros de conexão
     * @return Array
     */
public function compilar()
    {
        $input = public_path() . '/reports/acolhidas.jrxml';   
        $jasper = new PHPJasper;
        $jasper->compile($input)->execute();
    }

public function gera_relatorio(Request $request)
    {
        //captura o id da convivência selecionada
        $convivencia_id = $request->convivencia_id;
        $convivencia_id = '"' .  $convivencia_id . '"';
     
        //return redirect(route('convivencia_inscricao', $convivencia_id));  

     // coloca na variavel o caminho do novo relatório que será gerado
        $input = public_path() . '/reports/acolhidas.jrxml';
        $output = public_path() . '/reports/' . time() . '_Acolhidas';
        $options = [
            'format' => ['pdf', 'xml', 'html'],
            'locale' => 'en',
            'params' => ['convivencia_id'=> $convivencia_id],
            'db_connection' => [
		        'driver'   => 'postgres',
            	'host'     => env('DB_HOST'),
            	'port'     => env('DB_PORT'),
            	'username' => env('DB_USERNAME'),
            	'password' => env('DB_PASSWORD'),
            	'database' => env('DB_DATABASE'),
            ]
        ];
// instancia um novo objeto JasperPHP
         
        $report = new PHPJasper;
        $report->compile($input)->execute();
        // chama o método que irá gerar o relatório
        // passamos por parametro:
        // o arquivo do relatório com seu caminho completo
        // o nome do arquivo que será gerado
        // o tipo de saída
        // parametros ( nesse caso não tem nenhum)         
        $report->process(
            $input,
            $output,
            $options
            //$this->getDatabaseConfig()
        )->execute();

        $file = $output . '.pdf';
        $path = $file;
        
        // caso o arquivo não tenha sido gerado retorno um erro 404
        if (!file_exists($file)) {
            abort(404);
        }
//caso tenha sido gerado pego o conteudo
        $file = file_get_contents($file);
//deleto o arquivo gerado, pois iremos mandar o conteudo para o navegador
        unlink($path);
// retornamos o conteudo para o navegador que íra abrir o PDF
        return response($file, 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="acolhida.pdf"');
    }
}
