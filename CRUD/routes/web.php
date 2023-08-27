<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Roupa;
use App\Http\Controllers\RoupaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/produto', [RoupaController::class, 'store'])->name('produto.store');

Route::get('/produto', [RoupaController::class, 'index'])->name('produto.index');

Route::get('/produto/create', [RoupaController::class, 'create'])->name('produto.create');

Route::post('/cadastrar-produto', [RoupaController::class, 'store']);

Route::get('/mostrar-produto/{id_do_produto}', [RoupaController::class, 'show']);

Route::get('/editar-produto/{id_do_produto}', [RoupaController::class, 'edit']);

Route::put('/atualizar-produto/{id_do_produto}', [RoupaController::class, 'update']);

Route::delete('/excluir-produto/{id_do_produto}', [RoupaController::class, 'destroy']);

Route::get('/produto/editar/{id_do_produto}', [RoupaController::class, 'edit'])->name('produto.edit');

Route::delete('/produto/excluir/{id_do_produto}', [RoupaController::class, 'destroy'])->name('produto.destroy');

Route::put('/produto/atualizar/{id_do_produto}', [RoupaController::class, 'update'])->name('produto.update');


// Rota para processar o formulário de login
Route::post('/login', function (\Illuminate\Http\Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Autenticação bem-sucedida, redirecione para a página desejada
        return redirect('/dashboard');
    }

    // Autenticação falhou, redirecione de volta para a página de login com uma mensagem de erro
    return redirect()->back()->with('error', 'Credenciais inválidas. Tente novamente.');
})->name('login');

// Rota para exibir a página de logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
