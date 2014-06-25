function checkAllInTable(checkedObject, checkedClass) {
    var _checked = $(checkedObject).prop('checked');
    var _table = $(checkedObject).closest('table');
    $('input.' + checkedClass, _table).prop('checked', _checked);
}