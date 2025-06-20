@extends('admin.layouts')
@section('title', 'Quản lý đơn vị vận chuyển')
@section('content')

@section('breadcrumbs')
<li class="breadcrumb-item">
    <a href="{{ route('admin.settings.index') }}">Cài đặt</a>
</li>
<li class="breadcrumb-item active">Đơn vị vận chuyển</li>
@endsection

<div class="mb-9">
    <div class="row g-3 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">Quản lý đơn vị vận chuyển</h2>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-4">
        <div class="d-flex flex-wrap gap-3">
            <div class="search-box">
                <form class="position-relative">
                    <input class="form-control search-input search" type="search"
                        placeholder="Tìm kiếm đơn vị vận chuyển" aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                </form>
            </div>
            <div class="ms-xxl-auto">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProviderModal">
                    <span class="fas fa-plus me-2"></span>Thêm đơn vị vận chuyển
                </button>
            </div>
        </div>
    </div>

    <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent">
        <div class="table-responsive scrollbar mx-n1 px-1">
            <table class="table fs-9 mb-0"
                data-list='{"valueNames":["name","code","status","sort_order"],"page":10,"pagination":true}'>
                <thead>
                    <tr>
                        <th class="white-space-nowrap fs-9 align-middle ps-0" style="width:20px;">
                            <div class="form-check mb-0 fs-8">
                                <input class="form-check-input" id="checkbox-bulk-providers-select" type="checkbox"
                                    data-bulk-select='{"body":"providers-table-body"}' />
                            </div>
                        </th>
                        <th scope="col" style="width:70px;"></th>
                        <th class="sort white-space-nowrap" scope="col" data-sort="name">Tên đơn vị</th>
                        <th class="sort white-space-nowrap" scope="col" data-sort="code">Mã</th>
                        <th class="sort white-space-nowrap" scope="col" data-sort="status">Trạng thái</th>
                        <th class="sort white-space-nowrap" scope="col" data-sort="sort_order">Thứ tự</th>
                        <th class="text-end" scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody class="list" id="providers-table-body">
                    @foreach($providers as $provider)
                    <tr class="position-static">
                        <td class="fs-9 align-middle">
                            <div class="form-check mb-0 fs-8">
                                <input class="form-check-input" type="checkbox"
                                    data-bulk-select-row='{"name":"{{ $provider->name }}","code":"{{ $provider->code }}"}' />
                            </div>
                        </td>
                        <td class="align-middle white-space-nowrap py-0">
                            @if($provider->logo_url)
                            <img src="{{ $provider->logo_url }}" alt="{{ $provider->name }}" width="40" height="40"
                                class="rounded" loading="lazy">
                            @endif
                        </td>
                        <td class="name align-middle">{{ $provider->name }}</td>
                        <td class="code align-middle">{{ $provider->code }}</td>
                        <td class="status align-middle">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" {{ $provider->is_active ?
                                'checked' : '' }}
                                onchange="updateStatus({{ $provider->id }}, this.checked)">
                            </div>
                        </td>
                        <td class="sort_order align-middle">{{ $provider->sort_order }}</td>
                        <td class="text-end">
                            <div class="btn-group">
                                <a href="{{ route('admin.shipping.fees', $provider->id) }}"
                                    class="btn btn-sm btn-phoenix-secondary">
                                    <span class="fas fa-money-bill me-1"></span>Phí vận chuyển
                                </a>
                                <button class="btn btn-sm btn-phoenix-secondary" data-bs-toggle="modal"
                                    data-bs-target="#editProviderModal{{ $provider->id }}">
                                    <span class="fas fa-edit"></span>
                                </button>
                                <button class="btn btn-sm btn-phoenix-secondary text-danger"
                                    onclick="deleteProvider({{ $provider->id }})">
                                    <span class="fas fa-trash"></span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
            <div class="col-auto d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p>
                <a class="fw-semibold" href="#!" data-list-view="*">Xem tất cả<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a>
                <a class="fw-semibold d-none" href="#!" data-list-view="less">Xem ít hơn<span
                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
            </div>
            <div class="col-auto d-flex">
                <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul>
                <button class="page-link" data-list-pagination="next"><span
                        class="fas fa-chevron-right"></span></button>
            </div>
        </div>
    </div>
</div>

<!-- Modal thêm mới -->
<div class="modal fade" id="addProviderModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.shipping.providers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Thêm đơn vị vận chuyển</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tên đơn vị</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mã</label>
                        <input type="text" class="form-control" name="code" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô tả</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Logo</label>
                        <input type="file" class="form-control" name="logo_url" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">API Key</label>
                        <input type="text" class="form-control" name="api_key">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">API Secret</label>
                        <input type="text" class="form-control" name="api_secret">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">API Endpoint</label>
                        <input type="text" class="form-control" name="api_endpoint">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Thứ tự hiển thị</label>
                        <input type="number" class="form-control" name="sort_order" value="0">
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" class="form-check-input" name="is_active" value="1" checked>
                        <label class="form-check-label">Kích hoạt</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
</div>

@foreach($providers as $provider)
<!-- Modal chỉnh sửa -->
<div class="modal fade" id="editProviderModal{{ $provider->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.shipping.providers.update', $provider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Chỉnh sửa đơn vị vận chuyển</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tên đơn vị</label>
                        <input type="text" class="form-control" name="name" value="{{ $provider->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mã</label>
                        <input type="text" class="form-control" name="code" value="{{ $provider->code }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô tả</label>
                        <textarea class="form-control" name="description">{{ $provider->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Logo</label>
                        @if($provider->logo_url)
                            <div class="mb-2">
                                <img src="{{ $provider->logo_url }}" alt="Current logo" style="max-width: 100px; max-height: 100px;" class="img-thumbnail">
                            </div>
                        @endif
                        <input type="file" class="form-control" name="logo_url" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">API Key</label>
                        <input type="text" class="form-control" name="api_key" value="{{ $provider->api_key }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">API Secret</label>
                        <input type="text" class="form-control" name="api_secret" value="{{ $provider->api_secret }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">API Endpoint</label>
                        <input type="text" class="form-control" name="api_endpoint" value="{{ $provider->api_endpoint }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Thứ tự hiển thị</label>
                        <input type="number" class="form-control" name="sort_order" value="{{ $provider->sort_order }}">
                    </div>
                    <div class="form-check">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" class="form-check-input" name="is_active" value="1" {{ $provider->is_active ? 'checked' : '' }}>
                        <label class="form-check-label">Kích hoạt</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@push('scripts')
<script>
    function updateStatus(id, status) {
    fetch(`/admin/shipping/providers/${id}/status`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ is_active: status })
    }).then(response => response.json())
      .then(data => {
          if (data.success) {
              window.showToast('success', 'Cập nhật trạng thái thành công');
          } else {
              window.showToast('error', 'Có lỗi xảy ra');
          }
      });
}

function deleteProvider(id) {
    if (confirm('Bạn có chắc chắn muốn xóa?')) {
        fetch(`/admin/shipping/providers/${id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  location.reload();
              } else {
                  window.showToast('error', 'Có lỗi xảy ra');
              }
          });
    }
}
</script>
@endpush

@endsection
