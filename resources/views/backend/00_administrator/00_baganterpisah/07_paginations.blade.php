<div class="custom-pagination-container"
    style="margin-top: 50px; margin-bottom: 100px; display: flex; flex-direction: column; align-items: center; text-align: center; font-family: 'Poppins', sans-serif; font-size: 14px;">

    <!-- Box Informasi Pagination -->
    <div class="custom-pagination-info-box"
    style="padding: 12px 20px; border-radius: 8px; margin-bottom: 15px;
           background-color: #000080; border: 1px solid #000080; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
           display: flex; align-items: center; justify-content: center;
           transition: all 0.3s ease-in-out;"
    onmouseover="this.style.backgroundColor='white'; this.style.color='#000080';
                 this.querySelector('.custom-pagination-info').style.color='#000080';"
    onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';
                 this.querySelector('.custom-pagination-info').style.color='white';">

    <div class="custom-pagination-info"
        style="color: white; font-weight: 600; font-size: 14px; text-align: center;">
        📊 Data Ke <span style="color: #ffffff;">{{ $data->firstItem() }}</span>
        Sampai <span style="color: #ffffff;">{{ $data->lastItem() }}</span>
        Dari <span style="color: #ffffff;">{{ $data->total() }}</span> Jumlah
        <span style="color: #ffffff;">{{$title}}</span>
    </div>
</div>

    <!-- Navigasi Pagination -->
    <ul class="custom-pagination-paginate"
        style="display: flex; padding-left: 0; list-style: none; gap: 10px; margin: 0;">

        <!-- Tombol Previous -->
        <li class="custom-page-item {{ $data->onFirstPage() ? 'disabled' : '' }}"
            style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $data->previousPageUrl() }}"
                style="background-color: #000080; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;
                display: flex; align-items: center; transition: all 0.3s ease; border: 1px solid #000080; font-family: 'Poppins', sans-serif; font-size: 14px;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Previous
            </a>
        </li>

        <!-- Tombol Halaman -->
        @foreach ($data->links()->elements[0] as $page => $url)
        <li class="custom-page-item {{ $data->currentPage() == $page ? 'active' : '' }}" style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $url }}"
                style="background-color: {{ $data->currentPage() == $page ? '#000080' : '#374151' }};
                color: white; padding: 8px 12px; border-radius: 5px; text-decoration: none;
                border: 1px solid {{ $data->currentPage() == $page ? '#000080' : '#374151' }};
                transition: all 0.3s ease; font-family: 'Poppins', sans-serif; font-size: 14px;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='{{ $data->currentPage() == $page ? '#000080' : '#374151' }}'; this.style.color='white';">
                {{ $page }}
            </a>
        </li>
        @endforeach

        <!-- Tombol Next -->
        <li class="custom-page-item {{ $data->hasMorePages() ? '' : 'disabled' }}"
            style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $data->nextPageUrl() }}"
                style="background-color: #000080; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;
                display: flex; align-items: center; transition: all 0.3s ease; border: 1px solid #000080; font-family: 'Poppins', sans-serif; font-size: 14px;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                Next <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
            </a>
        </li>
    </ul>
</div>

<style>
    /* Style untuk tombol yang dinonaktifkan */
    .custom-page-item.disabled .custom-page-link {
        background-color: #9CA3AF !important;
        color: white !important;
        border-color: #9CA3AF !important;
        pointer-events: none;
    }
</style>
