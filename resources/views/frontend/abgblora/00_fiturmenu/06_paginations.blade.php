<!-- Info Pagination -->
<div class="pagination-info-box" style="margin: 10px 0; padding: 8px; border: 1px solid black; background-color: #f9f9f9; border-radius: 5px; width: 100%; text-align: center;">
    <div class="pagination-info" style="color: black; font-weight: 500; font-size: 12px; display: inline-block;">
        Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
    </div>
</div>

<!-- Pagination Controls -->
<div class="pagination-container" style="display: flex; flex-direction: column; align-items: center; margin-top: -20px;">
    <ul class="pagination-paginate" style="display: flex; padding-left: 0; list-style: none; gap: 6px;">
        <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $data->previousPageUrl() }}" style="padding: 6px 14px; border: 1px solid #ccc; border-radius: 5px; text-decoration: none; color: black; font-size: 12px;">
                <i class="fas fa-arrow-left" style="margin-right: 5px;"></i>Previous
            </a>
        </li>
        <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}">
            <a class="page-link" href="{{ $data->nextPageUrl() }}" style="padding: 6px 14px; border: 1px solid #ccc; border-radius: 5px; text-decoration: none; color: black; font-size: 12px;">
                Next <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
            </a>
        </li>
    </ul>
</div>

