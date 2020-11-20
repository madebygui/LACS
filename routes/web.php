<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 *
 * Páginas do Site
 *
 */
Route::get('/painel', function(){
    return redirect('http://fasow.com.br');
});

Route::get('/whatsapp1', function(){
    return redirect('https://api.whatsapp.com/send?phone=5511954460128');
});

Route::get('/whatsapp2', function(){
    return redirect('https://api.whatsapp.com/send?phone=5511982760340');
});

/***************************************************************************************/
Route::get('/', 'PagesController@index');
Route::get('/cartao-lacs', 'PagesController@cartaoLacs');
Route::get('/sobre', 'PagesController@sobre');
Route::get('/especialidades', 'PagesController@especialidades')->name('especialidades');
Route::get('/exame-toxicologico', 'PagesController@exameToxicologico')->name('toxicologico');
Route::get('/parceiros', 'PagesController@parceiros')->name('parceiros');
/***************************************************************************************/


/***************************************************************************************/
Route::get('/exames-laboratoriais/{id}/{nome}', 'ExamesController@examesLaboratoriais')->name('laboratoriais');
Route::get('/exames-complementares/{id}/{nome}', 'ExamesController@examesComplementares')->name('complementares');
/***************************************************************************************/



/***************************************************************************************/
Route::get('/blog', 'BlogController@home');
Route::get('/blog/{id}/{nome}', 'BlogController@post')->name('post');
Route::get('blog/categoria/{id}/{nome}', 'BlogController@category')->name('categorias');
Route::post('search', 'BlogController@searchPost')->name('search.post');
/***************************************************************************************/



/***************************************************************************************/
Route::get('/terapias/{id}/{nome}', 'PagesController@terapiasIntegrativas')->name('terapias');
/***************************************************************************************/


/***************************************************************************************/
Route::get('/sesmt', 'PagesController@sesmt');
Route::get('/sesmt/servicos/{id}/{nome}', 'PagesController@sesmtServicos')->name('servicos.sesmt');
/***************************************************************************************/

/*Rotas compra Cartão Lacs**************************************************************/
Route::post('/cadastrar-associado', 'PagSeguroController@checkout');
Route::get('/pagseguro/notificacao', 'PagSeguroController@notificacao');
Route::get('/pagseguro/pagamento', 'OutrosController@pagamento');

Route::post('/getSessao', 'PagSeguroController@getSessao');
Route::post('/pagamento_pagseguro', 'PagSeguroController@finalizarCompra');
Route::post('/pagamento_recorrente_pagseguro', 'PagSeguroController@finalizarCompraRecorrente');
Route::post('/criar_plano', 'PagSeguroController@criarPlano');
Route::post('/dados_plano', 'PagSeguroController@dadosPlano');
/***************************************************************************************/



/*Formularios de Contato*****************************************************************/
Route::post('/toxicologicoSimples','ContatoController@toxicologicoSimples')->name('contato.toxicologico');
Route::post('/fale-conosco','ContatoController@faleConosco')->name('contato.faleConosco');
Route::post('/orcamento','ContatoController@orcamento')->name('contato.orcamento');
Route::post('/newsletter','ContatoController@newsletter')->name('contato.newsletter');
/***************************************************************************************/
