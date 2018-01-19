<?php

namespace App\Policies;

use Uepg\SGIUser\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class RestringeAcesso
{
    use HandlesAuthorization;

    private $isAdministrador;
    private $isUsuario;
    private $isDesenvolvedor;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->cpf = \Auth::user()->cpf;
        $this->nome = \Auth::user()->nome;
        $this->username = \Auth::user()->username;

        $this->isAdministrador = collect(['ealmeida','13193826']);
            /*
            \DB::table('pessoa..pessoa')
            ->join('pessoa..pessoa_fisica', 'pessoa..pessoa.id_pessoa', 'pessoa..pessoa_fisica.id_pessoa')
            ->join('', 'aluno..academico.id_academico', 'aluno..academico_pessoa.id_academico')
            ->join('usuario', 'aluno..academico_pessoa.id_academico', 'usuario.id_pessoa')
            ->join('aluno', 'usuario.id_usuario', 'aluno.id_aluno')
            ->where('aluno..academico_pessoa.cpf', $this->cpf)
            ->first();
            */

        $this->isUsuario = collect(['ealmeida','13193826']);

            /*\DB::table('pessoa..pessoa')
            ->join('acesso_g..usuario', 'pessoa..pessoa.nm_pessoa_completo', 'acesso_g..usuario.nm_usuario')
            ->join('pessoa..pessoa_fisica', 'pessoa..pessoa.id_pessoa', 'pessoa..pessoa_fisica.id_pessoa')
            ->join('usuario', 'pessoa..pessoa.id_pessoa', 'usuario.id_pessoa')
            ->join('orientador', 'usuario.id_usuario', 'orientador.id_orientador')
            ->where('acesso_g..usuario.nm_usuario', $this->nome)
            ->first();
        */
        $this->isDesenvolvedor = collect(['ealmeida','13193826']);


    }

    public function administrador()
    {
        return $this->isAdministrador != NULL;
    }

    public function usuario()
    {
        return $this->isUsuario != NULL;
    }

    public function desenvolvedor()
    {
        return $this->isDesenvolvedor != NULL;
    }
}
