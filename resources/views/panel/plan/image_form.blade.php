@extends($masterpage ?? 'panel.master')

@section('breadcrumb')
<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('panel.index') }}">Ana Sayfa</a></li>
    @foreach($container->view->breadcrumb as $title => $href)
    <li class="breadcrumb-item"><a href="{{ $href }}">{{ $title }}</a></li>
    @endforeach
    <li class="breadcrumb-item active">{{ is_null($item->id) ? 'Ekle' : 'Düzenle' }}</li>

    <li class="position-absolute pos-top pos-right d-none d-sm-block">
    </li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">

        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>{{ $container->title }} {{ is_null($item->id) ? 'Ekle' : 'Düzenle' }}</h2>
            </div>
            <form ajax-form method="POST" action="{{ route('panel.product_image_save', ['unique' => $item->id]) }}" enctype="multipart/form-data">
                @csrf

                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-2">
                                    <label class="form-label">Çoklu Resim</label>
                                    <input type="file" class="form-control" name="images[]" multiple accept="image/*">
                                </div>
                                @error('images')
                                    <span class="badge badge-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 ">
                        <button class="btn btn-primary ml-auto waves-effect waves-themed wd-100" type="submit">Kaydet</button>
                        <a class="btn btn-warning ml-auto waves-effect waves-themed wd-100 color-white" href="{{ route('panel.' . $container->page . '_list') }}">İptal</a>
                    </div>
                </div>
            </form>
            @if (!is_null($item->images))
                <div class="row">
                    @foreach ($item->images as $image)
                            <div class="col-md-4">
                                <div class="form-group mb-2">
                                    <img width="300" height="200" src="{{env("CDN_URL")}}/upload/product/{{ $image->file }}">
                                    <a href="{{env("CDN_URL")}}/upload/product/{{ $image->file }}" alt="Image description" target="_blank" style="display: inline-block; width: 250px; height; 50px;">Resmi aç</a>
                                    <a class="imageDelete" data-id="{{$image->id}}" alt="Image description" style="display: inline-block; width: 250px; height; 50px;"><i class="fa-trash fal fw-900 deleteIcon"></i></a>
                                </div>
                            </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection


@section('extra_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).on('click', '.imageDelete', function() {
            var id = $(this).data('id');
            swal({
                    title: 'Resim silinecek!',
                    text: "Resmi silmek istediğinize emin misiniz?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Evet, bitir!',
                    cancelButtonText: 'İptal!',
                    closeOnConfirm: false
                }).then(function(isConfirm) { if (isConfirm) {
                    $.ajax({
                        type:'GET',
                        url:"{{ route('panel.product_image_delete') }}",
                        data:{
                            id:id,
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function(data){
                            if (data) {
                                swal('Silindi!','Resim Silindi','success');
                                location.reload();
                            }
                            else {
                                swal('Hata Oluştu!','İşlem sırasında hata oluştu?','warning');
                                return false;
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
