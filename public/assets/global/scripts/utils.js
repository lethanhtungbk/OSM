function checkAllInTable(checkedObject, checkedClass) {
    var _checked = $(checkedObject).prop('checked');
    var _table = $(checkedObject).closest('table');
    $('input.' + checkedClass, _table).prop('checked', _checked);
}

function entityEditable(button) {
    var container = $(button).closest('.entities-container');
    $('.show-input-value', $(container)).removeClass('hide');
    $('.show-value-cell', $(container)).addClass('hide');
    $('.button-container', $(container)).removeClass('hide');
}