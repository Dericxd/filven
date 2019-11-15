@extends('layouts.app', ['activePage' => 'report', 'titlePage' => __('Reporte'), 'show' => 'report'])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-info">
                <h4 class="card-title ">{{ __('Reporte') }}</h4>
                <p class="card-category"> {{ __('Ver reporte e imprimir si asi lo desea') }}</p>
              </div>
              <div class="card-body"  >
                <div class="row" id='data-report'>
                  <table class="table table-hover">
                    <tr>
                        {{-- <th>Fecha</th> --}}
                        <th>Libros</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                    </tr>
                    @php
                        $total = 0;
                        $count = 0;
                    @endphp
                    @foreach ($sells as $sell)
                        <tr>
                          {{-- <th>{{ date('d-m-Y', strtotime($sell->date)) }}</th> --}}
                          <td>{{ $sell->name }}</td>
                          <td>{{ $sell->count }}</td>
                          <td>{{ $sell->precies }}</td>
                          <td>{{ $sell->precies * $sell->count }}</td>
                        </tr>
                        @php
                            $count = $count + $sell->count;
                            $total = $total + ($sell->precies * $sell->count);
                        @endphp
                    @endforeach
                    <tr>
                        <th>Total</th>
                        <th>{{ $count }}</th>
                        <th></th>
                        <th style="text-align:center">{{ $total }}</th>
                    </tr>
                </table>                      
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                      <a href="{{ route('report.index') }}" class="btn btn-sm btn-info input-cuadrado">{{ __('Volver') }}</a>
                      <a href="#" class="btn btn-sm btn-warning input-cuadrado" onclick="exportHTML()">{{ __('imprimir') }}</a>
                     </div>
                  </div>  
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
<script>
  function exportHTML() {
    var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>"+
            "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
       var footer = "</body></html>";
       var sourceHTML = header+document.getElementById("data-report").innerHTML+footer;
       
       var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
       var fileDownload = document.createElement("a");
       document.body.appendChild(fileDownload);
       fileDownload.href = source;
       fileDownload.download = 'reporte.doc';
       fileDownload.click();
       document.body.removeChild(fileDownload);
    }
</script>
@endpush