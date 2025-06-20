@extends('admin.layouts')
@section('title', 'Chi tiết Slider')
@section('content')

@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.sliders.index') }}">Slider</a>
    </li>
    <li class="breadcrumb-item active">Chi tiết Slider</li>
@endsection

<div class="mb-9">
    <div class="row g-3 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">Chi tiết Slider</h2>
        </div>
        <div class="col-auto ms-auto">
            <div class="d-flex gap-2">
                <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="btn btn-phoenix-primary">
                    <span class="fas fa-edit me-2"></span>Sửa
                </a>
                <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-phoenix-danger"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa slider này?')">
                        <span class="fas fa-trash me-2"></span>Xóa
                    </button>
                </form>
                <a href="{{ route('admin.sliders.index') }}" class="btn btn-phoenix-secondary">
                    <span class="fas fa-arrow-left me-2"></span>Quay lại
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-12">
                    <div class="mb-4">
                        <h4 class="mb-3">Hình ảnh</h4>
                        <div>
                            <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}"
                                class="img-fluid rounded-3 border" style="max-height: 400px; width: auto;">
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-4">
                        <h4 class="mb-3">Thông tin cơ bản</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width: 200px;">Tiêu đề</th>
                                        <td>{{ $slider->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mô tả</th>
                                        <td>{{ $slider->description ?? 'Không có mô tả' }}</td>
                                    </tr>
                                    <tr>
                                        <th> Đường dẫn URL</th>
                                        <td>
                                            @if ($slider->url)
                                                <a href="{{ $slider->url }}" target="_blank" class="text-primary">
                                                    {{ $slider->url }}
                                                </a>
                                            @else
                                                <span class="text-body-tertiary">Không có URL</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Thứ tự sắp xếp</th>
                                        <td>{{ $slider->sort_order }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ngày bắt đầu</th>
                                        <td>
                                            @if ($slider->start_date)
                                                @if (is_string($slider->start_date))
                                                    {{ \Carbon\Carbon::parse($slider->start_date)->format('d/m/Y H:i') }}
                                                @else
                                                    {{ $slider->start_date->format('d/m/Y H:i') }}
                                                @endif
                                            @else
                                                Không có
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Ngày kết thúc</th>
                                        <td>
                                            @if ($slider->end_date)
                                                @if (is_string($slider->end_date))
                                                    {{ \Carbon\Carbon::parse($slider->end_date)->format('d/m/Y H:i') }}
                                                @else
                                                    {{ $slider->end_date->format('d/m/Y H:i') }}
                                                @endif
                                            @else
                                                Không có
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Trạng thái</th>
                                        <td>
                                            <span
                                                class="badge badge-phoenix fs-10 {{ $slider->is_active ? 'badge-phoenix-success' : 'badge-phoenix-danger' }}">
                                                {{ $slider->is_active ? 'Hoạt động' : 'Không hoạt động' }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Ngày tạo</th>
                                        <td>{{ $slider->created_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ngày cập nhật</th>
                                        <td>{{ $slider->updated_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
