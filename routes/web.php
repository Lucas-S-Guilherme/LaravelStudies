<?php

use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// assinatura base de uma rota
// Route::verb('uri', callback); - o callback é a ação que vai ser executada quando a rota for chamada

// rota com função anônima

Route::get('/rota', function() {
    return '<h1>Olá Laravel!</h1>';
});

Route::get('/user', function() {
    return '<h1>Aqui está o usuário!</h1>';
});

// ❌ NUNCA fazer isso - TRAVA O NAVEGADOR:
// Route::get('/injection', function(Request $request) {
//     var_dump($request);  // Gigantesco, referências circulares, trava!
// });

// ✅ OPÇÃO 1: dd() - Debug rápido (mostra e para a execução)
Route::get('/injection', function(Request $request) {
    dd($request->all()); // Limpo, formatado e seguro
});

// ✅ OPÇÃO 2: Ver dados específicos da requisição
Route::get('/injection-info', function(Request $request) {
    return [
        'metodo' => $request->method(),
        'url' => $request->url(),
        'caminho' => $request->path(),
        'user_agent' => $request->userAgent(),
        'ip' => $request->ip(),
        'todos_dados' => $request->all(),
        'query_string' => $request->query(),
        'headers' => $request->headers->all(),
    ];
});

// ✅ OPÇÃO 3: Usando logging (persiste em arquivo)
Route::get('/injection-log', function(Request $request) {
    \Log::debug('Requisição recebida', [
        'metodo' => $request->method(),
        'url' => $request->url(),
        'dados' => $request->all(),
        'timestamp' => now(),
    ]);
    return 'Verificar em storage/logs/laravel.log';
});

// ✅ OPÇÃO 4: Resposta JSON (melhor para APIs)
Route::get('/injection-json', function(Request $request) {
    return response()->json([
        'status' => 'sucesso',
        'requisicao' => [
            'metodo' => $request->method(),
            'url' => $request->url(),
            'dados' => $request->all(),
        ]
    ]);
});

Route::match(['get', 'post'], '/match', function(Request $request) {
    return '<h1> Aceita GET e POST</h1>';
});

Route::any('/any', function(Request $request) {
    return '<h1> Aceita qualquer http verb</h1>';
});

Route::get('/index', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);

Route::redirect('/saltar', '/index');
Route::permanentRedirect('/saltar2', '/index');

Route::view('/view', 'home');
Route::view('/view2', 'home', ['myName' => "Lucas Guilherme"]);

