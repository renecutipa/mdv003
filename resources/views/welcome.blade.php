@extends('layouts.start')

@section('content')
<form method="POST" action="#" id="documentForm">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Complete los campos solicitados</h3>
            </div>
            <div class="card-body p-0">
                <div class="bs-stepper linear">
                    <div class="bs-stepper-header" role="tablist">
                        <!-- your steps here -->
                        <div class="step" data-target="#document-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="document-part" id="document-part-trigger" aria-selected="false" disabled="disabled">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Datos del documento</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step active" data-target="#file-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="file-part" id="file-part-trigger" aria-selected="true">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Archivos del trámite</span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <!-- your steps content here -->
                        <div id="document-part" class="content" role="tabpanel" aria-labelledby="document-part-trigger">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="tipo_persona">Tipo Persona</label>
                                        <select class="custom-select d-block w-100" name="tipo_persona" id="tipo_persona">
                                            <option value="NATURAL">NATURAL</option>
                                            <option value="JURIDICA">JURIDICA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="dni_ruc">DNI / RUC <span class="rojo">*</span></label>
                                        <input type="text" class="form-control text-center" name="dni_ruc" id="dni_ruc" value="" maxlength="11" autofocus="" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Email <span class="rojo">*</span></label>
                                        <input type="email" class="form-control" name="email" value="" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="celular">Teléfono Celular (sólo un número) <span class="rojo">*</span></label>
                                        <input type="text" class="form-control" name="celular" value="" maxlength="9" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="paterno">Apellido Paterno <span class="rojo">*</span></label>
                                        <input type="text" class="form-control" name="paterno" id="paterno" value="" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="materno">Apellido Materno <span class="rojo">*</span></label>
                                        <input type="text" class="form-control" name="materno" id="materno" value="" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nombres">Nombres <span class="rojo">*</span></label>
                                        <input type="text" class="form-control" name="nombres" id="nombres" value="" required="">
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="idtupa">Trámite <span class="rojo">*</span></label>
                                        <select class="custom-select d-block w-100" name="idtupa" id="idtupa" required="">
                                            <option value="">[ Seleccione ]</option>
                                            <option value="01">Carta</option>
                                            <option value="02">Directiva</option>
                                            <option value="03">Informe</option>
                                            <option value="04">Memorando</option>
                                            <option value="05">Oficio</option>
                                            <option value="06">Proveido</option>
                                            <option value="07">Resolución</option>
                                            <option value="08">Sobre cerrado</option>
                                            <option value="09">Solicitud</option>
                                            <option value="99">Otros</option>                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="numero_documento">Nº de Documento (Siglas)</label>
                                        <input type="text" class="form-control" name="numero_documento" id="numero_documento" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="fecha_documento">Fecha del Documento</label>
                                        <input type="date" class="form-control text-center" name="fecha_documento" id="fecha_documento" value="{{date('Y-m-d')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="asunto">Asunto <span class="rojo">*</span></label>
                                        <input type="text" class="form-control" name="asunto" id="asunto" value="" required="">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="asunto">Folios <span class="rojo">*</span></label>
                                        <input type="number" class="form-control text-center" name="folios" id="folios" value="" min="1" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fnacim">Observaciones</label>
                                        <textarea class="form-control" id="obs" name="obs" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg" onclick="stepper.next()">Siguiente</button>
                        </div>


                        <div id="file-part" class="content active dstepper-block" role="tabpanel" aria-labelledby="file-part-trigger">                            
                            <div class="form-group">
                                <label for="exampleInputFile">Subida de archivos</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" required>
                                            <label class="custom-file-label" for="exampleInputFile">Seleccione su archivo</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Subir</span>
                                        </div>
                                    </div>
                            </div>
                            <button class="btn btn-primary btn-lg" onclick="stepper.previous()">Regresar</button>
                            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
              <!-- /.card-body -->
            <div class="card-footer">
              De conformidad con el numeral 1.7 del artículo IV del Título Preliminar y el artículo 49 del Texto único Ordenado de la Ley N° 27444 – Ley del Procedimiento Administrativo General, aprobado por el Decreto Supremo N° 006-2017-JUS, se confirma que la información proporcionada es veraz, en caso contrario, me someto a las acciones administrativas o judiciales que correspondan, Así mismo según Texto Único Ordenado de la Ley N° 27444, Ley del Procedimiento Administrativo General, Artículo 20.- Modalidades de notificación autorizo que me notifiquen las observaciones, requerimientos de información, denegación, aprobación u otros actos emitidos por la MDV al correo electrónico.
            </div>
        </div>
            <!-- /.card -->
    </div>
</div>
</form>
@endsection