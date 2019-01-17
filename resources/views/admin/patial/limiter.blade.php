{{ __('lang.show') }}: <select name="" id="select-to-limit" class="form-control form-control-short w-5">
    <option value="5">5</option>
    <option value="10">10</option>
    <option value="20" selected="selected">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
</select>

<button type="button" id="download-pdf" class="btn btn-info btn-sm">{{ __('lang.download') }} PDF</button>
<button type="button" id="download-csv" class="btn btn-warning btn-sm">{{ __('lang.download') }} CSV</button>
<button type="button" id="select-all" class="btn btn-sm btn-default">Select all</button>
<button type="button" id="deactivate-selected" class="btn btn-sm btn-danger hidden">{{ __('lang.disable_selected') }}</button>