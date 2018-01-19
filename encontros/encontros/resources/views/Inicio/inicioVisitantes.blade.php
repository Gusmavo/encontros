@extends('Layouts.top')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}" type="text/css">
@endsection

@section('scripts')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="alignCenter caixa padding10">
                    <h2 class="back" style="font-weight: 100;font-size: 28px; margin-top: 0px">Processo de agendamento</h2>
                    <ul id="breadcrumb" class="margin5">
                        <li><a class="active">Escolha um encontro</a></li>
                        <li><a>Identifique-se</a></li>
                        <li><a>Confirme o agendamento</a></li>
                        <li><a>Aguarde a data do encontro</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-1 animated fadeInRight">
                <div class="caixa">
                    <h2 class="titulo">Encontros</h2>

                    <h4 class="colorBlue " style="margin-left: 15px">Dia 13 de janeiro</h4>
                    <div class="encontros colorBlue animated fadeInRight">
                        <table style="margin-left: 20px; width: 100%">
                            <tbody>
                            <tr class="encontro ">
                                <td class="horario">
                                    08:00 às 12:00
                                </td>
                                <td class="vagas">
                                    <p>Total de vagas: 30</p>
                                    <p>Comparecerão: 2</p>
                                </td>
                                <td>
                                    <div class="container-fluid">
                                        <button href="#" class="btn btn-verde agendar semBorda">Agendar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="encontro">
                                <td class="horario">
                                    13:00 às 16:00
                                </td>
                                <td class="vagas">
                                    <p>Total de vagas: 30</p>
                                    <p>Comparecerão: 8</p>
                                </td>
                                <td>
                                    <div class="container-fluid">
                                        <button href="#" class="btn btn-verde agendar semBorda">Agendar</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="colorBlue" style="margin-left: 15px">Dia 14 de janeiro</h4>
                    <div class="encontros colorBlue animated fadeInRight">
                        <table style="margin-left: 20px; width: 100%">
                            <tbody>
                            <tr class="encontro">
                                <td class="horario">
                                    08:00 às 12:00
                                </td>
                                <td class="vagas">
                                    <p>Total de vagas: 30</p>
                                    <p>Comparecerão: 2</p>
                                </td>
                                <td>
                                    <div class="container-fluid">
                                        <button href="#" class="btn btn-verde agendar semBorda">Agendar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="encontro">
                                <td class="horario">
                                    13:00 às 16:00
                                </td>
                                <td class="vagas">
                                    <p>Total de vagas: 30</p>
                                    <p>Comparecerão: 8</p>
                                </td>
                                <td>
                                    <div class="container-fluid">
                                        <button href="#" class="btn btn-verde agendar semBorda">Agendar</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="colorBlue" style="margin-left: 15px">Dia 15 de janeiro</h4>
                    <div class="encontros colorBlue animated fadeInRight">
                        <table style="margin-left: 20px; width: 100%">
                            <tbody>
                            <tr class="encontro">
                                <td class="horario">
                                    08:00 às 12:00
                                </td>
                                <td class="vagas">
                                    <p>Total de vagas: 30</p>
                                    <p>Comparecerão: 2</p>
                                </td>
                                <td>
                                    <div class="container-fluid">
                                        <button href="#" class="btn btn-verde agendar semBorda">Agendar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="encontro">
                                <td class="horario">
                                    13:00 às 16:00
                                </td>
                                <td class="vagas">
                                    <p>Total de vagas: 30</p>
                                    <p>Comparecerão: 8</p>
                                </td>
                                <td>
                                    <div class="container-fluid">
                                        <button href="#" class="btn btn-verde agendar semBorda">Agendar</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @can('administrador')
        <a href="#" class="btn btn-verde">Botão verde</a>
        <a href="#" class="btn btn-success">Botão success</a>
        <a href="#" class="btn btn-vermelho">Botão vermelho</a>
        <a href="#" class="btn btn-danger">Botão danger</a>
        <a href="#" class="btn btn-azul">Botão azul</a>
        <a href="#" class="btn btn-info">Botão info</a>
        <a href="#" class="btn btn-escuro">botão escuro</a>
        <a href="#" class="btn btn-laranja">botão laranja</a>
        <a href="#" class="btn btn-warning">botão warning</a>
    @endcan




@stop