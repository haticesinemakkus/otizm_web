@extends($masterpage ?? 'panel.master')

@section('breadcrumb')
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('panel.index') }}">Ana Sayfa</a></li>
        @foreach ($container->view->breadcrumb as $title => $href)
            <li class="breadcrumb-item"><a href="{{ $href }}">{{ $title }}</a></li>
        @endforeach
        <li class="breadcrumb-item active">Liste</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>{{ $container->title }} Listesi</h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <table datatable class="table table-bordered table-hover table-striped w-100">
                            <thead>
                                <tr>
                                    <th class="text-center wd-80">Ad Soyad</th>
                                    <th class="text-center">Eposta</th>
                                    <th class="text-center wd-120">Konu</th>
                                    <th class="text-center wd-120">Mesaj</th>
                                    <th class="text-center wd-120">Eklenme</th>
                                    <th class="text-center wd-80"></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra_script')
    <script>
        $(document).ready(function() {
            BaseCRUD.selector = "[datatable]";
            BaseCRUD.ajaxtable({
                ajaxURL: "{{ route('panel.' . $container->page . '_list') }}",
                columns: [{
                        data: 'name',
                        name: 'name',
                        className: 'text-center'
                    },
                    {
                        data: 'email',
                        name: 'email',
                        className: 'text-center'
                    },
                    {
                        data: 'subject',
                        name: 'subject',
                        className: 'text-center'
                    },
                    {
                        data: 'message',
                        name: 'message',
                        className: 'text-center'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        className: 'text-center'
                    },
                    {
                        render: function(data, type, row) {
                            var html = '';
                            html += '<a href="javascript:void(0);" row-delete="' + row.id +
                                '" class="btn btn-danger btn-sm btn-icon waves-effect waves-themed" data-toggle="tooltip" data-placement="auto" data-original-title="Sil">';
                            html += '   <i class="fal fa-trash"></i>';
                            html += '</a>';


                            return html;
                        },
                        data: null,
                        orderable: false,
                        searchable: false,
                        className: 'text-center act-col',
                    },
                ]
            });

            BaseCRUD.delete("{{ route('panel.' . $container->page . '_delete') }}");

        });
    </script>
@endsection
